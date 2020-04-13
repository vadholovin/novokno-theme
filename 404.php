<?php
/**
 * Шаблон для страницы 404
 */

get_header();
?>
  <main class="wrapper">
    <div class="layout layout--main">
      <section class="articles-content">
        <div class="container">
          <div class="articles__heading heading heading--center">
            <h1 class="heading__title">Страница не найдена</h1>
            <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">Вернуться на Главную</a>
          </div>
        </div>
      </section>
    </div>
  </main>
  
<?php
get_footer();