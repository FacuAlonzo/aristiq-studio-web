/* =============================================
   ARISTIQ STUDIO — Main JS (v3)
   ============================================= */
document.addEventListener('DOMContentLoaded', function () {

    // Activar animaciones de reveal (progressive enhancement).
    // Si este JS no corre, el contenido permanece visible.
    document.documentElement.classList.add('js-reveal');

    // ----- Nav scroll -----
    const nav = document.querySelector('.nav');
    if (nav) {
        const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // ----- Menú móvil -----
    const btn = document.querySelector('.mobile-menu-btn');
    const links = document.querySelector('.nav-links');
    function closeMenu() {
        if (!btn || !links) return;
        btn.classList.remove('active');
        links.classList.remove('mobile-open');
        btn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
    }
    if (btn && links) {
        btn.addEventListener('click', () => {
            const open = links.classList.toggle('mobile-open');
            btn.classList.toggle('active', open);
            btn.setAttribute('aria-expanded', String(open));
            document.body.classList.toggle('menu-open', open);
        });
        links.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });
    }

    // ----- Smooth scroll -----
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href && href !== '#') {
                const t = document.querySelector(href);
                if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
            }
        });
    });

    // ----- Reveal on scroll -----
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const obs = new IntersectionObserver((entries, o) => {
            entries.forEach(en => { if (en.isIntersecting) { en.target.classList.add('visible'); o.unobserve(en.target); } });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(el => obs.observe(el));
    } else {
        revealEls.forEach(el => el.classList.add('visible'));
    }

    // ----- Contadores -----
    const counters = document.querySelectorAll('[data-count]');
    if (counters.length && 'IntersectionObserver' in window) {
        const co = new IntersectionObserver((entries, o) => {
            entries.forEach(en => {
                if (!en.isIntersecting) return;
                const el = en.target, target = parseInt(el.dataset.count, 10), suffix = el.dataset.suffix || '';
                const dur = 1200, start = performance.now();
                const step = now => {
                    const p = Math.min((now - start) / dur, 1), eased = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.round(target * eased) + suffix;
                    if (p < 1) requestAnimationFrame(step);
                };
                requestAnimationFrame(step);
                o.unobserve(el);
            });
        }, { threshold: 0.6 });
        counters.forEach(c => co.observe(c));
    }

    // ----- Scroll to top -----
    const top = document.getElementById('scroll-top');
    if (top) {
        window.addEventListener('scroll', () => top.classList.toggle('visible', window.scrollY > 600), { passive: true });
        top.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    // ----- Formulario (backend PHP vía fetch, con respaldo) -----
    const form = document.getElementById('contact-form');
    const note = document.getElementById('form-note');
    if (form) {
        form.addEventListener('submit', async e => {
            e.preventDefault();
            const name = form.name.value.trim(), email = form.email.value.trim(), message = form.message.value.trim();
            if (!name || !email || !message) { setNote('Por favor, completa nombre, email y mensaje.', 'err'); return; }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { setNote('El email no parece válido.', 'err'); return; }

            const submitBtn = form.querySelector('button[type="submit"]');
            const original = submitBtn.innerHTML;
            submitBtn.disabled = true; submitBtn.textContent = 'Enviando…';

            try {
                const res = await fetch(form.action, {
                    method: 'POST',
                    headers: { 'Accept': 'application/json' },
                    body: new FormData(form)
                });
                const data = await res.json().catch(() => null);
                // Web3Forms responde { success: true/false, message }
                if (res.ok && data && data.success) {
                    setNote('¡Mensaje enviado! Te responderemos muy pronto.', 'ok');
                    form.reset();
                } else {
                    const msg = (data && data.message) ? data.message : 'No se pudo enviar el mensaje ahora mismo.';
                    setNote(msg + ' Puedes escribirnos a <a href="mailto:info@aristiq.studio">info@aristiq.studio</a>.', 'err', true);
                }
            } catch (err) {
                setNote('No se pudo enviar el mensaje ahora mismo. Puedes escribirnos a <a href="mailto:info@aristiq.studio">info@aristiq.studio</a>.', 'err', true);
            } finally {
                submitBtn.disabled = false; submitBtn.innerHTML = original;
            }
        });
    }
    function setNote(msg, cls, html) {
        if (!note) return;
        note.className = 'form-note ' + cls;
        if (html) { note.innerHTML = msg; } else { note.textContent = msg; }
    }

});
