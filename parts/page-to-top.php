<button x-data="{ scrollToTop() { lenis.scrollTo(0); } }" @click="scrollToTop()" class="absolute bottom-5.5 right-3 cursor-pointer max-md:right-9 hover:opacity-60 transition-all duration-200">
  <picture>
    <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/page-top_sp.svg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-top.svg" class="w-23.5 md:w-18.5">
  </picture>
</button>