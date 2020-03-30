<div class="modal-wrapper modal-wrapper--request modal-wrapper--general-request mfp-hide" id="call-request">
  <div class="modal-picture">
    <figure class="modal-img">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/general/modal/pop-img-1.png" alt="">
    </figure>
  </div>
  <div class="modal-inner">
    <form class="form form-modal">
      <div class="modal-title">Оставьте заявку</div>
      <input type="hidden" name="form-modal-subject" value="Заявка на бесплатный звонок">
      <div class="inputbox">
        <label class="inputbox__label hidden-visually" for="form-modal-name-1">Ваше имя</label>
        <div class="inputbox__wrapper">
          <input class="input" type="text" name="form-modal-name" id="form-modal-name-1" placeholder="Ваше имя" />
        </div>
      </div>
      <div class="inputbox">
        <label class="inputbox__label hidden-visually" for="form-modal-phone-1">Номер телефона</label>
        <div class="inputbox__wrapper">
          <input class="input js-input-phone" type="tel" name="form-modal-phone" id="form-modal-phone-1" autocomplete="off" placeholder="Ваш номер телефона" />
        </div>
      </div>
      <button class="btn btn--primary btn--block btn--wider" type="submit">Отправить</button>
      <p class="form-modal__note">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных.
      </p>
    </form>
  </div>
</div>