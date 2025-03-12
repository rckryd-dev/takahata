<?php get_header(); ?>
<main class="p-post">
<?php
  get_template_part('parts/title-section', null, [
    'title' => 'NEWS',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'お知らせ', 'url' => get_permalink(get_option('page_for_posts'))]
    ]
  ]);
  ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="post-content">
    <article>
      <div class="wrapper mb-12 md:mb-13.5">
        <div class="post-content__props">
          <span><?php echo get_the_date('Y.m.d'); ?></span>
          <?php
          $post_categories = get_the_category();
          if (!empty($post_categories)) :
            foreach ($post_categories as $post_category) :           
          ?>
            <a href="<?php echo get_category_link($post_category->term_id); ?>">
              <?php echo esc_html($post_category->name); ?>
            </a>
          <?php 
            endforeach;
          endif;
          ?>
        </div>
        <h1><?php the_title(); ?></h1>
      </div>

      <div class="max-w-270 mx-auto mb-20 max-md:mb-14.5">
        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail('full'); ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="wrapper">

        <?php the_content(); ?>

        <a class="btn btn--primary group mx-auto mt-15 md:mt-24" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
          <span>BACK</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow-black.svg" alt="Arrrow" class="-abs">
        </a>
      </div>
    </article>
  </section>

  <section class="post-related" data-bg-color='black'>
    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>OTHER NEWS</h2>
        <p>関連記事</p>
      </div>
      
      <div class="post-related__list">
        <?php
        $categories = wp_get_post_categories(get_the_ID());
        if ($categories) {
          $args = array(
            'category__in'   => $categories,
            'post__not_in'   => array(get_the_ID()),
            'posts_per_page' => 4,
            'orderby'        => 'rand'
          );

          $related_posts = new WP_Query($args);
          if ($related_posts->have_posts()) :
            while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
              <article class="post-card">
                <div class="post-card__thumb">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
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
            <?php endwhile;
            wp_reset_postdata();
          else :
            echo '<p>No related posts found.</p>';
          endif;
        }
        ?>
      </div>
    </div>
  </section>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
