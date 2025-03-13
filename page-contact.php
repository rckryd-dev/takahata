<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>
<main class="p-contact">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'CONTACT',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'お問い合わせ']
    ],
    'menu_items' => [
      'お問い合わせ' => ['url' => '#contact-form', 'target' => ''],
      'よくある質問' => ['url' => '#contact-qna', 'target' => '']
    ]
  ]);
  ?>
  <section class="p-contact__content" id="contact-form">
    <div class="wrapper">
        <div class="p-contact__content__head">
          <p class="text-2xl font-bold bg-primary px-2 py-1.5 w-fit mx-auto">お電話でのお問い合わせ</p>
          <div class="p-contact__content__head__tel">
            <div class="p-contact__content__head__tel__info">
							<a href="tel:052-352-7700">052-352-7700</a>
						</div>
						<p class="p-contact__content__head__tel__hours">受付時間　09:00～19:00</p>
					</div>
          <p class="text-2xl font-bold bg-primary px-2 py-1.5 w-fit mx-auto">フォームでのお問い合わせ</p>

          <p class="p-contact__content__head__text">弊社へのお問い合わせ・エントリーは、<br>下記のお問い合わせフォームよりお問い合わせください。</p>

          <?php
            $current_url = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $steps = [
              "contact" => "入力",
              "confirm" => "確認",
              "complete" => "完了",
            ];
          ?>

          <ul class="p-contact__content__head__steps">
            <?php foreach ($steps as $path => $label) : ?>
              <li class="<?php echo ($current_url === $path) ? 'is-current' : ''; ?>">
                  <?php echo $label; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>