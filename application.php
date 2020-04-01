<?php
/**
 * Template Name: Заявка
 */

get_header();
?>

  <main class="wrapper">
    
    <?php
    // Выводит общий баннер для заявки на замер
    get_template_part( 'template-parts/banner/banner-application' );
    ?>

    <div class="contacts-info contacts-info--application">
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
        <?php echo do_shortcode( '[contact-form-7 id="180" title="Форма - Страница Заявка на замер" html_class="form form-contacts"]' ); ?>
      </div>
    </div>
  </main>

<?php
get_footer();
