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
            <h2 class="heading__title">Полезная информация</h2>
            <p class="heading__subtitle">Статьи написанные компетентными специалистами из нашей сферы</p>
          </div>

          <form class="form search-form">
            <div class="form__row">
              <div class="inputbox">
                <label class="inputbox__label hidden-visually" for="search-input">Искать:</label>
                <div class="inputbox__wrapper">
                  <input class="input" name="s" id="search-input" placeholder="Поиск..." type="text" />
                </div>
              </div>
              <div class="inputbox">
                <div class="inputbox__wrapper">
                  <select class="select js-select">
                    <option value="">Категория</option>
                    <option value="Опция 1">Опция 1</option>
                    <option value="Опция 2">Опция 2</option>
                    <option value="Опция 3">Опция 3</option>
                  </select>
                </div>
              </div>
              <button class="btn btn--secondary search-form__btn" type="submit">Найти</button>
            </div>
          </form>

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