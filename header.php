<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta http-equiv="X-UA-Compatible" content="IE = edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
  <script>document.documentElement.classList.replace("no-js", "js");</script>
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <script>var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';</script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php
  // Ввыводит мобильную навигацию
  get_template_part( 'template-parts/mobile-nav' );
  ?>

  <header class="main-header js-header">
    <div class="main-header-top">
      <div class="container">
        <div class="main-header__inner">
          <a class="logo header-top-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="На Главную">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="логотип Новые Окна" width="133">
          </a>

          <nav class="main-nav main-header-top__menu main-menu main-nav--desktop" id="nav-2">
            <?php
            $args = array(
              'menu_class'        => 'main-nav__list',
              'container'         => null,
              'theme_location'    => 'header-top',
            );

            wp_nav_menu($args);
            ?>
          </nav>

          <?php
          if( have_rows('socials', 'option') ) : ?>
            <ul class="social header__social">
            <?php while( have_rows('socials', 'option') ): the_row(); ?>
              <li class="social__item">
                <a href="<?php the_sub_field('link'); ?>"
                  class="social__link social__link--<?php the_sub_field('id'); ?>"
                  rel="noopener"
                  title="<?php the_sub_field('name'); ?>"
                  target="_blank">
                  <?php novokno_icon( get_sub_field('id'), null, null, null, null ); ?>
                </a>
              </li>
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>

          <?php
          $header_phone = get_field('header_phone', 'option');	

          if( $header_phone ): ?>
          <div class="main-header-top__contact">
            <a class="main-header-top__contact-link"
              href="<?php echo $header_phone['link']; ?>">
              <?php echo $header_phone['number']; ?>
            </a>
            <p class="main-header-top__contact-note">
              <?php the_field( 'header_phone_note', 'option' ); ?>
            </p>
          </div>
          <?php endif; ?>
          <button class="btn btn--primary js-popup-call" type="button">Бесплатный звонок</button>
        </div>
      </div>
    </div>

    <div class="main-header-bottom js-header-bottom">
      <div class="container">
        <div class="main-header__inner">
          <a class="logo header-bottom-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="логотип Новые Окна" width="80">
          </a>
          <nav class="main-nav main-nav--desktop" id="nav-1">
          <?php
          $args = array(
            'menu_class'        => 'main-nav__list',
            'container'         => null,
            'theme_location'    => 'header-bottom',
          );

          wp_nav_menu($args);
          ?>
          </nav>
          <div class="main-header-bottom__controls">
            <a class="icon-link  icon-link--measure js-popup-measure" href="">
              <span class="icon icon-ruler">
                <svg aria-hidden="true" focusable="false"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprites/icons.svg#ruler"></use>
                </svg>
              </span>
              <span class="icon-link__text">Заявка на бесплатный замер</span>
            </a>
            <a class="icon-link  icon-link--call js-popup-call" href="">
              <span class="icon icon-phone">
                <svg aria-hidden="true" focusable="false"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprites/icons.svg#phone"></use>
                </svg>
              </span>
              <span class="icon-link__text hidden-visually">Бесплатный звонок</span>
            </a>
            <button class="burger main-nav__toggler" aria-label="Показать главное меню" id="burger">
              <span>Показать главное меню</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
