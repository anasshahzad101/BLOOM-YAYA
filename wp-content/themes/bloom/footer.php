<?php
/**
 * Shared site footer — rendered on every page that calls get_footer().
 * Templates that already have an inline <footer class="footer"> block bypass
 * this output naturally because they only call get_footer() AFTER their own
 * footer markup, so the page just gets one consistent footer.
 *
 * If a template was missing its inline footer, this provides the full BLOOM
 * footer automatically.
 */

// Detect whether this template already echoed an inline <footer class="footer">.
// We do this by checking the global $bloom_footer_rendered flag templates can set.
if ( ! ( isset( $GLOBALS['bloom_footer_rendered'] ) && $GLOBALS['bloom_footer_rendered'] ) ) :
?>
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
      <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="ft-link">Shop — All Pieces</a>
      <a href="<?php echo esc_url( home_url('/collection/evening-dresses/') ); ?>" class="ft-link">Evening Dresses</a>
      <a href="<?php echo esc_url( home_url('/collection/dresses/') ); ?>" class="ft-link">Dresses</a>
      <a href="<?php echo esc_url( home_url('/collection/new-arrivals/') ); ?>" class="ft-link">New Arrivals</a>
      <a href="<?php echo esc_url( home_url('/collection/blouses/') ); ?>" class="ft-link">Blouses</a>
      <a href="<?php echo esc_url( home_url('/collection/skirts/') ); ?>" class="ft-link">Skirts</a>
      <a href="<?php echo esc_url( home_url('/collection/trousers-slacks/') ); ?>" class="ft-link">Trousers / Slacks</a>
      <a href="<?php echo esc_url( home_url('/collection/accessories/') ); ?>" class="ft-link">Accessories</a>
    </div>
    <div>
      <div class="ft-col-title">House</div>
      <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="ft-link">Our Heritage</a>
      
      <a href="<?php echo esc_url( home_url('/lookbook/') ); ?>" class="ft-link">Lookbook SS26</a>
      <a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="ft-link">Blog</a>
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="ft-link">Contact</a>
    </div>
    <div>
      <div class="ft-col-title">Connect</div>
      <a href="https://wa.me/966112111026" target="_blank" rel="noopener" class="ft-link">WhatsApp</a>
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
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
