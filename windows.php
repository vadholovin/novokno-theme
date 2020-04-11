<?php
/**
 * Template Name: Окна
 */

get_header();

$POST_TYPES = array(
  'window-flat'   => 'Окна в квартиру',
  'window-house'  => 'Окна в дом',
  'window-dacha'  => 'Окна на дачу',
);

$TERMS = get_terms( array(
  'taxonomy'      => array( 'brand' ),
  // 'orderby'       => 'id', 
  'order'         => 'ASC',
  'hide_empty'    => true,
) );
?>

  <main class="wrapper">
    <div class="layout layout--main">
      <section class="products">
        <div class="layout">
          <div class="container">
            <div class="products__heading heading heading--center">
              <h2 class="heading__title">Пластиковые окна</h2>
              <p class="heading__subtitle">Остекление квартир, домов, дач в Подольске с гарантией на 5 лет</p>
            </div>
            <ul class="tabs goods-primary-tabs">
              <?php
              $post_types_counter = 0;

              foreach ( $POST_TYPES as $post_type => $post_type_value ) : ?>
              <li class="tabs__tab-wrap">
                <button class="tab <?php if ( $post_types_counter == 0 ) echo 'is-active'; ?>"
                        role="tab"
                        data-tab-target="<?= $post_type; ?>">
                        <?= $post_type_value; ?>
                </button>
              </li>
              <?php
              $post_types_counter++;
              endforeach;
              ?>
            </ul>

            <div class="tabs-content goods-primary-tabs-content">
              <?php
              $post_types_counter = 0;
              // Loop level 1
              foreach ( $POST_TYPES as $post_type => $post_type_value ) : ?>

              <div class="tabs-content__wrapper <?php if ( $post_types_counter == 0 ) echo 'is-active'; ?>"
                  role="tabpanel"
                  data-tab="<?= $post_type; ?>"
                  data-tab-group="goods">
                <ul class="tabs goods-secondary-tabs">
                  <?php
                  if ( $TERMS && ! is_wp_error($terms) ) :
                    foreach ( $TERMS as $term_key => $term ) : ?>
                    <li class="tabs__tab-wrap">
                      <button class="tab <?php if ( $term_key == 0 ) echo 'is-active'; ?>"
                              role="tab"
                              data-tab-target="<?php echo $post_type . '-' . $term->slug; ?>">
                        <?php echo $term->name; ?>
                      </button>
                    </li>
                    <?php
                    endforeach;
                  endif; ?>
                </ul>

                <div class="tabs-content goods-secondary-tabs-content">
                <?php
                // Loop level 2
                foreach ($TERMS as $term_key =>  $term) : ?>
                  <div class="tabs-content__wrapper <?php if ($term_key == 0) echo 'is-active'; ?>"
                      role="tabpanel"
                      data-tab="<?php echo $post_type . '-' . $term->slug; ?>"
                      data-tab-group="<?php echo $post_type; ?>">
                    <div class="grid goods-list">

                      <?php
                      $args = array(
                        'post_type'       => $post_type,
                        'posts_per_page'  => -1,
                        'meta_key'			=> 'goods_price',
                        'orderby'			=> 'meta_value',
                        'order'				=> 'ASC',
                        'tax_query'       => array(
                          array(
                            'taxonomy' => 'brand',
                            'field'    => 'slug',
                            'terms'    => $term->slug,
                          ),
                        ),
                      );

                      $posts = new WP_Query($args);
  
                      if ( $posts->have_posts() ) :
                        // Loop level 3
                        while ( $posts->have_posts() ) : $posts->the_post();
                        ?>
                        <div class="grid__col grid__col-sm-4 grid__col-6">
                          <?php get_template_part( 'template-parts/post/card-goods' ); ?>
                        </div>
                        <?php
                        endwhile;
                        // End Loop level 3
                        wp_reset_postdata();
                      endif;
                      ?>
                      
                    </div>
                  </div>
                <?php
                endforeach;
                // End Loop level 2
                ?>
                </div>
              </div>
              <?php
              $post_types_counter++;
              endforeach;
              // End Loop level 1
              ?>

            </div>
          </div>
        </div>
      </section>

      <?php
      // Общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-installment' );

      // Простой баннер
      get_template_part( 'template-parts/banner/banner-simple' );
      ?>

      
    </div>
  </main>
  
<?php
get_footer();
