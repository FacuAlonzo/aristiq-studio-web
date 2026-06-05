<?php
/* =============================================
   Cabecera común (head + nav). Fuente única.
   Variables que cada página define ANTES de incluir:
     $title       — título de la pestaña
     $description — meta description
     $canonical   — URL canónica
     $home        — prefijo para anclas de sección: '' en la home, 'index.php' en otras
     $extra_head  — (opcional) HTML extra para el <head> (OG, JSON-LD, <style> de página)
   ============================================= */
$home       = $home       ?? '';
$extra_head = $extra_head ?? '';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="author" content="AristiQ Studio">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#111317">
    <link rel="canonical" href="<?= $canonical ?>">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css?v=5">
<?= $extra_head ?>
</head>
<body>
    <a href="#contenido" class="skip-link">Saltar al contenido</a>

    <header>
        <nav class="nav" aria-label="Navegación principal">
            <div class="nav-container">
                <a href="index.php" class="logo" aria-label="AristiQ Studio — Inicio">
                    <img src="assets/images/banner-logo.png" alt="AristiQ Studio" class="logo-img" width="220" height="55">
                </a>
                <div class="nav-links" id="nav-links">
                    <a href="<?= $home ?>#servicios">Servicios</a>
                    <a href="<?= $home ?>#trabajo">Trabajo</a>
                    <a href="<?= $home ?>#proceso">Proceso</a>
                    <a href="<?= $home ?>#faq">FAQ</a>
                    <a href="<?= $home ?>#contacto" class="btn btn-primary nav-cta">Empezar proyecto</a>
                </div>
                <button class="mobile-menu-btn" aria-label="Abrir menú" aria-expanded="false" aria-controls="nav-links">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </nav>
    </header>

    <main id="contenido">
