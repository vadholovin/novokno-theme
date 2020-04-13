<?php
/**
 * Общий баннер для заявки
 */

?>

<section class="application" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/backgrounds/bg-men-work.png);">
  <div class="container">
    <div class="application__inner">
      <div class="application__heading heading heading--info">
        <h2 class="heading__title"><?php the_field( 'application_title', 'option' ); ?></h2>
        <p class="heading__subtitle"><?php the_field( 'application_subtitle', 'option' ); ?></p>
      </div>

      <?php echo do_shortcode('[contact-form-7 id="741" title="Форма - Баннер с заявкой на замер" html_class="form application-form js-application-form"]'); ?>

    </div>
    <picture>
      <source srcset="<?php bloginfo('template_url'); ?>/assets/img/content/man-with-ruler.webp" type="image/webp">
      <img class="application__img" src="<?php bloginfo('template_url'); ?>/assets/img/content/man-with-ruler.png" alt="">
    </picture>
  </div>
</section>
