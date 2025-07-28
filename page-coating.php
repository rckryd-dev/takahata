<?php
/**
 * Template Name: Coating Page
 */
get_header();
?>
<main class="p-service" id="service-coating">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'COATING',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス ', 'url' => home_url() . '/service'],
      ['label' => 'コーティング']
    ]
  ]);
  ?>

  <section data-bg-color="black" class="p-service__top">
    <div class="wrapper">
      <div class="slide-bg-text">
        <div class="slide-bg-text__item mx-auto">
          <span class="max-md:hidden">キーパープロショップの代理店として、キーパーコーティング技術の認定を受けています。</span>
          <span class="md:hidden">キーパープロショップの代理店として、</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span class="max-md:hidden">コーティングいただくことで、ご愛車にキレイな状態で長くご乗車いただけます。</span>
          <span class="md:hidden">キーパーコーティング技術の認定を受けています。</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>コーティングいただくことで、</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>ご愛車にキレイな状態で長くご乗車いただけます。</span>
        </div>
      </div>
    </div>
  </section>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-banner.jpg" class="w-full">

  <section data-bg-color="black" class="style-01" id="coating">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>COATING</h2>
        <p>コーティング</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-img-01.jpg">
        <p>
        キーパー技研が定めるコーティング技術1級資格を<br>取得したスタッフが店舗に在籍し、<br>キーパーコーティングを正しい施工技術で提供できる<br>コーティング技術認定店として登録されています。
        </p>
      </div>
      
      <div class="main-card mt-27 fadeUp">
        <div class="main-card__top">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-img-02.jpg">
          <div class="main-card__top__text">
            <h3>コーティング施工</h3>
            <p>
              弊社は、「KeePer」の代理店です。<br>新車時の光沢を取り戻しつつ、洗車の回数を短縮できます。<br class="max-md:hidden">これにより、お客様が行うメンテナンスの負担を最低限に抑えられます。
            </p>
          </div>
        </div>
        <div class="main-card__bottom">
          <div class="main-card__bottom__left">
            <a href="" class="main-card__btn">取扱いサービス</a>
            <div class="badge">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-01.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-02.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-03.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-04.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-05.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-06.png" alt="">
            </div>
          </div>
          <div class="main-card__bottom__right">
            <a href="" class="main-card__btn">資格者</a>
            <div class="badge max-md:w-11/12 mx-auto">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-07.png" alt="">
                <span>1名</span>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-08.png" alt="">
                <span>有り</span>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-09.png" alt="">
                <span>2名</span>
              </div>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-coating-badge-10.png" alt="">
                <span>2名</span>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn--secondary group mx-auto mt-2 md:mt-12" href="">
          <span>VIEW MORE</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
        </a>
      </div>
    </div>
  </section>
  <div class="max-md:h-20"></div>
  <?php get_template_part('parts/page-to-top') ?>
</main>
<?php get_footer(); ?>