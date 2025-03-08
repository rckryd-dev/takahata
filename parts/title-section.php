<?php
$title = isset($args['title']) ? $args['title'] : 'PAGE TITLE';
$breadcrumbs = isset($args['breadcrumbs']) ? $args['breadcrumbs'] : [];
?>

<section class="s-title">
    <h1><?php echo esc_html($title); ?></h1>
    <?php if (!empty($breadcrumbs)) : ?>
        <div class="breadcrumb">
          <ul>
            <?php foreach ($breadcrumbs as $breadcrumb) : ?>
                <li>
                    <?php if (!empty($breadcrumb['url'])) : ?>
                        <a href="<?php echo esc_url($breadcrumb['url']); ?>">
                            <?php echo esc_html($breadcrumb['label']); ?>
                        </a>
                    <?php else : ?>
                        <span><?php echo esc_html($breadcrumb['label']); ?></span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
          </ul>
        </div>
    <?php endif; ?>
</section>
