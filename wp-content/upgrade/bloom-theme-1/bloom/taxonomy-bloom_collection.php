<?php
/**
 * Template — Collection archive (all products in one collection)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
$term = get_queried_object();
?>

<div class="scroll-progress" id="scrollProgress"></div>
<div class="preloader" id="preloader"><div class="pl-logo">B L O O M</div><div class="pl-line"></div><div class="pl-sub"><?php echo esc_html( $term->name ); ?></div><div class="pl-prog"></div></div>
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
  <a href="<?php echo esc_url( home_url('/designers/') ); ?>">Designers</a>
  <a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a>
  <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a>
  <a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a>
</div>

<div class="whisper"><span class="whisper-track"><span>GCC-wide delivery</span><span class="dot">✦</span><span>Kingdom Mall, Riyadh</span><span class="dot">✦</span><span>Inquire on WhatsApp</span><span class="dot">✦</span><span>Spring / Summer 2026</span></span></div>

<nav class="nav on-dark" id="mainNav">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url('/collection/') ); ?>" class="n-link" aria-current="page">Collection</a>
    <a href="<?php echo esc_url( home_url('/designers/') ); ?>" class="n-link">Designers</a>
  </div>
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="n-logo">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="n-link n-right-link">Contact</a>
    <a href="<?php echo esc_url( bloom_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="n-icon-btn" aria-label="WhatsApp">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<main>

<section class="ph-hero" id="phHeroSection">
  <div class="ph-hero-img" style="background-image:url('https://images.unsplash.com/photo-1494578379344-d6c710782a3d?w=2000&q=85&auto=format');"></div>
  <div class="ph-hero-grad"></div>
  <div class="ph-hero-ct">
    <nav class="ph-crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span class="sep">/</span><a href="<?php echo esc_url( home_url('/shop/') ); ?>">Shop</a><span class="sep">/</span><span><?php echo esc_html( $term->name ); ?></span></nav>
    <div class="ph-eyebrow">Collection · <?php echo (int) $term->count; ?> Pieces</div>
    <h1 class="ph-title"><em><?php echo esc_html( $term->name ); ?></em></h1>
    <?php if ( $term->description ) : ?>
      <p class="ph-sub"><?php echo esc_html( $term->description ); ?></p>
    <?php else : ?>
      <p class="ph-sub">Curated pieces from our <?php echo esc_html( strtolower( $term->name ) ); ?> collection. Tap "Inquire" on any piece to ask about availability, sizing, and pricing on WhatsApp.</p>
    <?php endif; ?>
  </div>
</section>

<section style="background:var(--ivory);padding:80px 56px;">
  <?php if ( have_posts() ) : ?>
  <div class="prod-grid" style="background:transparent;">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php bloom_render_product_card( get_the_ID() ); ?>
    <?php endwhile; ?>
  </div>
  <?php else : ?>
  <div style="text-align:center;padding:80px 20px;color:var(--txt-gray);">
    <div style="font-family:'Fraunces',serif;font-style:italic;font-size:36px;color:var(--gold);margin-bottom:16px;">No pieces in this collection yet.</div>
    <p style="font-size:16px;max-width:480px;margin:0 auto 24px;">Add products under <strong>Products → Add Product</strong> and assign them to this collection.</p>
    <a href="<?php echo esc_url( admin_url('post-new.php?post_type=bloom_product') ); ?>" class="btn-gold"><span>Add a product</span><span class="arrow">→</span></a>
  </div>
  <?php endif; ?>
</section>

<section class="consult" id="consult">
  <div class="consult-bg"></div>
  <div class="consult-grad"></div>
  <div class="consult-in">
    <div class="con-icon">✦</div>
    <h2 class="con-heading">Want to see <em><?php echo esc_html( strtolower( $term->name ) ); ?></em> in person?</h2>
    <p class="con-sub">Book a private viewing at our Kingdom Mall showroom — we'll have a curated selection from this collection waiting for you.</p>
    <div class="con-btns">
      <a href="<?php echo esc_url( bloom_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="btn-gold">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
        <span>Book private viewing</span>
      </a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
