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
            <img src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="логотип Новые окна" width="150">
          </div>
          <p class="payments-heading payments-heading--footer">Мы принимаем:</p>
          <?php
          if( have_rows('payments', 'option') ) : ?>
            <ul class="payments footer-payments">
            <?php while( have_rows('payments', 'option') ): the_row(); ?>
              <li class="payments-item">
                <img src="<?php the_sub_field('icon'); ?>"
                    title="<?php the_sub_field('name'); ?>"
                    alt="<?php the_sub_field('name'); ?>">
              </li>
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>

        <div class="grid__col grid__col-md-6 grid__col-sm-8 footer-middle__col--2">
          <div class="footer-docs">
            <a href="">Политика конфиденциальности</a>
            <a href="">Лицензии и сертификаты</a>
          </div>
          <p class="footer-address">
            <span class="icon icon-placemark icon--stroked">
              <svg aria-hidden="true" focusable="false"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprites/icons.svg#placemark"></use>
              </svg>
            </span><?php the_field( 'footer_address', 'option' ); ?>
          </p>
          <p class="footer-desc"><?php the_field( 'footer_desc', 'option' ); ?></p>
        </div>
        <div class="grid__col grid__col-md-3 footer-middle__col--3">
          <p class="share__heading">Поделиться</p>
          <ul class="share footer-share">
            <li class="share__item" title="VKontakte">
              <a class="share__link" href="" aria-label="VKontakte" rel="noopener" target="_blank">
                <img class="icon icon-vk-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/vk-square.svg" />
              </a>
            </li>
            <li class="share__item" title="Odnoklassniki">
              <a class="share__link" href="" aria-label="Odnoklassniki" rel="noopener" target="_blank">
                <img class="icon icon-odnoklassniki-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/odnoklassniki-square.svg" />
              </a>
            </li>
            <li class="share__item" title="Facebook">
              <a class="share__link" href="" aria-label="Facebook" rel="noopener" target="_blank">
                <img class="icon icon-facebook-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/facebook-square.svg" />
              </a>
            </li>
            <li class="share__item" title="Twitter">
              <a class="share__link" href="" aria-label="Twitter" rel="noopener" target="_blank">
                <img class="icon icon-twitter-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-square.svg" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="main-footer-bottom">
    <div class="container">
      <p class="footer__note">
        <?php the_field( 'footer_note', 'option' ); ?>
        <?php echo date_i18n( _x( 'Y', 'copyright date format', 'novokno' ) ); ?>
        Nov-okno.ru
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<?php
if ( is_page( 'kontakty' ) ) : ?>
<script>
ymaps.ready(init);

function init() {
  var mapCenter = [<?php echo get_field( 'contacts_map' )['x']; ?>, <?php echo get_field( 'contacts_map' )['y']; ?>];
  var myMap = new ymaps.Map('map', {
    center: mapCenter,
    zoom: 16
  });
  var myPlacemark = new ymaps.Placemark(mapCenter, {
    // Свойства.
    // Содержимое иконки, балуна и хинта.
    // iconContent: '1',
    // balloonContent: 'Балун',
    // hintContent: 'Стандартный значок метки'
  }, {
    // Опции.
    // Стандартная фиолетовая иконка.
    preset: 'twirl#violetIcon'
  });
  myMap.geoObjects.add(myPlacemark);
  myMap.behaviors.disable('scrollZoom');
}
</script>
<?php endif; ?>

</body>

</html>
