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
            <h1 class="heading__title">Полезная информация</h1>
            <p class="heading__subtitle">Статьи написанные компетентными специалистами из нашей сферы</p>
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
                  <?php get_template_part( 'template-parts/post/card-article' ); ?>
                <?php endwhile; ?>
                
                <div class="btn__container grid__col-12">
                <?php
                if (  $wp_query->max_num_pages > 1 ) : ?>
                  <button class="btn btn--wider js-more-articles">Загрузить еще</button>
                <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
          


        </div>
      </section>
    </div>
  </main>
  
<?php
get_footer();