<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<main>
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <p>ini adalah about page</p>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>