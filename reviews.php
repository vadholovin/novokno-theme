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
          <div class="grid reviews-list">
            <?php
            $args = array(
              'numberposts'    => 6,
              'post_type'      => 'reviews',
            );

            $q = get_posts( $args ); ?>
            <script>
            var posts_projects = '<?php echo serialize( $q->query_vars ) ?>',
                current_page_projects = <?php echo $q->query_vars['paged'] ?>,
                max_page_projects = <?php echo $q->max_num_pages ?>
            </script>
            <?php
            foreach ( $q as $post ) : setup_postdata( $post ); ?>
            <div class="grid__col grid__col-md-4 grid__col-xs-6">
              <div class="reviews-item">
                <figure class="reviews-item__picture">
                  <img src="<?php the_field( 'review_photo' ); ?>"
                       alt="<?php the_field( 'review_name' ); ?>">
                </figure>
                <div class="reviews-item__text"><?php the_field( 'review_text' ); ?></div>
                <div class="reviews-item__name"><?php the_field( 'review_name' ); ?></div>
                <div class="reviews-item__city"><?php the_field( 'review_city' ); ?></div>
              </div>
            </div>

            <?php endforeach; ?>

            <div class="btn__container grid__col-12">
            <?php
            if (  $q->max_num_pages > 1 ) : ?>
              <button class="btn btn--wider js-more-reviews">Загрузить еще</button>
            <?php endif; ?>
            </div>
          </div>
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
