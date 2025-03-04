<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<main class="p-contact">
  <section class="p-contact__content">
    <div class="c-container">
        <div class="p-contact__content__head">
          <p class="p-contact__content__head__txt">コーエイリーフ株式会社にご興味を持っていただきありがとうございます。<br>お電話または下記お問い合わせフォームより、お気軽にお問い合わせください。</p>
          <!-- <div class="p-contact__content__head__tel">
						<div class="p-contact__content__head__tel__info">
							<h3>TEL・FAX</h3>
							<a href="tel:0564-52-3636">(059)347-5231</a>
						</div>
						<p class="p-contact__content__head__tel__hours">受付時間 : 8:30 ～ 17:00(土日祝を除く)</p>
					</div> -->

          <?php
            $current_url = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $steps = [
              "contact" => "項目の入力",
              "confirm" => "確認画面",
              "complete" => "送信完了",
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