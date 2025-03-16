<?php get_header(); ?>
<main>
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>

        <!-- Related Posts -->
        <div class="related-posts">
            <h3>Related Posts</h3>
            <ul>
                <?php
                $categories = wp_get_post_categories(get_the_ID());
                if ($categories) {
                    $args = array(
                        'category__in'   => $categories,
                        'post__not_in'   => array(get_the_ID()), // Exclude current post
                        'posts_per_page' => 4,
                        'orderby'        => 'rand' // Random order
                    );

                    $related_posts = new WP_Query($args);

                    if ($related_posts->have_posts()) {
                        while ($related_posts->have_posts()) {
                            $related_posts->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="related-thumbnail">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php the_title(); ?>
                                </a>
                            </li>
                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo '<li>No related posts found.</li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <?php get_template_part('parts/page-to-top') ?>
</main>
<?php get_footer(); ?>
