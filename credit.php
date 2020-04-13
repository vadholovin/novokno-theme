<?php
/**
 * Template Name: Кредит и рассрочка
 */

get_header();
?>
  <main class="wrapper">
    <?php
    // Выводит верхний баннер
    get_template_part( 'template-parts/banner/banner-top' );

    // Выводит верхний блок преимуществ
    get_template_part( 'template-parts/top-flag-list-credit' );
    ?>

    <div class="layout layout--main">

    <?php
    $credit_block_1 = get_field( 'credit_block_1' );	

    if( $credit_block_1 ): ?>
      <section class="credit-block">
        <div class="container">
          <div class="grid">
            <div class="grid__col grid__col-sm-6">
              <img class="credit__img lozad" data-src="<?php echo $credit_block_1['img']; ?>" alt="">
            </div>
            <div class="grid__col grid__col-sm-6">
              <div class="credit__heading heading heading--info">
                <h2 class="heading__title"><?php echo $credit_block_1['title']; ?></h2>
                <p class="heading__subtitle"><?php echo $credit_block_1['text']; ?></p>
              </div>
              <button class="btn">Подробнее</button>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

      <?php
      // Баннер с рассрочкой
      get_template_part( 'template-parts/banner/banner-installment' );
      ?>

      <?php
      $credit_block_2 = get_field( 'credit_block_2' );	

      if( $credit_block_2 ): ?>
      <section class="credit-block">
        <div class="container">
          <div class="grid">
            <div class="grid__col grid__col-sm-6">
              <img class="credit__img lozad" data-src="<?php echo $credit_block_2['img']; ?>" alt="">
            </div>
            <div class="grid__col grid__col-sm-6 order-sm-first">
              <div class="credit__heading heading heading--info">
                <h2 class="heading__title"><?php echo $credit_block_2['title']; ?></h2>
                <p class="heading__subtitle"><?php echo $credit_block_2['text']; ?></p>
              </div>
              <button class="btn">Подробнее</button>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>
    </div>
  </main>
  
<?php
get_footer();
