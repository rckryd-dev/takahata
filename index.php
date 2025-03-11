<?php get_header(); ?>
<main class="p-post">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'NEWS',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'お知らせ']
    ],
    'menu_items' => array_merge(
      ['All' => ['url' => esc_url(get_permalink(get_page_by_path('news'))), 'target' => '', 'this_page' => true]],

      array_reduce(get_categories(), function ($menu, $category) {
        $current_category = get_queried_object();
        
        // Skip "Uncategorized"
        // if ($category->term_id === 1) {
        //   return $menu;
        // }

        $menu[$category->name] = [
          'url' => get_category_link($category->term_id),
          'target' => '',
          'this_page' => (isset($current_category->name) && $current_category->name === $category->name)
        ];
        return $menu;
      }, [])
    )
  ]);
  ?>

  <section>
    <div class="p-post__list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="p-post__card">
        <?php if (has_post_thumbnail()) : ?>
          <div class="p-post__card__thumb">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <div class="p-post__card__body">
          <div class="p-post__card__body__props">
            <span><?php echo get_the_date('Y.m.d'); ?></span>
            <?php
            $post_categories = get_the_category();
            if (!empty($post_categories)) :
              foreach ($post_categories as $post_category) :
                // if ($post_category->term_id === 1) {
                //   continue;
                // }            
            ?>
              <a href="<?php echo get_category_link($post_category->term_id); ?>">
                <?php echo esc_html($post_category->name); ?>
              </a>
            <?php 
              endforeach;
            endif;
            ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="p-post__card__body__title">
            <h2><?php the_title(); ?></h2>
          </a>
        </div>
      </article>
      <?php endwhile; else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>