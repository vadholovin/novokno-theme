<section class="portfolio">
  <div class="container">
    <div class="portfolio__heading heading heading--center">
      <h2 class="heading__title">Портфолио</h2>
      <p class="heading__subtitle">За 10 лет работы, мы установили более 5 760 пластиковых окон</p>
    </div>
    <div class="swiper-container portfolio-slider js-portfolio-slider" id="portfolio-slider">
      <div class="swiper-wrapper">
      <?php
      global $post;
      $args = array(
        'numberposts'    => 10,
        'post_type'      => 'projects',
        );

      $projects = get_posts( $args );
      foreach ( $projects as $post ) : setup_postdata( $post ); ?>

        <div class="swiper-slide">
          <a class="portfolio-item" href="<?php the_permalink(); ?>" target="_blank">
            <img class="portfolio-item__img swiper-lazy"
                  data-src="<?php the_post_thumbnail_url( 'image-300x240' ); ?>"
                  alt="">
          </a>
        </div>

      <?php endforeach; 
      wp_reset_postdata();?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-scrollbar"></div>
    </div>
  </div>
</section>