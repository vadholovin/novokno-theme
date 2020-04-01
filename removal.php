<?php
/**
 * Template Name: Вывоз мусора
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
      <section class="removal-about">
        <div class="container">
          <div class="removal-about__heading heading heading--center">
            <h2 class="heading__title"><?php the_field( 'removal_title' ); ?></h2>
            <p class="heading__subtitle"><?php the_field( 'removal_subtitle' ); ?></p>
          </div>
          <div class="removal-about__text">
            <?php the_field( 'removal_text' ); ?>
          </div>
          <div class="removal-about-order">
            <div class="removal-about-order__row">
              <div class="removal-about-order__item">
                <div class="removal-about-order__num">1</div>
                <div class="removal-about-order__text">Цена транспортировки мусора
                  <br>на Газели дешевле.
                </div>
              </div>
              <div class="removal-about-order__item">
                <div class="removal-about-order__num">2</div>
                <div class="removal-about-order__text">В нее легче погрузить
                  <br>мусор, т.к. низкий борт.
                </div>
              </div>
              <div class="removal-about-order__item">
                <div class="removal-about-order__num">3</div>
                <div class="removal-about-order__text">Габариты меньше, чем
                  <br>у контейнеровоза.

                </div>
              </div>
            </div>
            <div class="removal-about-order__row">
              <div class="removal-about-order__item">
                <div class="removal-about-order__num">4</div>
                <div class="removal-about-order__text">Проедет там, где не пройдет контейнеровоз.
                </div>
              </div>
              <div class="removal-about-order__item">
                <div class="removal-about-order__num">5</div>
                <div class="removal-about-order__text">Ей не запрещено работать
                  <br>в центре города.</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="removal-equipment">
        <div class="container">
          <div class="removal-equipment__heading heading heading--center">
            <h2 class="heading__title">Наша техника</h2>
          </div>
          <div class="equipment-block swiper-block" id="equipment-block">
            <div class="swiper-container equipment-slider" id="equipment-slider">
              <div class="swiper-wrapper">
              <?php
              if( have_rows( 'removal_car' ) ) :
                while( have_rows( 'removal_car' ) ): the_row(); ?>
                <div class="swiper-slide">
                  <div class="goods-tile  goods-tile--equipment">
                    <div class="goods-tile__inner">
                      <figure class="goods-tile__picture">
                        <img src="<?php the_sub_field('photo'); ?>"
                             title="<?php the_sub_field('title'); ?>, <?php the_sub_field('size'); ?>"
                             alt="" />
                      </figure>
                      <div class="goods-tile__heading">
                        <span class="goods-tile__title"><?php the_sub_field('title'); ?></span>
                        <span class="goods-tile__subtitle"><?php the_sub_field('size'); ?></span>
                      </div>
                      <div class="goods-tile__prices">
                        <div class="goods-tile__price">
                          <span class="goods-tile__price-label">Цена:</span>
                          <span class="goods-tile__price-value"><?php the_sub_field('cost'); ?></span>
                          <span class="goods-tile__price-currency">₽</span>
                        </div>
                      </div>
                      <button class="btn btn--primary btn--block js-popup-call"
                              data-form-subject="Заявка на вывоз мусора: <?php the_sub_field('title'); ?>, <?php the_sub_field('size'); ?>">
                        Заказать машину
                      </button>
                    </div>
                  </div>
                </div>
                <?php endwhile;
              endif; ?>
                
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

      <?php
      // Выводит баннер заявки на вывоз мусора
      get_template_part( 'template-parts/banner/banner-application-removal' );
      ?>
    </div>
  </main>

<?php
get_footer();
