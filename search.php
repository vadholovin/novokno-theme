<?php
/**
 * Шаблон для страницы статей
 */

get_header();
?>
  <main class="wrapper">
    <div class="layout layout--main">
      <section class="articles-content">
        <div class="container">
          <div class="articles__heading heading heading--center">
            <?php if ( have_posts() ) : ?>
            <h1 class="heading__title">
            <?php
            printf( 'Результаты поиска для: %s', '<i>' . get_search_query() . '</i>' );
            ?>
            </h1>
            <?php else : ?>
              <h1 class="heading__title"><?php _e( 'Ничего не найдено' ); ?></h1>
            <?php endif; ?>
          </div>

          <?php
          get_search_form();
          ?>

          <?php
          if ( have_posts() ) : ?>
            <div class="articles__list">
              <div class="grid articles__grid">
                <?php
                while ( have_posts() ) : the_post(); ?>
                  <div class="grid__col grid__col-sm-4 grid__col-6">
                    <?php get_template_part( 'template-parts/post/card-article' ); ?>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          <?php endif; ?>
          


        </div>
      </section>
    </div>
  </main>
  
<?php
get_footer();