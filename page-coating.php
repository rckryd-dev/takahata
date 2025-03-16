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
             弊社は、「KeePer」の代理店です。<br>新車時の光沢を取り戻しつつ、洗車の回数を短縮できます。<br>これにより、お客様が行うメンテナンスの負担を最低限に抑えられます。
            </p>
          </div>
        </div>
        <div class="main-card__bottom">
          <div class="main-card__bottom__left">
            <a href="" class="main-card__btn">取扱いサービス</a>
            <p class="mt-6 md:mt-7">
              当社を初めてご利用のお客様については、<br><span class="text-primary">新車の軽自動車のみのご利用になります。</span>
            </p>
          </div>
          <div class="main-card__bottom__right">
            <a href="" class="main-card__btn">資格者</a>
            <p class="mt-6 md:mt-7">
              すでに当社をご利用のお客様については、<br><span class="text-primary">新車・中古車問わず様々なお車をご利用いただけます。</span>
            </p>
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
</main>
<?php get_footer(); ?>