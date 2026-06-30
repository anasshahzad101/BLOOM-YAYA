<?php
/**
 * Template — Category archive (native WP posts in a category)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
$cat = get_queried_object();
?>

<div class="scroll-progress" id="scrollProgress"></div>
<div class="preloader" id="preloader"><div class="pl-logo">B L O O M</div><div class="pl-line"></div><div class="pl-sub"><?php echo esc_html( $cat->name ); ?></div><div class="pl-prog"></div></div>
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<a href="<?php echo esc_url( bloom_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="wa-float show" id="waFloat">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
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
    <a href="<?php echo esc_url( home_url('/collection/') ); ?>" class="n-link">Collection</a>
    <a href="<?php echo esc_url( home_url('/designers/') ); ?>" class="n-link">Designers</a>
  </div>
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="n-logo">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="n-link n-right-link" aria-current="page">Blog</a>
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
  <div class="ph-hero-img" style="background-image:url('https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=2000&q=85&auto=format');"></div>
  <div class="ph-hero-grad"></div>
  <div class="ph-hero-ct">
    <nav class="ph-crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span class="sep">/</span><a href="<?php echo esc_url( home_url('/blog/') ); ?>">Journal</a><span class="sep">/</span><span><?php echo esc_html( $cat->name ); ?></span></nav>
    <div class="ph-eyebrow">Category · <?php echo (int) $cat->count; ?> Posts</div>
    <h1 class="ph-title"><em><?php echo esc_html( $cat->name ); ?></em></h1>
    <?php if ( $cat->description ) : ?>
      <p class="ph-sub"><?php echo esc_html( $cat->description ); ?></p>
    <?php else : ?>
      <p class="ph-sub">Essays, designer profiles, and stylist notes filed under <?php echo esc_html( $cat->name ); ?>.</p>
    <?php endif; ?>
  </div>
</section>

<section class="journal" id="journal" style="padding-top:80px;">
  <?php if ( have_posts() ) : ?>
  <div class="journal-grid">
    <?php while ( have_posts() ) : the_post();
      $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
      if ( ! $thumb ) $thumb = get_post_meta( get_the_ID(), '_bloom_post_image', true );
      if ( ! $thumb ) $thumb = 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=900&q=85&auto=format';
      $cats = get_the_category();
      $rcat = $cats ? $cats[0]->name : '';
    ?>
      <a class="jnl-card" href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit;">
        <div class="jnl-img"><div class="jnl-img-bg" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div></div>
        <div class="jnl-meta"><?php if ( $rcat ) : ?><?php echo esc_html( $rcat ); ?><span class="sep">·</span><?php endif; ?><?php echo esc_html( get_the_date( 'M Y' ) ); ?><span class="sep">·</span><?php echo (int) max(1,round( str_word_count(wp_strip_all_tags(get_the_content()))/220 )); ?> min read</div>
        <h3 class="jnl-title"><?php the_title(); ?></h3>
        <p class="jnl-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 26, '…' ) ); ?></p>
        <span class="jnl-read">Read essay →</span>
      </a>
    <?php endwhile; ?>
  </div>
  <div class="sp-pagination">
    <?php echo paginate_links( array( 'mid_size' => 1 ) ); ?>
  </div>
  <?php else : ?>
  <div style="text-align:center;padding:80px 20px;color:var(--txt-gray);">
    <div style="font-family:'Fraunces',serif;font-style:italic;font-size:36px;color:var(--gold);margin-bottom:16px;">No posts in this category yet.</div>
    <a href="<?php echo esc_url( admin_url('post-new.php') ); ?>" class="btn-gold"><span>Write a post</span><span class="arrow">→</span></a>
  </div>
  <?php endif; ?>
</section>

</main>

<?php get_footer(); ?>
