<?php
/**
 * Template Name: Отзывы
 */

get_header();
?>

  <main class="wrapper">
    <div class="layout layout--main">
      <section class="reviews-content">
        <div class="container">
          <div class="reviews__heading heading heading--center">
            <h1 class="heading__title">Отзывы наших клиентов</h1>
            <p class="heading__subtitle">Доверьте свою работу профессионалам</p>
          </div>
          <?php
          $args = array(
            'posts_per_page'  => 6,
            'post_type'       => 'reviews',
          );

          $reviews = new WP_Query( $args );
          query_posts( $args );
          
          if ( $reviews->have_posts() ) :
          ?>
          <div class="grid reviews-list">
            <?php
            while ( $reviews->have_posts() ) : $reviews->the_post();
            ?>
            <div class="grid__col grid__col-md-4 grid__col-xs-6">
              <?php get_template_part( 'template-parts/post/review' ); ?>
            </div>
            <?php
            endwhile;
            ?>

            <div class="btn__container grid__col-12">
            <?php
            if (  $reviews->max_num_pages > 1 ) : ?>
              <button class="btn btn--wider js-more-posts"
                      data-current="1"
                      data-ajax-posts='<?php echo esc_attr( serialize( $reviews->query_vars ) ); ?>'
                      data-max-pages='<?php echo $reviews->max_num_pages; ?>'>
                Загрузить еще
              </button>
            <?php
            wp_reset_postdata();
            endif; ?>
            </div>
          </div>
          <?php
          endif;
          ?>
        </div>
      </section>
      <section class="reviews-form">
        <div class="container">
          <div class="reviews-form__heading heading">
            <h2 class="heading__title">Оставить отзыв</h2>
          </div>
          <?php echo do_shortcode( '[contact-form-7 id="252" title="Форма - Отзыв" html_class="form form-review"]' ); ?>
        </div>
      </section>
    </div>
  </main>

<?php
get_footer();
