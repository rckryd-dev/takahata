<button 
  id="scrollToTop"
  x-cloak
  x-data="{ show: false }" 
  x-on:scroll.window="show = window.scrollY > 300" 
  x-show="show"
  x-transition
  @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
  class="fixed bottom-5 right-5 p-3 bg-blue-500 text-white rounded-full shadow-lg cursor-pointer"
>
  ⬆️
</button>

<footer style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-02.jpg')" class="footer">
  <div class="wrapper">
    <div class="md:flex md:justify-between">
      <a href="<?php echo home_url(); ?>" class="footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takahata-logo-black.svg" alt="<?php bloginfo('name'); ?> Logo">
      </a>

      <nav class="footer__navlinks">
        <ul>
          <?php include get_template_directory() . '/parts/navlinks.php'; ?>
          <?php foreach ($navlinks as $label => $url) : ?>
            <li>
              <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
    <p class="footer__copy">
      Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.
    </p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>