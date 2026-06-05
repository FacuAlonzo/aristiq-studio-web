# AristiQ Studio — Sitio web

Sitio web de **AristiQ Studio**, estudio de desarrollo web premium.
Versión optimizada: SEO técnico, rendimiento, accesibilidad y UX.

🔗 **En producción:** [aristiq.studio](https://www.aristiq.studio/)

---

## ✨ Características

- **HTML semántico** y accesible (landmarks, skip-link, foco visible, ARIA)
- **SEO técnico completo** — meta tags, Open Graph, Twitter Cards, JSON-LD (`ProfessionalService`), `robots.txt` y `sitemap.xml`
- **Rendimiento** — imágenes en WebP con respaldo PNG, `lazy-loading`, dimensiones explícitas (sin CLS)
- **Responsive** real con menú móvil funcional
- **Sin dependencias** — HTML, CSS y JavaScript puros

- **Componentes reutilizables** — cabecera, nav y footer en un solo sitio (`partials/`), sin duplicación entre páginas
- **Backend ligero** — formulario de contacto funcional en PHP (`enviar.php`) con validación y anti-spam

## 🛠️ Stack

`HTML5` · `CSS3` · `JavaScript (vanilla)` · `PHP` (includes + formulario)

## 📁 Estructura

```
.
├── index.php               # Página principal
├── politica-privacidad.php # Páginas legales
├── terminos.php
├── politica-cookies.php
├── partials/
│   ├── header.php          # <head> + nav (fuente única)
│   └── footer.php          # Footer + scripts (fuente única)
├── enviar.php              # Backend del formulario de contacto
├── css/styles.css          # Estilos (incluye estilos legales)
├── js/main.js              # Interactividad (menú, scroll, formulario)
├── assets/images/          # Imágenes optimizadas + favicon
├── .htaccess               # Redirecciones 301, caché, página de inicio
├── robots.txt              # Indexación
└── sitemap.xml             # Mapa del sitio
```

> **Nota de arquitectura:** el nav, el footer y el `<head>` viven en `partials/`. Para cambiarlos en todo el sitio, editas **un solo archivo**. Cada página solo define su contenido único y su metadata (título, descripción, canonical).

## 🚀 Desarrollo local

Requiere PHP (por los `include`). Levanta el servidor integrado de PHP:

```bash
php -S localhost:8000
```

Y abre <http://localhost:8000>. (En Hostinger se sirve nativamente, sin configuración.)

---

© 2026 AristiQ Studio. Todos los derechos reservados.
