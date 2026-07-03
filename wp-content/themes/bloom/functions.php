<?php
/**
 * BLOOM Couture — Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ── Theme support ── */
function bloom_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'bloom' ),
		'mobile'  => __( 'Mobile Navigation', 'bloom' ),
		'footer'  => __( 'Footer Links', 'bloom' ),
	) );
}
add_action( 'after_setup_theme', 'bloom_theme_setup' );

/* ── One-time cache purge after the size-UI removal ──
 * LiteSpeed caches each URL as its own HTML file, so product pages that
 * were cached before this change keep serving the old markup (with the
 * size selector) until they are purged — which is why the sizes vanish on
 * some products but linger on others. This fires a single full-site purge,
 * guarded by an option so it runs exactly once. It is a safe no-op when
 * LiteSpeed is inactive or after it has already run. Bump the flag suffix
 * to force another purge on a future change.
 */
function bloom_purge_cache_once() {
	$flag = 'bloom_cache_purged_2026_07';
	if ( get_option( $flag ) ) {
		return;
	}
	do_action( 'litespeed_purge_all' );
	update_option( $flag, time() );
}
add_action( 'wp_loaded', 'bloom_purge_cache_once' );

/* ── Enqueue fonts + styles + theme stylesheet ── */
function bloom_enqueue_assets() {
	// Google Fonts (Cormorant Garamond + Fraunces + Josefin Sans + Tajawal)
	wp_enqueue_style(
		'bloom-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500&family=Fraunces:ital,opsz,wght@0,9..144,300..700;1,9..144,300..700&family=Josefin+Sans:wght@100;200;300;400;500&family=Tajawal:wght@300;400;500;700&display=swap',
		array(),
		null
	);

	// Main editorial stylesheet
	wp_enqueue_style(
		'bloom-main',
		get_template_directory_uri() . '/assets/main.css',
		array( 'bloom-fonts' ),
		'20260703160000'
	);

	// Theme stylesheet (required by WP)
	wp_enqueue_style(
		'bloom-style',
		get_stylesheet_uri(),
		array( 'bloom-main' ),
		'20260703160000'
	);

	// Editorial motion script — only on the front page (other pages ship their own inline JS)
	if ( is_front_page() ) {
		wp_enqueue_script(
			'bloom-main-js',
			get_template_directory_uri() . '/assets/main.js',
			array(),
			'20260703160000',
			true // load in footer
		);
	}

	// Smart nav-color handler — runs on every page, registered last so it wins
	wp_enqueue_script(
		'bloom-nav-smart',
		get_template_directory_uri() . '/assets/nav-smart.js',
		array(),
		'20260703160000',
		true
	);

	// Mobile UX layer — touch detect, sticky CTA bar, menu polish
	wp_enqueue_script(
		'bloom-mobile-ux',
		get_template_directory_uri() . '/assets/mobile-ux.js',
		array(),
		'20260703160000',
		true
	);

	// Shared core script for WP-rendered templates that don't ship their own inline JS:
	// shop, single product, product collection archive, single post, and category archive.
	$needs_core_js = is_page( 'shop' )
		|| is_singular( 'bloom_product' )
		|| is_tax( 'bloom_collection' )
		|| is_singular( 'post' )      // single.php (blog posts)
		|| is_category()              // category.php (blog category archives)
		|| is_archive()               // any other native archive
		|| is_home();                 // posts index, if ever used
	if ( $needs_core_js ) {
		wp_enqueue_script(
			'bloom-wp-pages',
			get_template_directory_uri() . '/assets/wp-pages.js',
			array(),
			'20260703160000',
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'bloom_enqueue_assets' );

/* ── Preconnect to Google Fonts CDN ── */
function bloom_resource_hints( $hints, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$hints[] = array( 'href' => 'https://fonts.googleapis.com' );
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'bloom_resource_hints', 10, 2 );

/* ── Add custom body classes ── */
function bloom_body_classes( $classes ) {
	$classes[] = 'bloom-theme';
	return $classes;
}
add_filter( 'body_class', 'bloom_body_classes' );

/* ════════════════════════════════════════════════════════
   PRODUCTS CPT + COLLECTIONS TAXONOMY
════════════════════════════════════════════════════════ */

function bloom_register_products() {
	register_post_type( 'bloom_product', array(
		'labels' => array(
			'name'               => 'Products',
			'singular_name'      => 'Product',
			'menu_name'          => 'Products',
			'add_new'            => 'Add Product',
			'add_new_item'       => 'Add New Product',
			'edit_item'          => 'Edit Product',
			'new_item'           => 'New Product',
			'view_item'          => 'View Product',
			'all_items'          => 'All Products',
			'search_items'       => 'Search Products',
			'not_found'          => 'No products found',
			'not_found_in_trash' => 'No products in trash',
		),
		'public'        => true,
		'show_in_menu'  => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-tag',
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'has_archive'   => false,
		'rewrite'       => array( 'slug' => 'product', 'with_front' => false ),
		'show_in_rest'  => true,
	) );

	register_taxonomy( 'bloom_collection', 'bloom_product', array(
		'labels' => array(
			'name'          => 'Collections',
			'singular_name' => 'Collection',
			'menu_name'     => 'Collections',
			'all_items'     => 'All Collections',
			'edit_item'     => 'Edit Collection',
			'add_new_item'  => 'Add New Collection',
			'search_items'  => 'Search Collections',
		),
		'public'       => true,
		'hierarchical' => true,
		'rewrite'      => array( 'slug' => 'collection' ),
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'bloom_register_products' );

/* ── Product detail meta box ── */
function bloom_product_meta_box() {
	add_meta_box( 'bloom_product_details', 'Product Details', 'bloom_product_details_cb', 'bloom_product', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'bloom_product_meta_box' );

function bloom_product_details_cb( $post ) {
	wp_nonce_field( 'bloom_product_details', 'bloom_product_details_nonce' );
	$fields = array(
		'designer'      => array( 'Designer / Brand',          'Elie Saab' ),
		'designer_url'  => array( 'Designer Page URL',         'Optional — link target for the brand name (e.g. /designer/elie-saab/)' ),
		'price'         => array( 'Price (SAR)',               'Numeric only, VAT-inclusive (e.g. 8500). Leave empty to show a placeholder.' ),
		'sku'           => array( 'SKU',                       'Internal style code, used in WhatsApp pre-fill (e.g. BLM-LAY-001)' ),
		'color'         => array( 'Color',                     'Champagne · Black · Ivory' ),
		'fabric'        => array( 'Fabric',                    'Silk · Tulle · Crepe' ),
		'availability'  => array( 'Availability',              'In stock · By appointment · Made to order' ),
		'occasion'      => array( 'Occasion',                  'Evening · Cocktail · Bridal · Wedding Guest' ),
		'short_desc'    => array( 'Short Description',         'One-line tagline shown on product card' ),
		'image_url'     => array( 'External Image URL',        'Optional — used if no featured image is set (e.g. https://images.unsplash.com/...)' ),
		'whatsapp'      => array( 'WhatsApp Number Override',  'Default: +966 11 211 1026 (leave empty to use default)' ),
	);
	echo '<style>.bloom-meta-table{width:100%;border-collapse:collapse;} .bloom-meta-table td{padding:10px 6px;vertical-align:top;} .bloom-meta-table td:first-child{width:170px;font-weight:600;} .bloom-meta-table input[type=text],.bloom-meta-table textarea{width:100%;padding:8px;font-size:14px;} .bloom-meta-table .desc{color:#888;font-size:11px;font-weight:400;display:block;margin-top:2px;} .bloom-stock-row label{display:inline-flex;align-items:center;gap:6px;margin-right:18px;font-weight:500;font-size:13px;cursor:pointer;} .bloom-stock-row input[type=checkbox]{width:auto;margin:0;}</style>';
	echo '<table class="bloom-meta-table"><tbody>';
	foreach ( $fields as $key => $info ) {
		$value = get_post_meta( $post->ID, '_bloom_' . $key, true );
		$is_textarea = ( $key === 'short_desc' );
		echo '<tr><td><label>' . esc_html( $info[0] ) . '<span class="desc">' . esc_html( $info[1] ) . '</span></label></td><td>';
		if ( $is_textarea ) {
			echo '<textarea name="bloom_' . esc_attr( $key ) . '" rows="2">' . esc_textarea( $value ) . '</textarea>';
		} else {
			echo '<input type="text" name="bloom_' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '">';
		}
		echo '</td></tr>';
	}
	// In-stock sizes — XS / S / M / L / XL checkboxes
	$sizes_avail = bloom_get_stock_sizes( $post->ID );
	echo '<tr><td><label>In-Stock Sizes<span class="desc">Checked = in stock · Unchecked = crossed-out pill on the product page</span></label></td><td class="bloom-stock-row">';
	foreach ( array( 'XS', 'S', 'M', 'L', 'XL' ) as $sz ) {
		$key  = 'stock_' . strtolower( $sz );
		$chk  = ! empty( $sizes_avail[ $sz ] ) ? 'checked' : '';
		echo '<label><input type="checkbox" name="bloom_' . esc_attr( $key ) . '" value="1" ' . $chk . '> ' . esc_html( $sz ) . '</label>';
	}
	echo '</td></tr>';
	echo '</tbody></table>';
	echo '<p style="margin-top:18px;color:#666;font-style:italic;">Tip: the WhatsApp button automatically pre-fills the message with the product title and SKU.</p>';
}

function bloom_save_product_meta( $post_id ) {
	if ( ! isset( $_POST['bloom_product_details_nonce'] ) ) return;
	if ( ! wp_verify_nonce( $_POST['bloom_product_details_nonce'], 'bloom_product_details' ) ) return;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
	$keys = array( 'designer', 'designer_url', 'price', 'sku', 'color', 'fabric', 'availability', 'occasion', 'short_desc', 'whatsapp', 'image_url' );
	foreach ( $keys as $k ) {
		if ( isset( $_POST[ 'bloom_' . $k ] ) ) {
			update_post_meta( $post_id, '_bloom_' . $k, sanitize_text_field( wp_unslash( $_POST[ 'bloom_' . $k ] ) ) );
		}
	}
	// Persist per-size stock state — checkboxes only post when checked, so we write empty for unchecked.
	foreach ( array( 'xs', 's', 'm', 'l', 'xl' ) as $sz ) {
		$val = isset( $_POST[ 'bloom_stock_' . $sz ] ) ? '1' : '';
		update_post_meta( $post_id, '_bloom_stock_' . $sz, $val );
	}
}
add_action( 'save_post_bloom_product', 'bloom_save_product_meta' );

/* ── WhatsApp link helper ── */
function bloom_whatsapp_link( $product_id = null, $context = 'inquire' ) {
	$default_phone = '966112111026';
	if ( ! $product_id ) {
		$msg = "Hello BLOOM, I'd like to inquire about your collection.";
		return 'https://wa.me/' . $default_phone . '?text=' . rawurlencode( $msg );
	}
	$custom = get_post_meta( $product_id, '_bloom_whatsapp', true );
	$phone  = $custom ? preg_replace( '/[^0-9]/', '', $custom ) : $default_phone;
	$title  = get_the_title( $product_id );
	$sku    = get_post_meta( $product_id, '_bloom_sku', true );
	$sku_tag = $sku ? ' (SKU: ' . $sku . ')' : '';
	switch ( $context ) {
		case 'bag':
			$msg = sprintf( "Hi BLOOM, I'd like to reserve the %s%s. Please share availability and next steps.", $title, $sku_tag );
			break;
		case 'stylist':
			$msg = sprintf( "Hi BLOOM, I'd like to speak with a stylist about the %s%s.", $title, $sku_tag );
			break;
		default:
			$msg = sprintf( "Hi BLOOM, I'm interested in %s%s. Can you please share more details?", $title, $sku_tag );
	}
	return 'https://wa.me/' . $phone . '?text=' . rawurlencode( $msg );
}

/* ── Price helpers ── deterministic dummy fallback so existing products show a price until the admin sets one. */
function bloom_get_price( $product_id ) {
	$raw = get_post_meta( $product_id, '_bloom_price', true );
	$num = (int) preg_replace( '/[^0-9]/', '', (string) $raw );
	if ( $num > 0 ) return $num;
	// Deterministic placeholder tied to post ID — keeps prices stable across reloads.
	$ladder = array( 4800, 6500, 7900, 9500, 11800, 14500, 17200, 21000, 26500, 32000 );
	return $ladder[ $product_id % count( $ladder ) ];
}
function bloom_format_price( $n ) {
	return 'SAR ' . number_format( (int) $n );
}

/* ── Per-size in-stock map (XS, S, M, L, XL → bool) ── */
function bloom_get_stock_sizes( $product_id ) {
	$out = array();
	foreach ( array( 'XS', 'S', 'M', 'L', 'XL' ) as $sz ) {
		$v = get_post_meta( $product_id, '_bloom_stock_' . strtolower( $sz ), true );
		$out[ $sz ] = ( $v === '1' || $v === 1 || $v === true );
	}
	// If no sizes are configured at all yet, default everything to in-stock so the page doesn't render five crossed-out pills on legacy products.
	if ( ! in_array( true, $out, true ) ) {
		$out = array_fill_keys( array_keys( $out ), true );
	}
	return $out;
}

/* ── Image URL normalizer ── resolves root-relative paths (/wp-content/...) to absolute URLs so they work under WordPress subdirectory installs (e.g. http://localhost/bloom/). Leaves absolute URLs and protocol-relative URLs alone. */
function bloom_normalize_image_url( $url ) {
	if ( ! $url ) return '';
	if ( strpos( $url, '/' ) === 0 && strpos( $url, '//' ) !== 0 ) {
		return home_url( $url );
	}
	return $url;
}

/* ── Product card renderer (shared by shop, collection archive, homepage grid) ── */
function bloom_render_product_card( $post_id ) {
	$designer = get_post_meta( $post_id, '_bloom_designer', true );
	$occasion = get_post_meta( $post_id, '_bloom_occasion', true );
	$short    = get_post_meta( $post_id, '_bloom_short_desc', true );
	$avail    = get_post_meta( $post_id, '_bloom_availability', true );
	$thumb    = get_the_post_thumbnail_url( $post_id, 'large' );
	if ( ! $thumb ) $thumb = get_post_meta( $post_id, '_bloom_image_url', true );
	$thumb    = bloom_normalize_image_url( $thumb );
	$no_image = empty( $thumb );
	$wa = bloom_whatsapp_link( $post_id );
	$single = get_permalink( $post_id );
	static $idx = 0; $idx++;
	$delay_class = 'rv-d' . ( ( ( $idx - 1 ) % 4 ) + 1 );
	?>
	<article class="p-card rv <?php echo esc_attr( $delay_class ); ?>">
		<div class="p-img <?php echo $no_image ? 'p-img-placeholder' : ''; ?>">
			<?php if ( $no_image ) : ?>
				<div class="p-img-fallback"><span class="p-img-icon">✦</span><span class="p-img-name"><?php echo esc_html( get_the_title( $post_id ) ); ?></span></div>
			<?php else : ?>
				<div class="p-img-bg" style="background-image:url('<?php echo esc_url( $thumb ); ?>');"></div>
			<?php endif; ?>
			<a href="<?php echo esc_url( $single ); ?>" class="p-img-link" aria-label="View <?php echo esc_attr( get_the_title( $post_id ) ); ?>"></a>
			<?php if ( $avail ) : ?><span class="p-badge"><?php echo esc_html( $avail ); ?></span><?php endif; ?>
			<div class="p-hover">
				<a href="<?php echo esc_url( $wa ); ?>" target="_blank" rel="noopener" class="p-hover-btn p-add-bag">Inquire on WhatsApp</a>
				<a href="<?php echo esc_url( $single ); ?>" class="p-hover-btn p-inquire">View Details</a>
			</div>
		</div>
		<a href="<?php echo esc_url( $single ); ?>" class="p-name-link"><div class="p-name"><?php echo esc_html( get_the_title( $post_id ) ); ?></div></a>
		<div class="p-meta">
			<?php if ( $short ) : ?><span class="p-occ"><?php echo esc_html( $short ); ?></span><?php endif; ?>
			<?php if ( $occasion ) : ?><span class="p-occ"><?php echo esc_html( $occasion ); ?></span><?php endif; ?>
		</div>
	</article>
	<?php
}

/* ── Flush rewrite rules when theme activates ── */
function bloom_flush_rewrites() {
	bloom_register_products();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'bloom_flush_rewrites' );
