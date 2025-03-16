<?php
/**
 * Template Name: Lease Page
 */
get_header();
?>
<main class="p-service" id="service-lease">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'LEASE',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'サービス ', 'url' => home_url() . '/service'],
      ['label' => 'リース']
    ],
    'menu_items' => [
        'リース' => ['url' => '#lease', 'target' => ''],
        'レンタカー' => ['url' => '#lease-rental', 'target' => '']
    ]
  ]);
  ?>

  <section data-bg-color="black" class="p-service__top">
    <div class="wrapper">
      <div class="slide-bg-text">
        <div class="slide-bg-text__item mx-auto">
          <span class="max-md:hidden">お客様のライフスタイルの変化やご予算の都合に合わせて、</span>
          <span class="md:hidden">お客様のライフスタイルの変化や</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6">
          <span class="max-md:hidden">自動車の販売だけでなくリース提案も可能です。</span>
          <span class="md:hidden">ご予算の都合に合わせて、</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>自動車の販売だけでなく</span>
        </div>
        <div class="slide-bg-text__item mx-auto mt-6 md:hidden">
          <span>リース提案も可能です。</span>
        </div>
      </div>
    </div>
  </section>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-lease-banner.jpg" class="w-full">

  <section data-bg-color="yellow" class="style-01" id="lease">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>LEASE</h2>
        <p>リース</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-lease-img-01.jpg">
        <p>
        新車・中古車・未使用車・国産輸入車問わず、<br>あらゆる車両のリース提案が可能です。
        </p>
      </div>
      
      <div class="main-card mt-27 fadeUp">
        <div class="main-card__top">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-lease-img-02.jpg">
          <div class="main-card__top__text">
            <h3>タカハタのリース事業について</h3>
            <p>
              弊社は、「CAR FLET’S」の代理店です。<br>新車・中古車問わず様々なお車を取り扱っております。<br>ご利用については注意点がありますので、<br class="md:hidden">下記よりご確認ください。
            </p>
          </div>
        </div>
        <div class="main-card__bottom">
          <div class="main-card__bottom__left">
            <a href="" class="main-card__btn">当社を初めてご利用のお客様名</a>
            <p class="mt-6 md:mt-7">
              当社を初めてご利用のお客様については、<br><span class="text-primary">新車の軽自動車のみのご利用になります。</span>
            </p>
          </div>
          <div class="main-card__bottom__right">
            <a href="" class="main-card__btn">すでに当社をご利用のお客様</a>
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

  <section data-bg-color="black" class="style-01" id="lease-rental">
    <div class="wrapper">
      <div class="sc-title fadeUp">

        <h2>RENTAL CAR</h2>
        <p>レンタカー</p>
      </div>

      <div class="main-point mt-16 md:mt-19 fadeUp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-lease-img-03.jpg">
        <div>
          <p>
          当社の各種保険に加入いただいているお客様へ向けて、<br>レンタカーの貸し出しを行っております。
          </p>
          <a href="" class="block text-lg font-medium px-7 text-primary border border-primary rounded-lg w-fit py-5 mt-9 md:mt-11.5 max-md:ml-7.5 hover:bg-primary hover:text-white transition-all duration-200">※当社をご利用されている方に限ります。</a>
        </div>
      </div>

    </div>
  </section>
  <div class="max-md:h-20"></div>
</main>
<?php get_footer(); ?>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    new Splide(".slide-list", {
      type: "loop",
      // perPage: "auto",
      focus: "center",
      autoWidth: true,
      arrows: false,
      pagination: false,
      gap: "3.375rem",
      autoplay: true,
      interval: 2800,
      speed: 800,
      pauseOnHover: false, 
      pauseOnFocus: false 
    }).mount();
  });
</script>