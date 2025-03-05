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
  <section data-bg-color="yellow" class="home-about" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-img.jpg')">
    <div class="wrapper">
      <h2 class="relative">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/who-is-takahata.svg" alt="WHO IS TAKAHATA">
        <span>タカハタとは何者だ</span>
      </h2>
      <p id="about-desc" class="mt-8 md:mt-11">
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
    <div class="wrapper mt-20 md:mt-12.5" x-data="{data: 0, showCard: false, selectedData: 0}">
      <div class="content">
        <div class="content__img">
          <img :src="`<?php echo get_template_directory_uri(); ?>/assets/img/vr-img${data === 0 ? '' : `-${data}`}.png`" alt="VR Image">
        </div>
        
        <div id="VRAsideSP" class="aside md:hidden" x-show="selectedData !== 0" x-transition x-cloak>
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
  <!-- <section data-bg-color="black" class="home-service sec-title">
    <h2 class="relative">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-left.svg" alt="Title Ornament Left">
      <span>SERVICE</span>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-orn-right.svg" alt="Title Ornament Right">
    </h2>
    <div class="max-w-[81.25rem] mt-20 mx-auto">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi dolorem veniam, delectus repudiandae tempore recusandae alias quo, sint natus quos similique molestiae maiores quia illum facilis cum ullam magni eligendi in facere nemo? Quidem quisquam repellat cupiditate. Veritatis quidem nisi inventore porro illo necessitatibus itaque sed, eligendi harum eum consequuntur tenetur modi ducimus dicta, suscipit magnam neque doloremque velit, rerum dolores est. Ullam aliquam a dolore excepturi libero quia impedit eveniet corrupti debitis, cumque repudiandae nihil magnam temporibus blanditiis culpa earum praesentium quisquam sit tempore voluptas itaque voluptatem numquam id sapiente? Nihil, aliquid odio. Consectetur ullam, reiciendis rerum voluptate voluptatem iste nulla dignissimos necessitatibus tempora sunt explicabo deleniti hic enim temporibus corrupti numquam possimus ea rem? Perferendis recusandae fugiat aliquam architecto voluptas voluptatum repudiandae, autem reiciendis aperiam ipsa inventore dolorem aspernatur nostrum consequatur consequuntur! Ut molestiae debitis aut dignissimos pariatur labore sapiente provident minima, ipsum quia unde, soluta culpa quasi perferendis nisi cumque dolorem deserunt commodi in et qui? Harum nesciunt quaerat eligendi, fugiat delectus repudiandae praesentium dolores exercitationem! Amet illum iure provident reprehenderit nemo laborum perferendis! Necessitatibus, quam nobis hic eum qui optio consectetur ab exercitationem, dolorem numquam dolore id laudantium vel tempore, sapiente quas eligendi. Nobis reiciendis omnis culpa voluptates praesentium quibusdam libero, quia id maxime eaque laboriosam laudantium hic molestias dignissimos placeat ab, quidem accusamus tempore cum atque aspernatur voluptate unde iure? Soluta ducimus ut molestiae fugiat accusantium, iusto labore qui, harum itaque accusamus nostrum atque id incidunt ratione rerum reprehenderit ab aspernatur quibusdam voluptate? Delectus nisi corrupti sit consequatur hic! Ea animi nam dolorum illo, illum commodi error accusantium quasi, amet nisi rerum suscipit dolor unde reprehenderit obcaecati ipsa asperiores impedit perspiciatis deleniti voluptas facilis. Aliquid accusamus iste dignissimos voluptatibus commodi eius, praesentium aspernatur labore dolorem dolore officia est laudantium ab voluptatum ea? Officiis voluptatem soluta explicabo fugit. Debitis delectus maxime quae quisquam omnis libero eius vel. Voluptate eum dolor sequi optio repellendus. Praesentium obcaecati eligendi dolorem. Ullam sed laboriosam quam blanditiis. Dolor ad sint voluptate omnis in! Laboriosam eaque deleniti accusantium officia rerum consequuntur exercitationem fugiat corrupti repellendus minima perferendis eos debitis quo nisi, hic autem tempora, atque, corporis veniam vel veritatis reprehenderit sequi et! Quo doloremque, porro corrupti voluptatem, quasi mollitia fuga repudiandae adipisci, eius quibusdam aliquam! Quae ducimus amet numquam culpa ad. Sapiente voluptate iste et rerum totam? Omnis consequuntur iusto, minima neque voluptatibus earum corporis temporibus ad? Dolorem, dolore, veniam veritatis aperiam obcaecati non distinctio aspernatur similique tempora cumque unde magni voluptas eaque recusandae quod cum et perspiciatis asperiores delectus vitae? Voluptatum tenetur, nostrum odit nesciunt cum voluptas aut ipsa error doloribus repellendus expedita nobis, aliquam ullam in eaque iusto laborum ducimus rerum doloremque. Placeat ea voluptatem assumenda, harum, officiis alias quisquam repellat provident doloremque, mollitia non quod. Id cumque quis, earum harum rem distinctio beatae consequuntur quos, tempore voluptas nihil similique. Aliquid non dicta id rem neque doloribus ex, sit iure velit consectetur temporibus a! Itaque molestias dolore, repellat, debitis recusandae aliquid perspiciatis qui asperiores ipsum corrupti possimus minus fugit ex numquam laborum voluptas voluptatum consequatur tempora beatae voluptatibus voluptatem? Nulla perferendis reprehenderit dolor? Possimus maiores neque optio sapiente soluta ea ab, accusamus libero. Nobis officia reiciendis exercitationem expedita doloremque aut commodi eveniet alias nulla delectus. Explicabo necessitatibus tempora beatae harum, nesciunt quos, qui nam eos culpa deserunt repellat omnis ab facere delectus tenetur at nobis nisi dicta doloribus praesentium architecto. At totam quod dolorum quo ut neque ratione, veniam quae? Dolore repudiandae explicabo dicta aliquam iste unde, eveniet eum impedit. Atque recusandae nam ipsam. Dolores inventore ex nostrum, temporibus totam quibusdam vel tenetur id aspernatur asperiores veniam eaque ratione cumque? Mollitia harum unde eos molestias quae, veritatis neque tenetur enim nemo suscipit, consequuntur aut nesciunt. Laudantium laborum numquam, minus magni facere quos. Assumenda pariatur tempora sint, praesentium eaque similique. Est corrupti error illum voluptates sed dignissimos, voluptatum tenetur fugiat earum. Repellat eligendi aperiam, ea explicabo dignissimos cumque fugiat error voluptatibus, aliquam, quibusdam accusantium maxime recusandae exercitationem quas expedita. Tempore assumenda ratione adipisci sapiente quisquam, saepe iusto ipsum natus maxime officiis illum consequatur exercitationem similique dolor deleniti quae dolorum voluptate dolore iste, nemo ab cupiditate et eos. Unde, iure qui dignissimos facere nihil, maiores quia optio harum aut, non sint. Reprehenderit dolorum esse reiciendis at nulla illo fugit repellendus est non. Consequuntur commodi, saepe magnam aspernatur vel possimus quibusdam ea doloremque. Incidunt, commodi modi odit nisi molestiae quasi, autem quaerat, alias accusantium magnam similique cumque asperiores quis animi assumenda consequuntur veniam dolorem perferendis laborum eaque aperiam in? Sunt obcaecati sequi corporis necessitatibus! Adipisci iure corrupti accusamus excepturi dolorem voluptate labore perferendis magnam reiciendis sunt praesentium, deserunt aut esse molestias exercitationem minus laborum impedit rerum harum quidem in. Unde architecto vitae corporis, quas ex exercitationem accusamus, at quam quae aut facere, minima temporibus ipsum natus nostrum deleniti quia quos rem aspernatur et adipisci. Dolore distinctio sint dolorum possimus modi beatae quod earum, aperiam expedita at. Soluta dolorum ipsam autem tempore ipsa non nihil aliquid porro doloremque tenetur! Numquam dicta hic optio, eum, consequatur ab perferendis fuga, architecto quis iure similique ea! Harum inventore, asperiores facilis suscipit reprehenderit rem libero error fugit molestiae ea quidem numquam aliquam minima recusandae atque fugiat quod repudiandae laborum consequuntur nisi eos quos vero dignissimos accusamus. Ullam atque iure odio magni cupiditate, voluptates nihil, vitae perspiciatis, dolores dolore quidem delectus cumque alias. Magni, minus. Incidunt, eaque sapiente aperiam quia esse exercitationem doloremque veritatis id perferendis vero minus provident enim illo fuga voluptatibus animi totam suscipit ut ad amet reprehenderit alias, sequi adipisci repudiandae! Nostrum aut similique provident. A vero necessitatibus illum inventore iusto quia quidem cumque commodi ipsa libero obcaecati quasi neque harum, fugiat impedit iste aut eligendi omnis aspernatur perferendis delectus saepe reprehenderit nulla? Voluptatibus, incidunt doloribus vel deserunt optio at id nostrum praesentium perspiciatis quaerat magnam fugit saepe porro! Quasi totam ad odit minus deleniti aut, pariatur amet eos incidunt voluptate eligendi culpa quisquam explicabo repellat sed tempore provident esse ipsum, odio saepe libero vel, rem dolore iure? Harum debitis id, vel nemo aut alias aliquam.
    </div>
  </section> -->
</main>

<?php 
  get_footer(); 
  get_template_part('parts/scroll-down-script');
?>
<script>
  const vrData = <?= $jsonData ?>;
  console.log(vrData);
</script>