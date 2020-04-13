<?php
/**
 * Template Name: Аксессуары
 */

get_header();

$CATEGORIES = array(
  'jalousie'      => 'Жалюзи',
  'closer'        => 'Доводчики',
  'handle'        => 'Ручки для окон',
  'limiter'       => 'Ограничители',
  'carekit'       => 'Наборы по уходу за окнами',
  'air-valve'     => 'Воздушные клапаны',
  'windowsill'    => 'Подоконники',
  'roller-blind'  => 'Рулонные шторы',
);

?>

<main class="wrapper">
    <div class="layout layout--main">
      <section class="products">
        <div class="layout">
          <div class="container">
            <div class="products__heading heading heading--center">
              <h2 class="heading__title">Аксессуары</h2>
              <p class="heading__subtitle">Мы предлагаем большой выбор комплектующих для наших основных продуктов.</p>
            </div>
            <ul class="tabs goods-secondary-tabs">

              <?php
              $categories_counter = 0;

              foreach ( $CATEGORIES as $category_key => $category_value ) :
              ?>
              <li class="tabs__tab-wrap">
                <button
                  class="tab <?php if ( $categories_counter == 0 ) echo 'is-active'; ?>"
                  role="tab"
                  data-tab-target="tab-<?= $category_key; ?>">
                  <?php echo $category_value ?>
                </button>
              </li>
              <?php
              $categories_counter++;
              endforeach; ?>
              
            </ul>

            <div class="tabs-content goods-secondary-tabs-content">

              <?php
              $categories_counter = 0;

              foreach ( $CATEGORIES as $category_key => $category_value ) :
              ?>
              <div class="tabs-content__wrapper <?php if ( $categories_counter == 0 ) echo 'is-active'; ?>"
                  role="tabpanel"
                  data-tab="tab-<?= $category_key; ?>"
                  data-tab-group="accessories">
                <div class="grid goods-list">

                  <?php
                  $args = array(
                    'post_type'       => $category_key,
                    'posts_per_page'  => 9,
                    'meta_key'			  => 'product_cost',
                    'orderby'			=> 'meta_value_num',
                    'order'				=> 'ASC',
                  );

                  ${$category_key} = new WP_Query( $args );

                  if ( ${$category_key}->have_posts() ) :
                    while ( ${$category_key}->have_posts() ) : ${$category_key}->the_post();
                    ?>
                    <div class="grid__col grid__col-sm-4 grid__col-6">
                      <?php get_template_part( 'template-parts/post/card-product' ); ?>
                    </div>
                    <?php
                    endwhile;
                  endif;
                  ?>

                  <div class="btn__container grid__col-12">
                  <?php
                  if (  ${$category_key}->max_num_pages > 1 ) : ?>
                    <button class="btn btn--wider btn-more js-more-posts"
                            style="margin-top: 40px;"
                            data-current="1"
                            data-ajax-posts='<?php echo esc_attr( serialize( ${$category_key}->query_vars ) ); ?>'
                            data-max-pages='<?php echo ${$category_key}->max_num_pages; ?>'>
                      Загрузить еще
                    </button>
                  <?php
                  wp_reset_postdata();
                  endif; ?>
                  </div>
                  
                </div>
              </div>
              <?php
              $categories_counter++;
              endforeach;
              ?>
            
            </div>
            
          </div>
        </div>
      </section>

      <?php
      // Баннер с рассрочкой
      get_template_part( 'template-parts/banner/banner-installment' );

      // Простой баннер
      get_template_part( 'template-parts/banner/banner-simple' );
      ?>

      
    </div>
  </main>

<?php
get_footer();
