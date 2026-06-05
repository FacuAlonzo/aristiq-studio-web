<?php
/* =============================================
   AristiQ Studio — Procesador del formulario de contacto
   Envía los mensajes a info@aristiq.studio.
   Funciona en cualquier hosting con PHP (Hostinger lo soporta).
   ============================================= */

// --- Configuración ---
$DESTINO = 'info@aristiq.studio';

// --- Detectar si la petición espera JSON (fetch) ---
$wantsJson = (
    (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
);

function responder($ok, $mensaje = '', $wantsJson = false) {
    if ($wantsJson) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => $ok, 'error' => $ok ? null : $mensaje]);
    } else {
        // Respaldo sin JS: redirige al inicio con un parámetro de estado
        $estado = $ok ? 'ok' : 'error';
        header('Location: index.php?enviado=' . $estado . '#contacto');
    }
    exit;
}

// --- Solo POST ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responder(false, 'Método no permitido.', $wantsJson);
}

// --- Anti-spam: honeypot. Si viene relleno, es un bot: fingimos éxito. ---
if (!empty($_POST['website'])) {
    responder(true, '', $wantsJson);
}

// --- Recoger y limpiar datos ---
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

// --- Construir el email ---
$asuntoLimpio = $asunto !== '' ? $asunto : 'Nuevo contacto desde aristiq.studio';
$titulo = 'Nuevo mensaje de contacto: ' . $asuntoLimpio;

$cuerpo  = "Has recibido un nuevo mensaje desde el formulario de aristiq.studio:\n\n";
$cuerpo .= "Nombre:  $nombre\n";
$cuerpo .= "Email:   $email\n";
$cuerpo .= "Asunto:  $asuntoLimpio\n";
$cuerpo .= "-----------------------------------------\n\n";
$cuerpo .= $mensaje . "\n";

// Cabeceras (Reply-To al remitente para responder con un clic)
$nombreSeguro = preg_replace('/[\r\n]+/', ' ', $nombre);
$emailSeguro  = preg_replace('/[\r\n]+/', '', $email);
$headers  = "From: AristiQ Studio <no-reply@aristiq.studio>\r\n";
$headers .= "Reply-To: $nombreSeguro <$emailSeguro>\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// --- Enviar ---
$enviado = @mail($DESTINO, '=?UTF-8?B?' . base64_encode($titulo) . '?=', $cuerpo, $headers);

if ($enviado) {
    responder(true, '', $wantsJson);
} else {
    responder(false, 'No se pudo enviar el mensaje. Inténtalo de nuevo o escríbenos a info@aristiq.studio', $wantsJson);
}
