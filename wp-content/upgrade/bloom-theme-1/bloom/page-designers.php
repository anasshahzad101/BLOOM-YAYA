<?php
/**
 * Template â€” Designers
 * Auto-detected for the "designers" page slug.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>


<!-- Scroll progress -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- Preloader -->
<div class="preloader" id="preloader">
  <div class="pl-logo">B L O O M</div>
  <div class="pl-line"></div>
  <div class="pl-sub">The Designers</div>
  <div class="pl-prog"></div>
</div>

<!-- Custom Cursor -->
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<!-- WhatsApp Float -->
<a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="wa-float" id="waFloat" aria-label="WhatsApp BLOOM stylist">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a8 8 0 01-4.243-1.212l-.293-.175-3.041.797.812-2.966-.192-.304A7.963 7.963 0 014 12a8 8 0 1116 0 8 8 0 01-8 8z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
</a>

<!-- Toast -->
<!-- Cart -->
<!-- Mobile Menu -->
<div class="mob-menu" id="mobMenu" aria-label="Mobile navigation">
  <button class="mob-close" id="mobClose" aria-label="Close menu">âœ•</button>
  <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
  <a href="<?php echo esc_url( home_url('/shop/') ); ?>">Shop</a>
  <a href="<?php echo esc_url( home_url('/collection/') ); ?>">Collection</a>
  <a href="<?php echo esc_url( home_url('/designers/') ); ?>">Designers</a>
  <a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a>
  <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a>
  <a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a>
</div>

<!-- Whisper Bar -->
<div class="whisper" role="complementary">
  <span class="whisper-track">
    <span>GCC-wide delivery</span>
    <span class="dot">âœ¦</span>
    <span>Kingdom Mall, Riyadh</span>
    <span class="dot">âœ¦</span>
    <span>Complimentary styling consultation</span>
    <span class="dot">âœ¦</span>
    <span>Spring / Summer 2026</span>
  </span>
</div>

<!-- Navigation -->
<nav class="nav on-dark" id="mainNav" aria-label="Primary navigation">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="n-link">Collection</a>
    <a href="<?php echo esc_url( home_url("/designers/") ); ?>" class="n-link" aria-current="page">Designers</a>
  </div>
  <a href="<?php echo esc_url( home_url("/") ); ?>" class="n-logo" aria-label="BLOOM home">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url("/about/") ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="n-link n-right-link">Contact</a>
    <a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="n-icon-btn" title="WhatsApp a stylist" aria-label="WhatsApp stylist">
      <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Open menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<main>

<!-- â•â•â• PAGE HERO â•â•â• -->
<section class="dp-hero" id="dpHeroSection" aria-labelledby="dpTitle">
  <div class="dp-hero-img" style="background-image:url('https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=2000&q=85&auto=format');" role="img" aria-label="Editorial fashion atelier"></div>
  <div class="dp-hero-grad"></div>
  <div class="dp-hero-ct">
    <nav class="dp-crumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url("/") ); ?>">Home</a>
      <span class="sep">/</span>
      <span>The Designers</span>
    </nav>
    <div class="dp-eyebrow">Fifty Maisons Â· One Address</div>
    <h1 class="dp-title" id="dpTitle">The <em>Designers</em></h1>
    <p class="dp-sub">From Beirut to New York, Paris to Milan â€” every house we carry has earned its place through a single, unchanging standard: the work has to move us first.</p>
  </div>
</section>

<!-- â•â•â• INTRO STATEMENT â•â•â• -->
<section class="dp-intro">
  <p class="dp-intro-q" id="dpIntroStatement">
    A <em>designer</em> we choose to carry is not chosen for their <em>name</em>. They are chosen because their work makes us stop in the showroom and <em>look twice</em>.
  </p>
  <div class="dp-intro-meta">Our Curation Philosophy</div>
</section>

<!-- â•â•â• FEATURED SPOTLIGHT â€” ELIE SAAB â•â•â• -->
<section class="dp-spotlight" aria-labelledby="spotName">
  <div class="dp-spot-img">
    <div class="dp-spot-img-bg" style="background-image:url('https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=1600&q=85&auto=format');" role="img" aria-label="Elie Saab gown editorial"></div>
    <div class="dp-spot-frame"></div>
  </div>
  <div class="dp-spot-text">
    <div class="dp-spot-inner rv">
      <div class="dp-spot-tag">Featured Maison Â· SS26</div>
      <h2 class="dp-spot-name" id="spotName">Elie Saab</h2>
      <div class="dp-spot-loc">Beirut Â· Paris Â· est. 1982</div>
      <p class="dp-spot-body">For four decades, Elie Saab has dressed the women who walk into rooms others walk through. We carry his ready-to-wear, his evening collections, and â€” by appointment â€” his couture. The atelier in Beirut produces with a patience that has become rare. We are honoured to be among the houses that show it.</p>
      <div class="dp-spot-stats">
        <div class="dp-spot-stat"><div class="n">42</div><div class="l">Pieces in store</div></div>
        <div class="dp-spot-stat"><div class="n">12</div><div class="l">Years carried</div></div>
        <div class="dp-spot-stat"><div class="n">SS26</div><div class="l">Latest collection</div></div>
      </div>
      <a href="#" class="btn-gold"><span>Browse Elie Saab</span><span class="arrow">â†’</span></a>
    </div>
  </div>
</section>

<!-- â•â•â• DESIGNER GRID â•â•â• -->
<section class="dp-grid-section" id="designerGrid" aria-labelledby="dpGridTitle">
  <div class="dp-grid-head rv">
    <div class="dp-grid-eyebrow">The Maisons</div>
    <h2 class="dp-grid-title" id="dpGridTitle">Eight houses. <em>Forty-two</em> seasons.</h2>
    <p class="dp-grid-sub">Each name below represents a relationship â€” sometimes a decade long. Click any designer to browse their current edit at BLOOM.</p>
  </div>

  <div class="dp-filters" role="tablist" aria-label="Filter designers by region">
    <button class="dp-filter active" data-filter="all" role="tab" aria-selected="true">All</button>
    <button class="dp-filter" data-filter="beirut" role="tab">Beirut</button>
    <button class="dp-filter" data-filter="ny" role="tab">New York</button>
    <button class="dp-filter" data-filter="paris" role="tab">Paris</button>
    <button class="dp-filter" data-filter="usa" role="tab">USA</button>
  </div>

  <div class="dp-grid" id="dpGrid">
    <!-- Designer cards injected by JS -->
  </div>
</section>

<!-- â•â•â• EDITORIAL QUOTE â•â•â• -->
<section class="dp-quote rv">
  <div class="dp-quote-mark">"</div>
  <p class="dp-quote-t">A house is not its <em>logo</em>. A house is the <em>hand</em> that draws it, the <em>scissors</em> that cut it, and the <em>woman</em> who finally wears it.</p>
  <div class="dp-quote-rule"></div>
  <div class="dp-quote-src">The Bloom Atelier</div>
</section>

<!-- â•â•â• CITIES STRIP â•â•â• -->
<section class="dp-cities" aria-labelledby="citiesTitle">
  <div class="dp-cities-head">
    <div class="dp-cities-l">Where They Come From</div>
    <h3 class="dp-cities-t" id="citiesTitle">Five cities. <em>One</em> shared standard.</h3>
  </div>
  <div class="dp-cities-grid">
    <div class="dp-city rv rv-d1"><div class="dp-city-n">Beirut</div><div class="dp-city-c">Elie Saab Â· Zuhair Murad Â· Tony Ward<br>Saiid Kobeisy Â· Georges Hobeika</div></div>
    <div class="dp-city rv rv-d2"><div class="dp-city-n">Paris</div><div class="dp-city-c">Elie Saab Couture</div></div>
    <div class="dp-city rv rv-d3"><div class="dp-city-n">New York</div><div class="dp-city-c">Marchesa Â· Reem Acra<br>Naeem Khan</div></div>
    <div class="dp-city rv rv-d4"><div class="dp-city-n">Milan</div><div class="dp-city-c">Capsule edits & trunk shows</div></div>
    <div class="dp-city rv rv-d5"><div class="dp-city-n">USA</div><div class="dp-city-c">Jovani</div></div>
  </div>
</section>

<!-- â•â•â• CONSULTATION CTA â•â•â• -->
<section class="consult" id="consult">
  <div class="consult-bg"></div>
  <div class="consult-grad"></div>
  <div class="consult-in rv">
    <div class="con-icon">âœ¦</div>
    <h2 class="con-heading">Looking for a <em>specific designer</em>?</h2>
    <p class="con-sub">Our stylists can source by request â€” from past-season archive to the latest runway. Tell us what you're searching for, and we'll find it.</p>
    <div class="con-btns">
      <a href="https://wa.me/966112111026?text=Hello%2C+I%27m+looking+for+a+specific+designer" target="_blank" rel="noopener" class="btn-gold">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
        <span>Request a designer</span>
      </a>
      <a href="<?php echo esc_url( home_url("/") ); ?>#consult" class="btn-noir"><span>Book Private Viewing</span></a>
    </div>
    <p class="con-note">Sourcing requests typically replied to within 24 hours Â· GCC-wide delivery</p>
  </div>
</section>

<!-- â•â•â• NEWSLETTER â•â•â• -->
<section class="news">
  <div class="news-in rv">
    <h3 class="news-h">First in line for designer trunk shows.</h3>
    <p class="news-p">Private previews of new collections, designer visits to the showroom, and limited-piece releases â€” delivered with restraint.</p>
    <form class="news-form" onsubmit="event.preventDefault();subscribeNews();">
      <input type="email" class="news-input" id="newsEmail" placeholder="Your email address" required aria-label="Email address">
      <button type="submit" class="news-btn">Subscribe <span>â†’</span></button>
    </form>
    <p class="news-note">No spam. Unsubscribe anytime.</p>
  </div>
</section>

</main>

<!-- â•â•â• FOOTER â•â•â• -->
<footer class="footer">
  <div class="ft-top">
    <div class="ft-brand">
      <div class="ft-logo">B L O O M</div>
      <div class="ft-logo-rule"></div>
      <p class="ft-tagline">Where elegance blooms â€” since 2010.</p>
      <address class="ft-addr">
        <strong>Kingdom Mall, Floor 2</strong>
        King Fahd Road, Al Olaya<br>Riyadh, Saudi Arabia<br>
        <br>+966 (11) 211 1026<br>info@bloom-fashions.com
      </address>
    </div>
    <div>
      <div class="ft-col-title">Collection</div>
      <a href="<?php echo esc_url( home_url("/shop/") ); ?>" class="ft-link">Shop â€” All Pieces</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#evening" class="ft-link">Evening Dresses</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#dresses" class="ft-link">Dresses</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#new" class="ft-link">New Arrivals</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#blouses" class="ft-link">Blouses</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#skirts" class="ft-link">Skirts</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#trousers" class="ft-link">Trousers / Slacks</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#accessories" class="ft-link">Accessories</a>
    </div>
    <div>
      <div class="ft-col-title">House</div>
      <a href="<?php echo esc_url( home_url("/designers/") ); ?>" class="ft-link">The Designers</a>
      <a href="<?php echo esc_url( home_url("/") ); ?>#heritage" class="ft-link">Our Heritage</a>
      <a href="<?php echo esc_url( home_url("/") ); ?>#lookbook" class="ft-link">Lookbook SS26</a>
      <a href="<?php echo esc_url( home_url("/") ); ?>#journal" class="ft-link">Journal</a>
      <a href="#" class="ft-link">Press</a>
    </div>
    <div>
      <div class="ft-col-title">Connect</div>
      <a href="#" class="ft-link">WhatsApp</a>
      <a href="#" class="ft-link">Instagram</a>
      <a href="#" class="ft-link">Snapchat</a>
      <a href="#" class="ft-link">TikTok</a>
      <a href="#" class="ft-link">Pinterest</a>
    </div>
  </div>
  <div class="ft-bot">
    <span>Â© 2026 BLOOM Fashion Boutique Â· CR: XXXXXXXXXX Â· VAT: XXXXXXXXXXXXXXX</span>
    <div class="ft-social">
      <a href="#">Instagram</a>
      <a href="#">Snapchat</a>
      <a href="#">TikTok</a>
    </div>
    <span>bloom-fashions.com</span>
  </div>
</footer>

<script>
/* â•â•â• DESIGNER DATA â•â•â• */
const DESIGNERS=[
  {name:'Elie Saab',loc:'Beirut Â· Paris',region:'beirut',year:'est. 1982',img:'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=900&q=85&auto=format',slug:'elie-saab'},
  {name:'Zuhair Murad',loc:'Beirut',region:'beirut',year:'est. 1997',img:'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=900&q=85&auto=format',slug:'zuhair-murad'},
  {name:'Marchesa',loc:'New York',region:'ny',year:'est. 2004',img:'https://images.unsplash.com/photo-1485968579580-b6d095142e6e?w=900&q=85&auto=format',slug:'marchesa'},
  {name:'Saiid Kobeisy',loc:'Beirut',region:'beirut',year:'est. 1992',img:'https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=900&q=85&auto=format',slug:'saiid-kobeisy'},
  {name:'Tony Ward',loc:'Beirut',region:'beirut',year:'est. 2000',img:'https://images.unsplash.com/photo-1572804013427-4d7ca7268217?w=900&q=85&auto=format',slug:'tony-ward'},
  {name:'Georges Hobeika',loc:'Beirut',region:'beirut',year:'est. 1995',img:'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=900&q=85&auto=format',slug:'georges-hobeika'},
  {name:'Reem Acra',loc:'New York',region:'ny',year:'est. 1997',img:'https://images.unsplash.com/photo-1566174053879-31528523f8ae?w=900&q=85&auto=format',slug:'reem-acra'},
  {name:'Jovani',loc:'New York',region:'usa',year:'est. 1983',img:'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=900&q=85&auto=format',slug:'jovani'},
];

const dpGrid=document.getElementById('dpGrid');
function renderDesigners(filter='all'){
  const items=filter==='all'?DESIGNERS:DESIGNERS.filter(d=>d.region===filter);
  dpGrid.innerHTML=items.map((d,i)=>`
    <a href="#" class="dp-card rv rv-d${(i%4)+1}" data-region="${d.region}" aria-label="${d.name} â€” view collection">
      <div class="dp-card-img">
        <div class="dp-card-img-bg" style="background-image:url('${d.img}');"></div>
        <div class="dp-card-ov"></div>
        <div class="dp-card-frame"></div>
        <span class="dp-card-num">0${i+1}</span>
        <span class="dp-card-arrow">View collection â†’</span>
      </div>
      <div class="dp-card-info">
        <h3 class="dp-card-name">${d.name}</h3>
        <div class="dp-card-meta">
          <span class="dp-card-loc">${d.loc}</span>
          <span class="dp-card-yr">${d.year}</span>
        </div>
      </div>
    </a>
  `).join('');
  document.querySelectorAll('#dpGrid .rv').forEach(el=>rObs.observe(el));
  bindCursor();
  bindCursorStates();
  attachTilt('.dp-card',5);
}

/* â•â•â• PRELOADER â•â•â• */
function hidePreloader(){const p=document.getElementById('preloader');if(p)p.classList.add('done');}
document.addEventListener('DOMContentLoaded',()=>setTimeout(hidePreloader,1600));
window.addEventListener('load',()=>setTimeout(hidePreloader,200));
setTimeout(hidePreloader,3000);

/* â•â•â• CURSOR â•â•â• */
const cD=document.getElementById('curD'),cR=document.getElementById('curR');
let mx=0,my=0,cx=0,cy=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);}aCur();
function bindCursor(){document.querySelectorAll('a,button,.dp-card,.dp-spot-img').forEach(el=>{el.addEventListener('mouseenter',()=>cR.classList.add('hov'));el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));});}
function bindCursorStates(){document.querySelectorAll('.dp-card,.dp-spot-img').forEach(el=>{el.addEventListener('mouseenter',()=>{cR.classList.add('img');cD.classList.add('hide');});el.addEventListener('mouseleave',()=>{cR.classList.remove('img');cD.classList.remove('hide');});});}

/* â•â•â• NAV / WHISPER â•â•â• */
const nav=document.getElementById('mainNav');
const whisperEl=document.querySelector('.whisper');
const dpHero=document.getElementById('dpHeroSection');
function uNav(){
  const s=window.scrollY,hb=dpHero.offsetTop+dpHero.offsetHeight-100;
  nav.classList.toggle('scrolled',s>40);
  nav.classList.toggle('on-dark',s<hb);
  if(whisperEl)whisperEl.classList.toggle('hide',s>40);
}
window.addEventListener('scroll',uNav,{passive:true});uNav();

/* â•â•â• SCROLL REVEAL â•â•â• */
const rObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('vis');rObs.unobserve(en.target);}});},{threshold:.12,rootMargin:'0px 0px -50px 0px'});
document.querySelectorAll('.rv').forEach(el=>rObs.observe(el));

/* â•â•â• SCROLL PROGRESS â•â•â• */
const scrollProg=document.getElementById('scrollProgress');
function updateProg(){const h=document.documentElement.scrollHeight-window.innerHeight;scrollProg.style.transform=`scaleX(${h>0?window.scrollY/h:0})`;}
window.addEventListener('scroll',updateProg,{passive:true});

/* â•â•â• WA FLOAT â•â•â• */
const waf=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waf.classList.toggle('show',window.scrollY>500);},{passive:true});

/* â•â•â• MOBILE MENU â•â•â• */
const burger=document.getElementById('burger'),mob=document.getElementById('mobMenu'),mobClose=document.getElementById('mobClose');
if(burger)burger.addEventListener('click',()=>mob.classList.add('open'));
if(mobClose)mobClose.addEventListener('click',()=>mob.classList.remove('open'));
mob.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mob.classList.remove('open')));

/* â•â•â• LANG TOGGLE â•â•â• */

/* â•â•â• NEWSLETTER â•â•â• */
function subscribeNews(){const e=document.getElementById('newsEmail').value;if(e){showToast('Thank you. You\'re on the list.');document.getElementById('newsEmail').value='';}}

/* â•â•â• 3D TILT â•â•â• */
function attachTilt(selector,intensity=6){
  document.querySelectorAll(selector).forEach(el=>{
    if(el.dataset.tiltBound)return;el.dataset.tiltBound='1';
    el.addEventListener('mousemove',e=>{
      const r=el.getBoundingClientRect();
      const dx=(e.clientX-r.left)/r.width-.5,dy=(e.clientY-r.top)/r.height-.5;
      el.style.transform=`perspective(1200px) rotateX(${-dy*intensity}deg) rotateY(${dx*intensity}deg) translateY(-8px)`;
    });
    el.addEventListener('mouseleave',()=>{el.style.transform='';});
  });
}

/* â•â•â• MAGNETIC CTAs â•â•â• */
function attachMagnet(selector,strength=.3){
  document.querySelectorAll(selector).forEach(el=>{
    el.addEventListener('mousemove',e=>{
      const r=el.getBoundingClientRect();
      const cx=r.left+r.width/2,cy=r.top+r.height/2;
      el.style.transform=`translate(${(e.clientX-cx)*strength}px,${(e.clientY-cy)*strength}px)`;
    });
    el.addEventListener('mouseleave',()=>{el.style.transform='';});
  });
}

/* â•â•â• HERO PARALLAX â•â•â• */
const heroImg=document.querySelector('.dp-hero-img');
window.addEventListener('scroll',()=>{
  const s=window.scrollY;
  if(s<window.innerHeight){heroImg.style.transform=`scale(1.04) translateY(${s*.22}px)`;}
},{passive:true});

/* â•â•â• HERO CONTENT FADE â•â•â• */
const heroCt=document.querySelector('.dp-hero-ct');
window.addEventListener('scroll',()=>{
  const r=dpHero.getBoundingClientRect();
  if(r.bottom>0){const p=Math.max(0,Math.min(1,-r.top/r.height));heroCt.style.transform=`translateY(${p*50}px)`;heroCt.style.opacity=String(1-p*.8);}
},{passive:true});

/* â•â•â• INTRO TEXT WORD REVEAL â•â•â• */
const introQ=document.getElementById('dpIntroStatement');
if(introQ){
  const original=introQ.innerHTML;
  introQ.innerHTML=original.replace(/(\S+)/g,(w)=>{
    if(!w.trim())return w;
    return `<span class="w">${w}</span>`;
  }).replace(/<\/em>/g,'</em>');
  let widx=0;
  introQ.querySelectorAll('.w').forEach(el=>{el.style.transitionDelay=(widx*30)+'ms';widx++;});
  const introObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('in');introObs.unobserve(en.target);}});},{threshold:.2});
  introObs.observe(introQ);
}

/* â•â•â• FILTER TABS â•â•â• */
document.querySelectorAll('.dp-filter').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('.dp-filter').forEach(b=>{b.classList.remove('active');b.setAttribute('aria-selected','false');});
    btn.classList.add('active');btn.setAttribute('aria-selected','true');
    renderDesigners(btn.dataset.filter);
  });
});

/* â•â•â• RIPPLE â•â•â• */
document.addEventListener('click',e=>{
  const t=e.target.closest('.btn-gold,.btn-noir,.btn-outline,.btn-ghost');
  if(!t)return;
  const r=t.getBoundingClientRect();
  const rip=document.createElement('span');
  rip.className='ripple';
  const size=Math.max(r.width,r.height);
  rip.style.width=rip.style.height=size+'px';
  rip.style.left=(e.clientX-r.left-size/2)+'px';
  rip.style.top=(e.clientY-r.top-size/2)+'px';
  t.appendChild(rip);
  setTimeout(()=>rip.remove(),900);
});

/* â•â•â• INIT â•â•â• */
renderDesigners();
attachMagnet('.btn-gold',.3);
attachMagnet('.btn-noir',.25);
attachMagnet('.n-icon-btn',.4);
updateProg();
</script>

<?php get_footer(); ?>
