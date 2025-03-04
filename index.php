<?php get_header(); ?>
<main class="p-post">
    <div class="container">
        <div class="p-post__list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a class="p-post__card" href="<?php the_permalink(); ?>">
                <article>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="p-post__card__thumb">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="p-post__card__body">
                        <span><?php echo get_the_date('Y.m.d'); ?></span>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            </a>
            <?php endwhile; else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>