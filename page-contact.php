<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>
<main class="p-contact">
  <?php
  get_template_part('parts/title-section', null, [
    'title' => 'CONTACT',
    'breadcrumbs' => [
      ['label' => 'トップ', 'url' => home_url()],
      ['label' => 'お問い合わせ']
    ],
    'menu_items' => [
      'お問い合わせ' => ['url' => '#contact-form', 'target' => ''],
      'よくある質問' => ['url' => '#contact-qna', 'target' => '']
    ]
  ]);
  ?>
  <section class="p-contact__content" id="contact-form">
    <div class="wrapper">
        <div class="p-contact__content__head">
          <div class="slide-bg-text">
            <div class="slide-bg-text__item mx-auto">
              <span>お電話でのお問い合わせ</span>
            </div>
          </div>
          <div class="p-contact__content__head__tel fadeUp">
            <div class="p-contact__content__head__tel__info">
							<a href="tel:052-352-7700">052-352-7700</a>
						</div>
						<p class="p-contact__content__head__tel__hours">受付時間　09:00～19:00</p>
					</div>

          <div class="slide-bg-text">
            <div class="slide-bg-text__item mx-auto">
              <span>フォームでのお問い合わせ</span>
            </div>
          </div>

          <p class="p-contact__content__head__text">弊社へのお問い合わせ・エントリーは、<br>下記のお問い合わせフォームよりお問い合わせください。</p>

          <?php
            $current_url = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            $steps = [
              "contact" => "入力",
              "confirm" => "確認",
              "complete" => "完了",
            ];
          ?>

          <ul class="p-contact__content__head__steps fadeUp">
            <?php foreach ($steps as $path => $label) : ?>
              <li class="<?php echo ($current_url === $path) ? 'is-current' : ''; ?>">
                  <?php echo $label; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="fadeUp">
          <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
  </section>

  <section class="p-contact__qna" id="contact-qna">
    <div class="wrapper">
      <h2 class="relative">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/takahata-qna.svg" alt="TAKAHATA Q&A" class="fadeUp">
        <span class="fadeUp">よくある質問</span>
      </h2>
      
      <div class="mt-15.5 md:mt-9"
        x-data="{
          dataQna: 0,
          qnaList: [
            { 
              id: 1, 
              title: '質問が入ります。', 
              desc: '<p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>' 
            },
            { 
              id: 2, 
              title: '質問が入ります。', 
              desc: '<p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>' 
            },
            { 
              id: 1, 
              title: '質問が入ります。', 
              desc: '<p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>' 
            },
            { 
              id: 2, 
              title: '質問が入ります。', 
              desc: '<p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>' 
            },
            { 
              id: 1, 
              title: '質問が入ります。', 
              desc: '<p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>' 
            }
          ]
        }">
        <div class="anchor">
          <ul>
            <li :class="{'is-active': dataQna === 0}">
              <a @click="dataQna = 0">All</a>
            </li>
            <li :class="{'is-active': dataQna === 1}">
              <a @click="dataQna = 1">カテゴリー</a>
            </li>
            <li :class="{'is-active': dataQna === 2}">
              <a @click="dataQna = 2">カテゴリー</a>
            </li>
          </ul>
        </div>
  
        <ul class="qna">
          <template x-for="(qna, index) in qnaList" :key="index">
            <li x-show="dataQna === 0 || dataQna === qna.id" x-cloak>
              <div class="qna__item" x-data="{ open: false }" :class="{ 'is-open': open }">
                <div class="qna__item__head">
                  <h3 x-text="qna.title"></h3>
                  <button @click="open = !open">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-arrow-down.svg" alt="Arrow">
                  </button>
                </div>
                <div class="qna__item__body" x-show="open" x-collapse.duration.400ms x-cloak>
                  <div class="inner" x-html="qna.desc"></div>
                </div>
              </div>
            </li>
          </template>
        </ul>
      </div>
    </div>
  </section>
  <?php get_template_part('parts/page-to-top') ?>
</main>
<?php get_footer(); ?>