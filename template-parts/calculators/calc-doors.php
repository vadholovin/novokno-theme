<div class="main-calc main-calc--doors js-doors-calc">
  <div class="grid main-calc__body">
    <div class="grid__col grid__col-sm-7 main-calc__col--left">
      <div class="main-calc__unit">
        <div class="main-calc__heading">Тип двери:</div>
        <div class="main-calc__fields">
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-single.png" title="Описание типа двери" alt="Описание типа двери">
            <input class="hidden-visually" type="radio" id="doors-1" name="doors" value="0" checked>
            <label class="main-calc__label" for="doors-1"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-double.png" title="Описание типа двери" alt="Описание типа двери">
            <input class="hidden-visually" type="radio" id="doors-2" name="doors" value="1">
            <label class="main-calc__label" for="doors-2"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-triple.png" title="Описание типа двери" alt="Описание типа двери">
            <input class="hidden-visually" type="radio" id="doors-3" name="doors" value="2">
            <label class="main-calc__label" for="doors-3"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-leaf-double.png" title="Описание типа двери" alt="Описание типа двери">
            <input class="hidden-visually" type="radio" id="doors-4" name="doors" value="3">
            <label class="main-calc__label" for="doors-4"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-leaf-single.png" title="Описание типа двери" alt="Описание типа двери">
            <input class="hidden-visually" type="radio" id="doors-5" name="doors" value="4">
            <label class="main-calc__label" for="doors-5"></label>
          </div>
        </div>
      </div>
      <div class="main-calc__row">
        <div class="main-calc__unit">
          <div class="main-calc__heading">Ширина:</div>
          <div class="inputbox__wrapper" data-dimension="мм">
            <input class="input" type="text" id="width" name="width" data-dimension="мм" placeholder="0" autocomplete="off">
          </div>
        </div>
        <div class="main-calc__unit">
          <div class="main-calc__heading">Высота:</div>
          <div class="inputbox__wrapper" data-dimension="мм">
            <input class="input" type="text" id="height" name="height" placeholder="0" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="main-calc__unit">
        <div class="main-calc__heading">Ламинация:</div>
        <div class="main-calc__fields">
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Снаружи</div>
              <div class="main-calc__control-note">+ 1 000 ₽</div>
            </div>
            <input class="hidden-visually" type="checkbox" id="lamination-1" name="lamination-outer" checked>
            <label class="main-calc__label" for="lamination-1"></label>
          </div>
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Изнутри</div>
              <div class="main-calc__control-note">+ 1 000 ₽</div>
            </div>
            <input class="hidden-visually" type="checkbox" id="lamination-2" name="lamination-inner">
            <label class="main-calc__label" for="lamination-2"></label>
          </div>
        </div>
      </div>
      <div class="main-calc__unit">
        <div class="main-calc__heading">Цвет основы:</div>
        <div class="main-calc__colors">
          <div class="main-calc__color" style="background-color:#F83E3E" title="Sunset Orange color">
            <input class="hidden-visually" type="radio" id="color-1" name="color" checked>
            <label class="main-calc__color-label" for="color-1"></label>
          </div>
          <div class="main-calc__color" style="background-color:#8A5D1A" title="Rope color">
            <input class="hidden-visually" type="radio" id="color-2" name="color">
            <label class="main-calc__color-label" for="color-2"></label>
          </div>
          <div class="main-calc__color" style="background-color:#8A3131" title="El Salva color">
            <input class="hidden-visually" type="radio" id="color-3" name="color">
            <label class="main-calc__color-label" for="color-3"></label>
          </div>
          <div class="main-calc__color" style="background-color:#FFC107" title="Amber color">
            <input class="hidden-visually" type="radio" id="color-4" name="color">
            <label class="main-calc__color-label" for="color-4"></label>
          </div>
          <div class="main-calc__color" style="background-color:#fff" title="White color">
            <input class="hidden-visually" type="radio" id="color-5" name="color">
            <label class="main-calc__color-label" for="color-5"></label>
          </div>
          <div class="main-calc__color" style="background-color:#4F4F4F" title="Emperor color">
            <input class="hidden-visually" type="radio" id="color-6" name="color">
            <label class="main-calc__color-label" for="color-6"></label>
          </div>
          <div class="main-calc__color main-calc__color--custom" style="background-color: #fff;">
            <span class="main-calc__color-text">Свой цвет</span>
            <input class="hidden-visually js-color-input" type="color" id="custom-input" name="custom-input">
            <label class="main-calc__color-label" for="custom-input"></label>
          </div>
        </div>
      </div>
    </div>
    <div class="grid__col grid__col-sm-5 main-calc__col--right">
      <div class="main-calc__heading">Размеры и характеристики двери:</div>
      <div class="main-calc__preview">
        <figure class="main-calc__picture">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/door.png" alt="">
          <div class="range js-range main-calc-range__height" id="setHeight" data-start="2200" data-min="2000" data-max="2400" data-step="10" data-orientation="vertical" data-tooltips="true" data-direction="rtl"></div>
          <div class="range js-range main-calc-range__width" id="setWidth" data-start="900" data-min="800" data-max="1000" data-step="10" data-tooltips="true"></div>
        </figure>
      </div>
      <ul class="properties main-calc__properties">
        <li class="property">
          <div class="property-table">
            <div class="property-cell">
              <?php novokno_icon( 'temperature', '', 'property__icon' ); ?>
            </div>
            <div class="property-cell">
              <div class="property__label">Тепло</div>
            </div>
            <div class="property-cell">
              <div class="property__bar">
                <div class="property__bar-inner" data-property-width="30"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="property">
          <div class="property-table">
            <div class="property-cell">
              <?php novokno_icon( 'light', '', 'property__icon' ); ?>
            </div>
            <div class="property-cell">
              <div class="property__label">Свет</div>
            </div>
            <div class="property-cell">
              <div class="property__bar">
                <div class="property__bar-inner" data-property-width="30"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="property">
          <div class="property-table">
            <div class="property-cell">
              <?php novokno_icon( 'volume', '', 'property__icon' ); ?>
            </div>
            <div class="property-cell">
              <div class="property__label">Шум</div>
            </div>
            <div class="property-cell">
              <div class="property__bar">
                <div class="property__bar-inner" data-property-width="30"></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-calc__foot">
    <div class="main-calc__foot__row">
      <div class="main-calc__total">
        <span class="main-calc__total-label">Ваша стоимость:</span>
        <span class="main-calc__total-price">
          <span class="main-calc__total-price-value">14000</span>
          ₽
        </span>
      </div>
      <button class="btn btn--primary" type="button">Оформить заявку</button>
    </div>
  </div>
</div>