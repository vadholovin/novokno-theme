<?php
/**
 * Template Name: Аксессуар
 */

get_header();

?>
  
  <main class="wrapper">
    <div class="layout layout--main">
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="product">
        <div class="container">
          <div class="grid product__grid">
            <div class="grid__col grid__col-sm-6 product__col product__col-left">
              <?php
              if( have_rows( 'product_photos' ) ) : ?>
              <div class="product-gallery">

                <div class="swiper-container product-photo" id="product-slider">
                  <div class="swiper-wrapper">
                    <?php while( have_rows( 'product_photos' ) ): the_row(); ?>
                    <div class="swiper-slide product-photo__item">
                      <figure class="product-photo__img">
                        <img class="swiper-lazy"
                            data-src="<?php echo esc_url( get_sub_field( 'photo' )['sizes']['image-h-480'] ); ?>"
                            alt="">
                      </figure>
                    </div>
                    <?php endwhile; ?>
                  </div>
                </div>

                <div class="swiper-container product-thumbs" id="product-thumbs">
                  <div class="swiper-wrapper">
                    <?php while( have_rows( 'product_photos' ) ): the_row(); ?>
                    <div class="swiper-slide product-thumb">
                      <figure class="product-thumb__img">
                        <img class="swiper-lazy"
                            data-src="<?php echo esc_url( get_sub_field( 'photo' )['sizes']['image-h-150'] ); ?>"
                            alt="">
                      </figure>
                    </div>
                    <?php endwhile; ?>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>

            <div class="grid__col grid__col-sm-6 product__col product__col-right">
              <div class="product__heading">
                <h1 class="product__title"><?php the_field( 'product_title' ); ?></h1>
                <p class="product__subtitle"><?php the_field( 'product_subtitle' ); ?></p>
              </div>
              <div class="product-price">
                <div class="product-price__cost">
                  <?php
                  if ( get_field( 'product_cost' ) ) {
                  $price = get_field( 'product_cost' );
                  $price = number_format($price, 0, '.', ' ');
                  echo $price;
                  }
                  ?>
                  Р <span class="product-price__cost--small">/ шт.</span>
                </div>
                <div class="product-price__note"><?php the_field( 'product_cost_note' ); ?></div>
              </div>

              <?php
              $terms = get_the_terms( get_the_ID(), 'color' );

              if ( $terms ) :
              ?>
              <div class="product-colors">
                <div class="product-colors__title">Возможные расцветки:</div>
                <ul class="product-colors__list">

                <?php
                foreach( $terms as $term ) :
                  $image = get_field('color_img', $term);
                ?>
                <li class="product-colors__item">
                  <input class="product-colors__input hidden-visually"
                        type="radio"
                        name="product-color"
                        id="<?= $term->slug . $product_counter; ?>"
                        value="<?= $term->slug . $product_counter; ?>">
                  <label class="product-colors__label"
                        for="<?= $term->slug . $product_counter; ?>"
                        style="background-image: url(<?= $image; ?>);"
                        data-tippy-content="<?= $term->name; ?>"></label>
                </li>
                <?php
                endforeach;
                ?>

                </ul>
              </div>
              <?php endif; ?>
              <div class="product-controls">
                <a class="btn btn--primary" href="">Купить</a>
                <a class="btn" href="">Купить в рассрочку</a>
              </div>
            </div>
          </div>
          <ul class="tabs product-tabs">
            <li class="tabs__tab-wrap">
              <button class="tab is-active" role="tab" data-tab-target="tab-0">Описание</button>
            </li>
            <li class="tabs__tab-wrap">
              <button class="tab" role="tab" data-tab-target="tab-1">Характеристики</button>
            </li>
          </ul>
          <div class="tabs-content product-tabs-content">
            <div class="tabs-content__wrapper content-zone is-active" role="tabpanel" data-tab="tab-0" data-tab-group="desc">
              <h2>Описание</h2>
              <?php the_field( 'product_desc' ); ?>
            </div>
            <div class="tabs-content__wrapper content-zone" role="tabpanel" data-tab="tab-1" data-tab-group="desc">
              <h2>Характеристики</h2>
              <?php the_field( 'product_features' ); ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>

      <div class="product-related">
        <div class="container">
          <div class="product-related__heading">
            <h2 class="product-related__title">Сопутствующие товары</h2>
            <div class="product-related-slider__block swiper-block" id="related-slider-block">
              <div class="swiper-container product-related-slider" id="related-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <p>kknnnn</p>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <<?php
      // Общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-application' );
      ?>
    </div>
  </main>

<?php
get_footer();
