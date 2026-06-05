<?php
/* =============================================
   PLANTILLA de configuración SMTP.
   1. Copia este archivo como  config.php
   2. Rellena tus datos reales (sobre todo la contraseña del buzón)
   3. config.php NO se sube a git (está en .gitignore) — tu contraseña queda segura.

   Hostinger Email (tu caso):  host smtp.hostinger.com · puerto 465 · SSL
   Titan (otros dominios):     host smtp.titan.email   · puerto 465 · SSL
   ============================================= */
return [
    'smtp_host'   => 'smtp.hostinger.com',   // servidor SMTP de tu proveedor de correo
    'smtp_port'   => 465,                     // 465 = SSL · 587 = TLS
    'smtp_secure' => 'ssl',                   // 'ssl' para 465 · 'tls' para 587
    'smtp_user'   => 'info@aristiq.studio',   // tu buzón completo
    'smtp_pass'   => 'PON_AQUI_LA_CONTRASENA',// contraseña del buzón info@aristiq.studio
    'mail_from'   => 'info@aristiq.studio',   // remitente (debe ser tu buzón)
    'mail_to'     => 'info@aristiq.studio',   // dónde quieres recibir los mensajes
];
