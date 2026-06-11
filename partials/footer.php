    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <img src="assets/images/banner-logo.png" alt="AristiQ Studio" class="footer-logo" width="240" height="60" loading="lazy">
                    <p>Desarrollo web premium que convierte. Performance, UX e integraciones para marcas que apuntan alto.</p>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/aristiq.studio" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                        <a href="mailto:info@aristiq.studio" aria-label="Email"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg></a>
                    </div>
                </div>
                <nav class="footer-nav" aria-label="Pie de página">
                    <div class="footer-col"><h3>Navegación</h3><a href="<?= $home ?>#servicios">Servicios</a><a href="<?= $home ?>#trabajo">Trabajo</a><a href="<?= $home ?>#proceso">Proceso</a><a href="<?= $home ?>#faq">FAQ</a></div>
                    <div class="footer-col"><h3>Servicios</h3><a href="<?= $home ?>#servicios">Sitios Corporativos</a><a href="<?= $home ?>#servicios">E-Commerce</a><a href="<?= $home ?>#servicios">Aplicaciones Web</a><a href="<?= $home ?>#servicios">Optimización</a></div>
                    <div class="footer-col"><h3>Legal</h3><a href="politica-privacidad.php">Privacidad</a><a href="terminos.php">Términos</a><a href="politica-cookies.php">Cookies</a></div>
                </nav>
            </div>
            <div class="footer-bottom">
                <p>© 2026 AristiQ Studio. Todos los derechos reservados. Hecho con disciplina y claridad.</p>
                <a href="<?= $home ?>#contacto" class="btn btn-outline btn-sm">Empezar proyecto</a>
            </div>
        </div>
    </footer>

    <button class="scroll-top" id="scroll-top" aria-label="Volver arriba"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 15l-6-6-6 6"/></svg></button>

    <script src="js/main.js?v=6"></script>

    <!-- ===================== WIDGET DE CHAT "ARI" ===================== -->
    <style id="ari-styles">
      :root{
        --ari-bg:#0e0e11; --ari-bg-soft:#16161a; --ari-line:rgba(210,172,99,.18);
        --ari-gold:#D2AC63; --ari-text:#ECE8E1; --ari-text-dim:#9a958c; --ari-user:#1d1b16;
        --ari-radius:16px; --ari-font:'Plus Jakarta Sans',system-ui,-apple-system,sans-serif;
        --ari-font-display:'Fraunces',Georgia,serif;
      }
      #ari-widget *{box-sizing:border-box;}
      #ari-launcher{
        position:fixed; bottom:24px; right:24px; z-index:99998;
        width:64px; height:64px; padding:0; border:1px solid rgba(210,172,99,.4); border-radius:50%;
        background:#0e0e11; cursor:pointer; overflow:hidden;
        display:flex; align-items:center; justify-content:center;
        box-shadow:0 8px 30px rgba(210,172,99,.35), 0 2px 8px rgba(0,0,0,.4);
        transition:transform .25s ease, box-shadow .25s ease;
        animation:ari-breathe 3.6s ease-in-out infinite;
      }
      #ari-launcher:hover{ transform:scale(1.06); }
      #ari-launcher img{ width:100%; height:100%; object-fit:cover; transform:scale(1.18); display:block; }
      @keyframes ari-breathe{
        0%,100%{ box-shadow:0 8px 30px rgba(210,172,99,.30), 0 2px 8px rgba(0,0,0,.4); }
        50%{ box-shadow:0 8px 42px rgba(210,172,99,.55), 0 2px 8px rgba(0,0,0,.4); }
      }
      @media (prefers-reduced-motion: reduce){ #ari-launcher{ animation:none; } }
      #ari-panel{
        position:fixed; bottom:100px; right:24px; z-index:99999;
        width:380px; max-width:calc(100vw - 32px);
        height:560px; max-height:calc(100vh - 130px);
        background:var(--ari-bg); border:1px solid var(--ari-line);
        border-radius:var(--ari-radius); overflow:hidden;
        display:flex; flex-direction:column; box-shadow:0 24px 70px rgba(0,0,0,.55);
        font-family:var(--ari-font); opacity:0; transform:translateY(12px) scale(.98);
        pointer-events:none; transition:opacity .22s ease, transform .22s ease;
      }
      #ari-widget.ari-open #ari-panel{ opacity:1; transform:translateY(0) scale(1); pointer-events:auto; }
      #ari-widget.ari-open #ari-launcher{ animation:none; }
      .ari-head{ display:flex; align-items:center; gap:12px; padding:16px 18px;
        border-bottom:1px solid var(--ari-line); background:linear-gradient(180deg,#141318,#0e0e11); }
      .ari-emblem{ width:38px; height:38px; border-radius:50%; flex:none; overflow:hidden;
        background:#0e0e11; border:1px solid rgba(210,172,99,.35);
        display:flex; align-items:center; justify-content:center; }
      .ari-emblem img{ width:100%; height:100%; object-fit:cover; transform:scale(1.18); display:block; }
      .ari-head h3{ margin:0; color:var(--ari-text); font-size:15px; font-weight:600;
        font-family:var(--ari-font-display); letter-spacing:.2px; }
      .ari-head p{ margin:2px 0 0; color:var(--ari-text-dim); font-size:12px; }
      .ari-head .ari-status{ display:inline-block; width:7px; height:7px; border-radius:50%;
        background:#5fbf7a; margin-right:5px; vertical-align:middle; }
      .ari-close{ margin-left:auto; background:none; border:none; color:var(--ari-text-dim);
        cursor:pointer; padding:6px; border-radius:8px; line-height:0; transition:color .2s,background .2s; }
      .ari-close:hover{ color:var(--ari-text); background:rgba(255,255,255,.05); }
      .ari-body{ flex:1; overflow-y:auto; padding:18px; display:flex; flex-direction:column; gap:12px; }
      .ari-body::-webkit-scrollbar{ width:6px; }
      .ari-body::-webkit-scrollbar-thumb{ background:rgba(210,172,99,.25); border-radius:3px; }
      .ari-msg{ max-width:82%; padding:11px 14px; font-size:14px; line-height:1.5;
        white-space:pre-wrap; word-wrap:break-word; }
      .ari-msg.bot{ align-self:flex-start; background:var(--ari-bg-soft); color:var(--ari-text);
        border:1px solid rgba(255,255,255,.04); border-radius:4px 16px 16px 16px; }
      .ari-msg.user{ align-self:flex-end; background:var(--ari-user); color:var(--ari-text);
        border:1px solid var(--ari-line); border-radius:16px 4px 16px 16px; }
      .ari-typing{ align-self:flex-start; display:flex; gap:4px; padding:13px 16px;
        background:var(--ari-bg-soft); border-radius:4px 16px 16px 16px; }
      .ari-typing span{ width:7px; height:7px; border-radius:50%; background:var(--ari-gold);
        opacity:.5; animation:ari-bounce 1.2s infinite ease-in-out; }
      .ari-typing span:nth-child(2){ animation-delay:.2s; }
      .ari-typing span:nth-child(3){ animation-delay:.4s; }
      @keyframes ari-bounce{ 0%,60%,100%{ transform:translateY(0); opacity:.4; }
        30%{ transform:translateY(-5px); opacity:1; } }
      .ari-foot{ padding:12px; border-top:1px solid var(--ari-line); background:#0c0c0f; }
      .ari-inputwrap{ display:flex; align-items:flex-end; gap:8px; background:var(--ari-bg-soft);
        border:1px solid var(--ari-line); border-radius:14px; padding:6px 6px 6px 14px; transition:border-color .2s; }
      .ari-inputwrap:focus-within{ border-color:var(--ari-gold); }
      .ari-inputwrap textarea{ flex:1; background:none; border:none; outline:none; resize:none;
        color:var(--ari-text); font-family:var(--ari-font); font-size:14px; line-height:1.4; max-height:96px; padding:6px 0; }
      .ari-inputwrap textarea::placeholder{ color:var(--ari-text-dim); }
      .ari-send{ flex:none; width:36px; height:36px; border:none; border-radius:10px;
        background:var(--ari-gold); color:#1a1407; cursor:pointer; display:flex;
        align-items:center; justify-content:center; transition:opacity .2s,transform .15s; }
      .ari-send:hover{ transform:scale(1.05); }
      .ari-send:disabled{ opacity:.4; cursor:default; transform:none; }
      .ari-legal{ text-align:center; color:var(--ari-text-dim); font-size:11px; margin:8px 0 2px; }
      @media (max-width:440px){
        #ari-panel{ bottom:0; right:0; width:100vw; max-width:100vw; height:100vh; max-height:100vh; border-radius:0; }
        #ari-launcher{ bottom:18px; right:18px; }
      }
    </style>

    <div id="ari-widget">
      <button id="ari-launcher" aria-label="Abrir chat con Ari">
        <img src="assets/images/ari-avatar.png" alt="Ari">
      </button>
      <div id="ari-panel" role="dialog" aria-label="Chat con Ari de AristiQ Studio">
        <div class="ari-head">
          <div class="ari-emblem"><img src="assets/images/ari-avatar.png" alt="Ari"></div>
          <div>
            <h3>Ari</h3>
            <p><span class="ari-status"></span>AristiQ Studio · responde al instante</p>
          </div>
          <button class="ari-close" id="ari-close" aria-label="Cerrar chat">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
          </button>
        </div>
        <div class="ari-body" id="ari-body"></div>
        <div class="ari-foot">
          <div class="ari-inputwrap">
            <textarea id="ari-input" rows="1" placeholder="Escribí tu consulta..." aria-label="Mensaje"></textarea>
            <button class="ari-send" id="ari-send" aria-label="Enviar">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            </button>
          </div>
          <p class="ari-legal">Asistente con IA · puede equivocarse</p>
        </div>
      </div>
    </div>

    <script id="ari-script">
    (function(){
      const ARI_WEBHOOK = "https://aristiq-n8n.tvlgmv.easypanel.host/webhook/ari-chat";
      const BIENVENIDA = "Hola, soy Ari de AristiQ Studio. Te puedo contar qué hacemos, resolver dudas o ayudarte a agendar una llamada. ¿En qué puedo ayudarte?";
      const widget=document.getElementById('ari-widget'), launcher=document.getElementById('ari-launcher'),
            closeBtn=document.getElementById('ari-close'), body=document.getElementById('ari-body'),
            input=document.getElementById('ari-input'), sendBtn=document.getElementById('ari-send');
      let sessionId=localStorage.getItem('ari_session_id');
      if(!sessionId){ sessionId=(crypto.randomUUID?crypto.randomUUID():'ari-'+Date.now()+'-'+Math.random().toString(16).slice(2)); localStorage.setItem('ari_session_id',sessionId); }
      let opened=false, busy=false;
      function open(){ widget.classList.add('ari-open'); if(!opened){ addMsg('bot',BIENVENIDA); opened=true; } setTimeout(()=>input.focus(),250); }
      function close(){ widget.classList.remove('ari-open'); }
      launcher.addEventListener('click',()=> widget.classList.contains('ari-open')?close():open());
      closeBtn.addEventListener('click',close);
      function addMsg(who,text){ const el=document.createElement('div'); el.className='ari-msg '+who; el.textContent=text; body.appendChild(el); body.scrollTop=body.scrollHeight; return el; }
      function showTyping(){ const t=document.createElement('div'); t.className='ari-typing'; t.id='ari-typing'; t.innerHTML='<span></span><span></span><span></span>'; body.appendChild(t); body.scrollTop=body.scrollHeight; }
      function hideTyping(){ const t=document.getElementById('ari-typing'); if(t) t.remove(); }
      async function send(){
        const text=input.value.trim(); if(!text||busy) return;
        busy=true; sendBtn.disabled=true; addMsg('user',text); input.value=''; autoGrow(); showTyping();
        try{
          const res=await fetch(ARI_WEBHOOK,{ method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({mensaje:text, sessionId:sessionId}) });
          if(!res.ok) throw new Error('HTTP '+res.status);
          const data=await res.json(); hideTyping();
          addMsg('bot',(data&&data.respuesta)?data.respuesta:'Disculpá, no pude procesar eso. ¿Lo reformulás?');
        }catch(err){ hideTyping(); addMsg('bot','Uy, tuve un problema para responder. Probá de nuevo en un momento, o escribinos a info@aristiq.studio.'); }
        finally{ busy=false; sendBtn.disabled=false; input.focus(); }
      }
      sendBtn.addEventListener('click',send);
      input.addEventListener('keydown',(e)=>{ if(e.key==='Enter'&&!e.shiftKey){ e.preventDefault(); send(); } });
      function autoGrow(){ input.style.height='auto'; input.style.height=Math.min(input.scrollHeight,96)+'px'; }
      input.addEventListener('input',autoGrow);
    })();
    </script>
    <!-- =============================================================== -->
</body>
</html>
