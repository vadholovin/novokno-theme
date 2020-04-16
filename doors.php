<?php
/**
 * Template Name: Двери
 */

get_header();

if ( isset( $_GET['id']) ) {
  $ID = $_GET['id'];
}
?>

  <main class="wrapper">
    <div class="layout layout--main">
      <section class="products">
        <div class="layout">
          <div class="container">
            <div class="products__heading heading heading--center">
              <h2 class="heading__title"><?php the_field( 'heading_title' ); ?></h2>
              <p class="heading__subtitle"><?php the_field( 'heading_subtitle' ); ?></p>
            </div>
            <ul class="tabs goods-primary-tabs">
              <li class="tabs__tab-wrap">
                <button class="tab <?php if ( !isset( $_GET['id']) ) echo 'is-active'; ?>" role="tab" data-tab-target="goods00">Пластиковые двери</button>
              </li>
              <li class="tabs__tab-wrap">
                <button class="tab <?php if ( $ID == 'aluminum' ) echo 'is-active'; ?>" role="tab" data-tab-target="goods01">Алюминиевые двери</button>
              </li>
              <li class="tabs__tab-wrap">
                <button class="tab <?php if ( $ID == 'portalnye-sistemy' ) echo 'is-active'; ?>" role="tab" data-tab-target="goods02">Портальные системы</button>
              </li>
            </ul>
            <div class="tabs-content goods-primary-tabs-content">

              <?php
              $categories = array( 'plastic', 'aluminum', 'gantry' );

              foreach ($categories as $i => $category) :
                $case1 = $i == 0 && !isset( $_GET['id']);
                $case2 = $i == 1 && isset( $_GET['id']) && $ID == 'aluminum';
                $case3 = $i == 2 && isset( $_GET['id']) && $ID == 'portalnye-sistemy';
              ?>
              <div class="tabs-content__wrapper <?php if ( $case1 || $case2 || $case3 ) echo 'is-active'; ?>"
                   role="tabpanel"
                   data-tab="goods0<?= $i; ?>"
                   data-tab-group="goods">
                <div class="grid goods-list">
                  <?php
                  $args = array(
                    'numberposts'    => -1,
                    'post_type'      => 'door',
                    'order'          => 'ASC',
                    'tax_query'      => array(
                      array(
                        'taxonomy'  => 'categories',
                        'field'     => 'slug',
                        'terms'     => $category,
                      )
                    ),
                  );

                  $query = new WP_Query($args);

                  if( $query->have_posts() ) : while( $query->have_posts() ) :
                    $query->the_post();
                    ?>
                    <div class="grid__col grid__col-sm-4 grid__col-6">
                      <?php get_template_part( 'template-parts/post/card-goods' ); ?>
                    </div>
                    <?php
                    endwhile; 
                    wp_reset_postdata();
                  endif;
                  ?>
                </div>
              </div>
              <?php
              endforeach;
              ?>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

<?php
get_footer();
