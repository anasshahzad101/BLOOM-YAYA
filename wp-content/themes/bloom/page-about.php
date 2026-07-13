<?php
/**
 * Template — About
 * Auto-detected for the "about" page slug.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>


<div class="scroll-progress" id="scrollProgress"></div>

<div class="preloader" id="preloader">
  <div class="pl-logo">B L O O M</div>
  <div class="pl-line"></div>
  <div class="pl-sub">Our Heritage</div>
  <div class="pl-prog"></div>
</div>

<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="wa-float" id="waFloat" aria-label="WhatsApp stylist">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
</a>

<div class="mob-menu" id="mobMenu">
  <button class="mob-close" id="mobClose" aria-label="Close menu">✕</button>
    <a href="<?php echo esc_url( home_url("/shop/") ); ?>">Shop</a>
<a href="<?php echo esc_url( home_url("/") ); ?>">Home</a>
  <a href="<?php echo esc_url( home_url("/collection/") ); ?>">Collection</a>
  <a href="<?php echo esc_url( home_url("/about/") ); ?>">About</a>
  <a href="<?php echo esc_url( home_url("/blog/") ); ?>">Blog</a>
  <a href="<?php echo esc_url( home_url("/contact/") ); ?>">Contact</a>
  <a href="<?php echo esc_url( home_url("/lookbook/") ); ?>">Lookbook</a>
</div>

<div class="whisper">
  <span class="whisper-track">
    <span>GCC-wide delivery</span><span class="dot">✦</span><span>Kingdom Mall, Riyadh</span><span class="dot">✦</span><span>Complimentary styling consultation</span><span class="dot">✦</span><span>Spring / Summer 2026</span>
    <span class="dot">✦</span>
    <span>Complimentary tailoring with every purchase</span>
  </span>
</div>

<nav class="nav on-dark" id="mainNav" aria-label="Primary">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="n-link">Collection</a>
  </div>
  <a href="<?php echo esc_url( home_url("/") ); ?>" class="n-logo" aria-label="BLOOM home">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url("/about/") ); ?>" class="n-link n-right-link" aria-current="page">About</a>
    <a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="n-link n-right-link">Contact</a>
    <a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="n-icon-btn" aria-label="WhatsApp">
      <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Open menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<main>

<!-- HERO -->
<section class="ph-hero" id="phHeroSection" aria-labelledby="phTitle">
  <div class="ph-hero-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf069.jpg');" role="img" aria-label="BLOOM atelier interior"></div>
  <div class="ph-hero-grad"></div>
  <div class="ph-hero-ct">
    <nav class="ph-crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url("/") ); ?>">Home</a><span class="sep">/</span><span>Our Heritage</span></nav>
    <div class="ph-eyebrow">Since 2010</div>
    <h1 class="ph-title" id="phTitle">Our <em>Heritage</em>.</h1>
    <p class="ph-sub">Sixteen years on King Fahd Road. Forty-two seasons of trunk shows. One single, unchanging idea — that a gown is not a garment, but a promise.</p>
  </div>
</section>

<!-- FOUNDING STORY -->
<section class="ab-story">
  <div class="ab-story-grid">
    <div class="ab-story-img rv">
      <div class="ab-story-img-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf035.jpg');" role="img" aria-label="The original showroom"></div>
      <div class="ab-story-frame"></div>
    </div>
    <div class="ab-story-text rv">
      <div class="sec-eyebrow">Our Story</div>
      <h2 class="ab-story-h">A boutique built on a <em>single belief</em>.</h2>
      <p class="ab-story-p">In the autumn of 2010, BLOOM opened a modest 80-square-metre showroom on the second floor of Kingdom Mall. There were no campaigns, no press launches, no marketing budget. Just a phone, a small rack of evening gowns, and the conviction that Riyadh deserved a different kind of luxury experience — one without intermediaries, without pressure, and without compromise.</p>
      <p class="ab-story-p">Sixteen years later, we are still on the second floor. We are still answering the phone ourselves. And we still believe that the most important conversation in fashion is the one between a woman and the gown that will define her evening.</p>
      <a href="#timeline" class="btn-outline"><span>Read our journey</span></a>
    </div>
  </div>
</section>

<!-- VALUES / PHILOSOPHY -->
<section class="ab-values">
  <div class="ab-values-head rv">
    <div class="ab-values-eye">Our Philosophy</div>
    <h2 class="ab-values-t">Three <em>quiet</em> commitments.</h2>
  </div>
  <div class="ab-values-grid">
    <div class="ab-value rv rv-d1">
      <div class="ab-value-icon">I</div>
      <h3 class="ab-value-h">Curation, not collection.</h3>
      <p class="ab-value-p">We do not carry every designer. We carry the ones whose work makes us stop in the showroom — and that is the only filter that has ever mattered to us.</p>
    </div>
    <div class="ab-value rv rv-d2">
      <div class="ab-value-icon">II</div>
      <h3 class="ab-value-h">Time, not urgency.</h3>
      <p class="ab-value-p">An appointment at BLOOM is unhurried by design. You are not buying a dress — you are choosing the gown that will outlive the photograph. That deserves time.</p>
    </div>
    <div class="ab-value rv rv-d3">
      <div class="ab-value-icon">III</div>
      <h3 class="ab-value-h">Discretion, always.</h3>
      <p class="ab-value-p">Our clients trust us with the most photographed evenings of their lives. We honour that trust with the silence it requires.</p>
    </div>
  </div>
</section>

<!-- TIMELINE -->
<section class="ab-timeline" id="timeline">
  <div class="ab-timeline-head rv">
    <div class="ab-timeline-eye">The Journey</div>
    <h2 class="ab-timeline-t">Sixteen years, in <em>seven</em> chapters.</h2>
  </div>
  <div class="ab-tl-list" id="tlList">
    <div class="ab-tl-progress" id="tlProgress"></div>
    <article class="ab-tl-row rv"><div class="ab-tl-yr"><em>2010</em></div><div class="ab-tl-content"><h3 class="ab-tl-h">The opening.</h3><p class="ab-tl-p">80 square metres, twelve gowns, one phone line. BLOOM opens its doors at Kingdom Mall, Floor 2.</p></div></article>
    <article class="ab-tl-row rv"><div class="ab-tl-yr"><em>2013</em></div><div class="ab-tl-content"><h3 class="ab-tl-h">The first trunk show.</h3><p class="ab-tl-p">Saiid Kobeisy visits Riyadh for a three-day private preview. The line wraps around Floor 2.</p></div></article>
    <article class="ab-tl-row rv"><div class="ab-tl-yr"><em>2015</em></div><div class="ab-tl-content"><h3 class="ab-tl-h">Elie Saab arrives.</h3><p class="ab-tl-p">We become the exclusive carrier of Elie Saab evening collections in the Kingdom. The relationship continues to this day.</p></div></article>
    <article class="ab-tl-row rv"><div class="ab-tl-yr"><em>2017</em></div><div class="ab-tl-content"><h3 class="ab-tl-h">The expansion.</h3><p class="ab-tl-p">We triple the showroom to 240 square metres and open dedicated bridal and consultation suites.</p></div></article>
    <article class="ab-tl-row rv"><div class="ab-tl-yr"><em>2020</em></div><div class="ab-tl-content"><h3 class="ab-tl-h">A decade.</h3><p class="ab-tl-p">Ten years on King Fahd Road. We mark the anniversary with a private archive show of past collections.</p></div></article>
    <article class="ab-tl-row rv"><div class="ab-tl-yr"><em>2023</em></div><div class="ab-tl-content"><h3 class="ab-tl-h">GCC delivery.</h3><p class="ab-tl-p">We launch concierge delivery to Saudi Arabia, UAE, Kuwait, Bahrain, Qatar and Oman.</p></div></article>
    <article class="ab-tl-row rv"><div class="ab-tl-yr"><em>2026</em></div><div class="ab-tl-content"><h3 class="ab-tl-h">The Vow Collection.</h3><p class="ab-tl-p">Our SS26 lookbook is shot at Al Murabba Palace — twelve looks, seven maisons, one season.</p></div></article>
  </div>
</section>

<!-- STATS -->
<section class="ab-stats">
  <div class="ab-stats-grid">
    <div class="rv rv-d1"><div class="ab-stat-n" data-count="16"><span>+</span></div><div class="ab-stat-l">Years of heritage</div></div>
    <div class="rv rv-d2"><div class="ab-stat-n" data-count="50"><span>+</span></div><div class="ab-stat-l">International designers</div></div>
    <div class="rv rv-d3"><div class="ab-stat-n" data-count="240"><span>+</span></div><div class="ab-stat-l">Pieces in collection</div></div>
    <div class="rv rv-d4"><div class="ab-stat-n" data-count="6"></div><div class="ab-stat-l">GCC countries served</div></div>
  </div>
</section>

<!-- FOUNDER QUOTE -->
<section class="ab-founder rv">
  <div class="ab-founder-mark">"</div>
  <p class="ab-founder-q">We do not sell <em>dresses</em>. We help women dress for the <em>most photographed evenings</em> of their lives. That is a different kind of <em>responsibility</em> — and we have spent sixteen years learning to honour it.</p>
  <div class="ab-founder-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf042.jpg');"></div>
  <div class="ab-founder-name">Layla Al-Mansour</div>
  <div class="ab-founder-role">Founder & Creative Director</div>
</section>

<!-- CTA -->
<section class="consult" id="consult">
  <div class="consult-bg"></div>
  <div class="consult-grad"></div>
  <div class="consult-in rv">
    <div class="con-icon">✦</div>
    <h2 class="con-heading">Come see the <em>atelier</em>.</h2>
    <p class="con-sub">The fastest way to understand BLOOM is to walk through the showroom. Book a private appointment and we'll have coffee, samples, and a quiet hour waiting for you.</p>
    <div class="con-btns">
      <a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="btn-gold"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg><span>Book a viewing</span></a>
      <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="btn-noir"><span>Visit us</span></a>
    </div>
  </div>
</section>

</main>

<footer class="footer">
  <div class="ft-top">
    <div class="ft-brand">
      <div class="ft-logo">B L O O M</div>
      <div class="ft-logo-rule"></div>
      <p class="ft-tagline">Where elegance blooms — since 2010.</p>
      <address class="ft-addr"><strong>Kingdom Mall, Floor 2</strong>King Fahd Road, Al Olaya<br>Riyadh, Saudi Arabia<br><br>+966 (11) 211 1026<br>bloom1.ksa@gmail.com</address>
    </div>
    <div><div class="ft-col-title">Collection</div><a href="<?php echo esc_url( home_url("/shop/") ); ?>" class="ft-link">Shop — All Pieces</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#evening" class="ft-link">Evening Dresses</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#dresses" class="ft-link">Dresses</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#new" class="ft-link">New Arrivals</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#blouses" class="ft-link">Blouses</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#accessories" class="ft-link">Accessories</a></div>
    <div><div class="ft-col-title">House</div><a href="<?php echo esc_url( home_url("/about/") ); ?>" class="ft-link">Our Heritage</a><a href="<?php echo esc_url( home_url("/lookbook/") ); ?>" class="ft-link">Lookbook SS26</a><a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="ft-link">Blog</a><a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="ft-link">Contact</a></div>
    <div><div class="ft-col-title">Connect</div><a href="#" class="ft-link">WhatsApp</a><a href="#" class="ft-link">Instagram</a><a href="#" class="ft-link">Snapchat</a><a href="#" class="ft-link">TikTok</a></div>
  </div>
  <div class="ft-bot"><span>© 2026 BLOOM Fashion Boutique · CR: 1010245766 · VAT: 301337273200003</span><div class="ft-social"><a href="#">Instagram</a><a href="#">Snapchat</a><a href="#">TikTok</a></div><span>bloom-fashions.com</span></div>
</footer>
<?php $GLOBALS["bloom_footer_rendered"] = true; ?>

<script>
function hidePreloader(){const p=document.getElementById('preloader');if(p)p.classList.add('done');}
document.addEventListener('DOMContentLoaded',()=>setTimeout(hidePreloader,1600));
window.addEventListener('load',()=>setTimeout(hidePreloader,200));
setTimeout(hidePreloader,3000);
const cD=document.getElementById('curD'),cR=document.getElementById('curR');
let mx=0,my=0,cx=0,cy=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);}aCur();
document.querySelectorAll('a,button,.ab-story-img,.ab-at,.ab-value').forEach(el=>{el.addEventListener('mouseenter',()=>cR.classList.add('hov'));el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));});
document.querySelectorAll('.ab-story-img,.ab-at,.ph-hero-img').forEach(el=>{el.addEventListener('mouseenter',()=>{cR.classList.add('img');cD.classList.add('hide');});el.addEventListener('mouseleave',()=>{cR.classList.remove('img');cD.classList.remove('hide');});});

const nav=document.getElementById('mainNav'),whisperEl=document.querySelector('.whisper'),phHero=document.getElementById('phHeroSection');
function uNav(){const s=window.scrollY,hb=phHero.offsetTop+phHero.offsetHeight-100;nav.classList.toggle('scrolled',s>40);nav.classList.toggle('on-dark',s<hb);if(whisperEl)whisperEl.classList.toggle('hide',s>40);}
window.addEventListener('scroll',uNav,{passive:true});uNav();

const rObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('vis');rObs.unobserve(en.target);}});},{threshold:.12,rootMargin:'0px 0px -50px 0px'});
document.querySelectorAll('.rv').forEach(el=>rObs.observe(el));

const scrollProg=document.getElementById('scrollProgress');
function updateProg(){const h=document.documentElement.scrollHeight-window.innerHeight;scrollProg.style.transform=`scaleX(${h>0?window.scrollY/h:0})`;}
window.addEventListener('scroll',updateProg,{passive:true});updateProg();

const waf=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waf.classList.toggle('show',window.scrollY>500);},{passive:true});

const burger=document.getElementById('burger'),mob=document.getElementById('mobMenu'),mobClose=document.getElementById('mobClose');
if(burger)burger.addEventListener('click',()=>mob.classList.add('open'));
if(mobClose)mobClose.addEventListener('click',()=>mob.classList.remove('open'));
mob.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mob.classList.remove('open')));

const cartBtn=document.getElementById('cartBtn'),cartOverlay=document.getElementById('cartOverlay'),cartDrawer=document.getElementById('cartDrawer'),cartClose=document.getElementById('cartClose'),atbToast=document.getElementById('atbToast'),atbText=document.getElementById('atbText');
function openCart(){cartOverlay.classList.add('open');cartDrawer.classList.add('open');document.body.style.overflow='hidden';}
function closeCart(){cartOverlay.classList.remove('open');cartDrawer.classList.remove('open');document.body.style.overflow='';}
function showToast(msg){atbText.textContent=msg;atbToast.classList.add('show');clearTimeout(window._tT);window._tT=setTimeout(()=>atbToast.classList.remove('show'),2600);}

/* Hero parallax */
const heroImg=document.querySelector('.ph-hero-img');
window.addEventListener('scroll',()=>{const s=window.scrollY;if(s<window.innerHeight)heroImg.style.transform=`scale(1.04) translateY(${s*.22}px)`;},{passive:true});

/* Hero content fade */
const heroCt=document.querySelector('.ph-hero-ct');
window.addEventListener('scroll',()=>{const r=phHero.getBoundingClientRect();if(r.bottom>0){const p=Math.max(0,Math.min(1,-r.top/r.height));heroCt.style.transform=`translateY(${p*50}px)`;heroCt.style.opacity=String(1-p*.8);}},{passive:true});

/* Timeline progress line (fills as you scroll 2010 → 2026) */
const tlList=document.getElementById('tlList'),tlProgress=document.getElementById('tlProgress');
function updateTimeline(){
  if(!tlList||!tlProgress)return;
  const rows=tlList.querySelectorAll('.ab-tl-row');
  if(!rows.length)return;
  const lastRow=rows[rows.length-1];
  const listRect=tlList.getBoundingClientRect();
  const trigger=window.innerHeight*.62;
  // Last dot center, relative to the list top
  const lastDotInList=lastRow.offsetTop+56;
  // Line starts at top:24 of list; max bottom = last dot center
  const maxHeight=lastDotInList-24;
  // Line bottom follows trigger position, clamped to maxHeight
  const triggerInList=trigger-listRect.top;
  const height=Math.max(0,Math.min(maxHeight,triggerInList-24));
  tlProgress.style.height=height+'px';
  // Light up each year's dot as the progress passes it
  rows.forEach(row=>{
    const rr=row.getBoundingClientRect();
    if(rr.top+56<trigger)row.classList.add('vis');
  });
}
window.addEventListener('scroll',updateTimeline,{passive:true});
window.addEventListener('resize',updateTimeline);
updateTimeline();

/* Stats count-up */
const statObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){const num=en.target,target=parseInt(num.dataset.count,10),sp=num.querySelector('span'),spText=sp?sp.outerHTML:'';const dur=2000,start=performance.now();function tick(now){const t=Math.min((now-start)/dur,1);const e=1-Math.pow(1-t,3);num.innerHTML=Math.floor(target*e)+spText;if(t<1)requestAnimationFrame(tick);else num.innerHTML=target+spText;}requestAnimationFrame(tick);statObs.unobserve(num);}});},{threshold:.4});
document.querySelectorAll('.ab-stat-n').forEach(n=>statObs.observe(n));

/* Magnetic + tilt */
function attachMagnet(sel,strength=.3){document.querySelectorAll(sel).forEach(el=>{el.addEventListener('mousemove',e=>{const r=el.getBoundingClientRect();const cx=r.left+r.width/2,cy=r.top+r.height/2;el.style.transform=`translate(${(e.clientX-cx)*strength}px,${(e.clientY-cy)*strength}px)`;});el.addEventListener('mouseleave',()=>{el.style.transform='';});});}
function attachTilt(sel,intensity=3){document.querySelectorAll(sel).forEach(el=>{el.addEventListener('mousemove',e=>{const r=el.getBoundingClientRect();const dx=(e.clientX-r.left)/r.width-.5,dy=(e.clientY-r.top)/r.height-.5;el.style.transform=`perspective(1400px) rotateX(${-dy*intensity}deg) rotateY(${dx*intensity}deg) translateY(-4px)`;});el.addEventListener('mouseleave',()=>{el.style.transform='';});});}
attachMagnet('.btn-gold,.btn-noir,.btn-outline',.28);
attachMagnet('.n-icon-btn',.4);
attachTilt('.ab-value',2);

/* Ripple */
document.addEventListener('click',e=>{const t=e.target.closest('.btn-gold,.btn-noir,.btn-outline,.btn-ghost');if(!t)return;const r=t.getBoundingClientRect();const rip=document.createElement('span');rip.className='ripple';const size=Math.max(r.width,r.height);rip.style.width=rip.style.height=size+'px';rip.style.left=(e.clientX-r.left-size/2)+'px';rip.style.top=(e.clientY-r.top-size/2)+'px';t.appendChild(rip);setTimeout(()=>rip.remove(),900);});
</script>

<?php get_footer(); ?>
