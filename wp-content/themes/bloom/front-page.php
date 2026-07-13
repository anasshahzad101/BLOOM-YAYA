<?php
/**
 * Front Page — BLOOM Couture home
 * Mirrors the editorial home page exactly.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<!-- Scroll progress bar -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- Preloader -->
<div class="preloader" id="preloader">
  <div class="pl-logo">B L O O M</div>
  <div class="pl-line"></div>
  <div class="pl-sub">Kingdom Mall · Riyadh</div>
  <div class="pl-prog"></div>
</div>

<!-- Custom Cursor -->
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<!-- WhatsApp Float -->
<a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="wa-float" id="waFloat">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a8 8 0 01-4.243-1.212l-.293-.175-3.041.797.812-2.966-.192-.304A7.963 7.963 0 014 12a8 8 0 1116 0 8 8 0 01-8 8z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
</a>

<!-- Mobile Menu -->
<div class="mob-menu" id="mobMenu">
  <button class="mob-close" id="mobClose">✕</button>
    <a href="<?php echo esc_url( home_url("/shop/") ); ?>">Shop</a>
<a href="<?php echo esc_url( home_url("/collection/") ); ?>">Collection</a>
  <a href="<?php echo esc_url( home_url("/about/") ); ?>">About</a>
  <a href="<?php echo esc_url( home_url("/blog/") ); ?>">Blog</a>
  <a href="<?php echo esc_url( home_url("/contact/") ); ?>">Contact</a>
  <a href="<?php echo esc_url( home_url("/lookbook/") ); ?>">Lookbook</a>
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
    <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="n-link">Collection</a>
  </div>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="n-logo">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url("/about/") ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="n-link n-right-link">Contact</a>
    <a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="n-icon-btn" title="WhatsApp a stylist" aria-label="WhatsApp stylist">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<!-- HERO -->
<section class="hero" id="heroSection">
  <div class="hero-img"></div>
  <div class="hero-grad"></div>
  <div class="hero-grain"></div>
  <div class="hero-ct">
    <h1 class="h-head">
      <span class="ln"><span>Dressed for</span></span>
      <span class="ln"><span>the moments</span></span>
      <span class="ln"><span>that <em>define</em> you.</span></span>
    </h1>
    <p class="h-sub">A private luxury showroom in the heart of Riyadh. Sixteen years of dressing the Kingdom's most discerning women.</p>
    <div class="h-ctas">
      <a href="#consult" class="btn-gold"><span>Book private viewing</span><span class="arrow">→</span></a>
      <a href="#collection" class="btn-ghost">Explore the collection</a>
    </div>
  </div>
  <div class="hero-scroll"><span class="scroll-t">Scroll</span><span class="scroll-l"></span></div>
</section>

<!-- Tape Marquee -->
<div class="tape">
  <div class="tape-track">
    <span class="tape-item">Couture, curated</span>
    <span class="tape-item">Where elegance unfolds</span>
    <span class="tape-item">Where elegance blooms</span>
    <span class="tape-item">Since 2010</span>
    <span class="tape-item">Kingdom Mall, Riyadh</span>
    <span class="tape-item">Couture, curated</span>
    <span class="tape-item">Where elegance unfolds</span>
    <span class="tape-item">Where elegance blooms</span>
    <span class="tape-item">Since 2010</span>
    <span class="tape-item">Kingdom Mall, Riyadh</span>
  </div>
</div>

<!-- INTRO STATEMENT -->
<section class="intro">
  <p class="intro-statement" id="introStatement">
    Some <em>women</em> dress to be seen. Others — to be <em>remembered</em>. At BLOOM, we believe a gown is not a garment, but a <em>declaration</em>. A whispered <em>certainty</em> in a room of voices.
  </p>
  <div class="intro-meta">Our Philosophy</div>
</section>

<!-- COLLECTION BENTO -->
<section class="coll" id="collection">
  <div class="coll-head sec-head rv">
    <div>
      <div class="sec-eyebrow">Shop by Category</div>
      <h2 class="sec-title">Your occasion deserves<br>more than <em>ordinary</em>.</h2>
    </div>
    <a href="#" class="sec-all">View all collections →</a>
  </div>
  <div class="coll-grid">
    <a href="#" class="coll-card rv rv-d1">
      <div class="coll-card-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf073.jpg');"></div>
      <div class="coll-card-ov"></div>
      <span class="coll-num">01</span>
      <div class="coll-ct">
        <span class="coll-tag">Signature Category</span>
        <div class="coll-name"><em>Evening</em> Dresses</div>
        <p class="coll-desc">Floor-length silhouettes for galas, formal dinners, and the moments captured in memory.</p>
        <span class="coll-arrow">Explore — 42 pieces →</span>
      </div>
    </a>
    <a href="#" class="coll-card rv rv-d2">
      <div class="coll-card-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf030.jpg');"></div>
      <div class="coll-card-ov"></div>
      <span class="coll-num">02</span>
      <div class="coll-ct">
        <span class="coll-tag">Bridal</span>
        <div class="coll-name"><em>Wedding</em></div>
        <p class="coll-desc">Bridal couture & guest collections.</p>
        <span class="coll-arrow">Explore →</span>
      </div>
    </a>
    <a href="#" class="coll-card rv rv-d3">
      <div class="coll-card-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf051.jpg');"></div>
      <div class="coll-card-ov"></div>
      <span class="coll-num">03</span>
      <div class="coll-ct">
        <span class="coll-tag">New Season</span>
        <div class="coll-name"><em>New</em> Arrivals</div>
        <p class="coll-desc">Just landed — SS26.</p>
        <span class="coll-arrow">Discover →</span>
      </div>
    </a>
    <a href="#" class="coll-card rv rv-d4">
      <div class="coll-card-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf071.jpg');"></div>
      <div class="coll-card-ov"></div>
      <span class="coll-num">04</span>
      <div class="coll-ct">
        <span class="coll-tag">Everyday Luxe</span>
        <div class="coll-name">Blouses, Skirts &amp; <em>Tailoring</em></div>
        <p class="coll-desc">For the lunches, gatherings, and weekends that still ask for elegance.</p>
        <span class="coll-arrow">Explore tailoring →</span>
      </div>
    </a>
  </div>
</section>

<!-- EDITORIAL SPLIT -->
<section class="split">
  <div class="split-img">
    <div class="split-img-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf065.jpg');"></div>
    <div class="split-img-frame"></div>
  </div>
  <div class="split-text rv">
    <div class="split-text-inner">
      <div class="sec-eyebrow">The Atelier Approach</div>
      <h2 class="split-text-h">Not a boutique. A <em>private atelier</em>.</h2>
      <p class="split-text-p">When you cross our threshold at Kingdom Mall, you don't enter a store — you enter a conversation. Our stylists know that a gown is never just about the gown. It's about the room you'll walk into, the photograph that will outlive the evening, the woman you'll be when the dress is finally yours.</p>
      <a href="#consult" class="btn-outline">Book a private viewing →</a>
    </div>
  </div>
</section>

<!-- QUOTE -->
<section class="eq rv">
  <div class="eq-mark">"</div>
  <p class="eq-text">True luxury is not about <em>price</em>. It is about the feeling of being perfectly dressed for life's most <em>meaningful</em> moments.</p>
  <div class="eq-rule"></div>
  <div class="eq-src">The Bloom Philosophy</div>
</section>

<!-- LOOKBOOK -->
<section class="look" id="lookbook">
  <div class="look-head rv">
    <div class="sec-eyebrow">SS26 Lookbook</div>
    <h2 class="sec-title">Editorial · <em>The Vow</em></h2>
    <p class="look-sub">Photographed at Al Murabba Palace, Riyadh — March 2026</p>
  </div>
  <div class="look-grid">
    <div class="look-item look-1 rv rv-d1"><div class="look-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf063.jpg');"></div><div class="look-cap-ov"></div><div class="look-cap"><div class="look-cap-t">Look 01</div><div class="look-cap-n">Aurora</div></div></div>
    <div class="look-item look-2 rv rv-d2"><div class="look-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf020.jpg');"></div><div class="look-cap-ov"></div><div class="look-cap"><div class="look-cap-t">Look 02</div><div class="look-cap-n">Solène</div></div></div>
    <div class="look-item look-3 rv rv-d3"><div class="look-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf021.jpg');"></div><div class="look-cap-ov"></div><div class="look-cap"><div class="look-cap-t">Look 03</div><div class="look-cap-n">Mira</div></div></div>
    <div class="look-item look-4 rv rv-d2"><div class="look-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf022.jpg');"></div><div class="look-cap-ov"></div><div class="look-cap"><div class="look-cap-t">Look 04</div><div class="look-cap-n">Vespera</div></div></div>
    <div class="look-item look-5 rv rv-d3"><div class="look-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf023.jpg');"></div><div class="look-cap-ov"></div><div class="look-cap"><div class="look-cap-t">Look 05</div><div class="look-cap-n">Layla</div></div></div>
    <div class="look-item look-6 rv rv-d4"><div class="look-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bf024.jpg');"></div><div class="look-cap-ov"></div><div class="look-cap"><div class="look-cap-t">Look 06</div><div class="look-cap-n">Selene</div></div></div>
  </div>
</section>

<!-- HERITAGE -->
<section class="heritage" id="heritage">
  <div class="her-img">
    <div class="her-img-bg"></div>
    <div class="her-img-frame"></div>
    <div class="her-img-label">Kingdom Mall · Floor 2</div>
  </div>
  <div class="her-text">
    <div class="her-inner rv">
      <div class="sec-eyebrow lt">Our Heritage</div>
      <h2 class="her-heading">A legacy of elegance, <em>woven</em> into every visit.</h2>
      <p class="her-body">Since 2010, BLOOM has occupied a singular place in Riyadh's luxury landscape — not as a boutique, but as a destination. Our stylists don't sell dresses. They curate wardrobes for the women who will define a generation.</p>
      <div class="her-stats">
        <div><div class="hs-num">16<span>+</span></div><div class="hs-lbl">Years of heritage</div></div>
        <div><div class="hs-num">50<span>+</span></div><div class="hs-lbl">International designers</div></div>
        <div><div class="hs-num">6</div><div class="hs-lbl">GCC countries served</div></div>
        <div><div class="hs-num">∞</div><div class="hs-lbl">Moments made perfect</div></div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<div class="trust">
  <div class="trust-item rv rv-d1"><div class="trust-icon">✦</div><div class="trust-title">GCC-Wide Delivery</div><div class="trust-desc">Saudi Arabia, UAE, Kuwait,<br>Bahrain, Qatar, Oman</div></div>
  <div class="trust-item rv rv-d2"><div class="trust-icon">◈</div><div class="trust-title">Luxury Packaging</div><div class="trust-desc">Hand-tied gift wrapping<br>with every order</div></div>
  <div class="trust-item rv rv-d3"><div class="trust-icon">↻</div><div class="trust-title">14-Day Returns</div><div class="trust-desc">Easy returns and exchanges<br>across all GCC countries</div></div>
  <div class="trust-item rv rv-d4"><div class="trust-icon">♦</div><div class="trust-title">Concierge Stylist</div><div class="trust-desc">Personal styling support<br>via WhatsApp</div></div>
</div>

<!-- JOURNAL -->
<section class="journal" id="journal">
  <div class="journal-head sec-head rv">
    <div>
      <div class="sec-eyebrow">The Journal</div>
      <h2 class="sec-title">Notes from <em>the atelier</em>.</h2>
    </div>
    <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="sec-all">All journal entries →</a>
  </div>
  <div class="journal-grid">
    <?php
    $home_journal = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
    if ( $home_journal->have_posts() ) :
      $jd = 1;
      while ( $home_journal->have_posts() ) : $home_journal->the_post();
        $j_thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        if ( ! $j_thumb ) $j_thumb = get_post_meta( get_the_ID(), '_bloom_post_image', true ); $j_thumb = bloom_normalize_image_url( $j_thumb );
        if ( ! $j_thumb ) $j_thumb = '<?php echo get_template_directory_uri(); ?>/assets/img/bf025.jpg';
        $j_cats = get_the_category();
        $j_cat  = $j_cats ? $j_cats[0]->name : 'Editorial';
        $j_read = (int) max( 1, round( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 220 ) );
    ?>
    <a class="jnl-card rv rv-d<?php echo $jd; ?>" href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit;">
      <div class="jnl-img"><div class="jnl-img-bg" style="background-image:url('<?php echo esc_url( $j_thumb ); ?>');"></div></div>
      <div class="jnl-meta"><?php echo esc_html( $j_cat ); ?><span class="sep">·</span><?php echo esc_html( get_the_date( 'F Y' ) ); ?><span class="sep">·</span><?php echo $j_read; ?> min read</div>
      <h3 class="jnl-title"><?php the_title(); ?></h3>
      <p class="jnl-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24, '…' ) ); ?></p>
      <span class="jnl-read">Read essay →</span>
    </a>
    <?php $jd++; endwhile; wp_reset_postdata(); endif; ?>
  </div>
</section>

<!-- CONSULTATION CTA -->
<section class="consult" id="consult">
  <div class="consult-bg"></div>
  <div class="consult-grad"></div>
  <div class="consult-in rv">
    <div class="con-icon">✦</div>
    <h2 class="con-heading">Your private viewing <em>awaits</em>.</h2>
    <p class="con-sub">Experience BLOOM the way it was meant to be experienced — personally. Our stylists are ready to curate the perfect selection for your occasion.</p>
    <div class="con-btns">
      <a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="btn-gold">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
        <span>Speak to a Stylist</span>
      </a>
      <a href="#" class="btn-noir"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg><span>Book Private Viewing</span></a>
    </div>
    <p class="con-note">Saturday–Thursday · 10 AM – 10 PM · Kingdom Mall, Floor 2 · Complimentary delivery across all GCC countries</p>
  </div>
</section>

<!-- NEWSLETTER -->
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

<!-- FOOTER -->
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
      <a href="#" class="ft-link">Evening Dresses</a>
      <a href="#" class="ft-link">Dresses</a>
      <a href="#" class="ft-link">New Arrivals</a>
      <a href="#" class="ft-link">Blouses</a>
      <a href="#" class="ft-link">Skirts</a>
      <a href="#" class="ft-link">Trousers / Slacks</a>
      <a href="#" class="ft-link">Accessories</a>
    </div>
    <div>
      <div class="ft-col-title">House</div>
      <a href="#" class="ft-link">Our Heritage</a>
      <a href="#" class="ft-link">The Designers</a>
      <a href="#" class="ft-link">Lookbook SS26</a>
      <a href="#" class="ft-link">Blog</a>
      <a href="#" class="ft-link">Contact</a>
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
    <span>© <?php echo date( 'Y' ); ?> BLOOM Fashion Boutique · CR: 1010245766 · VAT: 301337273200003</span>
    <div class="ft-social">
      <a href="#">Instagram</a>
      <a href="#">Snapchat</a>
      <a href="#">TikTok</a>
    </div>
    <span>bloom-fashions.com</span>
  </div>
</footer>
<?php $GLOBALS["bloom_footer_rendered"] = true; ?>

<?php get_footer(); ?>
