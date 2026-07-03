<?php
/**
 * Template — Single Product (WhatsApp-inquiry only, no cart)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
the_post();

$pid          = get_the_ID();
$designer     = get_post_meta( $pid, '_bloom_designer', true );
$designer_url = get_post_meta( $pid, '_bloom_designer_url', true );
$sku          = get_post_meta( $pid, '_bloom_sku', true );
$color        = get_post_meta( $pid, '_bloom_color', true );
$fabric       = get_post_meta( $pid, '_bloom_fabric', true );
$avail        = get_post_meta( $pid, '_bloom_availability', true );
$occasion     = get_post_meta( $pid, '_bloom_occasion', true );
$short        = get_post_meta( $pid, '_bloom_short_desc', true );
$price        = bloom_get_price( $pid );
$tabby        = (int) ceil( $price / 4 );
$wa_inquire   = bloom_whatsapp_link( $pid, 'inquire' );
$wa_bag       = bloom_whatsapp_link( $pid, 'bag' );
$wa_stylist   = bloom_whatsapp_link( $pid, 'stylist' );
$thumb        = get_the_post_thumbnail_url( $pid, 'full' );
if ( ! $thumb ) $thumb = get_post_meta( $pid, '_bloom_image_url', true );
$thumb        = bloom_normalize_image_url( $thumb );
$sp_no_image  = empty( $thumb );

$cols = get_the_terms( $pid, 'bloom_collection' );
$col_label = ( $cols && ! is_wp_error( $cols ) ) ? $cols[0]->name : '';
$col_url   = ( $cols && ! is_wp_error( $cols ) ) ? get_term_link( $cols[0] ) : home_url( '/shop/' );

$related = new WP_Query( array(
	'post_type'      => 'bloom_product',
	'posts_per_page' => 4,
	'post__not_in'   => array( $pid ),
	'orderby'        => 'rand',
	'tax_query'      => ( $cols && ! is_wp_error( $cols ) ) ? array( array(
		'taxonomy' => 'bloom_collection',
		'field'    => 'term_id',
		'terms'    => wp_list_pluck( $cols, 'term_id' ),
	) ) : null,
) );
?>

<div class="scroll-progress" id="scrollProgress"></div>
<div class="preloader" id="preloader"><div class="pl-logo">B L O O M</div><div class="pl-line"></div><div class="pl-sub"><?php the_title(); ?></div><div class="pl-prog"></div></div>
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<a href="<?php echo esc_url( $wa_inquire ); ?>" target="_blank" rel="noopener" class="wa-float show" id="waFloat">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Inquire about this piece</span>
</a>

<div class="mob-menu" id="mobMenu">
  <button class="mob-close" id="mobClose">✕</button>
  <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
  <a href="<?php echo esc_url( home_url('/shop/') ); ?>">Shop</a>
  <a href="<?php echo esc_url( home_url('/collection/') ); ?>">Collection</a>
  <a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a>
  <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a>
  <a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a>
</div>

<div class="whisper"><span class="whisper-track"><span>GCC-wide delivery</span><span class="dot">✦</span><span>Kingdom Mall, Riyadh</span><span class="dot">✦</span><span>Complimentary tailoring with every purchase</span><span class="dot">✦</span><span>Inquire on WhatsApp</span><span class="dot">✦</span><span>Spring / Summer 2026</span></span></div>

<nav class="nav" id="mainNav">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url('/collection/') ); ?>" class="n-link">Collection</a>
  </div>
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="n-logo">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="n-link n-right-link">Contact</a>
    <a href="<?php echo esc_url( $wa_inquire ); ?>" target="_blank" rel="noopener" class="n-icon-btn" aria-label="WhatsApp">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<main class="sp-main">

  <nav class="sp-crumbs" aria-label="Breadcrumb">
    <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
    <span class="sep">/</span>
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>">Shop</a>
    <?php if ( $col_label ) : ?>
      <span class="sep">/</span>
      <a href="<?php echo esc_url( $col_url ); ?>"><?php echo esc_html( $col_label ); ?></a>
    <?php endif; ?>
    <span class="sep">/</span>
    <span><?php the_title(); ?></span>
  </nav>

  <div class="sp-grid">

    <!-- 1. IMAGE GALLERY (hero + thumb strip — placeholder for 4-6 images per spec) -->
    <div class="sp-gallery" data-sp-gallery>
      <div class="sp-gallery-hero <?php echo $sp_no_image ? 'sp-img-placeholder' : ''; ?>" data-sp-hero>
        <?php if ( $sp_no_image ) : ?>
          <div class="p-img-fallback"><span class="p-img-icon">✦</span><span class="p-img-name"><?php the_title(); ?></span></div>
        <?php else : ?>
          <button type="button" class="sp-hero-btn" data-sp-lightbox aria-label="View full size">
            <div class="sp-img-bg" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div>
          </button>
        <?php endif; ?>
        <?php if ( $avail ) : ?><span class="sp-badge"><?php echo esc_html( $avail ); ?></span><?php endif; ?>
        <div class="sp-frame"></div>
      </div>
      <div class="sp-thumbs" role="tablist" aria-label="Product images">
        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
          <button type="button" class="sp-thumb <?php echo $i === 1 ? 'is-active' : 'is-placeholder'; ?>" data-sp-thumb="<?php echo (int) $i; ?>" aria-label="View image <?php echo (int) $i; ?>">
            <?php if ( $i === 1 && ! $sp_no_image ) : ?>
              <span class="sp-thumb-img" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></span>
            <?php else : ?>
              <span class="sp-thumb-placeholder">✦</span>
            <?php endif; ?>
          </button>
        <?php endfor; ?>
      </div>
    </div>

    <div class="sp-info">

      <!-- 2. BRAND NAME -->
      <?php if ( $designer ) : ?>
        <?php if ( $designer_url ) : ?>
          <a href="<?php echo esc_url( $designer_url ); ?>" class="sp-brand sp-brand-link"><?php echo esc_html( $designer ); ?></a>
        <?php else : ?>
          <span class="sp-brand"><?php echo esc_html( $designer ); ?></span>
        <?php endif; ?>
      <?php endif; ?>

      <!-- 3. DRESS NAME -->
      <h1 class="sp-title"><?php the_title(); ?></h1>

      <?php if ( $col_label ) : ?>
        <a href="<?php echo esc_url( $col_url ); ?>" class="sp-collection"><?php echo esc_html( $col_label ); ?></a>
      <?php endif; ?>

      <!-- 4. PRICE (SAR) + TABBY -->
      <div class="sp-price-block">
        <div class="sp-price"><?php echo esc_html( bloom_format_price( $price ) ); ?></div>
        <div class="sp-tabby">or 4 payments of <?php echo esc_html( bloom_format_price( $tabby ) ); ?> with <span class="sp-tabby-brand">tabby</span></div>
      </div>

      <!-- 6. DELIVERY CUE -->
      <p class="sp-delivery">✦ Free delivery across KSA · GCC shipping calculated at checkout</p>

      <!-- 7 + 8 + 9. CTAs + WISHLIST -->
      <div class="sp-cta">
        <div class="sp-cta-row">
          <a href="<?php echo esc_url( $wa_bag ); ?>" target="_blank" rel="noopener" class="sp-add-bag" data-sp-add-bag>
            <span>Add to Bag</span>
          </a>
          <button type="button" class="sp-wishlist" data-sp-wishlist data-product-id="<?php echo (int) $pid; ?>" aria-pressed="false" aria-label="Add to wishlist">
            <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M12 21s-7-4.35-9.5-8.5C.5 8.5 3 4 7 4c2 0 3.5 1 5 3 1.5-2 3-3 5-3 4 0 6.5 4.5 4.5 8.5C19 16.65 12 21 12 21z" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/></svg>
          </button>
        </div>
        <a href="<?php echo esc_url( $wa_stylist ); ?>" target="_blank" rel="noopener" class="sp-stylist">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
          <span>Speak to a Stylist</span>
        </a>
      </div>

      <?php if ( $sku ) : ?><div class="sp-sku">SKU: <?php echo esc_html( $sku ); ?></div><?php endif; ?>

      <!-- T&Cs TAB BLOCK — Shipping / Delivery / Size / Details -->
      <?php
      $detail_rows = array_filter( array(
        'Designer'     => $designer,
        'SKU'          => $sku,
        'Color'        => $color,
        'Occasion'     => $occasion,
        'Availability' => $avail,
        'Care'         => 'Dry clean only · Store on padded hanger',
      ) );
      ?>
      <section class="sp-tabs" data-sp-tabs>
        <div class="sp-tabs-nav" role="tablist" aria-label="Product information">
          <button type="button" class="sp-tab is-active" role="tab" aria-selected="true"  data-sp-tab="shipping">Shipping</button>
          <button type="button" class="sp-tab"           role="tab" aria-selected="false" data-sp-tab="delivery">Delivery</button>
          <button type="button" class="sp-tab"           role="tab" aria-selected="false" data-sp-tab="size">Size</button>
          <button type="button" class="sp-tab"           role="tab" aria-selected="false" data-sp-tab="details">Details</button>
        </div>

        <!-- SHIPPING (T&Cs) -->
        <div class="sp-tab-panel is-active" role="tabpanel" data-sp-panel="shipping">
          <p class="sp-tab-lede">Every BLOOM piece is dispatched from our atelier in Kingdom Mall, Riyadh. The terms below apply to all orders.</p>
          <ul class="sp-tc-list">
            <li><strong>Complimentary delivery</strong> across the Kingdom of Saudi Arabia on every order.</li>
            <li><strong>GCC shipping</strong> (UAE · Kuwait · Bahrain · Oman · Qatar) is calculated at checkout based on weight and destination.</li>
            <li>Ready-to-wear orders are dispatched within <strong>24–48 hours</strong> of confirmation.</li>
            <li>Made-to-measure and couture pieces ship <strong>4–6 weeks</strong> from the final fitting.</li>
            <li>A signature is required upon delivery for all couture and high-value parcels.</li>
            <li>Returns accepted within <strong>14 days</strong> of receipt — pieces must be unworn, unaltered, and with original tags intact.</li>
            <li>Refunds are processed within <strong>10 working days</strong> of the returned item arriving at our atelier.</li>
            <li>Made-to-measure, bespoke, and altered pieces are <strong>final sale</strong>.</li>
          </ul>
        </div>

        <!-- DELIVERY ZONES -->
        <div class="sp-tab-panel" role="tabpanel" data-sp-panel="delivery" hidden>
          <p class="sp-tab-lede">Delivery windows and fees by zone. Express service available on request — speak to a stylist.</p>
          <div class="sp-tc-table-wrap">
            <table class="sp-tc-table">
              <thead>
                <tr><th>Zone</th><th>Window</th><th>Fee</th></tr>
              </thead>
              <tbody>
                <tr><td>Riyadh — Kingdom Mall radius</td><td>Same-day (order before 2 PM)</td><td>Complimentary</td></tr>
                <tr><td>Riyadh — greater city</td><td>Next working day</td><td>Complimentary</td></tr>
                <tr><td>Other KSA cities</td><td>2–3 working days</td><td>Complimentary</td></tr>
                <tr><td>GCC — UAE, Kuwait, Bahrain, Oman, Qatar</td><td>3–5 working days</td><td>Calculated at checkout</td></tr>
                <tr><td>International</td><td>7–10 working days</td><td>On request</td></tr>
              </tbody>
            </table>
          </div>
          <p class="sp-tab-foot">Showroom collection at Kingdom Mall is available at no charge — kindly notify us via WhatsApp at the time of order.</p>
        </div>

        <!-- SIZE CHART -->
        <div class="sp-tab-panel" role="tabpanel" data-sp-panel="size" hidden>
          <p class="sp-tab-lede">Standard ready-to-wear measurements. For couture and made-to-measure, your stylist will take a full atelier fitting.</p>
          <div class="sp-tc-table-wrap">
            <table class="sp-tc-table sp-size-table">
              <thead>
                <tr><th>Size</th><th>Bust (cm)</th><th>Waist (cm)</th><th>Hips (cm)</th></tr>
              </thead>
              <tbody>
                <tr><td>XS</td><td>80</td><td>62</td><td>86</td></tr>
                <tr><td>S</td> <td>84</td><td>66</td><td>90</td></tr>
                <tr><td>M</td> <td>88</td><td>70</td><td>94</td></tr>
                <tr><td>L</td> <td>94</td><td>76</td><td>100</td></tr>
                <tr><td>XL</td><td>100</td><td>82</td><td>106</td></tr>
              </tbody>
            </table>
          </div>
          <p class="sp-tab-foot">Between sizes? We recommend sizing up for couture silhouettes — our atelier will tailor to a perfect fit, complimentary with every purchase.</p>
        </div>

        <!-- DETAILS -->
        <div class="sp-tab-panel" role="tabpanel" data-sp-panel="details" hidden>
          <?php if ( $detail_rows ) : ?>
          <dl class="sp-tc-dl">
            <?php foreach ( $detail_rows as $label => $val ) : ?>
              <div class="sp-tc-row">
                <dt><?php echo esc_html( $label ); ?></dt>
                <dd><?php echo esc_html( $val ); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
          <?php endif; ?>
        </div>
      </section>

      <!-- BELOW THE TABS: tagline + description -->
      <?php if ( $short ) : ?><p class="sp-tagline"><?php echo esc_html( $short ); ?></p><?php endif; ?>

      <?php if ( get_the_content() ) : ?>
      <div class="sp-desc"><?php the_content(); ?></div>
      <?php endif; ?>

      <div class="sp-perk">✦ Complimentary tailoring included with every purchase</div>

      <p class="sp-note">A stylist typically responds within an hour during showroom hours · Sat–Thu, 10 AM – 10 PM</p>
    </div>
  </div>

  <!-- Lightbox -->
  <?php if ( ! $sp_no_image ) : ?>
  <div class="sp-lightbox" id="spLightbox" aria-hidden="true">
    <button type="button" class="sp-lightbox-close" data-sp-lightbox-close aria-label="Close">✕</button>
    <div class="sp-lightbox-img" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div>
  </div>
  <?php endif; ?>

  <?php if ( $related->have_posts() ) : ?>
  <section class="sp-related">
    <div class="sp-related-head">
      <div class="sec-eyebrow">More from this collection</div>
      <h2 class="sec-title">You might also <em>love</em>.</h2>
    </div>
    <div class="prod-grid" style="background:transparent;">
      <?php while ( $related->have_posts() ) : $related->the_post(); ?>
        <?php bloom_render_product_card( get_the_ID() ); ?>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </section>
  <?php endif; ?>

</main>

<script>
(function(){
  /* Wishlist heart — localStorage toggle, scoped by product ID */
  var wish = document.querySelector('[data-sp-wishlist]');
  if (wish) {
    var pid = wish.getAttribute('data-product-id');
    var key = 'bloom_wishlist';
    var list = [];
    try { list = JSON.parse(localStorage.getItem(key) || '[]'); } catch(e){ list = []; }
    if (list.indexOf(pid) !== -1) {
      wish.classList.add('is-active');
      wish.setAttribute('aria-pressed','true');
    }
    wish.addEventListener('click', function(){
      try { list = JSON.parse(localStorage.getItem(key) || '[]'); } catch(e){ list = []; }
      var i = list.indexOf(pid);
      if (i === -1) { list.push(pid); wish.classList.add('is-active'); wish.setAttribute('aria-pressed','true'); }
      else { list.splice(i,1); wish.classList.remove('is-active'); wish.setAttribute('aria-pressed','false'); }
      localStorage.setItem(key, JSON.stringify(list));
    });
  }

  /* Lightbox — open on hero click, close on backdrop/✕ or Escape */
  var lb = document.getElementById('spLightbox');
  var opener = document.querySelector('[data-sp-lightbox]');
  var closer = document.querySelector('[data-sp-lightbox-close]');
  if (lb && opener) {
    opener.addEventListener('click', function(){ lb.classList.add('is-open'); lb.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; });
  }
  function closeLb(){ if (lb) { lb.classList.remove('is-open'); lb.setAttribute('aria-hidden','true'); document.body.style.overflow=''; } }
  if (closer) closer.addEventListener('click', closeLb);
  if (lb) lb.addEventListener('click', function(e){ if (e.target === lb) closeLb(); });
  document.addEventListener('keydown', function(e){ if (e.key === 'Escape') closeLb(); });

  /* Thumb strip — placeholder swap; if only one real image, just visual highlight */
  var thumbs = document.querySelectorAll('.sp-thumb');
  thumbs.forEach(function(t){
    t.addEventListener('click', function(){
      thumbs.forEach(function(x){ x.classList.remove('is-active'); });
      t.classList.add('is-active');
    });
  });

  /* Tabs — Shipping / Delivery / Size / Details */
  var tabsRoot = document.querySelector('[data-sp-tabs]');
  if (tabsRoot) {
    var tabBtns = tabsRoot.querySelectorAll('[data-sp-tab]');
    var panels  = tabsRoot.querySelectorAll('[data-sp-panel]');
    function activate(name){
      tabBtns.forEach(function(b){
        var on = b.getAttribute('data-sp-tab') === name;
        b.classList.toggle('is-active', on);
        b.setAttribute('aria-selected', on ? 'true' : 'false');
      });
      panels.forEach(function(p){
        var on = p.getAttribute('data-sp-panel') === name;
        p.classList.toggle('is-active', on);
        if (on) p.removeAttribute('hidden'); else p.setAttribute('hidden','');
      });
    }
    tabBtns.forEach(function(b, idx){
      b.addEventListener('click', function(){ activate(b.getAttribute('data-sp-tab')); });
      b.addEventListener('keydown', function(e){
        if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
        e.preventDefault();
        var next = (idx + (e.key === 'ArrowRight' ? 1 : -1) + tabBtns.length) % tabBtns.length;
        tabBtns[next].focus();
        activate(tabBtns[next].getAttribute('data-sp-tab'));
      });
    });
  }
})();
</script>

<?php get_footer(); ?>
