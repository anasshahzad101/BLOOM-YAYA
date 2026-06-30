<?php
/**
 * Template — Single Post (native WP post)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
the_post();

$pid   = get_the_ID();
$thumb = get_the_post_thumbnail_url( $pid, 'full' );
if ( ! $thumb ) $thumb = get_post_meta( $pid, '_bloom_post_image', true ); $thumb = bloom_normalize_image_url( $thumb );
if ( ! $thumb ) $thumb = '<?php echo get_template_directory_uri(); ?>/assets/img/bf038.jpg';

$cats     = get_the_category( $pid );
$cat_html = '';
if ( $cats ) {
	$cat_links = array();
	foreach ( $cats as $cat ) {
		$cat_links[] = '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
	}
	$cat_html = implode( ' · ', $cat_links );
}

$related = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post__not_in'   => array( $pid ),
	'orderby'        => 'rand',
	'category__in'   => $cats ? wp_list_pluck( $cats, 'term_id' ) : array(),
) );
?>

<div class="scroll-progress" id="scrollProgress"></div>
<div class="preloader" id="preloader"><div class="pl-logo">B L O O M</div><div class="pl-line"></div><div class="pl-sub">The Journal</div><div class="pl-prog"></div></div>
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
    <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="n-link n-right-link" aria-current="page">Blog</a>
    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="n-link n-right-link">Contact</a>
    <a href="<?php echo esc_url( bloom_whatsapp_link() ); ?>" target="_blank" rel="noopener" class="n-icon-btn" aria-label="WhatsApp">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<main class="sp-post-main">

  <article class="sp-post">
    <header class="sp-post-head">
      <nav class="sp-crumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span class="sep">/</span>
        <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Journal</a>
        <span class="sep">/</span>
        <span><?php the_title(); ?></span>
      </nav>
      <?php if ( $cat_html ) : ?><div class="sp-post-cat"><?php echo wp_kses_post( $cat_html ); ?></div><?php endif; ?>
      <h1 class="sp-post-title"><?php the_title(); ?></h1>
      <div class="sp-post-meta">
        <span><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></span>
        <span class="sep">·</span>
        <span><?php echo (int) max( 1, round( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 220 ) ); ?> min read</span>
      </div>
    </header>

    <div class="sp-post-cover">
      <div class="sp-post-cover-bg" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div>
    </div>

    <div class="sp-post-body">
      <?php the_content(); ?>
    </div>
  </article>

  <?php if ( $related->have_posts() ) : ?>
  <section class="sp-post-related">
    <div class="sp-post-related-head">
      <div class="sec-eyebrow">Continue reading</div>
      <h2 class="sec-title">More from <em>the journal</em>.</h2>
    </div>
    <div class="journal-grid">
      <?php while ( $related->have_posts() ) : $related->the_post();
        $rthumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        if ( ! $rthumb ) $rthumb = get_post_meta( get_the_ID(), '_bloom_post_image', true ); $rthumb = bloom_normalize_image_url( $rthumb );
        if ( ! $rthumb ) $rthumb = '<?php echo get_template_directory_uri(); ?>/assets/img/bf039.jpg';
        $rcats = get_the_category();
        $rcat = $rcats ? $rcats[0]->name : '';
      ?>
        <a class="jnl-card" href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit;">
          <div class="jnl-img"><div class="jnl-img-bg" style="background-image:url('<?php echo esc_url( $rthumb ); ?>');"></div></div>
          <div class="jnl-meta"><?php if ( $rcat ) : ?><?php echo esc_html( $rcat ); ?><span class="sep">·</span><?php endif; ?><?php echo esc_html( get_the_date( 'M Y' ) ); ?></div>
          <h3 class="jnl-title"><?php the_title(); ?></h3>
          <p class="jnl-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '…' ) ); ?></p>
          <span class="jnl-read">Read essay →</span>
        </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
