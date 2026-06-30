<?php
/**
 * Template â€” Lookbook
 * Auto-detected for the "lookbook" page slug.
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
  <div class="pl-sub">The Lookbook Â· SS26</div>
  <div class="pl-prog"></div>
</div>

<!-- Custom Cursor -->
<div class="cur-d" id="curD"></div>
<div class="cur-r" id="curR"></div>

<!-- WhatsApp Float -->
<a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="wa-float" id="waFloat" aria-label="WhatsApp stylist">
  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
  <span class="wa-label">Speak to a stylist</span>
</a>

<!-- Toast -->
<!-- Cart -->
<!-- Mobile Menu -->
<div class="mob-menu" id="mobMenu">
  <button class="mob-close" id="mobClose" aria-label="Close menu">âœ•</button>
  <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
  <a href="<?php echo esc_url( home_url('/shop/') ); ?>">Shop</a>
  <a href="<?php echo esc_url( home_url('/collection/') ); ?>">Collection</a>
  <a href="<?php echo esc_url( home_url('/designers/') ); ?>">Designers</a>
  <a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a>
  <a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a>
  <a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a>
</div>

<!-- Whisper Bar -->
<div class="whisper" role="complementary">
  <span class="whisper-track">
    <span>GCC-wide delivery</span>
    <span class="dot">âœ¦</span>
    <span>Kingdom Mall, Riyadh</span>
    <span class="dot">âœ¦</span>
    <span>Complimentary styling consultation</span>
    <span class="dot">âœ¦</span>
    <span>Spring / Summer 2026</span>
  </span>
</div>

<!-- Navigation -->
<nav class="nav on-dark" id="mainNav" aria-label="Primary navigation">
  <div class="nav-left">
    <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="n-link">Shop</a>
    <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="n-link">Collection</a>
    <a href="<?php echo esc_url( home_url("/designers/") ); ?>" class="n-link">Designers</a>
  </div>
  <a href="<?php echo esc_url( home_url("/") ); ?>" class="n-logo" aria-label="BLOOM home">BLOOM</a>
  <div class="nav-right">
    <a href="<?php echo esc_url( home_url("/about/") ); ?>" class="n-link n-right-link">About</a>
    <a href="<?php echo esc_url( home_url("/blog/") ); ?>" class="n-link n-right-link">Blog</a>
    <a href="<?php echo esc_url( home_url("/contact/") ); ?>" class="n-link n-right-link">Contact</a>
    <a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="n-icon-btn" title="WhatsApp a stylist" aria-label="WhatsApp stylist">
      <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
    <button class="n-burger" id="burger" aria-label="Open menu"><span></span><span></span></button>
  </div>
  <div class="nav-rule"></div>
</nav>

<main>

<!-- â•â•â• HERO â•â•â• -->
<section class="lb-hero" id="lbHeroSection" aria-labelledby="lbTitle">
  <div class="lb-hero-img" style="background-image:url('https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=2000&q=85&auto=format');" role="img" aria-label="SS26 Lookbook cover"></div>
  <div class="lb-hero-grad"></div>
  <div class="lb-hero-ct">
    <nav class="lb-crumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url("/") ); ?>">Home</a>
      <span class="sep">/</span>
      <span>Lookbook</span>
    </nav>
    <div class="lb-eyebrow">Spring / Summer 2026</div>
    <h1 class="lb-title" id="lbTitle">The <em>Vow</em>.</h1>
    <p class="lb-sub">Twelve looks photographed at Al Murabba Palace, Riyadh. A meditation on what it means to dress for the moments that will outlive the evening.</p>
  </div>
</section>

<!-- â•â•â• MASTHEAD CREDITS â•â•â• -->
<section class="lb-credits" aria-label="Editorial credits">
  <div><div class="lb-cred-l">Season</div><div class="lb-cred-v">Spring / Summer 2026</div></div>
  <div><div class="lb-cred-l">Photographed</div><div class="lb-cred-v">Al Murabba Palace, Riyadh</div></div>
  <div><div class="lb-cred-l">Date</div><div class="lb-cred-v">March 2026</div></div>
  <div><div class="lb-cred-l">Looks</div><div class="lb-cred-v">Twelve Â· Across seven maisons</div></div>
</section>

<!-- â•â•â• INTRO â•â•â• -->
<section class="lb-intro">
  <p class="lb-intro-q" id="lbIntro">
    A gown is a <em>vow</em> â€” to the woman who wears it, to the <em>room</em> she enters, and to the moment she <em>chose</em> to be remembered.
  </p>
  <div class="lb-intro-meta">The Vow Collection Â· SS26</div>
</section>

<!-- â•â•â• LOOK 01 â€” Split, image left â•â•â• -->
<section class="lb-section warm">
  <div class="lb-split rv">
    <div class="lb-split-img">
      <div class="lb-split-img-bg" style="background-image:url('https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=1200&q=85&auto=format');" role="img" aria-label="Look 01 Aurora â€” Elie Saab gown"></div>
      <div class="lb-split-frame"></div>
      <span class="lb-split-num">01 / 12</span>
    </div>
    <div class="lb-split-meta">
      <div class="lb-meta-num"><em>01</em></div>
      <div class="lb-meta-tag">The Opening</div>
      <h2 class="lb-meta-name">Aurora</h2>
      <div class="lb-meta-designer">Elie Saab Â· SS26</div>
      <p class="lb-meta-desc">Ivory tulle, embroidered by hand over forty hours. The kind of gown that arrives before its wearer does â€” and stays in the room long after she has left.</p>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#evening" class="lb-meta-cta">Shop the look â†’</a>
    </div>
  </div>
</section>

<!-- â•â•â• LOOK 02 + 03 â€” 2-up â•â•â• -->
<section class="lb-section">
  <div class="lb-row-head rv">
    <div class="lb-row-l">The Pair</div>
    <h2 class="lb-row-t">Two moods. <em>One</em> evening.</h2>
  </div>
  <div class="lb-two">
    <article class="lb-tile rv rv-d1">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1566174053879-31528523f8ae?w=1000&q=85&auto=format');" role="img" aria-label="Look 02 SolÃ¨ne â€” Marchesa cocktail dress"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">02 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Cocktail</div>
        <h3 class="lb-tile-name">SolÃ¨ne</h3>
        <div class="lb-tile-des">Marchesa Â· Italian crepe with crystal beadwork</div>
      </div>
    </article>
    <article class="lb-tile rv rv-d2">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=1000&q=85&auto=format');" role="img" aria-label="Look 03 Mira â€” Saiid Kobeisy"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">03 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Wedding Guest</div>
        <h3 class="lb-tile-name">Mira</h3>
        <div class="lb-tile-des">Saiid Kobeisy Â· Metallic jacquard, structured shoulder</div>
      </div>
    </article>
  </div>
</section>

<!-- â•â•â• LOOK 04 â€” Full-bleed â•â•â• -->
<section class="lb-full rv" aria-label="Look 04 Vespera â€” Zuhair Murad">
  <div class="lb-full-img" style="background-image:url('https://images.unsplash.com/photo-1485968579580-b6d095142e6e?w=2000&q=85&auto=format');" role="img" aria-label="Vespera silhouette"></div>
  <div class="lb-full-grad"></div>
  <div class="lb-full-ct">
    <div class="lb-full-num"><em>04</em></div>
    <div class="lb-full-info">
      <div class="lb-full-tag">The Centrepiece</div>
      <h2 class="lb-full-name">Vespera</h2>
      <div class="lb-full-designer">Zuhair Murad Â· SS26</div>
    </div>
  </div>
</section>

<!-- â•â•â• LOOK 05â€“07 â€” 3-up grid â•â•â• -->
<section class="lb-section warm">
  <div class="lb-row-head rv">
    <div class="lb-row-l">The Trio</div>
    <h2 class="lb-row-t">Three silhouettes, written in <em>silk</em>.</h2>
  </div>
  <div class="lb-three">
    <article class="lb-tile rv rv-d1">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1572804013427-4d7ca7268217?w=900&q=85&auto=format');" role="img" aria-label="Look 05 Layla â€” Reem Acra"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">05 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Evening</div>
        <h3 class="lb-tile-name">Layla</h3>
        <div class="lb-tile-des">Reem Acra</div>
      </div>
    </article>
    <article class="lb-tile rv rv-d2">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=900&q=85&auto=format');" role="img" aria-label="Look 06 Selene â€” Tony Ward"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">06 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Couture</div>
        <h3 class="lb-tile-name">Selene</h3>
        <div class="lb-tile-des">Tony Ward</div>
      </div>
    </article>
    <article class="lb-tile rv rv-d3">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=900&q=85&auto=format');" role="img" aria-label="Look 07 Yasmin â€” Jovani"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">07 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Cocktail</div>
        <h3 class="lb-tile-name">Yasmin</h3>
        <div class="lb-tile-des">Jovani</div>
      </div>
    </article>
  </div>
</section>

<!-- â•â•â• LOOK 08 â€” Split reversed (image right) â•â•â• -->
<section class="lb-section dark">
  <div class="lb-split reverse rv">
    <div class="lb-split-meta">
      <div class="lb-meta-num"><em>08</em></div>
      <div class="lb-meta-tag">The Hush</div>
      <h2 class="lb-meta-name">Noor</h2>
      <div class="lb-meta-designer">Georges Hobeika Â· SS26</div>
      <p class="lb-meta-desc">Champagne silk, cut on the bias so it falls like water. Wear it to the dinner where the conversation matters more than the entrance.</p>
      <a href="<?php echo esc_url( home_url("/collection/") ); ?>#evening" class="lb-meta-cta">Shop the look â†’</a>
    </div>
    <div class="lb-split-img">
      <div class="lb-split-img-bg" style="background-image:url('https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=1200&q=85&auto=format');" role="img" aria-label="Look 08 Noor â€” Georges Hobeika"></div>
      <div class="lb-split-frame"></div>
      <span class="lb-split-num">08 / 12</span>
    </div>
  </div>
</section>

<!-- â•â•â• LOOK 09 + 10 â€” 2-up â•â•â• -->
<section class="lb-section">
  <div class="lb-row-head rv">
    <div class="lb-row-l">The Conversation</div>
    <h2 class="lb-row-t">Day to evening. <em>Sister</em> silhouettes.</h2>
  </div>
  <div class="lb-two">
    <article class="lb-tile rv rv-d1">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=1000&q=85&auto=format');" role="img" aria-label="Look 09 Lina â€” Naeem Khan"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">09 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Day Couture</div>
        <h3 class="lb-tile-name">Lina</h3>
        <div class="lb-tile-des">Naeem Khan Â· Hand-painted silk</div>
      </div>
    </article>
    <article class="lb-tile rv rv-d2">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1581338834647-b0fb40704e21?w=1000&q=85&auto=format');" role="img" aria-label="Look 10 Dalia â€” Elie Saab"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">10 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Evening</div>
        <h3 class="lb-tile-name">Dalia</h3>
        <div class="lb-tile-des">Elie Saab Â· Crystal embellishment</div>
      </div>
    </article>
  </div>
</section>

<!-- â•â•â• LOOK 11 + 12 â€” Bridal closing pair â•â•â• -->
<section class="lb-section warm">
  <div class="lb-row-head rv">
    <div class="lb-row-l">The Closing</div>
    <h2 class="lb-row-t">Two vows. <em>One</em> chapter.</h2>
  </div>
  <div class="lb-two">
    <article class="lb-tile rv rv-d1">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=1000&q=85&auto=format');" role="img" aria-label="Look 11 Faye â€” Marchesa Bridal"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">11 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Bridal</div>
        <h3 class="lb-tile-name">Faye</h3>
        <div class="lb-tile-des">Marchesa Bridal Â· Cathedral length</div>
      </div>
    </article>
    <article class="lb-tile rv rv-d2">
      <div class="lb-tile-img" style="background-image:url('https://images.unsplash.com/photo-1494578379344-d6c710782a3d?w=1000&q=85&auto=format');" role="img" aria-label="Look 12 Sahar â€” Reem Acra Bridal"></div>
      <div class="lb-tile-ov"></div>
      <div class="lb-tile-frame"></div>
      <span class="lb-tile-num">12 / 12</span>
      <div class="lb-tile-ct">
        <div class="lb-tile-tag">Bridal</div>
        <h3 class="lb-tile-name">Sahar</h3>
        <div class="lb-tile-des">Reem Acra Â· Hand-beaded</div>
      </div>
    </article>
  </div>
</section>

<!-- â•â•â• END CREDITS â•â•â• -->
<section class="lb-end" aria-label="Editorial credits">
  <div class="lb-end-l">In Closing</div>
  <h2 class="lb-end-t">Twelve gowns. Twelve <em>vows</em>. One season at <em>BLOOM</em>.</h2>
  <div class="lb-end-credits">
    <div class="lb-end-cred"><div class="l">Creative Direction</div><div class="v">The Bloom Atelier</div></div>
    <div class="lb-end-cred"><div class="l">Location</div><div class="v">Al Murabba Palace Â· Riyadh</div></div>
    <div class="lb-end-cred"><div class="l">Season</div><div class="v">Spring / Summer 2026</div></div>
  </div>
  <a href="<?php echo esc_url( home_url("/collection/") ); ?>" class="btn-gold"><span>Shop the collection</span><span class="arrow">â†’</span></a>
</section>

<!-- â•â•â• CTA â•â•â• -->
<section class="consult" id="consult">
  <div class="consult-bg"></div>
  <div class="consult-grad"></div>
  <div class="consult-in rv">
    <div class="con-icon">âœ¦</div>
    <h2 class="con-heading">Wear it. <em>Privately</em>.</h2>
    <p class="con-sub">Every look in this lookbook is available to view in person at our Kingdom Mall showroom. Book a private appointment and we'll have the pieces from your favourite looks pulled and pressed before you arrive.</p>
    <div class="con-btns">
      <a href="https://wa.me/966112111026?text=Hello%2C+I%27d+like+to+see+looks+from+the+SS26+lookbook" target="_blank" rel="noopener" class="btn-gold">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
        <span>Request a viewing</span>
      </a>
      <a href="<?php echo esc_url( home_url("/designers/") ); ?>" class="btn-noir"><span>Meet the designers</span></a>
    </div>
    <p class="con-note">Satâ€“Thu Â· 10 AM â€“ 10 PM Â· Kingdom Mall, Floor 2</p>
  </div>
</section>

</main>

<!-- â•â•â• FOOTER â•â•â• -->
<footer class="footer">
  <div class="ft-top">
    <div class="ft-brand">
      <div class="ft-logo">B L O O M</div>
      <div class="ft-logo-rule"></div>
      <p class="ft-tagline">Where elegance blooms â€” since 2010.</p>
      <address class="ft-addr">
        <strong>Kingdom Mall, Floor 2</strong>
        King Fahd Road, Al Olaya<br>Riyadh, Saudi Arabia<br>
        <br>+966 (11) 211 1026<br>info@bloom-fashions.com
      </address>
    </div>
    <div>
      <div class="ft-col-title">Collection</div>
      <a href="<?php echo esc_url( home_url("/shop/") ); ?>" class="ft-link">Shop â€” All Pieces</a>
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
      <a href="<?php echo esc_url( home_url("/designers/") ); ?>" class="ft-link">The Designers</a>
      <a href="<?php echo esc_url( home_url("/lookbook/") ); ?>" class="ft-link">Lookbook SS26</a>
      <a href="<?php echo esc_url( home_url("/") ); ?>#heritage" class="ft-link">Our Heritage</a>
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
    <span>Â© 2026 BLOOM Fashion Boutique Â· CR: XXXXXXXXXX Â· VAT: XXXXXXXXXXXXXXX</span>
    <div class="ft-social">
      <a href="#">Instagram</a>
      <a href="#">Snapchat</a>
      <a href="#">TikTok</a>
    </div>
    <span>bloom-fashions.com</span>
  </div>
</footer>

<script>
/* â•â•â• PRELOADER â•â•â• */
function hidePreloader(){const p=document.getElementById('preloader');if(p)p.classList.add('done');}
document.addEventListener('DOMContentLoaded',()=>setTimeout(hidePreloader,1600));
window.addEventListener('load',()=>setTimeout(hidePreloader,200));
setTimeout(hidePreloader,3000);

/* â•â•â• CURSOR â•â•â• */
const cD=document.getElementById('curD'),cR=document.getElementById('curR');
let mx=0,my=0,cx=0,cy=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cD.style.left=mx-3+'px';cD.style.top=my-3+'px';});
function aCur(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;cR.style.left=cx+'px';cR.style.top=cy+'px';requestAnimationFrame(aCur);}aCur();
document.querySelectorAll('a,button,.lb-tile,.lb-split-img,.lb-full').forEach(el=>{el.addEventListener('mouseenter',()=>cR.classList.add('hov'));el.addEventListener('mouseleave',()=>cR.classList.remove('hov'));});
document.querySelectorAll('.lb-tile,.lb-split-img,.lb-full,.lb-hero-img').forEach(el=>{el.addEventListener('mouseenter',()=>{cR.classList.add('img');cD.classList.add('hide');});el.addEventListener('mouseleave',()=>{cR.classList.remove('img');cD.classList.remove('hide');});});

/* â•â•â• NAV / WHISPER â•â•â• */
const nav=document.getElementById('mainNav');
const whisperEl=document.querySelector('.whisper');
const lbHero=document.getElementById('lbHeroSection');
function uNav(){
  const s=window.scrollY,hb=lbHero.offsetTop+lbHero.offsetHeight-100;
  nav.classList.toggle('scrolled',s>40);
  nav.classList.toggle('on-dark',s<hb);
  if(whisperEl)whisperEl.classList.toggle('hide',s>40);
}
window.addEventListener('scroll',uNav,{passive:true});uNav();

/* â•â•â• SCROLL REVEAL â•â•â• */
const rObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('vis');rObs.unobserve(en.target);}});},{threshold:.15,rootMargin:'0px 0px -60px 0px'});
document.querySelectorAll('.rv').forEach(el=>rObs.observe(el));

/* â•â•â• SCROLL PROGRESS â•â•â• */
const scrollProg=document.getElementById('scrollProgress');
function updateProg(){const h=document.documentElement.scrollHeight-window.innerHeight;scrollProg.style.transform=`scaleX(${h>0?window.scrollY/h:0})`;}
window.addEventListener('scroll',updateProg,{passive:true});

/* â•â•â• WA FLOAT â•â•â• */
const waf=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waf.classList.toggle('show',window.scrollY>500);},{passive:true});

/* â•â•â• MOBILE MENU â•â•â• */
const burger=document.getElementById('burger'),mob=document.getElementById('mobMenu'),mobClose=document.getElementById('mobClose');
if(burger)burger.addEventListener('click',()=>mob.classList.add('open'));
if(mobClose)mobClose.addEventListener('click',()=>mob.classList.remove('open'));
mob.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mob.classList.remove('open')));

/* â•â•â• LANG TOGGLE â•â•â• */

/* â•â•â• HERO PARALLAX â•â•â• */
const heroImg=document.querySelector('.lb-hero-img');
window.addEventListener('scroll',()=>{
  const s=window.scrollY;
  if(s<window.innerHeight){heroImg.style.transform=`scale(1.06) translateY(${s*.25}px)`;}
},{passive:true});

/* â•â•â• HERO CONTENT FADE â•â•â• */
const heroCt=document.querySelector('.lb-hero-ct');
window.addEventListener('scroll',()=>{
  const r=lbHero.getBoundingClientRect();
  if(r.bottom>0){const p=Math.max(0,Math.min(1,-r.top/r.height));heroCt.style.transform=`translateY(${p*60}px)`;heroCt.style.opacity=String(1-p*.85);}
},{passive:true});

/* â•â•â• SUBTLE PARALLAX ON LOOK IMAGES â•â•â• */
const parEls=[];
document.querySelectorAll('.lb-split-img-bg,.lb-full-img,.lb-tile-img').forEach(el=>parEls.push({el,parent:el.closest('.lb-split-img,.lb-full,.lb-tile')}));
let parTicking=false;
function parTick(){
  parTicking=false;
  const vh=window.innerHeight;
  parEls.forEach(p=>{
    const r=p.parent.getBoundingClientRect();
    if(r.bottom<0||r.top>vh)return;
    const mid=r.top+r.height/2;
    const off=(vh/2-mid)*.08;
    p.el.style.transform=`translate3d(0,${off}px,0)`;
  });
}
window.addEventListener('scroll',()=>{if(!parTicking){requestAnimationFrame(parTick);parTicking=true;}},{passive:true});

/* â•â•â• INTRO WORD REVEAL â•â•â• */
const intro=document.getElementById('lbIntro');
if(intro){
  const orig=intro.innerHTML;
  intro.innerHTML=orig.replace(/(\S+)/g,(w)=>{
    if(!w.trim())return w;
    return `<span class="w">${w}</span>`;
  }).replace(/<\/em>/g,'</em>');
  let widx=0;
  intro.querySelectorAll('.w').forEach(el=>{el.style.transitionDelay=(widx*30)+'ms';widx++;});
  const introObs=new IntersectionObserver(e=>{e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('in');introObs.unobserve(en.target);}});},{threshold:.2});
  introObs.observe(intro);
}

/* â•â•â• SUBTLE 3D TILT ON TILES â•â•â• */
function attachTilt(selector,intensity=3){
  document.querySelectorAll(selector).forEach(el=>{
    el.addEventListener('mousemove',e=>{
      const r=el.getBoundingClientRect();
      const dx=(e.clientX-r.left)/r.width-.5,dy=(e.clientY-r.top)/r.height-.5;
      el.style.transform=`perspective(1400px) rotateX(${-dy*intensity}deg) rotateY(${dx*intensity}deg) translateY(-6px)`;
    });
    el.addEventListener('mouseleave',()=>{el.style.transform='';});
  });
}
attachTilt('.lb-tile',3);

/* â•â•â• MAGNETIC CTAs â•â•â• */
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
attachMagnet('.btn-gold',.3);
attachMagnet('.btn-noir',.25);
attachMagnet('.n-icon-btn',.4);

/* â•â•â• RIPPLE â•â•â• */
document.addEventListener('click',e=>{
  const t=e.target.closest('.btn-gold,.btn-noir,.btn-outline,.btn-ghost');
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

updateProg();
</script>

<?php get_footer(); ?>
