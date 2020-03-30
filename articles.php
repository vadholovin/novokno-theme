<?php
/**
 * The main template file
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
          <div class="articles__list">
            <div class="grid articles__grid">
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-1.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Этапы работ по утеплению балкона</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-2.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Как правильно выбрать профиль</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-3.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Защита от насекомых</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-4.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Этапы работ по утеплению балкона</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-5.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Как правильно выбрать профиль</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-6.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Защита от насекомых</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-7.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Этапы работ по утеплению балкона</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-8.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Как правильно выбрать профиль</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="grid__col grid__col-sm-4 grid__col-6">
                <div class="article">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="lozad" data-src="assets/img/content/articles/article-9.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Защита от насекомых</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
            </div>
            <div class="btn__container">
              <button class="btn btn--wider js-more-articles">Загрузить еще</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <footer class="main-footer">
    <div class="main-footer-top">
      <div class="container">
        <div class="grid footer-nav">
          <div class="grid__col grid__col-md-2 grid__col-sm-4 grid__col-6">
            <h3 class="footer-menu__heading">Компания</h3>
            <ul class="footer-menu">
              <li>
                <a href="">Каталог</a>
              </li>
              <li>
                <a href="">О компании</a>
              </li>
              <li>
                <a href="">Клиентам</a>
              </li>
              <li>
                <a href="">Контакты</a>
              </li>
            </ul>
          </div>
          <div class="grid__col grid__col-md-2 grid__col-sm-4 grid__col-6">
            <h3 class="footer-menu__heading">Направления</h3>
            <ul class="footer-menu">
              <li>
                <a href="">Окна</a>
              </li>
              <li>
                <a href="">Двери</a>
              </li>
              <li>
                <a href="">Балконы и лоджии</a>
              </li>
              <li>
                <a href="">Комплектующие</a>
              </li>
            </ul>
          </div>
          <div class="grid__col grid__col-md-3 grid__col-sm-4 grid__col-6">
            <h3 class="footer-menu__heading">Услуги</h3>
            <ul class="footer-menu">
              <li>
                <a href="">Ремонт и модернизация окон</a>
              </li>
              <li>
                <a href="">Установка маскитных сеток</a>
              </li>
              <li>
                <a href="">Заключение договора на дому</a>
              </li>
              <li>
                <a href="">Вывоз мусора</a>
              </li>
            </ul>
          </div>
          <div class="grid__col grid__col-md-2 grid__col-sm-4 grid__col-6">
            <h3 class="footer-menu__heading">Продукция</h3>
            <ul class="footer-menu">
              <li>
                <a href="">Окна Geolan</a>
              </li>
              <li>
                <a href="">Окна КБЕ</a>
              </li>
              <li>
                <a href="">Окна VEKA</a>
              </li>
              <li>
                <a href="">Окна Statels</a>
              </li>
              <li>
                <a href="">Окна Rehau</a>
              </li>
              <li>
                <a href="">Окна Alumark</a>
              </li>
              <li>
                <a href="">Окна Kaleva</a>
              </li>
            </ul>
          </div>
          <div class="grid__col grid__col-md-3 grid__col-sm-4">
            <h3 class="footer-menu__heading">Аксессуары</h3>
            <ul class="footer-menu">
              <li>
                <a href="">Отливы</a>
              </li>
              <li>
                <a href="">Дверные доводчики</a>
              </li>
              <li>
                <a href="">Ручки для окон</a>
              </li>
              <li>
                <a href="">Ограничители открывателей</a>
              </li>
              <li>
                <a href="">Набор по уходу за окнами</a>
              </li>
              <li>
                <a href="">Воздушные клапаны</a>
              </li>
              <li>
                <a href="">Подоконники</a>
              </li>
              <li>
                <a href="">Фурнитура для окон и дверей</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="main-footer-middle">
      <div class="container">
        <div class="grid footer-middle__grid">
          <div class="grid__col grid__col-md-3 grid__col-sm-4 footer-middle__col--1">
            <div class="logo footer-logo">
              <img src="assets/img/general/logo.svg" alt="логотип Новые окна" width="150">
            </div>
            <p class="payments-heading payments-heading--footer">Мы принимаем:</p>
            <ul class="payments footer-payments">
              <li class="payments-item">
                <img src="assets/img/icons/visa.svg" title="Visa" alt="Visa" />
              </li>
              <li class="payments-item">
                <img src="assets/img/icons/sberbank.svg" title="Сбербанк России" alt="Сбербанк России" />
              </li>
              <li class="payments-item">
                <img src="assets/img/icons/mastercard.svg" title="MasterCard" alt="MasterCard" />
              </li>
            </ul>
          </div>
          <div class="grid__col grid__col-md-6 grid__col-sm-8 footer-middle__col--2">
            <div class="footer-docs">
              <a href="">Политика конфиденциальности</a>
              <a href="">Лицензии и сертификаты</a>
            </div>
            <p class="footer-address">
              <span class="icon icon-placemark icon--stroked">
                <svg aria-hidden="true" focusable="false"><use xlink:href="assets/img/sprites/icons.svg#placemark"></use>
                </svg>
              </span>г. Подольск, ул. Парковая, д.54, офис 28
            </p>
            <p class="footer-desc">Пластиковые окна в Москве и Московской области.

              Устанавливаем надежные и долговечные пластиковые окна.

              Быстро, качественно и недорого, с гарантией срока службы 10 лет!
            </p>
          </div>
          <div class="grid__col grid__col-md-3 footer-middle__col--3">
            <p class="share__heading">Поделиться</p>
            <ul class="share footer-share">
              <li class="share__item" title="VKontakte">
                <a class="share__link" href="" aria-label="VKontakte" rel="noopener" target="_blank">
                  <img class="icon icon-vk-square" aria-hidden="true" focusable="false" src="assets/img/icons/vk-square.svg" />
                </a>
              </li>
              <li class="share__item" title="Odnoklassniki">
                <a class="share__link" href="" aria-label="Odnoklassniki" rel="noopener" target="_blank">
                  <img class="icon icon-odnoklassniki-square" aria-hidden="true" focusable="false" src="assets/img/icons/odnoklassniki-square.svg" />
                </a>
              </li>
              <li class="share__item" title="Facebook">
                <a class="share__link" href="" aria-label="Facebook" rel="noopener" target="_blank">
                  <img class="icon icon-facebook-square" aria-hidden="true" focusable="false" src="assets/img/icons/facebook-square.svg" />
                </a>
              </li>
              <li class="share__item" title="Twitter">
                <a class="share__link" href="" aria-label="Twitter" rel="noopener" target="_blank">
                  <img class="icon icon-twitter-square" aria-hidden="true" focusable="false" src="assets/img/icons/twitter-square.svg" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="main-footer-bottom">
      <div class="container">
        <p class="footer__note">Сайт не является публичной офертой и носит информационный характер © 2008 - 2020 Nov-okno.ru</p>
      </div>
    </div>
  </footer>
  <div class="modal-wrapper modal-wrapper--request modal-wrapper--general-request mfp-hide" id="call-request">
    <div class="modal-picture">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-1.png" alt="">
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
  <div class="modal-wrapper modal-wrapper--request modal-wrapper--general-request mfp-hide" id="general-request">
    <div class="modal-picture">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-1.png" alt="">
      </figure>
    </div>
    <div class="modal-inner">
      <form class="form form-modal">
        <div class="modal-title">Оставьте заявку</div>
        <input type="hidden" name="form-modal-subject" value="Заявка на замер">
        <div class="inputbox">
          <label class="inputbox__label hidden-visually" for="form-modal-name-2">Ваше имя</label>
          <div class="inputbox__wrapper">
            <input class="input" type="text" name="form-modal-name" id="form-modal-name-2" placeholder="Ваше имя" />
          </div>
        </div>
        <div class="inputbox">
          <label class="inputbox__label hidden-visually" for="form-modal-phone-2">Номер телефона</label>
          <div class="inputbox__wrapper">
            <input class="input js-input-phone" type="tel" name="form-modal-phone" id="form-modal-phone-2" autocomplete="off" placeholder="Ваш номер телефона" />
          </div>
        </div>
        <button class="btn btn--primary btn--block btn--wider" type="submit">Отправить</button>
        <p class="form-modal__note">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных.

        </p>
      </form>
    </div>
  </div>
  <div class="modal-wrapper modal-wrapper--request modal-wrapper--windows-request mfp-hide" id="windows-request">
    <div class="modal-picture">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-2.jpg" alt="">
      </figure>
    </div>
    <div class="modal-inner">
      <form class="form form-modal">
        <div class="modal-title">Оставьте заявку</div>
        <input type="hidden" name="form-modal-subject" value="Заявка на замер окна">
        <div class="inputbox">
          <label class="inputbox__label hidden-visually" for="form-modal-name-3">Ваше имя</label>
          <div class="inputbox__wrapper">
            <input class="input" type="text" name="form-modal-name" id="form-modal-name-3" placeholder="Ваше имя" />
          </div>
        </div>
        <div class="inputbox">
          <label class="inputbox__label hidden-visually" for="form-modal-phone-3">Номер телефона</label>
          <div class="inputbox__wrapper">
            <input class="input js-input-phone" type="tel" name="form-modal-phone" id="form-modal-phone-3" autocomplete="off" placeholder="Ваш номер телефона" />
          </div>
        </div>
        <button class="btn btn--primary btn--block btn--wider" type="submit">Отправить</button>
        <p class="form-modal__note">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных.



        </p>
      </form>
    </div>
  </div>
  <div class="modal-wrapper modal-wrapper--request modal-wrapper--doors-request mfp-hide" id="doors-request">
    <div class="modal-picture">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-3.jpg" alt="">
      </figure>
    </div>
    <div class="modal-inner">
      <form class="form form-modal">
        <div class="modal-title">Оставьте заявку</div>
        <input type="hidden" name="form-modal-subject" value="Заявка на замер окна">
        <div class="inputbox">
          <label class="inputbox__label hidden-visually" for="form-modal-name-4">Ваше имя</label>
          <div class="inputbox__wrapper">
            <input class="input" type="text" name="form-modal-name" id="form-modal-name-4" placeholder="Ваше имя" />
          </div>
        </div>
        <div class="inputbox">
          <label class="inputbox__label hidden-visually" for="form-modal-phone-4">Номер телефона</label>
          <div class="inputbox__wrapper">
            <input class="input js-input-phone" type="tel" name="form-modal-phone" id="form-modal-phone-4" autocomplete="off" placeholder="Ваш номер телефона" />
          </div>
        </div>
        <button class="btn btn--primary btn--block btn--wider" type="submit">Отправить</button>
        <p class="form-modal__note">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных.

        </p>
      </form>
    </div>
  </div>
  <div class="modal-wrapper modal-wrapper--response mfp-hide" id="general-response">
    <div class="modal-picture modal-picture--response">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-4.jpg" alt="">
      </figure>
    </div>
    <div class="modal-inner modal-inner--response">
      <div class="modal-title">Заявка отправлена!</div>
      <div class="modal-text">Благодарим Вас! Ваш запрос успешно отправлен.
        Наш специалист свяжется с вами по телефону
        в течение 24-х часов для уточнения деталей.</div>
      <a class="btn btn--primary btn--wider" href="">Вернуться на главную</a>
    </div>
  </div>
  <div class="modal-wrapper modal-wrapper--response mfp-hide" id="windows-response">
    <div class="modal-picture modal-picture--response">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-2.jpg" alt="">
      </figure>
    </div>
    <div class="modal-inner modal-inner--response">
      <div class="modal-title">Заявка отправлена!</div>
      <div class="modal-text">Благодарим Вас! Ваш запрос успешно отправлен.
        Наш специалист свяжется с вами по телефону
        в течение 24-х часов для уточнения деталей.</div>
      <a class="btn btn--primary btn--wider" href="">Вернуться на главную</a>
    </div>
  </div>
  <div class="modal-wrapper modal-wrapper--response mfp-hide" id="doors-response">
    <div class="modal-picture modal-picture--response">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-3.jpg" alt="">
      </figure>
    </div>
    <div class="modal-inner modal-inner--response">
      <div class="modal-title">Заявка отправлена!</div>
      <div class="modal-text">Благодарим Вас! Ваш запрос успешно отправлен.
        Наш специалист свяжется с вами по телефону
        в течение 24-х часов для уточнения деталей.</div>
      <a class="btn btn--primary btn--wider" href="">Вернуться на главную</a>
    </div>
  </div>
  <div class="modal-wrapper modal-wrapper--response modal-wrapper--fail-response mfp-hide" id="fail-response">
    <div class="modal-picture modal-picture--response">
      <figure class="modal-img">
        <img src="assets/img/general/modal/pop-img-3.jpg" alt="">
      </figure>
    </div>
    <div class="modal-inner modal-inner--response">
      <div class="modal-title">Приносим извинения!</div>
      <div class="modal-text">Сервер отправки сообщений временно
        недоступен попробуйте повторить действие чуть позже.</div>
      <a class="btn btn--primary btn--wider" href="">Вернуться на главную</a>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/libs.min.js"></script>
  <script src="js/app.js"></script>
</body>

</html>
