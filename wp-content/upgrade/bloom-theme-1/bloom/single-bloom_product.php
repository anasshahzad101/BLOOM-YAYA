<?php
/**
 * Template — Single Product (WhatsApp-inquiry only, no cart)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
the_post();

$pid       = get_the_ID();
$designer  = get_post_meta( $pid, '_bloom_designer', true );
$size      = get_post_meta( $pid, '_bloom_size', true );
$color     = get_post_meta( $pid, '_bloom_color', true );
$fabric    = get_post_meta( $pid, '_bloom_fabric', true );
$avail     = get_post_meta( $pid, '_bloom_availability', true );
$occasion  = get_post_meta( $pid, '_bloom_occasion', true );
$short     = get_post_meta( $pid, '_bloom_short_desc', true );
$wa        = bloom_whatsapp_link( $pid );
$thumb     = get_the_post_thumbnail_url( $pid, 'full' );
if ( ! $thumb ) $thumb = get_post_meta( $pid, '_bloom_image_url', true );
$sp_no_image = empty( $thumb );

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

<a href="<?php echo esc_url( $wa ); ?>" target="_blank" rel="noopener" class="wa-float show" id="waFloat">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Inquire about this piece</span>
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

<nav class="nav" id="mainNav">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url('/collection/') ); ?>" class="n-link">Collection</a>
    <a href="<?php echo esc_url( home_url('/designers/') ); ?>" class="n-link">Designers</a>
  </div>
  <a href="<?php echo esc_url( home_url('/') ); ?>" class="n-logo">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="n-link n-right-link">Contact</a>
    <a href="<?php echo esc_url( $wa ); ?>" target="_blank" rel="noopener" class="n-icon-btn" aria-label="WhatsApp">
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
    <div class="sp-img <?php echo $sp_no_image ? 'sp-img-placeholder' : ''; ?>">
      <?php if ( $sp_no_image ) : ?>
        <div class="p-img-fallback"><span class="p-img-icon">✦</span><span class="p-img-name"><?php the_title(); ?></span></div>
      <?php else : ?>
        <div class="sp-img-bg" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div>
      <?php endif; ?>
      <?php if ( $avail ) : ?><span class="sp-badge"><?php echo esc_html( $avail ); ?></span><?php endif; ?>
      <div class="sp-frame"></div>
    </div>

    <div class="sp-info">
      <?php if ( $designer ) : ?><div class="sp-designer"><?php echo esc_html( $designer ); ?></div><?php endif; ?>
      <h1 class="sp-title"><?php the_title(); ?></h1>
      <?php if ( $col_label ) : ?>
        <a href="<?php echo esc_url( $col_url ); ?>" class="sp-collection"><?php echo esc_html( $col_label ); ?></a>
      <?php endif; ?>
      <?php if ( $short ) : ?><p class="sp-tagline"><?php echo esc_html( $short ); ?></p><?php endif; ?>

      <?php if ( get_the_content() ) : ?>
      <div class="sp-desc"><?php the_content(); ?></div>
      <?php endif; ?>

      <?php
      $details = array_filter( array(
        'Designer'     => $designer,
        'Collection'   => $col_label,
        'Occasion'     => $occasion,
        'Fabric'       => $fabric,
        'Color'        => $color,
        'Size'         => $size,
        'Availability' => $avail,
      ) );
      if ( $details ) : ?>
      <dl class="sp-details">
        <?php foreach ( $details as $label => $val ) : ?>
          <div class="sp-detail-row">
            <dt><?php echo esc_html( $label ); ?></dt>
            <dd><?php echo esc_html( $val ); ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>
      <?php endif; ?>

      <div class="sp-cta">
        <a href="<?php echo esc_url( $wa ); ?>" target="_blank" rel="noopener" class="btn-gold sp-wa-btn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
          <span>Inquire about this piece</span>
        </a>
        <a href="tel:+966112111026" class="btn-outline sp-call-btn"><span>Or call +966 (11) 211 1026</span></a>
      </div>

      <p class="sp-note">A stylist typically responds within an hour during showroom hours · Sat–Thu, 10 AM – 10 PM</p>
    </div>
  </div>

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

<?php get_footer(); ?>
