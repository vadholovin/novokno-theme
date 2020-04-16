<?php
/**
 * Template Name: Продукция Alumark
 */

get_header();
?>

  <main class="wrapper">
    <div class="layout layout--main">
      <?php

      $args = array(
        'post_type'       => 'product',
        'posts_per_page'  => -1,
        'meta_key'			  => 'product_cost',
        'orderby'			    => 'meta_value_num',
        'order'				    => 'ASC',
        'tax_query'       => array(
          array(
            'taxonomy' => 'maker',
            'field'    => 'slug',
            'terms'    => 'alumark',
          ),
        ),
      );

      $posts = new WP_Query($args);

      if ( $posts->have_posts() ) :
        $product_counter = 0;

        while ( $posts->have_posts() ) : $posts->the_post();
        ?>
        <div class="product">
          <div class="container">
            <div class="grid product__grid">
              <div class="grid__col grid__col-sm-6 product__col product__col-left">
                <?php
                if( have_rows( 'product_photos' ) ) : ?>
                <div class="product-gallery">

                  <div class="swiper-container product-photo" id="product-slider-<?= $product_counter; ?>">
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

                  <div class="swiper-container product-thumbs" id="product-thumbs-<?= $product_counter; ?>">
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

                <?php
                $product_properties = get_field( 'product_properties' );	

                if( $product_properties ): ?>
                <ul class="properties product__properties">
                  <li class="property">
                    <div class="property-table">
                      <div class="property-cell">
                        <?php novokno_icon('temperature', '', 'property__icon') ?>
                      </div>
                      <div class="property-cell">
                        <div class="property__label">Тепло</div>
                      </div>
                      <div class="property-cell">
                        <div class="property__bar">
                          <div class="property__bar-inner"
                              data-property-width="<?php echo $product_properties['heat']; ?>"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="property">
                    <div class="property-table">
                      <div class="property-cell">
                        <?php novokno_icon('light', '', 'property__icon') ?>
                      </div>
                      <div class="property-cell">
                        <div class="property__label">Свет</div>
                      </div>
                      <div class="property-cell">
                        <div class="property__bar">
                          <div class="property__bar-inner"
                              data-property-width="<?php echo $product_properties['light']; ?>"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="property">
                    <div class="property-table">
                      <div class="property-cell">
                        <?php novokno_icon('volume', '', 'property__icon') ?>
                      </div>
                      <div class="property-cell">
                        <div class="property__label">Шум</div>
                      </div>
                      <div class="property-cell">
                        <div class="property__bar">
                          <div class="property__bar-inner"
                              data-property-width="<?php echo $product_properties['noise']; ?>"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <?php endif; ?>

              </div>

              <div class="grid__col grid__col-sm-6 product__col product__col-right">
                <div class="product__heading">
                  <h1 class="product__title"><?php the_field( 'product_title' ); ?></h1>
                  <p class="product__subtitle"><?php the_field( 'product_subtitle' ); ?></p>
                </div>

                <?php if ( get_field( 'product_cost' ) ) : ?>
                <div class="product-price">
                  <div class="product-price__cost">
                    <?php
                    $price = get_field( 'product_cost' );
                    $price = number_format($price, 0, '.', ' ');
                    echo $price;
                    ?>
                    Р <span class="product-price__cost--small">/ шт.</span>
                  </div>
                  <div class="product-price__note"><?php the_field( 'product_cost_note' ); ?></div>
                </div>
                <?php endif; ?>

                <div class="product-colors">
                  <div class="product-colors__title">Цвета:</div>
                  <p class="product__subtitle">Возможна покраска в любой цвет по RAL</p>
                </div>

                <div class="product-controls">
                  <a class="btn btn--primary" href="">Рассчитать</a>
                  <a class="btn" href="">Купить в рассрочку</a>
                </div>

                <?php
                if( have_rows( 'product_features' ) ) : ?>
                <div class="product-features">
                  <div class="product-features__title">Характеристики</div>
                  <div class="product-features__table-wrapper js-product-features-table">
                    <table class="product-features__table">
                      <tbody>
                        <?php while( have_rows( 'product_features' ) ): the_row(); ?>
                        <tr>
                          <th><?php the_sub_field( 'feature' ); ?></th>
                          <td><?php the_sub_field( 'value' ); ?></td>
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <?php
        $product_counter++;
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

      <?php
      // Другие категории
      get_template_part( 'template-parts/related-categories' );

      // Общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-application' );
      ?>
    </div>
  </main>
  
<?php
get_footer();
