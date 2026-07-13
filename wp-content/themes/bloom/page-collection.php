<?php
/**
 * Template — Collection
 * Auto-detected for the "collection" page slug.
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
  <div class="pl-sub">The Collection</div>
  <div class="pl-prog"></div>
</div>

<!-- Custom Cursor -->
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<!-- WhatsApp Float -->
<a href="https://wa.me/966112111026" target="_blank" class="wa-float" id="waFloat">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a8 8 0 01-4.243-1.212l-.293-.175-3.041.797.812-2.966-.192-.304A7.963 7.963 0 014 12a8 8 0 1116 0 8 8 0 01-8 8z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
</a>

<!-- Mobile Menu -->
<div class="mob-menu" id="mobMenu">
  <button class="mob-close" id="mobClose">✕</button>
  <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
  <a href="<?php echo esc_url( home_url('/shop/') ); ?>">Shop</a>
  <a href="<?php echo esc_url( home_url('/collection/') ); ?>">Collection</a>
  <a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a>
  <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a>
  <a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a>
</div>

<!-- Whisper Bar -->
<div class="whisper">
  <span class="whisper-track">
    <span>GCC-wide delivery</span>
    <span class="dot">✦</span>
    <span>Kingdom Mall, Riyadh</span>
    <span class="dot">✦</span>
    <span>Complimentary tailoring with every purchase</span>
    <span class="dot">✦</span>
    <span>Complimentary styling consultation</span>
    <span class="dot">✦</span>
    <span>Spring / Summer 2026</span>
  </span>
</div>

<!-- Navigation -->
<nav class="nav on-dark" id="mainNav">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="n-link" aria-current="page">Collection</a>
  </div>
  <a href="<?php echo esc_url( home_url("/") ); ?>" class="n-logo">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url("/about/") ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="n-link n-right-link">Contact</a>
    <a href="https://wa.me/966112111026" target="_blank" class="n-icon-btn" title="WhatsApp a stylist" aria-label="WhatsApp stylist">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<!-- ═══ PAGE HERO ═══ -->
<section class="cp-hero" id="cpHeroSection">
  <div class="cp-hero-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf065.jpg');"></div>
  <div class="cp-hero-grad"></div>
  <div class="cp-hero-ct">
    <nav class="cp-crumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url("/") ); ?>">Home</a>
      <span class="sep">/</span>
      <span>The Collection</span>
    </nav>
    <div class="cp-eyebrow">Spring / Summer 2026</div>
    <h1 class="cp-title">The <em>Collection</em></h1>
    <p class="cp-sub">Two hundred and forty pieces, curated across seven categories — every silhouette chosen for the woman who knows the difference between a dress and an entrance.</p>
  </div>
</section>

<!-- ═══ STICKY CATEGORY TABS ═══ -->
<nav class="cp-tabs" id="cpTabs" aria-label="Categories">
  <a href="#evening" class="cp-tab" data-target="evening">Evening Dresses</a>
  <a href="#dresses" class="cp-tab" data-target="dresses">Dresses</a>
  <a href="#new" class="cp-tab" data-target="new">New Arrivals</a>
  <a href="#blouses" class="cp-tab" data-target="blouses">Blouses</a>
  <a href="#skirts" class="cp-tab" data-target="skirts">Skirts</a>
  <a href="#trousers" class="cp-tab" data-target="trousers">Trousers / Slacks</a>
  <a href="#accessories" class="cp-tab" data-target="accessories">Accessories</a>
</nav>

<!-- ═══ STATS STRIP ═══ -->
<section class="cp-stats">
  <div class="rv rv-d1">
    <div class="cp-stat-n" data-count="240"><span>+</span></div>
    <div class="cp-stat-l">Pieces in collection</div>
  </div>
  <div class="rv rv-d2">
    <div class="cp-stat-n" data-count="7"></div>
    <div class="cp-stat-l">Curated categories</div>
  </div>
  <div class="rv rv-d3">
    <div class="cp-stat-n" data-count="50"><span>+</span></div>
    <div class="cp-stat-l">International designers</div>
  </div>
  <div class="rv rv-d4">
    <div class="cp-stat-n" data-count="16"><span>+</span></div>
    <div class="cp-stat-l">Years of curation</div>
  </div>
</section>

<!-- ═══ BIG EDITORIAL BENTO ═══ -->
<section class="cp-bento-section" id="cpBento">
  <div class="cp-bento-head rv">
    <div class="cp-bento-eyebrow">Shop the Collection</div>
    <h2 class="cp-bento-title">Seven categories.<br>One <em>singular</em> standard.</h2>
    <p class="cp-bento-sub">From the gown that closes the evening to the blouse that opens the morning — every piece in our collection passes through the eye of a stylist before it earns its place.</p>
  </div>

  <div class="cp-bento">
    <!-- Evening Dresses — Featured -->
    <a href="<?php echo esc_url( home_url("/collection/evening-dresses/") ); ?>" id="evening" class="cp-cat featured ev rv rv-d1">
      <div class="cp-cat-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf073.jpg');"></div>
      <div class="cp-cat-ov"></div>
      <div class="cp-cat-frame"></div>
      <span class="cp-cat-num">01 / 07</span>
      <div class="cp-cat-ct">
        <span class="cp-cat-tag">Signature Category · 64 pieces</span>
        <h3 class="cp-cat-name"><em>Evening</em> Dresses</h3>
        <p class="cp-cat-desc">Floor-length silhouettes for galas, formal dinners, and the moments captured in memory. Elie Saab, Zuhair Murad, Reem Acra & more.</p>
        <span class="cp-cat-arrow">Explore Evening →</span>
      </div>
    </a>

    <!-- Dresses -->
    <a href="<?php echo esc_url( home_url("/collection/dresses/") ); ?>" id="dresses" class="cp-cat dr rv rv-d2">
      <div class="cp-cat-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf078.jpg');"></div>
      <div class="cp-cat-ov"></div>
      <div class="cp-cat-frame"></div>
      <span class="cp-cat-num">02 / 07</span>
      <div class="cp-cat-ct">
        <span class="cp-cat-tag">52 pieces</span>
        <h3 class="cp-cat-name">Dresses</h3>
        <p class="cp-cat-desc">Day, brunch, and afternoon silhouettes.</p>
        <span class="cp-cat-arrow">Explore →</span>
      </div>
    </a>

    <!-- New Arrivals -->
    <a href="<?php echo esc_url( home_url("/collection/new-arrivals/") ); ?>" id="new" class="cp-cat na rv rv-d3">
      <div class="cp-cat-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf079.jpg');"></div>
      <div class="cp-cat-ov"></div>
      <div class="cp-cat-frame"></div>
      <span class="cp-cat-num">03 / 07</span>
      <div class="cp-cat-ct">
        <span class="cp-cat-tag">New Season · 28 pieces</span>
        <h3 class="cp-cat-name">New Arrivals</h3>
        <p class="cp-cat-desc">Just landed — SS26.</p>
        <span class="cp-cat-arrow">Discover →</span>
      </div>
    </a>

    <!-- Blouses -->
    <a href="<?php echo esc_url( home_url("/collection/blouses/") ); ?>" id="blouses" class="cp-cat bl rv rv-d2">
      <div class="cp-cat-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf030.jpg');"></div>
      <div class="cp-cat-ov"></div>
      <div class="cp-cat-frame"></div>
      <span class="cp-cat-num">04 / 07</span>
      <div class="cp-cat-ct">
        <span class="cp-cat-tag">36 pieces</span>
        <h3 class="cp-cat-name">Blouses</h3>
        <p class="cp-cat-desc">Silk, crepe, and structured tailoring.</p>
        <span class="cp-cat-arrow">Explore →</span>
      </div>
    </a>

    <!-- Skirts -->
    <a href="<?php echo esc_url( home_url("/collection/skirts/") ); ?>" id="skirts" class="cp-cat sk rv rv-d3">
      <div class="cp-cat-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf076.jpg');"></div>
      <div class="cp-cat-ov"></div>
      <div class="cp-cat-frame"></div>
      <span class="cp-cat-num">05 / 07</span>
      <div class="cp-cat-ct">
        <span class="cp-cat-tag">22 pieces</span>
        <h3 class="cp-cat-name">Skirts</h3>
        <p class="cp-cat-desc">Pleated, bias-cut, and statement midi lengths.</p>
        <span class="cp-cat-arrow">Explore →</span>
      </div>
    </a>

    <!-- Trousers / Slacks -->
    <a href="<?php echo esc_url( home_url("/collection/trousers-slacks/") ); ?>" id="trousers" class="cp-cat tr rv rv-d4">
      <div class="cp-cat-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf077.jpg');"></div>
      <div class="cp-cat-ov"></div>
      <div class="cp-cat-frame"></div>
      <span class="cp-cat-num">06 / 07</span>
      <div class="cp-cat-ct">
        <span class="cp-cat-tag">18 pieces</span>
        <h3 class="cp-cat-name">Trousers / Slacks</h3>
        <p class="cp-cat-desc">Tailored, wide-leg, and statement silhouettes.</p>
        <span class="cp-cat-arrow">Explore →</span>
      </div>
    </a>

    <!-- Accessories — Wide banner -->
    <a href="<?php echo esc_url( home_url("/collection/accessories/") ); ?>" id="accessories" class="cp-cat ac rv rv-d4">
      <div class="cp-cat-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf080.jpg');background-position:center 60%;"></div>
      <div class="cp-cat-ov"></div>
      <div class="cp-cat-frame"></div>
      <span class="cp-cat-num">07 / 07</span>
      <div class="cp-cat-ct">
        <div>
          <span class="cp-cat-tag">20 pieces · Curated edit</span>
          <h3 class="cp-cat-name">Accessories</h3>
          <p class="cp-cat-desc">Clutches, statement jewellery, evening minaudières — the finishing notes that complete a look.</p>
        </div>
        <span class="cp-cat-arrow">Explore Accessories →</span>
      </div>
    </a>
  </div>
</section>

<!-- ═══ EDITORIAL STATEMENT ═══ -->
<section class="cp-statement rv">
  <p class="cp-statement-q">A wardrobe is not assembled — it is <em>composed</em>. Every category in our collection is a different note in the same <em>song</em>.</p>
  <div class="cp-statement-rule"></div>
  <p class="cp-statement-src">The Bloom Atelier</p>
</section>

<!-- ═══ FEATURED THIS SEASON ═══ -->
<section class="cp-featured" id="cpFeatured">
  <div class="cp-featured-head rv">
    <div class="sec-eyebrow lt" style="justify-content:center;">Featured This Season</div>
    <h2 class="sec-title lt">Highlights from <em>SS26</em>.</h2>
  </div>
  <div class="prod-grid" id="prodGrid">
    <!-- products injected by JS -->
  </div>
</section>

<!-- ═══ DESIGNER STRIP ═══ -->
<section class="cp-des-strip rv">
  <div class="cp-des-strip-l">Eight Maisons</div>
  <h3 class="cp-des-strip-h">Every piece in this collection is the work of a designer we know by name — and often, personally.</h3>
  <a href="<?php echo esc_url( home_url("/") ); ?>#designers" class="cp-des-strip-cta">Explore by maison →</a>
</section>

<!-- ═══ CONSULTATION CTA ═══ -->
<section class="consult" id="consult">
  <div class="consult-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf032.jpg');"></div>
  <div class="consult-grad"></div>
  <div class="consult-in rv">
    <div class="con-icon">✦</div>
    <h2 class="con-heading">Your private viewing <em>awaits</em>.</h2>
    <p class="con-sub">Experience BLOOM the way it was meant to be experienced — personally. Our stylists are ready to curate a selection from across all seven categories for your occasion.</p>
    <div class="con-btns">
      <a href="https://wa.me/966112111026" target="_blank" class="btn-gold">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
        <span>Speak to a Stylist</span>
      </a>
      <a href="#" class="btn-noir"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg><span>Book Private Viewing</span></a>
    </div>
    <p class="con-note">Saturday–Thursday · 10 AM – 10 PM · Kingdom Mall, Floor 2 · Complimentary delivery across all GCC countries</p>
  </div>
</section>

<!-- ═══ NEWSLETTER ═══ -->
<section class="news">
  <div class="news-in rv">
    <h3 class="news-h">First in line for the next collection.</h3>
    <p class="news-p">Private previews, designer trunk shows, and stylist notes — delivered with restraint, never more than once a fortnight.</p>
    <form class="news-form" onsubmit="event.preventDefault();subscribeNews();">
      <input type="email" class="news-input" id="newsEmail" placeholder="Your email address" required>
      <button type="submit" class="news-btn">Subscribe <span>→</span></button>
    </form>
    <p class="news-note">No spam. Unsubscribe anytime.</p>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer class="footer">
  <div class="ft-top">
    <div class="ft-brand">
      <div class="ft-logo">B L O O M</div>
      <div class="ft-logo-rule"></div>
      <p class="ft-tagline">Where elegance blooms — since 2010.</p>
      <div class="ft-addr">
        <strong>Kingdom Mall, Floor 2</strong>
        King Fahd Road, Al Olaya<br>Riyadh, Saudi Arabia<br>
        <br>+966 (11) 211 1026<br>bloom1.ksa@gmail.com
      </div>
    </div>
    <div>
      <div class="ft-col-title">Collection</div>
      <a href="<?php echo esc_url( home_url("/shop/") ); ?>" class="ft-link">Shop — All Pieces</a>
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
      <a href="<?php echo esc_url( home_url("/") ); ?>#heritage" class="ft-link">Our Heritage</a>
      <a href="<?php echo esc_url( home_url("/lookbook/") ); ?>" class="ft-link">Lookbook SS26</a>
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
    <span>© 2026 BLOOM Fashion Boutique · CR: 1010245766 · VAT: 301337273200003</span>
    <div class="ft-social">
      <a href="#">Instagram</a>
      <a href="#">Snapchat</a>
      <a href="#">TikTok</a>
    </div>
    <span>bloom-fashions.com</span>
  </div>
</footer>
<?php $GLOBALS["bloom_footer_rendered"] = true; ?>

<script>
/* ═══ FEATURED PRODUCTS (a curated subset across categories) ═══ */
const PRODUCTS=[
  {designer:'Elie Saab',name:'Embroidered Tulle Cape Gown',price:5195,occasion:'Evening',badge:'Riyadh Exclusive',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf033.jpg',size:'Size 38'},
  {designer:'Zuhair Murad',name:'Silk Organza Column Dress',price:4295,occasion:'Evening',badge:'Limited Piece',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf034.jpg',size:'Size 40'},
  {designer:'Saiid Kobeisy',name:'Metallic Jacquard Midi',price:4995,occasion:'Wedding Guest',badge:'New Arrival',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf035.jpg',size:'Size 38'},
  {designer:'Tony Ward',name:'Silk Charmeuse Bias Gown',price:6495,occasion:'Evening',badge:'Couture',img:'<?php echo get_template_directory_uri(); ?>/assets/img/bf036.jpg',size:'Size 38'},
];

const prodGrid=document.getElementById('prodGrid');
const PRODUCT_BASE='<?php echo esc_url( home_url('/product/') ); ?>';
function escapeHtml(s){return String(s).replace(/'/g,"\\'");}
function slugify(s){return String(s).toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/^-+|-+$/g,'');}
function renderProducts(){
  prodGrid.innerHTML=PRODUCTS.map((p,i)=>{
    const link = PRODUCT_BASE + slugify(p.name) + '/';
    return `
    <div class="p-card rv rv-d${(i%4)+1}">
      <div class="p-img">
        <div class="p-img-bg" style="background-image:url('${p.img}');"></div>
        <a href="${link}" class="p-img-link" aria-label="View ${p.name}"></a>
        <span class="p-badge">${p.badge}</span>
        <button class="p-wish" title="Save"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></button>
        <div class="p-hover">
          <a href="https://wa.me/966112111026?text=${encodeURIComponent('Hello, I would like to inquire about the '+p.name+' by '+p.designer)}" target="_blank" class="p-hover-btn p-add-bag">Inquire on WhatsApp</a>
          <a href="${link}" class="p-hover-btn p-inquire">View Details</a>
        </div>
      </div>
      <div class="p-name">${p.name}</div>
      <div class="p-meta"><span class="p-price">SAR ${p.price.toLocaleString()}</span><span class="p-occ">${p.occasion}</span></div>
    </div>
  `;}).join('');
  document.querySelectorAll('#prodGrid .rv').forEach(el=>rObs.observe(el));
}

/* ═══ PRELOADER ═══ */
function hidePreloader(){const p=document.getElementById('preloader');if(p)p.classList.add('done');}
document.addEventListener('DOMContentLoaded',()=>setTimeout(hidePreloader,1600));
window.addEventListener('load',()=>setTimeout(hidePreloader,200));
setTimeout(hidePreloader,3000);

/* ═══ CURSOR ═══ */
const cD=document.getElementById('curD'),cR=document.getElementById('curR');
let mx=0,my=0,cx=0,cy=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);}aCur();
function bindCursor(){document.querySelectorAll('a,button,.cp-cat,.p-card').forEach(el=>{el.addEventListener('mouseenter',()=>cR.classList.add('hov'));el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));});}
function bindCursorStates(){document.querySelectorAll('.cp-cat,.p-card,.cp-hero-img').forEach(el=>{el.addEventListener('mouseenter',()=>{cR.classList.add('img');cD.classList.add('hide');});el.addEventListener('mouseleave',()=>{cR.classList.remove('img');cD.classList.remove('hide');});});}

/* ═══ NAV / WHISPER ═══ */
const nav=document.getElementById('mainNav');
const whisperEl=document.querySelector('.whisper');
const cpHero=document.getElementById('cpHeroSection');
function uNav(){
  const s=window.scrollY,hb=cpHero.offsetTop+cpHero.offsetHeight-100;
  nav.classList.toggle('scrolled',s>40);
  nav.classList.toggle('on-dark',s<hb);
  if(whisperEl)whisperEl.classList.toggle('hide',s>40);
}
window.addEventListener('scroll',uNav,{passive:true});uNav();

/* ═══ SCROLL REVEAL ═══ */
const rObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('vis');rObs.unobserve(en.target);}});},{threshold:.12,rootMargin:'0px 0px -50px 0px'});
document.querySelectorAll('.rv').forEach(el=>rObs.observe(el));

/* ═══ SCROLL PROGRESS ═══ */
const scrollProg=document.getElementById('scrollProgress');
function updateProg(){const h=document.documentElement.scrollHeight-window.innerHeight;scrollProg.style.transform=`scaleX(${h>0?window.scrollY/h:0})`;}
window.addEventListener('scroll',updateProg,{passive:true});

/* ═══ WA FLOAT ═══ */
const waf=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waf.classList.toggle('show',window.scrollY>500);},{passive:true});

/* ═══ MOBILE MENU ═══ */
const burger=document.getElementById('burger'),mob=document.getElementById('mobMenu'),mobClose=document.getElementById('mobClose');
if(burger)burger.addEventListener('click',()=>mob.classList.add('open'));
if(mobClose)mobClose.addEventListener('click',()=>mob.classList.remove('open'));
mob.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mob.classList.remove('open')));

/* ═══ LANG TOGGLE ═══ */

/* ═══ NEWSLETTER ═══ */
function subscribeNews(){const e=document.getElementById('newsEmail').value;if(e){showToast('Thank you. You\'re on the list.');document.getElementById('newsEmail').value='';}}

/* ═══ MOTION — 3D TILT ═══ */
function attachTilt(selector,intensity=6){
  document.querySelectorAll(selector).forEach(el=>{
    el.addEventListener('mousemove',e=>{
      const r=el.getBoundingClientRect();
      const dx=(e.clientX-r.left)/r.width-.5,dy=(e.clientY-r.top)/r.height-.5;
      el.style.transform=`perspective(1200px) rotateX(${-dy*intensity}deg) rotateY(${dx*intensity}deg) translateY(-6px)`;
    });
    el.addEventListener('mouseleave',()=>{el.style.transform='';});
  });
}

/* ═══ MOTION — MAGNETIC CTAs ═══ */
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

/* ═══ HERO PARALLAX ═══ */
const heroImg=document.querySelector('.cp-hero-img');
window.addEventListener('scroll',()=>{
  const s=window.scrollY;
  if(s<window.innerHeight){heroImg.style.transform=`scale(1.04) translateY(${s*.22}px)`;}
},{passive:true});

/* ═══ HERO CONTENT FADE ═══ */
const heroCt=document.querySelector('.cp-hero-ct');
window.addEventListener('scroll',()=>{
  const r=cpHero.getBoundingClientRect();
  if(r.bottom>0){const p=Math.max(0,Math.min(1,-r.top/r.height));heroCt.style.transform=`translateY(${p*50}px)`;heroCt.style.opacity=String(1-p*.8);}
},{passive:true});

/* ═══ STATS COUNT-UP ═══ */
const statObs=new IntersectionObserver(e=>{
  e.forEach(en=>{
    if(en.isIntersecting){
      const num=en.target;
      const target=parseInt(num.dataset.count,10);
      const sp=num.querySelector('span');const spText=sp?sp.outerHTML:'';
      const dur=2000,start=performance.now();
      function tick(now){const t=Math.min((now-start)/dur,1);const e=1-Math.pow(1-t,3);num.innerHTML=Math.floor(target*e)+spText;if(t<1)requestAnimationFrame(tick);else num.innerHTML=target+spText;}
      requestAnimationFrame(tick);
      statObs.unobserve(num);
    }
  });
},{threshold:.4});
document.querySelectorAll('.cp-stat-n').forEach(n=>statObs.observe(n));

/* ═══ STICKY TAB SCROLL-SPY ═══ */
const tabs=document.querySelectorAll('.cp-tab');
const sections=Array.from(tabs).map(t=>document.getElementById(t.dataset.target)).filter(Boolean);
function uTabs(){
  let active=null;
  const offset=window.innerHeight*.4;
  sections.forEach(s=>{const r=s.getBoundingClientRect();if(r.top<offset)active=s.id;});
  tabs.forEach(t=>t.classList.toggle('active',t.dataset.target===active));
}
window.addEventListener('scroll',uTabs,{passive:true});
// Smooth scroll for tabs (accounts for sticky tab height)
tabs.forEach(t=>{
  t.addEventListener('click',e=>{
    e.preventDefault();
    const target=document.getElementById(t.dataset.target);
    if(target){
      const offsetTop=target.getBoundingClientRect().top+window.scrollY-100;
      window.scrollTo({top:offsetTop,behavior:'smooth'});
    }
  });
});

/* ═══ RIPPLE ON CTA CLICK ═══ */
document.addEventListener('click',e=>{
  const t=e.target.closest('.btn-gold,.btn-noir,.btn-outline,.btn-ghost,.p-hover-btn');
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

/* ═══ INIT ═══ */
renderProducts();
bindCursor();
bindCursorStates();
attachTilt('.cp-cat',5);
attachTilt('.p-card',6);
attachMagnet('.btn-gold',.3);
attachMagnet('.btn-noir',.25);
attachMagnet('.btn-outline',.25);
attachMagnet('.n-icon-btn',.4);
updateProg();
</script>

<?php get_footer(); ?>
