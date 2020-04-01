<?php
/**
 * Template Name: Контакты
 */

get_header();
?>

  <main class="wrapper">
  
    <div class="contacts-map" id="map"></div>

    <div class="layout layout--main">
      <div class="contacts-info">
        <div class="container">
          
          <?php
          // Выводит блок контактов
          get_template_part( 'template-parts/contact-list' );
          ?>

        </div>
      </div>
      <div class="contacts-form">
        <div class="container">
          <div class="contacts-form__heading heading">
            <h1 class="heading__title">Обратная связь</h1>
          </div>
          <?php echo do_shortcode( '[contact-form-7 id="179" title="Форма - Страница контактов" html_class="form form-contacts"]' ); ?>
        </div>
      </div>
    </div>
  </main>
  
<?php
get_footer();
