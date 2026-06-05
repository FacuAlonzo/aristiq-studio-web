<?php
/* =============================================
   AristiQ Studio — Procesador del formulario de contacto
   Envía por SMTP autenticado (fiable) si existe config.php;
   si no, recurre a mail() como respaldo.
   ============================================= */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// --- ¿La petición espera JSON (fetch)? ---
$wantsJson = (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

function responder($ok, $mensaje = '', $wantsJson = false) {
    if ($wantsJson) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => $ok, 'error' => $ok ? null : $mensaje]);
    } else {
        header('Location: index.php?enviado=' . ($ok ? 'ok' : 'error') . '#contacto');
    }
    exit;
}

// --- Solo POST ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responder(false, 'Método no permitido.', $wantsJson);
}

// --- Anti-spam: honeypot ---
if (!empty($_POST['website'])) {
    responder(true, '', $wantsJson);
}

// --- Datos ---
$nombre  = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$asunto  = trim($_POST['subject'] ?? '');
$mensaje = trim($_POST['message'] ?? '');

// --- Validación ---
if ($nombre === '' || $email === '' || $mensaje === '') {
    responder(false, 'Faltan campos obligatorios.', $wantsJson);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    responder(false, 'El email no es válido.', $wantsJson);
}

// --- Contenido ---
$asuntoLimpio = $asunto !== '' ? $asunto : 'Nuevo contacto desde aristiq.studio';
$titulo  = 'Nuevo mensaje de contacto: ' . $asuntoLimpio;
$cuerpo  = "Has recibido un nuevo mensaje desde el formulario de aristiq.studio:\n\n";
$cuerpo .= "Nombre:  $nombre\n";
$cuerpo .= "Email:   $email\n";
$cuerpo .= "Asunto:  $asuntoLimpio\n";
$cuerpo .= "-----------------------------------------\n\n";
$cuerpo .= $mensaje . "\n";

// --- Cargar configuración SMTP (no versionada) ---
$config = file_exists(__DIR__ . '/config.php') ? require __DIR__ . '/config.php' : null;

// ============================================================
//  Vía 1 — SMTP autenticado (recomendado, fiable)
// ============================================================
if ($config && !empty($config['smtp_pass'])) {
    require __DIR__ . '/lib/PHPMailer/Exception.php';
    require __DIR__ . '/lib/PHPMailer/PHPMailer.php';
    require __DIR__ . '/lib/PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = $config['smtp_host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['smtp_user'];
        $mail->Password   = $config['smtp_pass'];
        $mail->SMTPSecure = $config['smtp_secure'];   // 'ssl' (465) o 'tls' (587)
        $mail->Port       = (int) $config['smtp_port'];
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom($config['mail_from'], 'AristiQ Studio');
        $mail->addAddress($config['mail_to']);
        $mail->addReplyTo($email, $nombre);

        $mail->Subject = $titulo;
        $mail->Body    = $cuerpo;

        $mail->send();
        responder(true, '', $wantsJson);
    } catch (Exception $e) {
        // Si SMTP falla, lo registramos y caemos al respaldo mail()
        error_log('SMTP error: ' . $mail->ErrorInfo);
    }
}

// ============================================================
//  Vía 2 — Respaldo con mail() nativo
// ============================================================
$REMITENTE = $config['mail_from'] ?? 'info@aristiq.studio';
$DESTINO   = $config['mail_to']   ?? 'info@aristiq.studio';

$nombreSeguro = preg_replace('/[\r\n]+/', ' ', $nombre);
$emailSeguro  = preg_replace('/[\r\n]+/', '', $email);
$headers  = "From: AristiQ Studio <$REMITENTE>\r\n";
$headers .= "Reply-To: $nombreSeguro <$emailSeguro>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$enviado = @mail($DESTINO, '=?UTF-8?B?' . base64_encode($titulo) . '?=', $cuerpo, $headers, '-f ' . $REMITENTE);

if ($enviado) {
    responder(true, '', $wantsJson);
} else {
    responder(false, 'No se pudo enviar el mensaje. Inténtalo de nuevo o escríbenos a info@aristiq.studio', $wantsJson);
}
