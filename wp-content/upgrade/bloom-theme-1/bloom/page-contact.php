<?php
/**
 * Template — Contact
 * Auto-detected for the "contact" page slug.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>


<div class="scroll-progress" id="scrollProgress"></div>
<div class="preloader" id="preloader"><div class="pl-logo">B L O O M</div><div class="pl-line"></div><div class="pl-sub">Contact &amp; Visit</div><div class="pl-prog"></div></div>
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="wa-float" id="waFloat" aria-label="WhatsApp stylist">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
</a>

<div class="mob-menu" id="mobMenu">
  <button class="mob-close" id="mobClose" aria-label="Close menu">✕</button>
    <a href="<?php echo esc_url( home_url("/shop/") ); ?>">Shop</a>
<a href="<?php echo esc_url( home_url("/") ); ?>">Home</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>">Collection</a><a href="<?php echo esc_url( home_url("/designers/") ); ?>">Designers</a><a href="<?php echo esc_url( home_url("/about/") ); ?>">About</a><a href="<?php echo esc_url( home_url("/blog/") ); ?>">Blog</a><a href="<?php echo esc_url( home_url("/contact/") ); ?>">Contact</a><a href="<?php echo esc_url( home_url("/lookbook/") ); ?>">Lookbook</a>
</div>

<div class="whisper"><span class="whisper-track"><span>GCC-wide delivery</span><span class="dot">✦</span><span>Kingdom Mall, Riyadh</span><span class="dot">✦</span><span>Complimentary styling consultation</span><span class="dot">✦</span><span>Spring / Summer 2026</span></span></div>

<nav class="nav on-dark" id="mainNav" aria-label="Primary">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="n-link">Collection</a>
    <a href="<?php echo esc_url( home_url("/designers/") ); ?>" class="n-link">Designers</a>
  </div>
  <a href="<?php echo esc_url( home_url("/") ); ?>" class="n-logo" aria-label="BLOOM home">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url("/about/") ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="n-link n-right-link" aria-current="page">Contact</a>
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
  <div class="ph-hero-img" style="background-image:url('https://images.unsplash.com/photo-1494578379344-d6c710782a3d?w=2000&q=85&auto=format');" role="img" aria-label="BLOOM showroom"></div>
  <div class="ph-hero-grad"></div>
  <div class="ph-hero-ct">
    <nav class="ph-crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url("/") ); ?>">Home</a><span class="sep">/</span><span>Contact &amp; Visit</span></nav>
    <div class="ph-eyebrow">Visit · Call · WhatsApp</div>
    <h1 class="ph-title" id="phTitle">Come <em>see us</em>.</h1>
    <p class="ph-sub">Kingdom Mall, Floor 2 — open Saturday through Thursday, ten in the morning to ten at night. The kettle is always on.</p>
  </div>
</section>

<!-- CONTACT INFO + FORM -->
<section class="co-main">
  <div class="co-grid">
    <!-- Left — Info -->
    <div class="rv">
      <div class="co-info-head">
        <div class="co-info-eye">Find Us</div>
        <h2 class="co-info-h">Drop by, <em>or write</em>.</h2>
        <p class="co-info-p">The fastest way to reach a stylist is WhatsApp — we answer within the hour during showroom hours, and first thing in the morning otherwise.</p>
      </div>

      <div class="co-info-rows">
        <div class="co-row">
          <div class="co-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="co-row-content">
            <div class="co-row-l">The Showroom</div>
            <div class="co-row-v">Kingdom Mall, Floor 2</div>
            <div class="co-row-sub">King Fahd Road, Al Olaya · Riyadh, Saudi Arabia</div>
          </div>
        </div>

        <div class="co-row">
          <div class="co-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.37 1.9.72 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.35 1.85.59 2.81.72A2 2 0 0122 16.92z"/></svg></div>
          <div class="co-row-content">
            <div class="co-row-l">Telephone</div>
            <div class="co-row-v"><a href="tel:+966112111026">+966 (11) 211 1026</a></div>
            <div class="co-row-sub">Showroom direct line · Sat–Thu, 10 AM – 10 PM</div>
          </div>
        </div>

        <div class="co-row">
          <div class="co-row-icon"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg></div>
          <div class="co-row-content">
            <div class="co-row-l">WhatsApp</div>
            <div class="co-row-v"><a href="https://wa.me/966112111026" target="_blank" rel="noopener">+966 11 211 1026</a></div>
            <div class="co-row-sub">Fastest reply · Replied within the hour during showroom hours</div>
          </div>
        </div>

        <div class="co-row">
          <div class="co-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
          <div class="co-row-content">
            <div class="co-row-l">Email</div>
            <div class="co-row-v"><a href="mailto:info@bloom-fashions.com">info@bloom-fashions.com</a></div>
            <div class="co-row-sub">General enquiries · Press · Designer requests</div>
          </div>
        </div>

        <div class="co-row">
          <div class="co-row-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg></div>
          <div class="co-row-content">
            <div class="co-row-l">Showroom Hours</div>
            <div class="co-row-v">Saturday – Thursday · 10 AM – 10 PM</div>
            <div class="co-row-sub">Closed Fridays · Private appointments outside hours by request</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right — Form -->
    <form class="co-form rv" onsubmit="event.preventDefault();submitForm();" aria-label="Contact form">
      <div class="co-form-eye">Send a message</div>
      <h3 class="co-form-h">Or, leave us a <em>note</em>.</h3>
      <p class="co-form-p">Tell us what occasion you're dressing for. We'll write back with options, ideas, and an invitation to come in.</p>

      <div class="co-form-fields">
        <div class="co-field">
          <label for="cfName">Your name</label>
          <input id="cfName" name="name" type="text" required autocomplete="name">
        </div>
        <div class="co-field">
          <label for="cfEmail">Email address</label>
          <input id="cfEmail" name="email" type="email" required autocomplete="email">
        </div>
        <div class="co-field">
          <label for="cfPhone">Phone (optional)</label>
          <input id="cfPhone" name="phone" type="tel" autocomplete="tel">
        </div>
        <div class="co-field">
          <label for="cfReason">What can we help with?</label>
          <select id="cfReason" name="reason">
            <option>Private viewing appointment</option>
            <option>Sourcing a specific designer</option>
            <option>Bridal consultation</option>
            <option>Alterations enquiry</option>
            <option>Press / collaboration</option>
            <option>Other</option>
          </select>
        </div>
        <div class="co-field">
          <label for="cfMsg">Your message</label>
          <textarea id="cfMsg" name="message" rows="4" placeholder="Tell us about the occasion, the silhouette you have in mind, or the designer you're looking for…"></textarea>
        </div>
      </div>

      <div class="co-form-actions">
        <button type="submit" class="btn-gold"><span>Send message</span><span class="arrow">→</span></button>
        <p class="co-form-note">We typically respond within 24 hours · Sat–Thu</p>
      </div>
    </form>
  </div>
</section>

<!-- MAP -->
<section class="co-map-section" aria-labelledby="mapHead">
  <div class="co-map-head rv">
    <div class="co-map-eye">The Location</div>
    <h2 class="co-map-h" id="mapHead">Kingdom Mall, <em>Floor 2</em>.</h2>
  </div>
  <div class="co-map-wrap">
    <div class="co-map-pin">
      <div class="co-map-pin-l">BLOOM Couture</div>
      <div class="co-map-pin-n">Kingdom Mall · Floor 2</div>
      <div class="co-map-pin-a">King Fahd Road, Al Olaya<br>Riyadh, Saudi Arabia</div>
    </div>
    <iframe
      src="https://www.google.com/maps?q=Kingdom+Centre,+Riyadh,+Saudi+Arabia&output=embed"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      title="Map to BLOOM at Kingdom Mall, Riyadh"></iframe>
  </div>
</section>

<!-- QUICK CONNECT STRIP -->
<section class="co-strip">
  <div class="co-strip-card rv rv-d1">
    <div class="co-strip-icon"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg></div>
    <h3 class="co-strip-h">Fastest reply</h3>
    <p class="co-strip-p">WhatsApp our showroom directly — typical reply within the hour.</p>
  </div>
  <div class="co-strip-card rv rv-d2">
    <div class="co-strip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></div>
    <h3 class="co-strip-h">Book in advance</h3>
    <p class="co-strip-p">Private appointments are ideal for evening gowns and bridal — we hold the suite for you.</p>
  </div>
  <div class="co-strip-card rv rv-d3">
    <div class="co-strip-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg></div>
    <h3 class="co-strip-h">Just walk in</h3>
    <p class="co-strip-p">Sat–Thu, 10 AM – 10 PM. No appointment needed for browsing or first visits.</p>
  </div>
</section>

</main>

<footer class="footer">
  <div class="ft-top">
    <div class="ft-brand">
      <div class="ft-logo">B L O O M</div>
      <div class="ft-logo-rule"></div>
      <p class="ft-tagline">Where elegance blooms — since 2010.</p>
      <address class="ft-addr"><strong>Kingdom Mall, Floor 2</strong>King Fahd Road, Al Olaya<br>Riyadh, Saudi Arabia<br><br>+966 (11) 211 1026<br>info@bloom-fashions.com</address>
    </div>
    <div><div class="ft-col-title">Collection</div><a href="<?php echo esc_url( home_url("/shop/") ); ?>" class="ft-link">Shop — All Pieces</a>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#evening" class="ft-link">Evening Dresses</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#dresses" class="ft-link">Dresses</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#new" class="ft-link">New Arrivals</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#blouses" class="ft-link">Blouses</a><a href="<?php echo esc_url( home_url("/collection/") ); ?>#accessories" class="ft-link">Accessories</a></div>
    <div><div class="ft-col-title">House</div><a href="<?php echo esc_url( home_url("/about/") ); ?>" class="ft-link">Our Heritage</a><a href="<?php echo esc_url( home_url("/designers/") ); ?>" class="ft-link">The Designers</a><a href="<?php echo esc_url( home_url("/lookbook/") ); ?>" class="ft-link">Lookbook SS26</a><a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="ft-link">Blog</a><a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="ft-link">Contact</a></div>
    <div><div class="ft-col-title">Connect</div><a href="#" class="ft-link">WhatsApp</a><a href="#" class="ft-link">Instagram</a><a href="#" class="ft-link">Snapchat</a><a href="#" class="ft-link">TikTok</a></div>
  </div>
  <div class="ft-bot"><span>© 2026 BLOOM Fashion Boutique · CR: XXXXXXXXXX · VAT: XXXXXXXXXXXXXXX</span><div class="ft-social"><a href="#">Instagram</a><a href="#">Snapchat</a><a href="#">TikTok</a></div><span>bloom-fashions.com</span></div>
</footer>

<script>
function hidePreloader(){const p=document.getElementById('preloader');if(p)p.classList.add('done');}
document.addEventListener('DOMContentLoaded',()=>setTimeout(hidePreloader,1600));
window.addEventListener('load',()=>setTimeout(hidePreloader,200));
setTimeout(hidePreloader,3000);

const cD=document.getElementById('curD'),cR=document.getElementById('curR');
let mx=0,my=0,cx=0,cy=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);}aCur();
document.querySelectorAll('a,button,.co-row,.co-strip-card,input,textarea,select').forEach(el=>{el.addEventListener('mouseenter',()=>cR.classList.add('hov'));el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));});
document.querySelectorAll('.ph-hero-img').forEach(el=>{el.addEventListener('mouseenter',()=>{cR.classList.add('img');cD.classList.add('hide');});el.addEventListener('mouseleave',()=>{cR.classList.remove('img');cD.classList.remove('hide');});});

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
const heroCt=document.querySelector('.ph-hero-ct');
window.addEventListener('scroll',()=>{const r=phHero.getBoundingClientRect();if(r.bottom>0){const p=Math.max(0,Math.min(1,-r.top/r.height));heroCt.style.transform=`translateY(${p*50}px)`;heroCt.style.opacity=String(1-p*.8);}},{passive:true});

/* Form submit */
function submitForm(){
  const name=document.getElementById('cfName').value.trim();
  if(!name)return;
  showToast('Thank you, '+name.split(' ')[0]+'. We will be in touch.');
  document.querySelectorAll('.co-form input, .co-form textarea').forEach(f=>f.value='');
}

/* Magnetic CTAs */
function attachMagnet(sel,strength=.28){document.querySelectorAll(sel).forEach(el=>{el.addEventListener('mousemove',e=>{const r=el.getBoundingClientRect();const cx=r.left+r.width/2,cy=r.top+r.height/2;el.style.transform=`translate(${(e.clientX-cx)*strength}px,${(e.clientY-cy)*strength}px)`;});el.addEventListener('mouseleave',()=>{el.style.transform='';});});}
attachMagnet('.btn-gold,.btn-noir',.28);
attachMagnet('.n-icon-btn',.4);

/* Ripple */
document.addEventListener('click',e=>{const t=e.target.closest('.btn-gold,.btn-noir,.btn-outline,.btn-ghost');if(!t)return;const r=t.getBoundingClientRect();const rip=document.createElement('span');rip.className='ripple';const size=Math.max(r.width,r.height);rip.style.width=rip.style.height=size+'px';rip.style.left=(e.clientX-r.left-size/2)+'px';rip.style.top=(e.clientY-r.top-size/2)+'px';t.appendChild(rip);setTimeout(()=>rip.remove(),900);});
</script>

<?php get_footer(); ?>
