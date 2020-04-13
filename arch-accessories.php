<?php
/**
 * Архив для аксессуаров
 */

get_header();

?>

<main class="wrapper">
    <div class="layout layout--main">
      <section class="products">
        <div class="layout">
          <div class="container">
            <div class="products__heading heading heading--center">
              <h2 class="heading__title"><?php echo post_type_archive_title( '', false ); ?></h2>
              <p class="heading__subtitle">Мы предлагаем большой выбор комплектующих для наших основных продуктов.</p>
            </div>
            
            <?php if ( have_posts() ) : ?>
            <div class="grid goods-list">

              <?php
              while ( have_posts() ) : the_post();
              ?>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <?php get_template_part( 'template-parts/post/card-product' ); ?>
              </div>
              <?php
              endwhile;
              ?>

            </div>
            <?php endif; ?>
            
          </div>
        </div>
      </section>

      <?php
      // Баннер с рассрочкой
      get_template_part( 'template-parts/banner/banner-installment' );
      ?>

      
    </div>
  </main>

<?php
get_footer();
