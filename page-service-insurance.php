<?php
/**
 * Template Name: Insurance Page
 */
get_header();
?>
<main class="p-service" id="service-insurance">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'INSURANCE',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス ', 'url' => home_url() . '/service'],
      ['label' => '保険']
    ],
    'menu_items' => [
        '保険' => ['url' => '#insurance', 'target' => ''],
        '取扱い保険' => ['url' => '#insurance-handling', 'target' => '']
    ]
  ]);
  ?>

  <section data-bg-color="black" class="p-service__top">
    <div class="wrapper">
      <div class="slide-bg-text">
        <div class="slide-bg-text__item mx-auto">
          <span class="max-md:hidden">保険代理店認証制度である「エクセレントゴールドエージェント」の認証をいただいております。</span>
          <span class="md:hidden">保険代理店認証制度である</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span class="max-md:hidden">すべてのお客様に安心できるカーライフをご提供します。</span>
          <span class="md:hidden">「エクセレントゴールドエージェント」の</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>認証をいただいております。</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>すべてのお客様に安心できるカーライフをご提供します。</span>
        </div>
      </div>
    </div>
  </section>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-insurance-banner.jpg" class="w-full">

  <section data-bg-color="black" class="style-01" id="insurance">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>INSURANCE</h2>
        <p>保険</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-insurance-img-01.jpg">
        <p>
        検査に合格するために必要な整備と、<br>お客様がより安心・安全にカーライフを<br>楽しんでいただくためのおすすめな整備をご提案します。
        </p>
      </div>
      <div class="px-5 max-md:px-6.25 pt-14 md:pt-12">
        <div class="point-list">
          <div class="point-list__item fadeUp">
            <div class="point-list__num">01</div>
            <div class="point-list__desc">
              <h3>自動車保険</h3>
              <p>
              お客様に最適な保険プランの提案を行います。<br>費用や補償範囲などについて、なんでもご相談ください。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-insurance-icon-01.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">02</div>
            <div class="point-list__desc">
              <h3>生命保険</h3>
              <p>
              生命保険を取り扱っている<br class="md:hidden">中古車販売事業者は他にありません。<br >お客様の価値観や家族構成などに合わせて、<br class="md:hidden">必要と感じた場合ご提案します。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-insurance-icon-02.svg">
          </div>
          <div class="point-list__item fadeUp">
            <div class="point-list__num">03</div>
            <div class="point-list__desc">
              <h3>各種保険取扱い</h3>
              <p>
              あいおいニッセイ同和損保の代理店として、<br class="md:hidden">その他あらゆるジャンルの保険を取り扱っています。<br class="md:hidden">詳しくは担当コンシェルジュまでお問い合わせください。
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-insurance-icon-03.svg">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-bg-color="black" class="style-01" id="insurance-handling">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>HANDLING</h2>
        <p>取扱い保険</p>
      </div>

      <div class="grid-list">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-2.svg">
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>