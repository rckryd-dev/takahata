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

      <a href="#service-menu" class="overflow-hidden relative block w-37.5 h-37.5 mx-auto mt-27.75">
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
        <h2>SERVICE MENU</h2>
        <p>タカハラのサービスメニュー</p>
      </div>

      <div class="menu-list pt-14 md:pt-16">

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">01</div>
            <div>
              <h3>車販売</h3>
              <span>新車販売・中古車販売</span>
            </div>
            <button 
              @click="
                open = ! open;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 1000);
                });" 
              class="_menu-button"
            >
            </button>
          </div>

          <div class="menu-list__item__content" x-show="open" x-collapse.duration.400ms x-cloak>
            <div class="max-md:px-7.5">
              <p>
                日本中古自動車販売協会連合会が認定する、<br>安心と信頼のJU適正販売店です。<br>中古車販売における多くの法令・ルールに則った<br>営業をいたします。
              </p>
              <a class="btn text-primary group mt-30 mb-6 md:mb-12 !w-max pr-18" href="<?php echo home_url(); ?>/service/car">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
              </a>
            </div>

            <div class="max-md:pb-13">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-01.jpg" class="_main-img">
            </div>
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">02</div>
            <div>
              <h3>整備</h3>
              <span>修理、鈑金、塗装</span>
            </div>
            <button 
              @click="
                open = ! open;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 1000);
                });" 
              class="_menu-button"
            >
          </div>

          <div class="menu-list__item__content" x-show="open" x-collapse.duration.400ms x-cloak>
            <div class="max-md:px-7.5">
              <p>
                日本中古自動車販売協会連合会が認定する、<br>安心と信頼のJU適正販売店です。<br>中古車販売における多くの法令・ルールに則った<br>営業をいたします。
              </p>
              <a class="btn text-primary group mt-30 mb-6 md:mb-12 !w-max pr-18" href="<?php echo home_url(); ?>/service/maintenance">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
              </a>
            </div>

            <div class="max-md:pb-13">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-01.jpg" class="_main-img">
            </div>
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">03</div>
            <div>
              <h3>保険</h3>
              <span>自動車保険、生命保険、各種保険取り扱い</span>
            </div>
            <button 
              @click="
                open = ! open;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 1000);
                });" 
              class="_menu-button"
            >
          </div>

          <div class="menu-list__item__content" x-show="open" x-collapse.duration.400ms x-cloak>
            <div class="max-md:px-7.5">
              <p>
                日本中古自動車販売協会連合会が認定する、<br>安心と信頼のJU適正販売店です。<br>中古車販売における多くの法令・ルールに則った<br>営業をいたします。
              </p>
              <a class="btn text-primary group mt-30 mb-6 md:mb-12 !w-max pr-18" href="<?php echo home_url(); ?>/service/insurance">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
              </a>
            </div>

            <div class="max-md:pb-13">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-01.jpg" class="_main-img">
            </div>
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">04</div>
            <div>
              <h3>リース</h3>
              <span>新車・中古車リース、レンタカー事業</span>
            </div>
            <button 
              @click="
                open = ! open;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 1000);
                });" 
              class="_menu-button"
            >
          </div>

          <div class="menu-list__item__content" x-show="open" x-collapse.duration.400ms x-cloak>
            <div class="max-md:px-7.5">
              <p>
                日本中古自動車販売協会連合会が認定する、<br>安心と信頼のJU適正販売店です。<br>中古車販売における多くの法令・ルールに則った<br>営業をいたします。
              </p>
              <a class="btn text-primary group mt-30 mb-6 md:mb-12 !w-max pr-18" href="<?php echo home_url(); ?>/service/lease">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
              </a>
            </div>

            <div class="max-md:pb-13">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-01.jpg" class="_main-img">
            </div>
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">05</div>
            <div>
              <h3>コーティング</h3>
              <span>キーパーコーティング認定工場</span>
            </div>
            <button 
              @click="
                open = ! open;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 1000);
                });" 
              class="_menu-button"
            >
          </div>

          <div class="menu-list__item__content" x-show="open" x-collapse.duration.400ms x-cloak>
            <div class="max-md:px-7.5">
              <p>
                日本中古自動車販売協会連合会が認定する、<br>安心と信頼のJU適正販売店です。<br>中古車販売における多くの法令・ルールに則った<br>営業をいたします。
              </p>
              <a class="btn text-primary group mt-30 mb-6 md:mb-12 !w-max pr-18" href="<?php echo home_url(); ?>/service/coating">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
              </a>
            </div>

            <div class="max-md:pb-13">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-01.jpg" class="_main-img">
            </div>
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">06</div>
            <div>
              <h3>車検</h3>
              <span>車検申請、整備</span>
            </div>
            <button 
              @click="
                open = ! open;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 1000);
                });" 
              class="_menu-button"
            >
          </div>

          <div class="menu-list__item__content" x-show="open" x-collapse.duration.400ms x-cloak>
            <div class="max-md:px-7.5">
              <p>
                日本中古自動車販売協会連合会が認定する、<br>安心と信頼のJU適正販売店です。<br>中古車販売における多くの法令・ルールに則った<br>営業をいたします。
              </p>
              <a class="btn text-primary group mt-30 mb-6 md:mb-12 !w-max pr-18" href="<?php echo home_url(); ?>/service/mot">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
              </a>
            </div>

            <div class="max-md:pb-13">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-01.jpg" class="_main-img">
            </div>
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">07</div>
            <div>
              <h3>パーツ販売</h3>
              <span>自動車パーツ、アクセサリー販売など</span>
            </div>
            <button 
              @click="
                open = ! open;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 1000);
                });" 
              class="_menu-button"
            >
          </div>

          <div class="menu-list__item__content" x-show="open" x-collapse.duration.400ms x-cloak>
            <div class="max-md:px-7.5">
              <p>
                日本中古自動車販売協会連合会が認定する、<br>安心と信頼のJU適正販売店です。<br>中古車販売における多くの法令・ルールに則った<br>営業をいたします。
              </p>
              <a class="btn text-primary group mt-30 mb-6 md:mb-12 !w-max pr-18" href="<?php echo home_url(); ?>/service/parts">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
              </a>
            </div>

            <div class="max-md:pb-13">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-01.jpg" class="_main-img">
            </div>
          </div>
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