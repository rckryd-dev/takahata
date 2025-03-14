<?php
/**
 * Template Name: Car Sales Page
 */
get_header();
?>
<main class="p-about">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'CAR SALES',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'タカハタとは']
    ],
    'menu_items' => [
        '3つの信念' => ['url' => '#about-point', 'target' => ''],
        '会社概要' => ['url' => '#about-outline', 'target' => '']
    ]
  ]);
  ?>

  <section data-bg-color="black" class="about-top">
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

  <section data-bg-color="yellow" class="about-point" id="about-point">
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

  <section data-bg-color="black" class="about-edu">
    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>EDUCATION  BUSINESS</h2>
        <p>教育事業</p>
      </div>
      <div class="edu-desc fadeUp">
        <p>
        「お客様に最適な一台を、<br>一生のパートナーとしてご提案する。」
        </p>
        <p>タカハタは、コンシェルジュの心を持つ人材を育て続けます。</p>
      </div>

      <div class="edu-list-wrapper">
        <div class="edu-list-sticky">
          <div class="splide edu-list fadeUp">
            <div class="splide__track">
              <div class="splide__list">
                <div class="splide__slide">
                  <div class="edu-list__content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/edu-01.jpg" alt="教育事業の原点">
                    <div>
                      <h3>教育事業の原点</h3>
                      <p>
                        タカハタの教育事業は、日本中古車販売協会連合会愛知支部の役員を務めたことをきっかけに始まりました。業界を通して「お客様に本当に寄り添う接客」の大切さを実感し、その理念を次世代へ伝えるためにスタートしました。
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide">
                  <div class="edu-list__content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/edu-02.jpg" alt="コンシェルジュとしての心構え">
                    <div>
                      <h3>コンシェルジュとしての心構え</h3>
                      <p>
                        タカハタが目指すのは、単なる販売員ではなく、お客様のカーライフ全体をサポートする<br>「自動車のコンシェルジュ」の育成です。<br>車選びからアフターサービスまで、お客様一人ひとりの想いに応えるホスピタリティを重視しています。
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide">
                  <div class="edu-list__content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/edu-03.jpg" alt="お客様目線を磨く実践型プログラム">
                    <div>
                      <h3>お客様目線を磨く実践型プログラム</h3>
                      <p>
                        ニーズチェックの徹底：対話を通じて、お客様の潜在的な要望を引き出します。<br><span class="font-medium">心理動向を分析</span>：お客様の立場で考え、期待や不安を理解します。<br><span class="font-medium">提案力の向上</span>：ニーズに寄り添った、心を動かすプレゼンテーションを実践します。
                      </p>
                    </div>
                  </div>
                </div>
                <div class="splide__slide">
                  <div class="edu-list__content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/edu-04.jpg" alt="終わりのない挑戦">
                    <div>
                      <h3>終わりのない挑戦</h3>
                      <p>
                        この教育事業により、スタッフはコンシェルジュとしての接客力を磨き、結果としてお客様の満足度と売上向上にもつながっています。今後も「お客様に寄り添う心」を軸に、教育事業の価値を広め、終わりのない人材育成に取り組んでまいります。
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="edu-banner"></div>
  </section>

  <section data-bg-color="black" class="about-outline" id="about-outline">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/speed-ornament.svg" class="speed-ornament">
    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>OUTLINE</h2>
        <p>会社概要</p>
      </div>
      <div class="edu-table">
        <table class="fadeUp">
          <tr>
            <th>会社名</th>
            <td>株式会社タカハタ</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
          </tr>
          <tr>
            <th>TEL</th>
            <td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
          </tr>
          <tr>
            <th>FAX</th>
            <td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
          </tr>
          <tr>
            <th>E -mail</th>
            <td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
          </tr>
        </table>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-outline_sp.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-outline.jpg">
        </picture>
      </div>
    </div>
  </section>

  <section data-bg-color="black" class="about-staff" id="about-staff">
    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>STAFF</h2>
        <p>スタッフ紹介</p>
      </div>

      <div class="splide staff-list fadeUp">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="staff-list__item">
                <div class="staff-list__item__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-staff-01.jpg" alt="◯◯◯◯◯">
                  <span>01</span>
                </div>
                <div class="staff-list__item__desc">
                  <div>スタッフ名</div>
                  <p>役職</p>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="staff-list__item">
                <div class="staff-list__item__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-staff-02.jpg" alt="◯◯◯◯◯">
                  <span>02</span>
                </div>
                <div class="staff-list__item__desc">
                  <div>スタッフ名</div>
                  <p>役職</p>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="staff-list__item">
                <div class="staff-list__item__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-staff-03.jpg" alt="◯◯◯◯◯">
                  <span>03</span>
                </div>
                <div class="staff-list__item__desc">
                  <div>スタッフ名</div>
                  <p>役職</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section data-bg-color="black" class="about-qualification">
    <div class="wrapper">
      <div class="sc-title fadeUp">
        <h2>TECHNICAL<span class="max-md:hidden">&nbsp;</span><br class="md:hidden">QUALIFICATION HOLDER</h2>
        <p>技能資格取得者</p>
      </div>
      <div class="qualification-table">
        <table class="fadeUp">
          <tr>
            <th>2級自動車整備士</th>
            <td>
              <div class="_group">
                <div>
                  <span>2級自動車シャシ整備士</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>2級ガソリン自動車整備士</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>2級ジーゼル自動車整備士</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>2級二輪自動車整備士</span>
                  <span>0名</span>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <th>3級自動車整備士</th>
            <td>
              <div class="_group">
                <div>
                  <span>2級自動車シャシ整備士</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>2級ガソリン自動車整備士</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>2級ジーゼル自動車整備士</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>2級二輪自動車整備士</span>
                  <span>0名</span>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <th>保険資格</th>
            <td>
              <div class="_group">
                <div>
                  <span>◯◯◯◯◯◯◯◯</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>◯◯◯◯◯◯◯◯</span>
                  <span>0名</span>
                </div>
                <div>
                  <span>◯◯◯◯◯◯◯◯</span>
                  <span>0名</span>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about-qualification_sp.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-qualification.jpg">
        </picture>
      </div>
    </div>
  </section>

  <section data-bg-color="yellow" class="about-history" id="about-history">
    <div class="running-txt">
      <div>TAKAHATA<span>HISTORY</span></div>
      <div>TAKAHATA<span>HISTORY</span></div>
    </div>

    <div class="overflow-x-hidden">
      <div class="wrapper">
        <div class="sc-title fadeUp">
          <h2>HISTORY</h2>
          <p>タカハタの歴史</p>
        </div>
  
        <div class="splide history-list">
          <div class="splide__track !overflow-visible">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="history-list__item">
                  <span>1985</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-forward.svg" alt="">
                  <h3>1985 年 00 月</h3>
                  <p>
                    1985年に法人化し、お客様の要望に寄り添い続けて40年。<br>おかげさまで、自動車事業全般・保険代理店事業・レンタカー事業の3つのメイン事業を展開するに至りました。
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="history-list__item">
                  <span>0000</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-forward.svg" alt="">
                  <h3>0000 年 00 月</h3>
                  <p>
                    内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="history-list__item">
                  <span>0000</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-forward.svg" alt="">
                  <h3>0000 年 00 月</h3>
                  <p>
                    内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="history-list__item">
                  <span>0000</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-forward.svg" alt="">
                  <h3>0000 年 00 月</h3>
                  <p>
                    内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-bg-color="black" class="about-access" id="about-access">
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
    const splide = new Splide(".edu-list", {
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

    let lastScrollY = window.scrollY;

    ScrollTrigger.create({
      trigger: ".edu-list-wrapper",
      start: "top top",
      end: "bottom top",
      scrub: true,
      onUpdate: () => {
        const currentScrollY = window.scrollY;
        const scrollDiff = currentScrollY - lastScrollY; 

        if (Math.abs(scrollDiff) >= 500) {
          if (scrollDiff > 0) {
            splide.go("+1"); 
          } else {
            splide.go("-1"); 
          }
          lastScrollY = currentScrollY;
        }
      },
    });

    new Splide(".staff-list", {
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