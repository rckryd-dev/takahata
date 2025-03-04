<?php get_header(); ?>
<main>
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                <p class="post-date"><?php echo get_the_date('Y.m.d'); ?></p>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <p><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">&larr; Back to Blogo</a></p>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>