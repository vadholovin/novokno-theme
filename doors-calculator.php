<?php
/**
 * Template Name: Калькулятор дверей
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
      <section class="doors-calculator">
        <div class="container">
          <div class="doors-calc__heading heading heading--center">
            <h2 class="heading__title">Рассчитайте <span class='color-highlight'>стоимость двери онлайн!</span>
            </h2>
          </div>
          
          <?php get_template_part( 'template-parts/calculators/calc-doors' ); ?>

        </div>
      </section>

      <?php
      // Блок Портфолио
      get_template_part( 'template-parts/portfolio' );

      // Баннер с рассрочкой
      get_template_part( 'template-parts/banner/banner-installment' );

      // Блок Статьи
      get_template_part( 'template-parts/articles' );
      
      // Общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-application' );
      ?>
      
    </div>
  </main>
  
<?php
get_footer();
