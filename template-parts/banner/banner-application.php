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
      <form class="form application-form js-application-form">
        <div class="form__row">
          <div class="inputbox">
            <label class="inputbox__label hidden-visually" for="application-phone">Ваш телефон</label>
            <div class="inputbox__wrapper">
              <input class="input input input--icon-phone js-input-phone" type="tel" name="application-phone" id="application-phone" placeholder="Ваш телефон" />
            </div>
          </div>
          <button class="btn btn--primary" type="submit">Оставить заявку</button>
        </div>
        <p class="form__note">*Нажимая на кнопку, вы даете согласие
          на обработку своих персональных данных</p>
      </form>
    </div>
    <picture>
      <source srcset="<?php bloginfo('template_url'); ?>/assets/img/content/man-with-ruler.webp" type="image/webp">
      <img class="application__img" src="<?php bloginfo('template_url'); ?>/assets/img/content/man-with-ruler.png" alt="">
    </picture>
  </div>
</section>