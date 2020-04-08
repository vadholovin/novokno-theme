<?php
/**
 * Template Name: Балконы
 */

get_header();
?>

  <main class="wrapper">

    <?php
    // Выводит верхний баннер
    get_template_part( 'template-parts/banner/banner-top' );

    // Выводит верхний блок преимуществ
    get_template_part( 'template-parts/top-flag-list' );
    ?>

    <div class="layout layout--main">
      <section class="balconies-calculator">
        <div class="container">
          <div class="balconies-calc__heading heading heading--center">
            <h2 class="heading__title">Рассчитайте <span class='color-highlight'>стоимость балкона онлайн!</span>
            </h2>
          </div>

          <?php
          // Выводит калькулятор
          get_template_part( 'template-parts/calculators/calc-balconies' );
          ?>

        </div>
      </section>

      <section class="portfolio">
        <div class="container">
          <div class="portfolio__heading heading heading--center">
            <h2 class="heading__title">Портфолио</h2>
            <p class="heading__subtitle">За 10 лет работы, мы установили более 5 760 пластиковых окон</p>
          </div>
          
          <div class="swiper-container portfolio-slider js-portfolio-slider" id="portfolio-slider">
            <div class="swiper-wrapper">
            <?php
            global $post;
            $args = array(
              'numberposts'    => 10,
              'post_type'      => 'projects',
              );

            $projects = get_posts( $args );
            foreach ( $projects as $post ) : setup_postdata( $post ); ?>

              <div class="swiper-slide">
                <a class="portfolio-item" href="<?php the_permalink(); ?>" target="_blank">
                  <img class="portfolio-item__img swiper-lazy"
                      data-src="<?php the_post_thumbnail_url( 'image-300x240' ); ?>"
                      alt="">
                  <!-- <div class="swiper-lazy-preloader"></div> -->
                </a>
              </div>

            <?php endforeach; 
            wp_reset_postdata();?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </section>

      <?php
      // Выводит баннер с рассрочкой
      get_template_part( 'template-parts/banner/banner-installment' );
      ?>


      <section class="articles">
        <div class="container">
          <div class="articles__heading heading heading--center">
            <h2 class="heading__title">Полезная информация</h2>
            <p class="heading__subtitle">
              Больше информации в
              <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
                специальном разделе
              </a>
            </p>
          </div>

          <div class="articles-swiper-block swiper-block js-articles-swiper">
            <div class="swiper-container articles-slider js-articles-slider" id="articles-slider">
              <div class="swiper-wrapper">
              <?php
              global $post;
              $args = array( 'posts_per_page' => 6);

              $articles = get_posts( $args );
              foreach ( $articles as $post ) : setup_postdata( $post ); ?>
                <div class="swiper-slide">
                  <?php get_template_part( 'template-parts/post/card-article' ); ?>
                </div>
              <?php endforeach; 
              wp_reset_postdata();?>


              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>
      </section>


      <?php
      // Выводит общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-application' );
      ?>

    </div>
  </main>
  
<?php
get_footer();
