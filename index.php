<?php
$title       = 'AristiQ Studio | Desarrollo Web Premium que Convierte';
$description  = 'Estudio de desarrollo web premium. Diseñamos y construimos sitios corporativos, e-commerce y aplicaciones web rápidas, optimizadas para SEO y pensadas para convertir. 100% a medida.';
$canonical    = 'https://www.aristiq.studio/';
$home         = '';
$extra_head   = <<<'HTML'
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:url" content="https://www.aristiq.studio/">
    <meta property="og:site_name" content="AristiQ Studio">
    <meta property="og:title" content="AristiQ Studio | Desarrollo Web Premium que Convierte">
    <meta property="og:description" content="Sitios web rápidos, optimizados para SEO y diseñados para convertir. 100% a medida, para marcas que apuntan alto.">
    <meta property="og:image" content="https://www.aristiq.studio/assets/images/banner-logo.png">
    <meta property="og:image:alt" content="AristiQ Studio — Desarrollo Web Premium">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AristiQ Studio | Desarrollo Web Premium que Convierte">
    <meta name="twitter:description" content="Sitios web rápidos, optimizados para SEO y diseñados para convertir. 100% a medida.">
    <meta name="twitter:image" content="https://www.aristiq.studio/assets/images/banner-logo.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "AristiQ Studio",
      "description": "Estudio de desarrollo web premium especializado en sitios corporativos, e-commerce y aplicaciones web rápidas, optimizadas para SEO y diseñadas para convertir.",
      "url": "https://www.aristiq.studio/",
      "email": "info@aristiq.studio",
      "image": "https://www.aristiq.studio/assets/images/banner-logo.png",
      "logo": "https://www.aristiq.studio/assets/images/banner-logo.png",
      "priceRange": "$$",
      "areaServed": "Worldwide",
      "sameAs": ["https://www.instagram.com/aristiq.studio"],
      "knowsAbout": ["Desarrollo Web", "E-Commerce", "Aplicaciones Web", "SEO", "Performance Web", "UX/UI", "Core Web Vitals"],
      "makesOffer": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Sitios Web Corporativos" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Aplicaciones Web" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "E-Commerce Premium" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Optimización de Performance" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Integraciones & APIs" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Soporte & Mantenimiento" } }
      ]
    }
    </script>
HTML;
include __DIR__ . '/partials/header.php';
?>
    <!-- Hero -->
    <section class="hero" id="inicio">
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="hero-grid">
            <div class="hero-content">
                <span class="hero-eyebrow">Estudio de desarrollo web premium</span>
                <h1>Webs que se ven <em>impecables</em><br>y que <em>venden</em> de verdad.</h1>
                <p class="hero-description">Diseñamos y construimos sitios a medida, rápidos como un rayo y optimizados para SEO. Cada detalle pensado para convertir visitantes en clientes.</p>
                <div class="hero-buttons">
                    <a href="#contacto" class="btn btn-primary btn-lg">
                        Empezar mi proyecto
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="#trabajo" class="btn btn-ghost btn-lg">Ver nuestro trabajo</a>
                </div>
                <ul class="hero-trust" aria-label="Garantías">
                    <li><strong>100%</strong><span>A medida</span></li>
                    <li><strong>24/7</strong><span>Soporte</span></li>
                </ul>
            </div>
            <div class="hero-visual" aria-hidden="true">
                <div class="browser">
                    <div class="browser-bar">
                        <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                        <div class="browser-url">aristiq.studio</div>
                    </div>
                    <div class="browser-screen">
                        <div class="mini-nav"><span class="mini-logo"></span><span class="mini-links"><i></i><i></i><i></i></span></div>
                        <div class="mini-hero">
                            <span class="mini-badge">Premium</span>
                            <span class="mini-h1"></span><span class="mini-h1 short"></span>
                            <span class="mini-cta"></span>
                        </div>
                        <div class="mini-cards"><span></span><span></span><span></span></div>
                    </div>
                </div>
                <div class="float-card float-perf">
                    <div class="ring" style="--p:97"><span>97</span></div>
                    <div class="float-text"><strong>Performance</strong><small>Core Web Vitals</small></div>
                </div>
                <div class="float-card float-seo">
                    <div class="bars"><i style="--h:40%"></i><i style="--h:65%"></i><i style="--h:100%"></i></div>
                    <div class="float-text"><strong>SEO</strong><small>Posicionamiento</small></div>
                </div>
            </div>
        </div>
        <div class="marquee" aria-label="Tecnologías que dominamos">
            <div class="marquee-track">
                <span>React</span><span>·</span><span>Next.js</span><span>·</span><span>Node.js</span><span>·</span><span>WordPress</span><span>·</span><span>Shopify</span><span>·</span><span>TypeScript</span><span>·</span>
                <span>React</span><span>·</span><span>Next.js</span><span>·</span><span>Node.js</span><span>·</span><span>WordPress</span><span>·</span><span>Shopify</span><span>·</span><span>TypeScript</span><span>·</span>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section class="services" id="servicios">
        <div class="container">
            <header class="section-head reveal">
                <span class="eyebrow">Qué hacemos</span>
                <h2>Servicios pensados para <em>crecer</em></h2>
                <p>Soluciones integrales de desarrollo web, de la estrategia al mantenimiento, con un estándar de calidad que se nota.</p>
            </header>
            <div class="services-grid">
                <article class="service-card reveal"><span class="service-num">01</span><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg></div><h3>Sitios Web Corporativos</h3><p>Presencia digital que refleja la altura de tu marca y convierte cada visita en una oportunidad.</p></article>
                <article class="service-card reveal"><span class="service-num">02</span><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><h3>Aplicaciones Web</h3><p>Plataformas robustas y escalables que automatizan procesos y mejoran la eficiencia de tu empresa.</p></article>
                <article class="service-card reveal"><span class="service-num">03</span><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg></div><h3>E-Commerce Premium</h3><p>Tiendas online optimizadas para conversión, con una experiencia de compra fluida y pagos seguros.</p></article>
                <article class="service-card reveal"><span class="service-num">04</span><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>Optimización de Performance</h3><p>Aceleramos tu sitio al máximo para mejorar la experiencia, el SEO y, en consecuencia, las ventas.</p></article>
                <article class="service-card reveal"><span class="service-num">05</span><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7 0l3-3a5 5 0 0 0-7-7l-1 1"/><path d="M14 11a5 5 0 0 0-7 0l-3 3a5 5 0 0 0 7 7l1-1"/></svg></div><h3>Integraciones & APIs</h3><p>Conectamos tu web con CRMs, ERPs, pasarelas de pago y cualquier sistema que tu negocio necesite.</p></article>
                <article class="service-card reveal"><span class="service-num">06</span><div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div><h3>Soporte & Mantenimiento</h3><p>Planes de mantenimiento continuo para que tu inversión digital siga rindiendo al máximo.</p></article>
            </div>
        </div>
    </section>

    <!-- Trabajo -->
    <section class="work" id="trabajo">
        <div class="container">
            <header class="section-head reveal">
                <span class="eyebrow">Lo que construimos</span>
                <h2>Producto digital <em>de alto nivel</em></h2>
                <p>Estos son los tipos de proyecto que diseñamos y desarrollamos. Cada uno, a medida y cuidado al detalle.</p>
            </header>
            <div class="work-grid">
                <article class="work-card reveal">
                    <div class="work-mock mock-corporate" aria-hidden="true">
                        <div class="mk-nav"><span></span><i></i><i></i><i></i></div>
                        <div class="mk-hero-row"><div class="mk-text"><span class="l w70"></span><span class="l w90"></span><span class="l w50"></span><span class="mk-btn"></span></div><div class="mk-img"></div></div>
                    </div>
                    <div class="work-info"><h3>Sitio Corporativo</h3><p>Marca, autoridad y captación de leads.</p></div>
                </article>
                <article class="work-card reveal">
                    <div class="work-mock mock-ecommerce" aria-hidden="true">
                        <div class="mk-nav"><span></span><i></i><i></i><i class="cart"></i></div>
                        <div class="mk-shop"><div class="mk-prod"></div><div class="mk-prod"></div><div class="mk-prod"></div><div class="mk-prod"></div></div>
                    </div>
                    <div class="work-info"><h3>E-Commerce</h3><p>Tiendas que convierten y escalan.</p></div>
                </article>
                <article class="work-card reveal">
                    <div class="work-mock mock-app" aria-hidden="true">
                        <div class="mk-app-side"><i></i><i></i><i></i><i></i></div>
                        <div class="mk-app-main"><div class="mk-stat"><span class="mk-ring"></span></div><div class="mk-chart"><b style="--h:50%"></b><b style="--h:75%"></b><b style="--h:40%"></b><b style="--h:90%"></b><b style="--h:65%"></b></div></div>
                    </div>
                    <div class="work-info"><h3>Aplicación Web</h3><p>Dashboards y plataformas a medida.</p></div>
                </article>
            </div>
        </div>
    </section>

    <!-- Proceso -->
    <section class="process" id="proceso">
        <div class="container process-grid">
            <div class="process-intro reveal">
                <span class="eyebrow">Cómo trabajamos</span>
                <h2>Un proceso diseñado para <em>resultados</em></h2>
                <p>Metodología probada, comunicación transparente y entregas a tiempo. Así convertimos tu visión en un producto que supera expectativas.</p>
                <div class="process-stats">
                    <div><strong data-count="100" data-suffix="%">100%</strong><span>Proyectos a medida</span></div>
                    <div><strong data-count="0" data-suffix="">0</strong><span>Plantillas genéricas</span></div>
                </div>
                <a href="https://calendly.com/facualonzo347/30min" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Agendar sesión de descubrimiento</a>
            </div>
            <ol class="timeline reveal">
                <li><span class="t-num">1</span><div><h3>Descubrimiento</h3><p>Entendemos tus objetivos, tu audiencia y tus métricas de éxito.</p></div></li>
                <li><span class="t-num">2</span><div><h3>Propuesta</h3><p>Alcance, cronograma y entregables detallados, sin sorpresas.</p></div></li>
                <li><span class="t-num">3</span><div><h3>Diseño UX/UI</h3><p>Interfaces a medida con iteraciones de feedback contigo.</p></div></li>
                <li><span class="t-num">4</span><div><h3>Desarrollo</h3><p>Ingeniería robusta con actualizaciones semanales.</p></div></li>
                <li><span class="t-num">5</span><div><h3>Testing & lanzamiento</h3><p>Pruebas exhaustivas y puesta en marcha sin fricción.</p></div></li>
            </ol>
        </div>
    </section>

    <!-- Statement -->
    <section class="statement">
        <div class="container reveal">
            <span class="eyebrow center">Por qué AristiQ</span>
            <p class="statement-text">No somos solo desarrolladores. Somos <em>socios estratégicos</em> obsesionados con el detalle, el rendimiento y el impacto real en tu negocio.</p>
            <div class="why-grid">
                <div class="why-item"><div class="why-ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div><h3>Enfoque en resultados</h3><p>Medimos el éxito por el impacto en tu negocio, no solo por la entrega.</p></div>
                <div class="why-item"><div class="why-ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><h3>Comunicación transparente</h3><p>Actualizaciones regulares y acceso directo a tu equipo de proyecto.</p></div>
                <div class="why-item"><div class="why-ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div><h3>Tecnología de vanguardia</h3><p>Las mejores herramientas y frameworks del mercado, bien aplicados.</p></div>
                <div class="why-item"><div class="why-ic"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/></svg></div><h3>Soporte dedicado</h3><p>Acompañamiento post-lanzamiento para asegurar tu éxito continuo.</p></div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq" id="faq">
        <div class="container faq-container">
            <header class="section-head reveal">
                <span class="eyebrow">Preguntas frecuentes</span>
                <h2>Resolvemos tus <em>dudas</em></h2>
            </header>
            <div class="faq-list reveal">
                <details class="faq-item"><summary>¿Cuánto tarda en estar listo mi proyecto?</summary><div class="faq-answer"><p>Depende del alcance, pero tras la sesión de descubrimiento recibes una propuesta con un cronograma claro. Trabajamos con actualizaciones semanales y entregas a tiempo como compromiso central.</p></div></details>
                <details class="faq-item"><summary>¿Trabajáis con plantillas?</summary><div class="faq-answer"><p>No. Cada proyecto es 100% a medida: diseñamos y desarrollamos según tu marca, objetivos y audiencia, sin plantillas genéricas.</p></div></details>
                <details class="faq-item"><summary>¿Qué tecnologías utilizáis?</summary><div class="faq-answer"><p>Elegimos la herramienta correcta para cada caso: React, Next.js, Node.js, WordPress o Shopify, entre otras, siempre buscando rendimiento y mantenibilidad.</p></div></details>
                <details class="faq-item"><summary>¿Ofrecéis soporte después del lanzamiento?</summary><div class="faq-answer"><p>Sí. Contamos con planes de mantenimiento continuo y acompañamiento post-lanzamiento para que tu inversión siga rindiendo.</p></div></details>
                <details class="faq-item"><summary>¿Cómo empezamos a trabajar juntos?</summary><div class="faq-answer"><p>Agenda una llamada de 30 minutos o escríbenos desde el formulario. En esa primera sesión entendemos tus objetivos y exploramos cómo ayudarte.</p></div></details>
            </div>
        </div>
    </section>

    <!-- CTA + Formulario -->
    <section class="cta" id="contacto">
        <div class="container cta-card reveal">
            <div class="cta-intro">
                <span class="eyebrow">Hablemos</span>
                <h2>¿Listo para una web a la <em>altura</em> de tu marca?</h2>
                <p>Cuéntanos sobre tu proyecto. Te respondemos con ideas concretas para llevarlo al siguiente nivel.</p>
                <ul class="cta-points">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> Respuesta en menos de 24 h</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> Primera consultoría sin coste</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> Sin compromiso</li>
                </ul>
                <a href="https://calendly.com/facualonzo347/30min" target="_blank" rel="noopener noreferrer" class="cta-call">o agenda una llamada de 30 min →</a>
            </div>
            <form class="contact-form" id="contact-form" action="https://api.web3forms.com/submit" method="POST" novalidate>
                <input type="hidden" name="access_key" value="c72aba74-fef0-48fe-94b3-e76461ab4c65">
                <input type="hidden" name="subject" value="Nuevo contacto desde aristiq.studio">
                <input type="hidden" name="from_name" value="Web AristiQ Studio">
                <div class="form-row">
                    <div class="form-field"><label for="cf-name">Nombre</label><input type="text" id="cf-name" name="name" autocomplete="name" required placeholder="Tu nombre"></div>
                    <div class="form-field"><label for="cf-email">Email</label><input type="email" id="cf-email" name="email" autocomplete="email" required placeholder="tu@email.com"></div>
                </div>
                <div class="form-field"><label for="cf-subject">Tipo de proyecto</label><input type="text" id="cf-subject" name="tipo_proyecto" placeholder="Web corporativa, e-commerce, app..."></div>
                <div class="form-field"><label for="cf-message">Mensaje</label><textarea id="cf-message" name="message" rows="4" required placeholder="Cuéntanos qué tienes en mente"></textarea></div>
                <input type="checkbox" name="botcheck" class="hp" tabindex="-1" style="display:none" aria-hidden="true">
                <button type="submit" class="btn btn-primary btn-block">Enviar mensaje<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></button>
                <p class="form-note" id="form-note" role="status" aria-live="polite"></p>
            </form>
        </div>
    </section>
<?php include __DIR__ . '/partials/footer.php'; ?>
