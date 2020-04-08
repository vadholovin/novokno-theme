<section class="articles">
  <div class="container">
    <div class="articles__heading heading heading--center">
      <h2 class="heading__title">Полезная информация</h2>
      <p class="heading__subtitle">
        Больше информации в
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
          специальном разделе
        </a>
      </p>
    </div>

    <div class="articles-swiper-block swiper-block js-articles-swiper">
      <div class="swiper-container articles-slider js-articles-slider" id="articles-slider">
        <div class="swiper-wrapper">
        <?php
        global $post;
        $args = array( 'posts_per_page' => 6);

        $articles = get_posts( $args );
        foreach ( $articles as $post ) : setup_postdata( $post ); ?>
          <div class="swiper-slide">
            <?php get_template_part( 'template-parts/post/card-article' ); ?>
          </div>
        <?php endforeach; 
        wp_reset_postdata();?>


        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

  </div>
</section>