<?php get_header(); ?>
<main class="p-post">
    <div class="container">

        <!-- Navigasi Kategori -->
        <nav class="p-post__categories">
            <ul>
                <?php 
                $categories = get_categories();
                foreach ($categories as $category) :
                ?>
                    <li>
                        <a href="<?php echo get_category_link($category->term_id); ?>">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

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

                        <!-- Menampilkan kategori postingan -->
                        <div class="p-post__card__categories">
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
