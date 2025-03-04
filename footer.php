<!-- <button 
  x-cloak
  x-data="{ show: false }" 
  x-on:scroll.window="show = window.scrollY > 300" 
  x-show="show"
  x-transition
  @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
  class="fixed bottom-5 right-5 p-3 bg-blue-500 text-white rounded-full shadow-lg cursor-pointer"
>
  ⬆️
</button> -->
<footer>
  <div class="container">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>