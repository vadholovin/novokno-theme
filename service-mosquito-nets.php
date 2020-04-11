<?php
/**
 * Template Name: Сетки
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
      <section class="nets-calculator">
        <div class="container">
          <div class="nets-calc__heading heading heading--center">
            <h2 class="heading__title">Рассчитайте <span class='color-highlight'>стоимость сетки онлайн!</span>
            </h2>
          </div>
          
          <?php
          // Выводит калькулятор
          get_template_part( 'template-parts/calculators/calc-nets' );
          ?>

        </div>
      </section>
      <section class="nets-types">
        <div class="container">
          <div class="nets-types__heading heading heading--center">
            <h2 class="heading__title">Типы москитных сеток</h2>
            <p class="heading__subtitle">Специалисты нашей компании расскажут какие бывают сетки, а вы решите какая подойдет именно вам.</p>
          </div>
          <div class="grid nets-types-grid">

          <?php
          if( have_rows('nets_type') ) : while( have_rows('nets_type') ): the_row(); ?>
            <div class="grid__col grid__col-sm-6">
              <div class="flag  flag--top nets-types-flag">
                <div class="flag__img">
                  <img src="<?php the_sub_field('img'); ?>" alt="">
                </div>
                <div class="flag__body">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <p><?php the_sub_field('text'); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?> 

          </div>
        </div>
      </section>
      
      <?php
      // Выводит общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-application' );
      ?>

    </div>
  </main>
  
<?php
get_footer();
