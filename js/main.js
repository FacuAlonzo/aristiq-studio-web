/* =============================================
   ARISTIQ STUDIO - Main JavaScript (versión premium)
   ============================================= */

document.addEventListener('DOMContentLoaded', function () {

    // ----- Activar animaciones de reveal (progressive enhancement) -----
    // Marca el <html> para que el CSS oculte/anime los .reveal SOLO si este
    // JS corre. Si el JS falla o queda cacheado, el contenido sigue visible.
    document.documentElement.classList.add('js-reveal');

    // ----- Navigation Scroll Effect -----
    const nav = document.querySelector('.nav');
    if (nav) {
        const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 50);
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // ----- Mobile Menu Toggle (FUNCIONAL) -----
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinksContainer = document.querySelector('.nav-links');

    function closeMenu() {
        if (!mobileMenuBtn || !navLinksContainer) return;
        mobileMenuBtn.classList.remove('active');
        navLinksContainer.classList.remove('mobile-open');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
    }

    if (mobileMenuBtn && navLinksContainer) {
        mobileMenuBtn.addEventListener('click', () => {
            const open = navLinksContainer.classList.toggle('mobile-open');
            mobileMenuBtn.classList.toggle('active', open);
            mobileMenuBtn.setAttribute('aria-expanded', String(open));
            document.body.classList.toggle('menu-open', open);
        });

        // Cerrar al pulsar un enlace del menú
        navLinksContainer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Cerrar con Escape
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeMenu();
        });
    }

    // ----- Smooth Scroll for Anchor Links -----
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href && href !== '#') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });

    // ----- Reveal on Scroll -----
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(el => observer.observe(el));
    } else {
        revealEls.forEach(el => el.classList.add('visible'));
    }

    // ----- Active Nav Link on Scroll -----
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a:not(.btn)');
    if (sections.length && navLinks.length) {
        const setActive = () => {
            let current = '';
            sections.forEach(section => {
                if (window.scrollY >= section.offsetTop - 200) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
            });
        };
        window.addEventListener('scroll', setActive, { passive: true });
        setActive();
    }

    // ----- Animated Counters -----
    const counters = document.querySelectorAll('.stat-number[data-count]');
    if (counters.length && 'IntersectionObserver' in window) {
        const counterObs = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = parseInt(el.dataset.count, 10);
                const suffix = el.dataset.suffix || '';
                const duration = 1200;
                const start = performance.now();
                const step = now => {
                    const p = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.round(target * eased) + suffix;
                    if (p < 1) requestAnimationFrame(step);
                };
                requestAnimationFrame(step);
                obs.unobserve(el);
            });
        }, { threshold: 0.6 });
        counters.forEach(c => counterObs.observe(c));
    }

    // ----- Scroll to Top -----
    const scrollTopBtn = document.getElementById('scroll-top');
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            scrollTopBtn.classList.toggle('visible', window.scrollY > 600);
        }, { passive: true });
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ----- Contact Form (mailto, sin backend) -----
    const form = document.getElementById('contact-form');
    const note = document.getElementById('form-note');
    if (form) {
        form.addEventListener('submit', e => {
            e.preventDefault();
            const name = form.name.value.trim();
            const email = form.email.value.trim();
            const subject = form.subject.value.trim() || 'Nuevo contacto desde aristiq.studio';
            const message = form.message.value.trim();

            if (!name || !email || !message) {
                if (note) { note.textContent = 'Por favor, completa nombre, email y mensaje.'; note.className = 'form-note err'; }
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                if (note) { note.textContent = 'El email no parece válido.'; note.className = 'form-note err'; }
                return;
            }

            const body = `Nombre: ${name}%0AEmail: ${email}%0A%0A${encodeURIComponent(message)}`;
            const mailto = `mailto:info@aristiq.studio?subject=${encodeURIComponent(subject)}&body=${body}`;
            window.location.href = mailto;

            if (note) { note.textContent = 'Abriendo tu cliente de correo… Si no se abre, escríbenos a info@aristiq.studio'; note.className = 'form-note ok'; }
            form.reset();
        });
    }

});
