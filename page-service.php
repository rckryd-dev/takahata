<?php
/**
 * Template Name: Service Page
 */
get_header();
?>
<main class="p-service">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'SERVICE',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス']
    ],
    'menu_items' => [
        '車販売' => ['url' => '#', 'target' => ''],
        '整備' => ['url' => '#', 'target' => ''],
        '保険' => ['url' => '#', 'target' => ''],
        'リース' => ['url' => '#', 'target' => ''],
        'コーティング' => ['url' => '#', 'target' => ''],
        '車検' => ['url' => '#', 'target' => ''],
        'パーツ販売' => ['url' => '#', 'target' => '']
    ]
  ]);
  ?>

  <section data-bg-color="black" class="service-top">
    <div class="wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/speed-ornament.svg" class="speed-ornament">
      <h2 class="relative">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-police.svg" alt="SERVICE POLICY" class="fadeUp">
        <span class="fadeUp"><span class="text-primary mr-4">信頼</span>×<span class="text-primary ml-4">挑戦</span></span>
      </h2>
      <p id="service-desc" class="mt-8 md:mt-11 fadeUp">
        タカハタの使命は、<br class="md:hidden">徹底したお客様目線のサービスを通してご縁を広げ、<br>ご縁ある全ての人々にご満足いただくこと。<br>これからも単なる自動車の販売ではなく、<br>お客様一人ひとりのライフスタイルに<br class="md:hidden">寄り添う自動車をお届けします。
      </p>

      <a href="#service-menu" class="relative block w-37.5 h-37.5 mx-auto mt-27.75">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/circle-scroll-down.svg"
          alt=""
          class="spin w-full h-full"
        />
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-double-arrow-down.svg"
          alt=""
          class="w-full h-full absolute top-0 left-0"
        />
      </a>
    </div>
  </section>

  <section data-bg-color="yellow" class="service-menu" id="service-menu">
    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>POINT</h2>
        <p>我々の大切にしている3つの信念</p>
      </div>

      <div class="point-list pt-14 md:pt-16">
        <div class="point-list__item fadeUp">
          <div class="point-list__num">01</div>
          <div class="point-list__desc">
            <h3>自動車・サービスの品質</h3>
            <p>
              安全性・機能・デザインすべてを兼ね備えた一台をご提案。<br>豊富な専門知識と熟練の経験を持つプロだけが在籍しており、お客様のご希望に合わせた<br class="max-md:hidden">最適な車選びをお手伝いします。
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-point-01.svg" alt="Icon Point 01">
        </div>
        <div class="point-list__item fadeUp">
          <div class="point-list__num">02</div>
          <div class="point-list__desc">
            <h3>徹底的にニーズに寄り添う</h3>
            <p>
              車選び・保険・アフターサービスなどを、お客様一人に対して一人の担当が一貫して対応。<br>お客様のニーズに対して徹底的に耳を傾け、お客様が望むカーライフに沿ったご提案をい<br class="max-md:hidden">たします。
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-point-02.svg" alt="Icon Point 02">
        </div>
        <div class="point-list__item fadeUp">
          <div class="point-list__num">03</div>
          <div class="point-list__desc">
            <h3>ホスピタリティを生む<br class="md:hidden">社員教育</h3>
            <p>
              お客様に信頼いただき最適なご提案ができるように、<br class="max-md:hidden">日々、サービススキルの向上に努めています。<br class="max-md:hidden">丁寧でわかりやすいご案内・ニーズを的確にとらえるヒアリング・細やかな心配りで、<br class="max-md:hidden">お客様一人ひとりに徹底したおもてなしをいたします。
            </p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-point-03.svg" alt="Icon Point 03">
        </div>
      </div>
    </div>
  </section>

  <section data-bg-color="black" class="service-virtual">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tire-ornament.svg" class="tire-ornament">

    <div class="running-txt">
      <div>TAKAHATA<span>VIRTUAL</span></div>
      <div>TAKAHATA<span>VIRTUAL</span></div>
      <div>TAKAHATA<span>VIRTUAL</span></div>
    </div>

    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>VIRTUAL</h2>
        <p>バーチャル工場見学</p>
      </div>
      <div class="vr-content fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.svg" alt="">
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>