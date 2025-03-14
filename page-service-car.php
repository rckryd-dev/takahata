<?php
/**
 * Template Name: Car Sales Page
 */
get_header();
?>
<main class="p-service" id="service-car">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'CAR SALES',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス ', 'url' => home_url() . '/service'],
      ['label' => '車販売']
    ],
    'menu_items' => [
        '新車販売' => ['url' => '#car-new', 'target' => ''],
        '中古車販売' => ['url' => '#car-used', 'target' => '']
    ]
  ]);
  ?>

  <section data-bg-color="black" class="car-top">
    <div class="wrapper">
      <div class="slide-bg-text">
        <div class="slide-bg-text__item mx-auto">
          <span class="max-md:hidden">日本中古自動車販売協会連合会が認定する、安心と信頼のJU適正販売店です。</span>
          <span class="md:hidden">日本中古自動車販売協会連合会が認定する、</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span class="max-md:hidden">中古車販売における多くの法令・ルールに則った営業をいたします。</span>
          <span class="md:hidden">安心と信頼のJU適正販売店です。</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>中古車販売における多くの法令・ルールに</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>則った営業をいたします。</span>
        </div>
      </div>
    </div>
  </section>

  <section data-bg-color="yellow" class="car-new" id="car-new">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>NEW CAR SALES</h2>
        <p>新車販売</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-img-01.jpg">
        <p>
          研修を受け試験に合格した中古自動車販売士を<br>はじめとしたスタッフがお客様の立場に立ち、<br>ご要望に応じた最適な一台をご提案します。
        </p>
      </div>
      <div class="px-5 max-md:px-6.25 pt-14 md:pt-12">
        <div class="point-list">
          <div class="point-list__item fadeUp">
            <div class="point-list__num">01</div>
            <div class="point-list__desc">
              <h3>新車販売</h3>
              <p>
                自動車の購入は、人生の一大イベント。<br>お乗り換えやご家族の車の相談など、<br class="md:hidden">なんでもお気軽にご相談ください。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-01.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">02</div>
            <div class="point-list__desc">
              <h3>一人ひとりの想いに応える</h3>
              <p>
                白紙のオーダー用紙へお客様の本音を聞き出し、<br class="md:hidden">安全性と洗練されたスタイルを兼ね揃えた、<br class="md:hidden">お客様が納得できる一台を提案いたします。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-02.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">03</div>
            <div class="point-list__desc">
              <h3>豊富な種類</h3>
              <p>
                国内外あらゆる車種のご提案が可能です。<br>詳しいご要望をヒアリングさせていただき、<br class="md:hidden">お客様目線に立った理想のマイカーをご提供します。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-03.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">04</div>
            <div class="point-list__desc">
              <h3>お客様一人ひとりに担当がつく</h3>
              <p>
                お問い合わせからメンテナンス等のアフターサポートまで、<br class="md:hidden">担当のコンシェルジュが丁寧に対応いたします。<br class="md:hidden">あなたの理想のマイカー像を、<br class="md:hidden">お聞かせください。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-04.svg">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-bg-color="black" class="car-used" id="car-used">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>USED CAR SALES</h2>
        <p>中古車販売</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-img-02.jpg">
        <p>
        法令を遵守し、<br>常に中古自動車の適切な情報をお届けします。<br>気になる情報がございましたら、お気軽にお問い合わせく<br class="max-md:hidden">ださい。
        </p>
      </div>
      <div class="px-5 max-md:px-6.25 pt-14 md:pt-12">
        <div class="point-list">
          <div class="point-list__item fadeUp">
            <div class="point-list__num">01</div>
            <div class="point-list__desc">
              <h3>新車販売</h3>
              <p>
                自動車の購入は、人生の一大イベント。<br>お乗り換えやご家族の車の相談など、<br class="md:hidden">なんでもお気軽にご相談ください。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-01.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">02</div>
            <div class="point-list__desc">
              <h3>一人ひとりの想いに応える</h3>
              <p>
                白紙のオーダー用紙へお客様の本音を聞き出し、<br class="md:hidden">安全性と洗練されたスタイルを兼ね揃えた、<br class="md:hidden">お客様が納得できる一台を提案いたします。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-02.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">03</div>
            <div class="point-list__desc">
              <h3>豊富な種類</h3>
              <p>
                国内外あらゆる車種のご提案が可能です。<br>詳しいご要望をヒアリングさせていただき、<br class="md:hidden">お客様目線に立った理想のマイカーをご提供します。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-03.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">04</div>
            <div class="point-list__desc">
              <h3>お客様一人ひとりに担当がつく</h3>
              <p>
                お問い合わせからメンテナンス等のアフターサポートまで、<br class="md:hidden">担当のコンシェルジュが丁寧に対応いたします。<br class="md:hidden">あなたの理想のマイカー像を、<br class="md:hidden">お聞かせください。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-car-icon-04.svg">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>