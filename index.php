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
      ['All' => ['url' => esc_url(get_permalink(get_page_by_path('news'))), 'target' => '']],
      array_reduce(get_categories(), function($menu, $category) {
        $menu[$category->name] = [
          'url' => get_category_link($category->term_id),
          'target' => ''
        ];
        return $menu;
      }, [])
    )
  ]);
  ?>

  <div class="container">
    <div class="p-post__list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="p-post__card">
        <?php if (has_post_thumbnail()) : ?>
          <div class="p-post__card__thumb">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <div class="p-post__card__body">
          <div class="flex">
            <span><?php echo get_the_date('Y.m.d'); ?></span>
            <?php
            $post_categories = get_the_category();
            if (!empty($post_categories)) :
              foreach ($post_categories as $post_category) :
            ?>
              <a href="<?php echo get_category_link($post_category->term_id); ?>" class="p-post__card__category">
                <?php echo esc_html($post_category->name); ?>
              </a>
            <?php 
              endforeach;
            endif;
            ?>
          </div>
          <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
          </a>
          <?php the_excerpt(); ?>
        </div>
      </article>
      <?php endwhile; else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>