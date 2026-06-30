/**
 * BLOOM — Mobile UX layer (touch detection, sticky CTA bar, mobile menu polish).
 * Runs on every page; no-ops on desktop.
 */
(function(){
  if(typeof document==='undefined')return;
  var isTouch=window.matchMedia('(hover:none) and (pointer:coarse)').matches;
  var isMobile=window.matchMedia('(max-width:768px)').matches;
  document.documentElement.classList.toggle('touch',isTouch);
  document.documentElement.classList.toggle('mob',isMobile);

  if(!isMobile)return;

  // ── 1. Enrich the mobile menu with brand header + footer contact ──
  var mob=document.getElementById('mobMenu');
  if(mob && !mob.dataset.enriched){
    mob.dataset.enriched='1';
    var firstAnchor=mob.querySelector('a');
    if(firstAnchor){
      var head=document.createElement('div');
      head.className='mob-menu-head';
      head.innerHTML='<div class="mob-menu-logo">BLOOM</div><div class="mob-menu-sub">Kingdom Mall · Riyadh</div>';
      firstAnchor.parentNode.insertBefore(head,firstAnchor);
    }
    var foot=document.createElement('div');
    foot.className='mob-menu-foot';
    foot.innerHTML=
      '<div class="mob-menu-contact">'+
        '<div><strong>Visit</strong>Kingdom Mall, Floor 2<br>King Fahd Road, Al Olaya · Riyadh</div>'+
        '<div><strong>Call / WhatsApp</strong><a href="tel:+966112111026">+966 (11) 211 1026</a></div>'+
        '<div><strong>Hours</strong>Saturday – Thursday · 10 AM – 10 PM</div>'+
      '</div>'+
      '<div class="mob-menu-social">'+
        '<a href="#">Instagram</a>'+
        '<a href="#">Snapchat</a>'+
        '<a href="#">TikTok</a>'+
      '</div>';
    mob.appendChild(foot);
  }

  // ── 2. Inject sticky bottom CTA bar (WhatsApp + Call) ──
  if(!document.querySelector('.mobile-cta-bar')){
    var bar=document.createElement('div');
    bar.className='mobile-cta-bar';
    bar.innerHTML=
      '<a class="cta-wa" href="https://wa.me/966112111026" target="_blank" rel="noopener" aria-label="WhatsApp BLOOM">'+
        '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>'+
        '<span>WhatsApp Stylist</span>'+
      '</a>'+
      '<a class="cta-call" href="tel:+966112111026" aria-label="Call BLOOM">'+
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.37 1.9.72 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.35 1.85.59 2.81.72A2 2 0 0122 16.92z"/></svg>'+
        '<span>Call</span>'+
      '</a>';
    document.body.appendChild(bar);
    // Reveal after a short delay (let preloader finish first)
    setTimeout(function(){bar.classList.add('show');},1800);
  }

  // ── 3. Prevent body scroll while mobile menu open ──
  if(mob){
    var obs=new MutationObserver(function(){
      var open=mob.classList.contains('open');
      document.body.style.overflow=open?'hidden':'';
    });
    obs.observe(mob,{attributes:true,attributeFilter:['class']});
  }

  // ── 4. Smooth scroll for in-page anchors with offset for sticky nav ──
  document.addEventListener('click',function(e){
    var t=e.target.closest('a[href^="#"]');
    if(!t)return;
    var hash=t.getAttribute('href');
    if(hash==='#'||hash.length<2)return;
    var target=document.querySelector(hash);
    if(!target)return;
    e.preventDefault();
    var nav=document.getElementById('mainNav');
    var offset=nav?nav.offsetHeight+16:80;
    var y=target.getBoundingClientRect().top+window.scrollY-offset;
    window.scrollTo({top:y,behavior:'smooth'});
  });
})();
