<?php
/**
 * Template — Blog
 * Auto-detected for the "blog" page slug.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>


<div class="scroll-progress" id="scrollProgress"></div>
<div class="preloader" id="preloader"><div class="pl-logo">B L O O M</div><div class="pl-line"></div><div class="pl-sub">The Journal</div><div class="pl-prog"></div></div>
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="wa-float" id="waFloat" aria-label="WhatsApp stylist">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
</a>

<div class="mob-menu" id="mobMenu">
  <button class="mob-close" id="mobClose" aria-label="Close menu">✕</button>
    <a href="<?php echo esc_url( home_url("/shop/") ); ?>">Shop</a>
</div>

<div class="whisper"><span class="whisper-track"><span>GCC-wide delivery</span><span class="dot">✦</span><span>Kingdom Mall, Riyadh</span><span class="dot">✦</span><span>Complimentary tailoring with every purchase</span><span class="dot">✦</span><span>Complimentary styling consultation</span><span class="dot">✦</span><span>Spring / Summer 2026</span></span></div>

<nav class="nav on-dark" id="mainNav" aria-label="Primary">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="n-link">Collection</a>
  </div>
  <a href="<?php echo esc_url( home_url("/") ); ?>" class="n-logo" aria-label="BLOOM home">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url("/about/") ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="n-link n-right-link" aria-current="page">Blog</a>
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
  <div class="ph-hero-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf069.jpg');" role="img" aria-label="The Bloom Journal"></div>
  <div class="ph-hero-grad"></div>
  <div class="ph-hero-ct">
    <nav class="ph-crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url("/") ); ?>">Home</a><span class="sep">/</span><span>The Journal</span></nav>
    <div class="ph-eyebrow">Notes from the Atelier</div>
    <h1 class="ph-title" id="phTitle"><span class="bl-mask"><span>The </span></span><span class="bl-mask"><span><em>Journal</em>.</span></span></h1>
    <p class="ph-sub" id="phSub">Stylist notes, designer profiles, and seasonal guides — written with the same restraint we bring to the showroom.</p>
  </div>
</section>

<!-- ITALIC TAPE -->
<div class="bl-tape" aria-hidden="true">
  <div class="bl-tape-track">
    <span class="bl-tape-item">Notes from the atelier</span>
    <span class="bl-tape-item">Designer stories</span>
    <span class="bl-tape-item">Seasonal guides</span>
    <span class="bl-tape-item">Stylist notes</span>
    <span class="bl-tape-item">Editorial</span>
    <span class="bl-tape-item">Notes from the atelier</span>
    <span class="bl-tape-item">Designer stories</span>
    <span class="bl-tape-item">Seasonal guides</span>
    <span class="bl-tape-item">Stylist notes</span>
    <span class="bl-tape-item">Editorial</span>
  </div>
</div>

<?php
/* Fetch latest WP posts dynamically */
$featured = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>1 ) );
$grid_posts = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>9, 'offset'=>1 ) );
$blog_cats = get_categories( array( 'hide_empty'=>true ) );
?>

<!-- FEATURED ARTICLE -->
<?php if ( $featured->have_posts() ) : $featured->the_post();
  $f_thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
  if ( ! $f_thumb ) $f_thumb = get_post_meta( get_the_ID(), '_bloom_post_image', true ); $f_thumb = bloom_normalize_image_url( $f_thumb );
  if ( ! $f_thumb ) $f_thumb = '<?php echo get_template_directory_uri(); ?>/assets/img/bf052.jpg';
  $f_cats = get_the_category();
  $f_cat = $f_cats ? $f_cats[0]->name : 'Editorial';
?>
<section class="bl-feat">
  <a href="<?php the_permalink(); ?>" class="bl-feat-card rv">
    <div class="bl-feat-img">
      <div class="bl-feat-img-bg" style="background-image:url('<?php echo esc_url( $f_thumb ); ?>');"></div>
      <span class="bl-feat-badge">Featured</span>
      <div class="bl-feat-frame"></div>
    </div>
    <div>
      <div class="bl-feat-meta"><?php echo esc_html( $f_cat ); ?><span class="sep">·</span><?php echo esc_html( get_the_date( 'F Y' ) ); ?><span class="sep">·</span><?php echo (int) max(1,round( str_word_count(wp_strip_all_tags(get_the_content()))/220 )); ?> min read</div>
      <h2 class="bl-feat-h"><?php the_title(); ?></h2>
      <p class="bl-feat-p"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 38, '…' ) ); ?></p>
      <span class="bl-feat-cta">Read essay →</span>
    </div>
  </a>
</section>
<?php wp_reset_postdata(); endif; ?>

<!-- FILTERS -->
<?php if ( $blog_cats ) : ?>
<div class="bl-filters" role="tablist" aria-label="Filter articles">
  <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="bl-filter active">All</a>
  <?php foreach ( $blog_cats as $c ) : ?>
    <a href="<?php echo esc_url( get_category_link( $c->term_id ) ); ?>" class="bl-filter"><?php echo esc_html( $c->name ); ?></a>
  <?php endforeach; ?>
</div>
<?php endif; ?>

<!-- ARTICLES GRID -->
<section class="bl-grid-section" aria-label="Journal articles">
  <div class="bl-grid" id="blGrid">
    <?php if ( $grid_posts->have_posts() ) :
      while ( $grid_posts->have_posts() ) : $grid_posts->the_post();
        $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        if ( ! $thumb ) $thumb = get_post_meta( get_the_ID(), '_bloom_post_image', true ); $thumb = bloom_normalize_image_url( $thumb );
        if ( ! $thumb ) $thumb = '<?php echo get_template_directory_uri(); ?>/assets/img/bf053.jpg';
        $cats = get_the_category();
        $cat = $cats ? $cats[0]->name : 'Editorial';
    ?>
      <a class="bl-card rv" href="<?php the_permalink(); ?>">
        <div class="bl-card-img">
          <div class="bl-card-img-bg" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div>
          <span class="bl-card-cat"><?php echo esc_html( $cat ); ?></span>
          <div class="bl-card-frame"></div>
        </div>
        <div class="bl-card-meta"><?php echo esc_html( get_the_date( 'F Y' ) ); ?><span class="sep">·</span><?php echo (int) max(1,round( str_word_count(wp_strip_all_tags(get_the_content()))/220 )); ?> min read</div>
        <h3 class="bl-card-h"><?php the_title(); ?></h3>
        <p class="bl-card-p"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28, '…' ) ); ?></p>
        <span class="bl-card-cta">Read essay →</span>
      </a>
    <?php endwhile; wp_reset_postdata(); else : ?>
      <div style="grid-column:1/-1;text-align:center;padding:60px 20px;color:var(--txt-gray);">
        <div style="font-family:'Fraunces',serif;font-style:italic;font-size:32px;color:var(--gold);margin-bottom:14px;">No posts yet.</div>
        <p style="font-size:15px;max-width:480px;margin:0 auto 20px;">Publish your first blog post from <strong>Posts → Add New</strong> in the WordPress admin.</p>
        <a href="<?php echo esc_url( admin_url('post-new.php') ); ?>" class="btn-gold"><span>Write a post</span><span class="arrow">→</span></a>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="news">
  <div class="news-in rv">
    <h3 class="news-h">The Journal, delivered.</h3>
    <p class="news-p">New essays, designer profiles, and seasonal stylist notes — straight to your inbox. Twice a month, never more.</p>
    <form class="news-form" onsubmit="event.preventDefault();subscribeNews();">
      <input type="email" class="news-input" id="newsEmail" placeholder="Your email address" required aria-label="Email">
      <button type="submit" class="news-btn">Subscribe <span>→</span></button>
    </form>
    <p class="news-note">No spam. Unsubscribe anytime.</p>
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
/* Articles data */
const ARTICLES=[
  {cat:'designer',catLabel:'Designer Story',title:"Inside Zuhair Murad's Beirut atelier — a quiet revolution in tulle.",excerpt:'A private visit to the Spring 2026 collection, and a conversation about the discipline of restraint in modern couture.',date:'February 2026',read:'8 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf054.jpg'},
  {cat:'style',catLabel:'Style Guide',title:'Beyond black tie — the new vocabulary of the wedding guest.',excerpt:'How to dress for the three-day celebrations that define a Saudi spring — from the welcome dinner to the henna to the wedding itself.',date:'January 2026',read:'4 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf055.jpg'},
  {cat:'designer',catLabel:'Designer Story',title:"Elie Saab Spring 2026 — what the runway didn't show you.",excerpt:'A reflection on the unseen seven pieces from Saab\'s Paris show that will live, quietly, on our racks first.',date:'February 2026',read:'6 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf056.jpg'},
  {cat:'editorial',catLabel:'Editorial',title:'The five designers every Riyadh wardrobe needs.',excerpt:'Our stylist team on the houses that have earned a permanent place in the modern Kingdom wardrobe — and why.',date:'December 2025',read:'7 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf057.jpg'},
  {cat:'atelier',catLabel:'Atelier Note',title:'On alterations — why we never let a gown leave imperfect.',excerpt:'A behind-the-scenes look at the in-house seamstress team, and the seventy-two hours that turn a gown into your gown.',date:'January 2026',read:'3 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf058.jpg'},
  {cat:'style',catLabel:'Style Guide',title:'Dressing for the desert evening — fabrics, layers, and the case for silk.',excerpt:'A practical guide to the spring temperature swings that catch every wedding guest off guard.',date:'November 2025',read:'5 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf059.jpg'},
  {cat:'editorial',catLabel:'Editorial',title:'The quiet revolution in modern tulle.',excerpt:'Why the houses we love are returning to the most fragile fabric in fashion — and what that says about the next five years of couture.',date:'October 2025',read:'9 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf060.jpg'},
  {cat:'designer',catLabel:'Designer Story',title:'Reem Acra on the bridal gown as a private love letter.',excerpt:'A conversation with the New York designer on why the most personal gowns are the ones that almost nobody sees.',date:'September 2025',read:'6 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf061.jpg'},
  {cat:'atelier',catLabel:'Atelier Note',title:'A Saturday at BLOOM — the rhythm of the showroom.',excerpt:'From the first coffee at 9:45 to the last fitting at 9:30 PM — what an unrushed day inside Kingdom Mall, Floor 2 actually looks like.',date:'November 2025',read:'4 min read',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf062.jpg'},
];

const blGrid=document.getElementById('blGrid');
function renderArticles(filter='all'){
  const items=filter==='all'?ARTICLES:ARTICLES.filter(a=>a.cat===filter);
  blGrid.innerHTML=items.map((a,i)=>`
    <article class="bl-card rv rv-d${(i%3)+1}" data-cat="${a.cat}">
      <div class="bl-card-img">
        <div class="bl-card-img-bg" style="background-image:url('${a.img}');"></div>
        <span class="bl-card-cat">${a.catLabel}</span>
        <div class="bl-card-frame"></div>
      </div>
      <div class="bl-card-meta">${a.date}<span class="sep">·</span>${a.read}</div>
      <h3 class="bl-card-h">${a.title}</h3>
      <p class="bl-card-p">${a.excerpt}</p>
      <span class="bl-card-cta">Read essay →</span>
    </article>
  `).join('');
  document.querySelectorAll('#blGrid .rv').forEach(el=>rObs.observe(el));
  if(typeof enhanceArticles==='function')setTimeout(enhanceArticles,20);
}

/* Preloader — fade regardless of slow images */
function hidePreloader(){const p=document.getElementById('preloader');if(p)p.classList.add('done');}
document.addEventListener('DOMContentLoaded',()=>setTimeout(hidePreloader,1600));
window.addEventListener('load',()=>setTimeout(hidePreloader,200));
setTimeout(hidePreloader,3000);

/* Cursor */
const cD=document.getElementById('curD'),cR=document.getElementById('curR');
let mx=0,my=0,cx=0,cy=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);}aCur();
document.querySelectorAll('a,button,.bl-feat-card,.bl-feat-img').forEach(el=>{el.addEventListener('mouseenter',()=>cR.classList.add('hov'));el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));});
document.querySelectorAll('.bl-feat-img,.ph-hero-img').forEach(el=>{el.addEventListener('mouseenter',()=>{cR.classList.add('img');cD.classList.add('hide');});el.addEventListener('mouseleave',()=>{cR.classList.remove('img');cD.classList.remove('hide');});});

/* Nav */
const nav=document.getElementById('mainNav'),whisperEl=document.querySelector('.whisper'),phHero=document.getElementById('phHeroSection');
function uNav(){const s=window.scrollY,hb=phHero.offsetTop+phHero.offsetHeight-100;nav.classList.toggle('scrolled',s>40);nav.classList.toggle('on-dark',s<hb);if(whisperEl)whisperEl.classList.toggle('hide',s>40);}
window.addEventListener('scroll',uNav,{passive:true});uNav();

/* Reveal */
const rObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('vis');rObs.unobserve(en.target);}});},{threshold:.12,rootMargin:'0px 0px -50px 0px'});
document.querySelectorAll('.rv').forEach(el=>rObs.observe(el));

/* Scroll progress */
const scrollProg=document.getElementById('scrollProgress');
function updateProg(){const h=document.documentElement.scrollHeight-window.innerHeight;scrollProg.style.transform=`scaleX(${h>0?window.scrollY/h:0})`;}
window.addEventListener('scroll',updateProg,{passive:true});updateProg();

/* WA Float */
const waf=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waf.classList.toggle('show',window.scrollY>500);},{passive:true});

/* Mobile menu */
const burger=document.getElementById('burger'),mob=document.getElementById('mobMenu'),mobClose=document.getElementById('mobClose');
if(burger)burger.addEventListener('click',()=>mob.classList.add('open'));
if(mobClose)mobClose.addEventListener('click',()=>mob.classList.remove('open'));
mob.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mob.classList.remove('open')));

/* Lang */

/* Cart */
const cartBtn=document.getElementById('cartBtn'),cartOverlay=document.getElementById('cartOverlay'),cartDrawer=document.getElementById('cartDrawer'),cartClose=document.getElementById('cartClose'),atbToast=document.getElementById('atbToast'),atbText=document.getElementById('atbText');
function openCart(){cartOverlay.classList.add('open');cartDrawer.classList.add('open');document.body.style.overflow='hidden';}
function closeCart(){cartOverlay.classList.remove('open');cartDrawer.classList.remove('open');document.body.style.overflow='';}
function showToast(msg){atbText.textContent=msg;atbToast.classList.add('show');clearTimeout(window._tT);window._tT=setTimeout(()=>atbToast.classList.remove('show'),2600);}

/* Newsletter */
function subscribeNews(){const e=document.getElementById('newsEmail').value;if(e){showToast('Thank you. You\'re on the list.');document.getElementById('newsEmail').value='';}}

/* Hero parallax */
const heroImg=document.querySelector('.ph-hero-img');
window.addEventListener('scroll',()=>{const s=window.scrollY;if(s<window.innerHeight)heroImg.style.transform=`scale(1.04) translateY(${s*.22}px)`;},{passive:true});
const heroCt=document.querySelector('.ph-hero-ct');
window.addEventListener('scroll',()=>{const r=phHero.getBoundingClientRect();if(r.bottom>0){const p=Math.max(0,Math.min(1,-r.top/r.height));heroCt.style.transform=`translateY(${p*50}px)`;heroCt.style.opacity=String(1-p*.8);}},{passive:true});

/* Filter */
document.querySelectorAll('.bl-filter').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('.bl-filter').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    renderArticles(btn.dataset.filter);
  });
});

/* ═══ TITLE LETTER-MASK REVEAL ═══ */
setTimeout(()=>{
  document.querySelectorAll('.bl-mask').forEach((el,i)=>{
    el.style.transitionDelay=(i*100)+'ms';
    el.classList.add('vis');
  });
},2200);

/* ═══ SUBTITLE PER-WORD REVEAL ═══ */
const phSub=document.getElementById('phSub');
if(phSub){
  const orig=phSub.innerHTML;
  phSub.innerHTML=orig.split(' ').map((w,i)=>`<span class="bl-word" style="transition-delay:${2700+i*40}ms">${w}</span>`).join(' ');
  setTimeout(()=>phSub.querySelectorAll('.bl-word').forEach(w=>w.classList.add('vis')),100);
}

/* ═══ 3D TILT ON ARTICLE CARDS ═══ */
function attachTilt(sel,intensity=4){
  document.querySelectorAll(sel).forEach(el=>{
    if(el.dataset.tiltBound)return;
    el.dataset.tiltBound='1';
    el.addEventListener('mousemove',e=>{
      const r=el.getBoundingClientRect();
      const dx=(e.clientX-r.left)/r.width-.5,dy=(e.clientY-r.top)/r.height-.5;
      el.style.transform=`perspective(1200px) rotateX(${-dy*intensity}deg) rotateY(${dx*intensity}deg) translateY(-6px)`;
    });
    el.addEventListener('mouseleave',()=>{el.style.transform='';});
  });
}

/* ═══ IMAGE CLIP-PATH ENTRANCE ═══ */
const clipObs=new IntersectionObserver(e=>{
  e.forEach(en=>{
    if(en.isIntersecting){en.target.classList.add('vis');clipObs.unobserve(en.target);}
  });
},{threshold:.2});

/* ═══ FEATURED IMAGE PARALLAX ═══ */
function parallaxFeatured(){
  const fImg=document.querySelector('.bl-feat-img-bg');
  const fWrap=document.querySelector('.bl-feat-img');
  if(!fImg||!fWrap)return;
  const r=fWrap.getBoundingClientRect();
  const vh=window.innerHeight;
  if(r.bottom<0||r.top>vh)return;
  const mid=r.top+r.height/2;
  const off=(vh/2-mid)*.12;
  fImg.style.transform=`translate3d(0,${off}px,0)`;
}
let pfTicking=false;
window.addEventListener('scroll',()=>{
  if(!pfTicking){requestAnimationFrame(()=>{parallaxFeatured();pfTicking=false;});pfTicking=true;}
},{passive:true});

/* ═══ CURSOR "READ" STATE OVER ARTICLE CARDS ═══ */
function bindReadCursor(){
  document.querySelectorAll('.bl-card,.bl-feat-card,.bl-feat-img').forEach(el=>{
    if(el.dataset.readBound)return;
    el.dataset.readBound='1';
    el.addEventListener('mouseenter',()=>{cR.classList.add('read');cD.classList.add('hide');});
    el.addEventListener('mouseleave',()=>{cR.classList.remove('read');cD.classList.remove('hide');});
  });
}

/* ═══ ENHANCE AFTER RENDER ═══ */
function enhanceArticles(){
  attachTilt('.bl-card',4);
  bindReadCursor();
}

/* Magnetic */
function attachMagnet(sel,strength=.3){document.querySelectorAll(sel).forEach(el=>{el.addEventListener('mousemove',e=>{const r=el.getBoundingClientRect();const cx=r.left+r.width/2,cy=r.top+r.height/2;el.style.transform=`translate(${(e.clientX-cx)*strength}px,${(e.clientY-cy)*strength}px)`;});el.addEventListener('mouseleave',()=>{el.style.transform='';});});}
attachMagnet('.btn-gold,.btn-noir',.28);
attachMagnet('.n-icon-btn',.4);

/* Ripple */
document.addEventListener('click',e=>{const t=e.target.closest('.btn-gold,.btn-noir,.btn-outline,.btn-ghost');if(!t)return;const r=t.getBoundingClientRect();const rip=document.createElement('span');rip.className='ripple';const size=Math.max(r.width,r.height);rip.style.width=rip.style.height=size+'px';rip.style.left=(e.clientX-r.left-size/2)+'px';rip.style.top=(e.clientY-r.top-size/2)+'px';t.appendChild(rip);setTimeout(()=>rip.remove(),900);});

/* Server now renders the article grid — just bind reveal observer */
if(window.rObs){document.querySelectorAll('#blGrid .rv').forEach(el=>rObs.observe(el));}
</script>

<?php get_footer(); ?>
