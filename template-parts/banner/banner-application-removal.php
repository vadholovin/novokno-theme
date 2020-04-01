<section class="application application--removal" style="background-image: url(<?php the_field( 'removal_banner_bg' ); ?>);">
  <div class="container">
    <div class="application__inner">
      <div class="application__heading heading heading--info">
        <h2 class="heading__title"><?php the_field( 'removal_banner_title' ); ?></h2>
        <p class="heading__subtitle"><?php the_field( 'removal_banner_subtitle' ); ?></p>
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
  </div>
</section>