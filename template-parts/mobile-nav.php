<?php
/**
 * Displays mobile navigation
 */

?>

<div class="mobile-nav is-closed" id="mobile-nav">
  <div class="mobile-nav__overlay" id="mobile-nav-overlay"></div>
  <div class="mobile-nav__content">
    <div class="mobile-nav__inner">
      <div class="mobile-nav__head">
        <div class="logo mobile-nav__logo">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/general/logo.svg" alt="" width="72">
        </div>
        
        <?php
        if( have_rows('socials', 'option') ) : ?>
          <ul class="social social--center mobile-social">
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
        
      </div>
      <div class="mobile-nav__body">
        <?php
        $args = array(
          'menu_class'        => 'mobile-menu',
          'container'         => null,
          'theme_location'    => 'mobile',
        );

        wp_nav_menu($args);
        ?>

        <?php
        $header_phone = get_field('header_phone', 'option');
        
        if( $header_phone ): ?>
          <div class="mobile-contact">
            <a class="mobile-contact__link"
              href="<?php echo $header_phone['link']; ?>">
              <?php echo $header_phone['number']; ?>
            </a>
            <p class="mobile-contact__note">
              <?php the_field( 'header_phone_note', 'option' ); ?>
            </p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
