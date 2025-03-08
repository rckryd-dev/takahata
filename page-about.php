<?php
/**
 * Template Name: About Page
 */
get_header();
?>
<main class="p-about">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'ABOUT',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'タカハタとは']
    ]
  ]);
  ?>

  <section data-bg-color="yellow" class="about-top">
    <div class="wrapper">
      <h2 class="relative">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/who-is-takahata.svg" alt="WHO IS TAKAHATA">
        <span>タカハタとは何者だ</span>
      </h2>
      <p id="about-desc" class="mt-8 md:mt-11">
        私たちは、自動車販売と整備を通じて、<br class="md:hidden">お客様との対等な 50:50の関係を大切にし、<br>
        共に最適なカーライフを実現します。<br>
        思いやりを基にしたサービス種神と企業努力を惜します、<br>
        日々品質の向上に努めることで<br class="md:hidden">お客様との縁を繋いで来ました。<br>
        <br>
        急なトラブルにも即時対応できる体制を整え、<br>
        お客様の安心と安全を最優先に考えたサービスをご提供。<br>
        また、専任のコンセルジュが<br class="md:hidden">ご相談から購入後のサポートまで丁寧に対応し、<br>
        快適なドライブ体験をお約束します。
      </p>
    </div>
  </section>
</main>
<?php get_footer(); ?>