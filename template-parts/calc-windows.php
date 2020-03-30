<div class="main-calc">
  <div class="grid main-calc__body">
    <div class="grid__col grid__col-sm-7 main-calc__col--left">
      <div class="main-calc__unit">
        <div class="main-calc__heading">Тип окна:</div>
        <div class="main-calc__fields">
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-single.png" title="Описание типа окна" alt="Описание типа окна">
            <input class="hidden-visually" type="radio" id="window-1" name="window" value="0" checked>
            <label class="main-calc__label" for="window-1"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-double.png" title="Описание типа окна" alt="Описание типа окна">
            <input class="hidden-visually" type="radio" id="window-2" name="window" value="1">
            <label class="main-calc__label" for="window-2"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-triple.png" title="Описание типа окна" alt="Описание типа окна">
            <input class="hidden-visually" type="radio" id="window-3" name="window" value="2">
            <label class="main-calc__label" for="window-3"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-leaf-double.png" title="Описание типа окна" alt="Описание типа окна">
            <input class="hidden-visually" type="radio" id="window-4" name="window" value="3">
            <label class="main-calc__label" for="window-4"></label>
          </div>
          <div class="main-calc__control main-calc__control--with-img">
            <img class="main-calc__control-img" src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-leaf-single.png" title="Описание типа окна" alt="Описание типа окна">
            <input class="hidden-visually" type="radio" id="window-5" name="window" value="4">
            <label class="main-calc__label" for="window-5"></label>
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
        <div class="main-calc__unit-top">
          <div class="main-calc__heading">Тип профиля:</div>
          <select class="select" id="" name="">
            <option value="veka">Veka</option>
            <option value="1">Geolan</option>
            <option value="2">Satels</option>
            <option value="3">Rehau</option>
          </select>
          <select class="select" id="house-type" name="house-type">
            <option value="1">Панельный дом</option>
            <option value="2">Кирпичный дом</option>
          </select>
        </div>
        <div class="main-calc__fields">
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Эконом</div>
              <div class="main-calc__control-kind">VEKA BLITZ</div>
            </div>
            <input class="hidden-visually" type="radio" id="profile-1" name="profile" value="" checked>
            <label class="main-calc__label" for="profile-1"></label>
          </div>
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Стандарт</div>
              <div class="main-calc__control-kind">VEKA BLITZ</div>
            </div>
            <input class="hidden-visually" type="radio" id="profile-2" name="profile" value="">
            <label class="main-calc__label" for="profile-2"></label>
          </div>
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Комфорт</div>
              <div class="main-calc__control-kind">VEKA BLITZ</div>
            </div>
            <input class="hidden-visually" type="radio" id="profile-3" name="profile" value="">
            <label class="main-calc__label" for="profile-3"></label>
          </div>
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Комфорт</div>
              <div class="main-calc__control-kind">VEKA BLITZ</div>
            </div>
            <input class="hidden-visually" type="radio" id="profile-4" name="profile" value="">
            <label class="main-calc__label" for="profile-4"></label>
          </div>
        </div>
      </div>
      <div class="main-calc__unit">
        <div class="main-calc__heading">Дополнительные опции:</div>
        <div class="main-calc__fields">
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Монтаж</div>
              <div class="main-calc__control-note">+856 ₽</div>
            </div>
            <input class="hidden-visually" type="checkbox" id="mounting" name="mounting" checked>
            <label class="main-calc__label" for="mounting"></label>
          </div>
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Подоконник</div>
              <div class="main-calc__control-note">+360 ₽</div>
            </div>
            <input class="hidden-visually" type="checkbox" id="windowsill" name="windowsill">
            <label class="main-calc__label" for="windowsill"></label>
          </div>
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Отлив</div>
              <div class="main-calc__control-note">+209 ₽</div>
            </div>
            <input class="hidden-visually" type="checkbox" id="ebb" name="ebb">
            <label class="main-calc__label" for="ebb"></label>
          </div>
          <div class="main-calc__control">
            <div class="main-calc__control-text">
              <div class="main-calc__control-title">Откосы</div>
              <div class="main-calc__control-note">+1046 ₽</div>
            </div>
            <input class="hidden-visually" type="checkbox" id="slope" name="slope">
            <label class="main-calc__label" for="slope"></label>
          </div>
        </div>
      </div>
    </div>
    <div class="grid__col grid__col-sm-5 main-calc__col--right">
      <div class="main-calc__heading">Размеры и характеристики окна:</div>
      <div class="main-calc__preview">
        <figure class="main-calc__picture">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/content/calc/window-double-big.png" alt="">
          <div class="range js-range main-calc-range__height" id="setHeight" data-start="1000" data-min="500" data-max="2400" data-step="10" data-orientation="vertical" data-tooltips="true" data-direction="rtl"></div>
          <div class="range js-range main-calc-range__width" id="setWidth" data-start="1200" data-min="1000" data-max="1600" data-step="10" data-tooltips="true"></div>
        </figure>
      </div>
      <ul class="properties main-calc__properties">
        <li class="property">
          <div class="property-table">
            <div class="property-cell">
              <?php novokno_icon('temperature', null, 'property__icon') ?>
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
              <?php novokno_icon('light', null, 'property__icon') ?>
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
              <?php novokno_icon('volume', null, 'property__icon') ?>
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
      <table class="main-calc__options">
        <tbody>
          <tr>
            <th>Опции:</th>
            <td>0</td>
          </tr>
          <tr>
            <th>Монтаж:</th>
            <td>0</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn--primary" type="button">Оформить заявку</button>
    </div>
  </div>
</div>