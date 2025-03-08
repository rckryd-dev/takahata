<?php
$title = isset($args['title']) ? $args['title'] : 'PAGE TITLE';
$breadcrumbs = isset($args['breadcrumbs']) ? $args['breadcrumbs'] : null; // Breadcrumb opsional
$menu_items = isset($args['menu_items']) ? $args['menu_items'] : null; // Anchor opsional
?>

<section class="s-title" data-bg-color="black">
    <h1><?php echo esc_html($title); ?></h1>

    <?php if ($breadcrumbs && !empty($breadcrumbs)) : ?>
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

<?php if ($menu_items && !empty($menu_items)) : ?>
    <div class="anchor">
        <ul>
            <?php foreach ($menu_items as $label => $item) : ?>
                <li>
                    <a href="<?php echo esc_url($item['url']); ?>" 
                       <?php echo !empty($item['target']) ? 'target="' . esc_attr($item['target']) . '"' : ''; ?>>
                        <?php echo esc_html($label); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
