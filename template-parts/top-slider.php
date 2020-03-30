<?php
if( have_rows('top-slider', 'option') ) : ?>
<div class="swiper-container top-slider js-banner-slider" id="">
  <div class="swiper-wrapper">

    <?php while( have_rows('top-slider', 'option') ): the_row(); ?>
      <div class="swiper-slide swiper-lazy" data-background="<?php the_sub_field( 'img' ); ?>">
        <div class="container">
          <div class="top-slider__item">
            <div class="top-slider__text">
              <div class="top-slider__heading"><?php the_sub_field( 'title' ); ?></div>
              <div class="top-slider__subheading"><?php the_sub_field( 'subtitle' ); ?></div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<?php endif; ?>
