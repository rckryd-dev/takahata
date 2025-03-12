<?php get_header(); ?>
<main class="p-posts">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'NEWS',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'お知らせ']
    ],
    'menu_items' => array_merge(
      ['All' => ['url' => get_permalink(get_option('page_for_posts')), 'target' => '', 'this_page' => true]],

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
    <div class="wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="post-card fadeUp">
        <div class="post-card__thumb">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.svg" alt="">
          <?php endif; ?>
        </div>
        <div class="post-card__body">
          <div class="post-card__body__props">
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
          <a href="<?php the_permalink(); ?>" class="post-card__body__title">
            <h2><?php the_title(); ?></h2>
            <span></span>
          </a>
        </div>
      </article>
      <?php endwhile; else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>

    <div class="p-posts__pagination">
      <?php
      echo paginate_links(array(
        'total' => $wp_query->max_num_pages,
        'prev_text' => 'Prev',
        'next_text' => 'Next ',
      ));
      ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>