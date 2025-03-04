<?php get_header(); ?>
<main>
    <div class="container">
        <h1><?php esc_html_e('404 - Page Not Found', 'your-theme'); ?></h1>
        <p><?php esc_html_e('お探しのページは存在しません。', 'your-theme'); ?></p>
        <a href="<?php echo home_url(); ?>">Go to Homepage</a>
    </div>
</main>
<?php get_footer(); ?>