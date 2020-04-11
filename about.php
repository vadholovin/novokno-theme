<?php
/**
 * Template Name: О компании
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
      <section class="about-main">
        <div class="container">
          <div class="grid">
            <div class="grid__col grid__col-md-3">
              <h2 class="about__heading"><?php the_field( 'about_title' ); ?></h2>

              <?php
              if( have_rows('socials', 'option') ) : ?>
                <ul class="social about__social">
                <?php while( have_rows('socials', 'option') ): the_row(); ?>
                  <li class="social__item">
                    <a href="<?php the_sub_field('link'); ?>"
                      class="social__link social__link--<?php the_sub_field('id'); ?>"
                      rel="noopener"
                      title="<?php the_sub_field('name'); ?>"
                      target="_blank">
                      <?php novokno_icon( get_sub_field('id'), null, null, null, null ); ?>
                    </a>
                  </li>
                <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>

            <div class="grid__col grid__col-md-9">
              <div class="content-zone">
                <?php the_field( 'about_desc' ); ?>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about-contacts">
        <div class="container">
          <div class="grid">
            <div class="grid__col grid__col-md-3">
              <h2 class="about__heading">Наши контакты</h2>
            </div>
            <div class="grid__col grid__col-md-9">
            
              <?php
              // Блок контактов
              get_template_part( 'template-parts/contact-list' );
              ?>
              
            </div>
          </div>
        </div>
      </section>

      <?php
      // Общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-application' );
      ?>

    </div>
  </main>

<?php
get_footer();
