<?php
if( have_rows('info_slide', 'option') ) : ?>
<div class="info">
  <div class="container">
    <div class="swiper-container swiper--info-slider info-slider js-info-slider" id="info-slider">
      <div class="swiper-wrapper">

        <?php while( have_rows('info_slide', 'option') ): the_row(); ?>
          <div class="swiper-slide info-slide">
            <div class="grid info-slide-grid">
              <div class="grid__col grid__col-sm-6">
                <div class="info-slide__body">
                  <div class="info__heading heading heading--info">
                    <h2 class="heading__title"><?php the_sub_field( 'title' ); ?></h2>
                    <p class="heading__subtitle"><?php the_sub_field( 'subtitle' ); ?></p>
                  </div>
                </div>
              </div>
              <div class="grid__col grid__col-sm-6">
                <figure class="info-slide__picture">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/corner.png" width="426" alt="">
                </figure>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="info-foot">
      <div class="info-foot__col">
        <a class="icon-link" href="">
          <?php novokno_icon('user', 'stroked') ?>
          <span class="icon-link__text">Больше инофрмации о нас</span>
        </a>
        <?php
        $info_phone = get_field( 'info_phone', 'option' );	

        if( $info_phone ): ?>
        <p class="info-foot__note">Телефон отдела продаж:
          <a href='tel:<?php echo $info_phone['link']; ?>'>
            <?php echo $info_phone['number']; ?>
          </a>
        </p>
        <?php endif; ?>
      </div>
      <div class="info-foot__col">
      <?php
      if( have_rows('payments', 'option') ) : ?>
        <ul class="payments info-payments">
        <?php while( have_rows('payments', 'option') ): the_row(); ?>
          <li class="payments-item">
            <img  src="<?php the_sub_field('icon'); ?>"
                  title="<?php the_sub_field('name'); ?>"
                  alt="<?php the_sub_field('name'); ?>">
          </li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
