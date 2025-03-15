<?php
/**
 * Template Name: Parts Page
 */
get_header();
?>
<main class="p-service" id="service-parts">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'CAR PARTS',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス ', 'url' => home_url() . '/service'],
      ['label' => ' パーツ販売']
    ]
  ]);
  ?>

  <section data-bg-color="black" class="p-service__top">
    <div class="wrapper">
      <div class="slide-bg-text">
        <div class="slide-bg-text__item mx-auto">
          <span class="max-md:hidden">車検・メンテナンスなどで必要になったパーツは、</span>
          <span class="md:hidden">車検・メンテナンスなどで必要になったパーツは、</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span class="max-md:hidden">お客様のご希望に合わせてすべて取り寄せが可能です。</span>
          <span class="md:hidden">お客様のご希望に合わせて</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>すべて取り寄せが可能です。</span>
        </div>
      </div>
    </div>
  </section>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-banner.jpg" class="w-full">

  <section data-bg-color="black" class="style-01" id="parts">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>CAR PARTS</h2>
        <p>パーツ販売</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-img-01.jpg">
        <p>
        基準に満たないパーツは交換し、それ以外のパーツの<br>交換はお客様とのご相談で決定します。<br>どんなパーツでも、お気軽にお申し付けください。
        </p>
      </div>
      <div class="grid-list mt-15 md:mt-18">
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-01.svg">
            <p>外装</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-02.svg">
            <p>エンジン</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-03.svg">
            <p>排気系</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-04.svg">
            <p>ブレーキ</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-05.svg">
            <p>吸気・冷却系</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-06.svg">
            <p>駆動系</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-07.svg">
            <p>足回り</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-08.svg">
            <p>タイヤ</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-09.svg">
            <p>ボディー・シャーシ</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-10.svg">
            <p>内装</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-11.svg">
            <p>電子機器</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-12.svg">
            <p>オーディオ</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-13.svg">
            <p>ホイール</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-14.svg">
            <p>電飾系</p>
          </div>
        </div>
        <div class="fadeUpStag">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-parts-icon-15.svg">
            <p>消耗品</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>