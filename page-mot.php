<?php
/**
 * Template Name: Car Inspection Page
 */
get_header();
?>
<main class="p-service" id="service-mot">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'CAR INSPECTION',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス ', 'url' => home_url() . '/service'],
      ['label' => '車検']
    ],
  ]);
  ?>

  <section data-bg-color="black" class="p-service__top">
    <div class="wrapper">
      <div class="slide-bg-text">
        <div class="slide-bg-text__item mx-auto">
          <span>中部運輸局認証車検工場として、</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span class="max-md:hidden">地方運輸局より自動車特定整備事業の認証を受けた安心の事業者です。</span>
          <span class="md:hidden">地方運輸局より自動車特定整備事業の認証を受けた</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>安心の事業者です。</span>
        </div>
      </div>
    </div>
  </section>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-mot-banner.jpg" class="w-full">

  <section data-bg-color="black" class="style-01" id="mot">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>CAR INSPECTION</h2>
        <p>車検・整備</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-mot-img-01.jpg">
        <p>
        検査に合格するために必要な整備と、<br>お客様がより安心・安全にカーライフを<br>楽しんでいただくためのおすすめな整備をご提案します。
        </p>
      </div>
      <div class="px-5 max-md:px-6.25 pt-14 md:pt-12">
        <div class="point-list">
          <div class="point-list__item fadeUp">
            <div class="point-list__num">01</div>
            <div class="point-list__desc">
              <h3>車検申請</h3>
              <p>
              税金や基本工賃、何を交換するかなどすべて説明し、お客様の予算に合わせた適正価格でのご提案します。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-mot-icon-01.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">02</div>
            <div class="point-list__desc">
              <h3>整備</h3>
              <p>
              車検を通す際に必要となる消耗品を、車両の状態・ご予算などお客様のお好みに合わせてご提案します。また、車検時期に時間がないという方へ向けて、ご自宅まで引き取り納車を実施しています。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-mot-icon-02.svg">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="max-md:h-20"></div>
  <?php get_template_part('parts/page-to-top') ?>
</main>
<?php get_footer(); ?>