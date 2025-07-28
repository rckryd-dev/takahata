<?php
/**
 * Template Name: Maintenance Page
 */
get_header();
?>
<main class="p-service" id="service-maintenance">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'MAINTENANCE',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス ', 'url' => home_url() . '/service'],
      ['label' => '整備']
    ],
    'menu_items' => [
        '整備' => ['url' => '#maintenance', 'target' => ''],
    ]
  ]);
  ?>

  <section data-bg-color="black" class="p-service__top">
    <div class="wrapper">
      <div class="slide-bg-text">
        <div class="slide-bg-text__item mx-auto">
          <span>認証整備工場での法定点検・分解整備を行い、</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span>自動車整備に関するトータルサポートが可能です。</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span>豊富な設備環境で丁寧に仕上げます。</span>
        </div>
      </div>
    </div>
  </section>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-maintenance-banner.jpg" class="w-full">

  <section data-bg-color="black" class="style-01" id="maintenance">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>MAINTENANCE</h2>
        <p>整備</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-maintenance-img-01.jpg">
        <p>
        設備・技術・経験豊富なスタッフの組み合わせで、<br>お客様が安全にご乗車いただけるように<br>丁寧に整備いたします。
        </p>
      </div>
      <div class="px-5 max-md:px-6.25 pt-14 md:pt-12">
        <div class="point-list">
          <div class="point-list__item fadeUp">
            <div class="point-list__num">01</div>
            <div class="point-list__desc">
              <h3>修理</h3>
              <p>
                事故による傷をベテランのスタッフが丁寧に修復し、<br class="md:hidden">お客様の自慢の愛車を復活させます。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-maintenance-icon-01.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">02</div>
            <div class="point-list__desc">
              <h3>鈑金</h3>
              <p>
                事故による変形・へこみをプロの技術で元通りに修復し、新車同然の美しい外観を保ちます。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-maintenance-icon-02.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">03</div>
            <div class="point-list__desc">
              <h3>塗装</h3>
              <p>
                経年劣化や事故などで剥がれてしまったボディを丁寧に塗装します。<br class="max-md:hidden">ボディカラーのご希望など丁寧にヒアリングさせていただきます。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-maintenance-icon-03.svg">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="max-md:h-20"></div>
  <?php get_template_part('parts/page-to-top') ?>
</main>
<?php get_footer(); ?>