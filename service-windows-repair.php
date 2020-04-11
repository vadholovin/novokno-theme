<?php
/**
 * Template Name: Ремонт окон
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
      <section class="repair-intro">
        <div class="container">
          <div class="grid repair-intro__grid">
            <div class="grid__col grid__col-md-7 repair-intro__col-left">
              <div class="repair-intro__content">
                <h2 class="repair-intro__heading"><?php the_field( 'intro_heading' ); ?></h2>
                <p class="repair-intro__text"><?php the_field( 'intro_text' ); ?></p>
                <button class="btn btn--primary btn--wider" type="button" data-form-subject="Заявка на ремонт окон">Оставить заявку</button>
              </div>
            </div>
            <div class="grid__col grid__col-md-5 repair-intro__col-right">
              <figure class="repair-intro__img">
                <img src="<?php the_field( 'intro_img' ); ?>" alt="">
              </figure>
            </div>
          </div>
        </div>
      </section>
      <section class="repair-causes">
        <div class="container">
          <div class="repair-causes__heading heading heading--center">
            <h2 class="heading__title"><?php the_field( 'causes_title' ); ?></h2>
            <p class="heading__subtitle"><?php the_field( 'causes_subtitle' ); ?></p>
          </div>
          <div class="grid repair-causes-grid">

          <?php
          if( have_rows( 'causes_item' ) ) : while( have_rows( 'causes_item' ) ): the_row(); ?>
            <div class="grid__col grid__col-sm-6">
              <div class="flag  flag--top repair-causes-flag">
                <div class="flag__img">
                  <figure class="flag__img-figure">
                    <img src="<?php the_sub_field('img'); ?>" alt="">
                  </figure>
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

      <section class="repair-benefits">
        <div class="container">
          <div class="repair-benefits__heading heading heading--center">
            <h2 class="heading__title">Почему ремонт пластиковых окон
              <br>
              нужно доверить команде «Новые окна»</h2>
            <p class="heading__subtitle">Наша компания уже более 10 лет занимается не только продажей и установкой окон, но и профессиональным ремонтом.</p>
          </div>
          <div class="grid repair-benefits__list">
            <div class="grid__col grid__col-sm-4 grid__col-6 repair-benefits__item">
              <?php novokno_icon( 'reward', '' ); ?>
              <div class="repair-benefits__item-text">Высокоточный
                <br>ремонт</div>
            </div>
            <div class="grid__col grid__col-sm-4 grid__col-6 repair-benefits__item">
              <?php novokno_icon( 'money', '' ); ?>
              <div class="repair-benefits__item-text">Честная цена
                <br>на все виды работы</div>
            </div>
            <div class="grid__col grid__col-sm-4 grid__col-6 repair-benefits__item">
              <?php novokno_icon( 'crown', '' ); ?>
              <div class="repair-benefits__item-text">Гарантия качества
                <br>на ремонтные услуги</div>
            </div>
            <div class="grid__col grid__col-sm-4 grid__col-6 repair-benefits__item">
              <?php novokno_icon( 'repair', '' ); ?>
              <div class="repair-benefits__item-text">Квалифицированная
                <br>команда</div>
            </div>
            <div class="grid__col grid__col-sm-4 grid__col-6 repair-benefits__item">
              <?php novokno_icon( 'stopwatch', '' ); ?>
              <div class="repair-benefits__item-text">Ремонт окон выполняется
                <br>всего за 1 день.</div>
            </div>
            <div class="grid__col grid__col-sm-4 grid__col-6 repair-benefits__item">
              <?php novokno_icon( 'measure', '' ); ?>
              <div class="repair-benefits__item-text">Бесплатный замер
                <br>и консультация</div>
            </div>
          </div>
        </div>
      </section>

      <section class="repair-price">
        <div class="container">
          <div class="repair-price__heading heading heading--center">
            <h2 class="heading__title"><?php the_field( 'price_title' ); ?></h2>
            <p class="heading__subtitle"><?php the_field( 'price_subtitle' ); ?></p>
          </div>
          <table class="repair-price__table">
            <tbody>
            <?php
            if( have_rows( 'price_row' ) ) : while( have_rows( 'price_row' ) ): the_row(); ?>
              <tr>
                <th><?php the_sub_field('service'); ?></th>
                <?php if ( get_sub_field('accent') ) : ?>
                <td class="color-accent"><?php the_sub_field('cost'); ?></td>
                <?php else : ?>
                <td><?php the_sub_field('cost'); ?></td>
                <?php endif; ?>
              </tr>
            <?php endwhile; endif; ?>
            </tbody>
          </table>
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
