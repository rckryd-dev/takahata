<?php
/**
 * Template Name: Home Page
 */
get_header();
get_template_part('parts/scroll-down');
?>
<main class="p-home">
  <section data-bg-color="black" class="home-top">
    <video autoplay loop muted playsinline class="video-bg">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/vid/top-video.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
      <p>動画が入ります。</p>
    </div>
  </section>

  <section data-bg-color="yellow" id="after-top" class="home-about" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img.jpg')">
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
      <a class="btn btn--secondary group mx-auto mt-11 md:mt-13.75" href="<?php echo home_url(); ?>/about">
        <span>VIEW MORE</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
      </a>
    </div>
    <div class="layer-shift">
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-02.jpg')"></div>
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-01.jpg')"></div>
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-02.jpg')"></div>
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-01.jpg')"></div>
    </div>
  </section>

  <section data-bg-color="black" class="home-virtual sec-title">
    <h2 class="relative">
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left.svg" alt="Title Ornament Left">
      </picture>
      <span>VIRTUAL</span>
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right.svg" alt="Title Ornament Right">
      </picture>
    </h2>

    <div class="running-txt">
      <div>TAKAHATA<span>VIRTUAL</span></div>
      <div>TAKAHATA<span>VIRTUAL</span></div>
      <div>TAKAHATA<span>VIRTUAL</span></div>
      <div>TAKAHATA<span>VIRTUAL</span></div>
      <div>TAKAHATA<span>VIRTUAL</span></div>
    </div>
    <?php
      $items = [
        [
            'id' => '01',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '02',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '03',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '04',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '05',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '06',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '07',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '08',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '09',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '10',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '11',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '12',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '13',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
        [
            'id' => '14',
            'title' => 'タイトルが入ります。タイトルが入ります。',
            'description' => '内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。',
            'list' => ['施設内容', '施設内容', '施設内容', '施設内容'],
            'img' => 'placeholder.svg',
            'link' => ''
        ],
      ];      

      $jsonData = json_encode($items, JSON_UNESCAPED_UNICODE);
    ?>
    <div class="wrapper fadeUp mt-20 md:mt-12.5" x-data="{data: 0, showCard: false, selectedData: 0}">
      <div class="content">
        <div class="content__img">
          <img :src="`<?php echo get_template_directory_uri(); ?>/assets/img/vr-img${data === 0 ? '' : `-${data}`}.png`" alt="VR Image">
        </div>
        
        <div id="VRAsideSP" class="aside md:hidden" x-show="selectedData !== 0" x-transition x-cloak>
          <div class="sticky top-30">
            <div class="aside__top">
              <p x-text="vrData.find(i => i.id === selectedData)?.title || ''"></p>
              <button 
              @click="
                showCard = false;
                selectedData = 0;
                data = 0;
                $nextTick(() => {
                  setTimeout(() => {
                    ScrollTrigger.refresh();
                  }, 500);
                });" 
              class="aside__close-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-close.svg" alt="Close">
              </button>
            </div>
            <div class="aside__card">
              <img :src="`<?php echo get_template_directory_uri(); ?>/assets/img/${vrData.find(i => i.id === selectedData)?.img || 'vr-img.png'}`" :alt="vrData.find(i => i.id === selectedData)?.title || ''" class="_thumb">
              
              <ul class="_list">
                <template x-for="listItem in vrData.find(i => i.id === selectedData)?.list || []">
                    <li x-text="`・${listItem}`"></li>
                </template>
              </ul>

              <a target="_blank" class="btn btn--secondary group mx-auto" :href="vrData.find(i => i.id === selectedData)?.link || ''">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-play.svg" alt="Play" class="w-6.25 mr-2.5">
                <span>PLAY VR</span>
              </a>

              <p class="_desc" x-text="vrData.find(i => i.id === selectedData)?.description || ''"></p>
            </div>
          </div>
        </div>

        <div class="content__txt">
          <ul @mouseleave="data = selectedData">
            <?php foreach ($items as $item): ?>
              <li>
                <button 
                  @click="
                    showCard = true;
                    selectedData = '<?= $item['id'] ?>';
                    $nextTick(() => {
                      if (window.innerWidth <= 767) {
                        const target = document.getElementById('VRAsideSP');
                        if (target) {
                          const offset = 88;
                          const topPos = target.getBoundingClientRect().top + window.pageYOffset - offset;
                          window.scrollTo({ top: topPos, behavior: 'smooth' });
                        }
                        setTimeout(() => {
                          ScrollTrigger.refresh();
                        }, 500);
                      }
                    })
                  " 
                  @mouseover="data = '<?= $item['id'] ?>'"
                  :class="{'selected': selectedData === '<?= $item['id'] ?>'}"
                  title="<?= $item['title'] ?>"
                >
                  <span class="pl-18 md:pl-12 line-clamp-1">
                    <?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>
                  </span>
                </button>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="aside max-md:hidden" :class="{'is-show': showCard}">
        <div class="sticky top-30">
          <div class="aside__top">
            <p x-text="vrData.find(i => i.id === selectedData)?.title || ''"></p>
            <button @click="showCard = false; selectedData = 0; data = 0;" class="aside__close-btn">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-close.svg" alt="Close">
            </button>
          </div>
          <div class="aside__card">
            <img :src="`<?php echo get_template_directory_uri(); ?>/assets/img/${vrData.find(i => i.id === selectedData)?.img || 'vr-img.png'}`" :alt="vrData.find(i => i.id === selectedData)?.title || ''" class="_thumb">
            
            <ul class="_list">
              <template x-for="listItem in vrData.find(i => i.id === selectedData)?.list || []">
                  <li x-text="`・${listItem}`"></li>
              </template>
            </ul>

            <a target="_blank" class="btn btn--secondary group mx-auto" :href="vrData.find(i => i.id === selectedData)?.link || ''">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-play.svg" alt="Play" class="w-6.25 mr-2.5">
              <span>PLAY VR</span>
            </a>

            <p class="_desc" x-text="vrData.find(i => i.id === selectedData)?.description || ''"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="layer-shift">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>

  <section data-bg-color="black" class="home-service sec-title">
    <h2 class="relative">
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left.svg" alt="Title Ornament Left">
      </picture>
      <span>SERVICE</span>
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right.svg" alt="Title Ornament Right">
      </picture>
    </h2>
    <div class="wrapper fadeUp">
      <div class="service-roll-wrapper">
        <div class="service-roll-text-track"></div>
        <div class="service-roll">
          <!-- <div class="service-roll-canvas-container"></div> -->
          <div class="service-roll-img">
            <ul>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-menu_01_lite.jpg">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-menu_02_lite.jpg">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-menu_03_lite.jpg">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-menu_04_lite.jpg">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-menu_05_lite.jpg">
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-menu_06_lite.jpg">
              </li>
            </ul>
          </div>
          <div class="service-roll-img-container"></div>
          <div class="service-roll-text">
            <ul>
              <li>
                <a href="<?php echo home_url(); ?>/service/car">
                  <div>CAR SALES</div>
                  <div>
                    <h3>車販売</h3>
                    <span>新車販売・中古車販売</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/service/maintenance">
                  <div>MAINTENANCE</div>
                  <div>
                    <h3>整備</h3>
                    <span>整備、車検申請</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/service/insurance">
                  <div>INSURANCE</div>
                  <div>
                    <h3>保険</h3>
                    <span>自動車保険、生命保険、各種保険取り扱い</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/service/lease">
                  <div>LEASE</div>
                  <div>
                    <h3>リース</h3>
                    <span>新車・中古車リース、レンタカー事業</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/service/coating">
                  <div>COATING</div>
                  <div>
                    <h3>コーティング</h3>
                    <span>キーパーコーティング認定工場</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo home_url(); ?>/service/mot">
                  <div class="-long">SHEET METAL <br class="md:hidden">PAINTING</div>
                  <div>
                    <h3>板金、塗装</h3>
                    <span>修理、鈑金塗装</span>
                  </div>
                </a>
              </li>
              <!-- <li>
                <a href="<?php echo home_url(); ?>/service/parts">
                  <div>CAR PARTS</div>
                  <div>
                    <h3>パーツ販売</h3>
                    <span>自動車パーツ、アクセサリー販売など</span>
                  </div>
                </a>
              </li> -->
            </ul>
          </div>
          <div class="service-roll-text-container"></div>
        </div>
      </div>

      <div class="menu-list -mt-80">

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">01</div>
            <div>
              <h3>車販売</h3>
              <span>新車販売・中古車販売</span>
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
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">03</div>
            <div>
              <h3>保険</h3>
              <span>自動車保険、生命保険、各種保険取り扱い</span>
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
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">05</div>
            <div>
              <h3>コーティング</h3>
              <span>キーパーコーティング認定工場</span>
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
          </div>
        </div>

        <div class="menu-list__item fadeUp" :class="{'is-open': open}" x-data="{ open: false }">
          <div class="menu-list__item__head">
            <div class="menu-list__item__head__num">07</div>
            <div>
              <h3>パーツ販売</h3>
              <span>自動車パーツ、アクセサリー販売など</span>
            </div>
          </div>
        </div>

      </div>
      <a class="btn btn--primary group mx-auto mt-11 md:mt-20" href="<?php echo home_url(); ?>/service">
        <span>VIEW MORE</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow-black.svg" alt="Arrrow" class="-abs">
      </a>
    </div>
    <div class="layer-shift">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>

  <section data-bg-color="yellow" class="home-company sec-title" data-stroke="#fff" data-fill="#fff" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-02.jpg')">
    <h2 class="relative">
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left.svg" alt="Title Ornament Left">
      </picture>
      <span>COMPANY</span>
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right.svg" alt="Title Ornament Right">
      </picture>
    </h2>
    <div class="wrapper mt-15.5 md:mt-25">
      <div id="company-desc" class="fadeUp">
        <p>
          最新の安全性能と洗練されたデザインを<br class="md:hidden">兼ね備えた車を厳選し、<br>
          安心して長く乗れるカーライフをサポート。<br>
        </p>
        <p class="mt-14.25 md:mt-11.75">
          お問い合わせからアフターサポートまで、<br class="md:hidden">専任のカーコンシェルジュが一貫して対応いたします。<br>
          自動車についてのご相談・あらゆるトラブルはすべて、<br class="md:hidden">タカハタにお任せください。
        </p>
      </div>
      <a class="btn btn--secondary group mx-auto mt-11 md:mt-20" href="<?php echo home_url(); ?>/company">
        <span>VIEW MORE</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow.svg" alt="Arrrow" class="-abs">
      </a>

      <img class="rounded-[.9375rem] mt-16 md:mt-24" src="<?php echo get_template_directory_uri(); ?>/assets/img/company.jpg" alt="Company Image">
    </div>
    <div class="layer-shift">
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-03.jpg')"></div>
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-04.jpg')"></div>
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-03.jpg')"></div>
      <div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img-shift-04.jpg')"></div>
    </div>
  </section>

  <section data-bg-color="black" class="home-attempt sec-title">
    <h2 class="relative">
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left.svg" alt="Title Ornament Left">
      </picture>
      <span>ATTEMPT</span>
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right_sp.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right.svg" alt="Title Ornament Right">
      </picture>
    </h2>

    <div class="imgs-wrapper">
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-02_sp.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-02.png" id="img-02">
      </picture>
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-03_sp.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-03.png" id="img-03">
      </picture>
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-04_sp.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-04.png" id="img-04">
      </picture>
      <picture>
        <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-05_sp.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-05.png" id="img-05">
      </picture>
    </div>

    <div class="wrapper mt-9.5 md:mt-26">
      <p id="attempt-desc">
        タカハタでは各種技術について認定を取得しております。<br>
        裏付けされた確かな技術で最高のサービスを<br class="md:hidden">ご提供させていただきます。
      </p>

      <a class="btn btn--primary group mx-auto mt-11 md:mt-20" href="<?php echo home_url(); ?>/">
        <span>VIEW MORE</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow-black.svg" alt="Arrrow" class="-abs">
      </a>
      
      <div class="grid h-130 md:h-200">
        <picture>
          <source media="(max-width: 47.9375rem)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-01_sp.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/attempt-01.png" id="img-01">
        </picture>
      </div>
    </div>
  </section>
</main>

<?php 
  get_footer(); 
  get_template_part('parts/scroll-down-script');
?>
<script>
  const vrData = <?= $jsonData ?>;
</script>
<!-- <script src="https://unpkg.com/three@0.142.0/build/three.min.js"></script>

<script>
// Import GSAP & ScrollTrigger jika pakai module
gsap.registerPlugin(ScrollTrigger);

let maxRotation = 1;

// Buat scene Three.js
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(40, 1, 0.1, 500);
camera.position.set(0, 0, 1.8);

const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });

// Tambahkan renderer ke dalam elemen .service-roll
const serviceRoll = document.querySelector('.service-roll');
if (serviceRoll) {
    serviceRoll.appendChild(renderer.domElement);
}

// Update ukuran renderer
function updateSize() {
    if (serviceRoll) {
        const { clientWidth, clientHeight } = serviceRoll;
        renderer.setSize(clientWidth, clientHeight);
        camera.aspect = clientWidth / clientHeight;
        camera.updateProjectionMatrix();
    }
}

updateSize();
window.addEventListener('resize', updateSize);

// Load tekstur gambar
const textureLoader = new THREE.TextureLoader();
textureLoader.load('<?php echo get_template_directory_uri(); ?>/assets/img/service-list.webp', function(texture) {
    texture.wrapS = THREE.ClampToEdgeWrapping;
    texture.wrapT = THREE.ClampToEdgeWrapping;
    texture.repeat.set(1, 1);

    const img = new Image();
    img.src = texture.image.src;
    img.onload = function () {
        const imgWidth = img.width;
        const imgHeight = img.height;
        maxRotation = (imgWidth / imgHeight) * Math.PI;

        // Buat geometri silinder
        const geometry = new THREE.CylinderGeometry(1, 1, 1.2, 50, 1, false);
        const material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.DoubleSide });
        const cylinder = new THREE.Mesh(geometry, material);
        cylinder.rotation.z = Math.PI / 2;
        scene.add(cylinder);

        // 🔥 GSAP ScrollTrigger untuk mengontrol rotasi saat scroll
        gsap.to(cylinder.rotation, {
            x: -maxRotation / 2.7, // Target rotasi
            scrollTrigger: {
                trigger: ".service-roll-wrapper", // Elemen yang memicu animasi
                start: "top center", // Mulai saat elemen masuk viewport
                end: "bottom center", // Selesai saat elemen keluar viewport
                scrub: true, // Animasi mengikuti scroll
                markers: false // Ganti true jika ingin melihat indikator
            }
        });

        animate();
    };
});

// Loop animasi Three.js
function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
} 

</script> -->