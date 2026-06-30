<?php
/**
 * Template — Shop (all products)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$products = new WP_Query( array(
	'post_type'      => 'bloom_product',
	'posts_per_page' => -1,
	'orderby'        => 'date',
	'order'          => 'DESC',
) );

$collections = get_terms( array(
	'taxonomy'   => 'bloom_collection',
	'hide_empty' => false,
) );

$total = $products->found_posts;
?>

<div class="scroll-progress" id="scrollProgress"></div>
<div class="preloader" id="preloader">
  <div class="pl-logo">B L O O M</div>
  <div class="pl-line"></div>
  <div class="pl-sub">The Shop</div>
  <div class="pl-prog"></div>
</div>
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<a href="<?php echo esc_url( bloom_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="wa-float show" id="waFloat">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Inquire on WhatsApp</span>
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

<nav class="nav on-dark" id="mainNav">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link" aria-current="page">Shop</a>
    <a href="<?php echo esc_url( home_url('/collection/') ); ?>" class="n-link">Collection</a>
  </div>
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="n-logo">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="n-link n-right-link">Contact</a>
    <a href="<?php echo esc_url( bloom_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="n-icon-btn" aria-label="WhatsApp stylist">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<main>

<section class="ph-hero" id="phHeroSection">
  <div class="ph-hero-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf069.jpg');"></div>
  <div class="ph-hero-grad"></div>
  <div class="ph-hero-ct">
    <nav class="ph-crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span class="sep">/</span><span>The Shop</span></nav>
    <div class="ph-eyebrow"><?php echo (int) $total; ?> Pieces · Curated</div>
    <h1 class="ph-title">The <em>Shop</em>.</h1>
    <p class="ph-sub">Browse every piece in our showroom. When something catches your eye, message us on WhatsApp and we'll share details, photos, and arrange a private viewing.</p>
  </div>
</section>

<?php if ( $collections && ! is_wp_error( $collections ) ) : ?>
<nav class="cp-tabs" aria-label="Collections filter">
  <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="cp-tab active">All Pieces</a>
  <?php foreach ( $collections as $col ) : ?>
    <a href="<?php echo esc_url( get_term_link( $col ) ); ?>" class="cp-tab"><?php echo esc_html( $col->name ); ?></a>
  <?php endforeach; ?>
</nav>
<?php endif; ?>

<section class="prod" style="background:var(--ivory);padding:80px 56px;">
  <div class="prod-head" style="text-align:center;margin-bottom:56px;">
    <div class="sec-eyebrow" style="justify-content:center;">All Pieces</div>
    <h2 class="sec-title">Every gown, <em>one inquiry</em> away.</h2>
  </div>

  <?php if ( $products->have_posts() ) : ?>
  <div class="prod-grid" style="background:transparent;">
    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
      <?php bloom_render_product_card( get_the_ID() ); ?>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
  <?php else : ?>
  <div style="text-align:center;padding:80px 20px;color:var(--txt-gray);">
    <div style="font-family:'Fraunces',serif;font-style:italic;font-size:36px;color:var(--gold);margin-bottom:16px;">No products yet.</div>
    <p style="font-size:16px;max-width:480px;margin:0 auto 24px;">Add your first product from <strong>Products → Add Product</strong> in the WordPress admin.</p>
    <a href="<?php echo esc_url( admin_url('post-new.php?post_type=bloom_product') ); ?>" class="btn-gold"><span>Add a product</span><span class="arrow">→</span></a>
  </div>
  <?php endif; ?>
</section>

<section class="consult" id="consult">
  <div class="consult-bg"></div>
  <div class="consult-grad"></div>
  <div class="consult-in">
    <div class="con-icon">✦</div>
    <h2 class="con-heading">Don't see what you're <em>looking for</em>?</h2>
    <p class="con-sub">Our stylists can source by request — from past-season archive to the latest runway. Tell us what you're searching for, we'll find it.</p>
    <div class="con-btns">
      <a href="<?php echo esc_url( bloom_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="btn-gold">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
        <span>Message us on WhatsApp</span>
      </a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
