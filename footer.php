<footer class="main-footer">
  <div class="main-footer-top">
    <div class="container">
      <div class="grid footer-nav">
        <div class="grid__col grid__col-md-2 grid__col-sm-4 grid__col-6">
          <h3 class="footer-menu__heading">Компания</h3>
          <?php
          $args = array(
            'menu_class'        => 'footer-menu',
            'container'         => null,
            'theme_location'    => 'footer-1',
          );

          wp_nav_menu($args);
          ?>
        </div>
        <div class="grid__col grid__col-md-2 grid__col-sm-4 grid__col-6">
          <h3 class="footer-menu__heading">Направления</h3>
          <?php
          $args = array(
            'menu_class'        => 'footer-menu',
            'container'         => null,
            'theme_location'    => 'footer-2',
          );

          wp_nav_menu($args);
          ?>
        </div>
        <div class="grid__col grid__col-md-3 grid__col-sm-4 grid__col-6">
          <h3 class="footer-menu__heading">Услуги</h3>
          <?php
          $args = array(
            'menu_class'        => 'footer-menu',
            'container'         => null,
            'theme_location'    => 'footer-3',
          );

          wp_nav_menu($args);
          ?>
        </div>
        <div class="grid__col grid__col-md-2 grid__col-sm-4 grid__col-6">
          <h3 class="footer-menu__heading">Продукция</h3>
          <?php
          $args = array(
            'menu_class'        => 'footer-menu',
            'container'         => null,
            'theme_location'    => 'footer-4',
          );

          wp_nav_menu($args);
          ?>
        </div>
        <div class="grid__col grid__col-md-3 grid__col-sm-4">
          <h3 class="footer-menu__heading">Аксессуары</h3>
          <?php
          $args = array(
            'menu_class'        => 'footer-menu',
            'container'         => null,
            'theme_location'    => 'footer-5',
          );

          wp_nav_menu($args);
          ?>
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

        <div class="grid__col grid__col-md-9 grid__col-sm-8 footer-middle__col--2">
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
