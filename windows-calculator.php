<?php
/**
 * Template Name: Калькулятор окон
 */

get_header();
?>

  <main class="wrapper">
    <div class="layout layout--main"></div>
    <section class="calculator">
      <div class="container">
        <div class="calculator__heading heading heading--center">
          <h2 class="heading__title">Калькулятор стоимости</h2>
          <p class="heading__subtitle">Поможем определиться с ценой! Выберите калькулятор для подробного рассчёта.</p>
        </div>

        <?php get_template_part( 'template-parts/calculators/calc-windows' ); ?>

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
  </main>
  
<?php
get_footer();
