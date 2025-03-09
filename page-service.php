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
      <h2 class="relative">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/who-is-takahata.svg" alt="WHO IS TAKAHATA" class="fadeUp">
        <span class="fadeUp">タカハタとは何者だ</span>
      </h2>
      <p id="about-desc" class="mt-8 md:mt-11 fadeUp">
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

  <section data-bg-color="yellow" class="service-menu">
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
    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>ACCESS</h2>
        <p>アクセス</p>
      </div>
      <div class="access-map fadeUp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13053.171661092736!2d136.8348639!3d35.1243632!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003779400fe4a5f%3A0x56028236d3891af5!2z44ix44K_44Kr44OP44K_!5e0!3m2!1sja!2sid!4v1741516165172!5m2!1sja!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new Splide(".edu-list", {
      type: "fade",
      pagination: true,
      arrows: false,
      perPage: 1,
      speed: 600,
      paginationKeyboard: true,
    }).mount();

    // Custom pagination numbering
    const paginationItems = document.querySelectorAll(".splide__pagination button");
    paginationItems.forEach((item, index) => {
      item.innerHTML = "0" + (index + 1);
    });

    new Splide(".staff-list", {
      type: "loop",
    
      perPage: "auto",
      arrows: false,
      focus: "center",
      autoWidth: true,
      gap: "3.375rem",
    }).mount();
    
    new Splide(".history-list", {
      perPage: "auto",
      drag: 'free',
      focus  : 0,
      omitEnd: true,
      pagination: false,
      arrows: false,
    }).mount();
  });
</script>