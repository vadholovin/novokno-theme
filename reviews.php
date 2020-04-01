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
          <form class="form form-review">
            <div class="grid form-review__grid">
              <div class="grid__col grid__col-md-4 grid__col-sm-6">
                <div class="inputbox">
                  <label class="inputbox__label hidden-visually" for="form-review-name">Ваше имя</label>
                  <div class="inputbox__wrapper">
                    <input class="input" type="text" name="form-review-name" id="form-review-name" placeholder="Ваше имя" />
                  </div>
                </div>
                <div class="inputbox">
                  <label class="inputbox__label hidden-visually" for="form-review-social">Ссылка на соц. сеть</label>
                  <div class="inputbox__wrapper">
                    <input class="input" type="text" name="form-review-social" id="form-review-social" placeholder="Ссылка на соц. сеть" />
                  </div>
                </div>
                <div class="inputbox">
                  <label class="inputfile">
                    <input class="inputfile__input" type="file" name="form-review-photo" accept="image/png, image/jpeg, image/jpg" />
                    <span class="inputfile__btn">Обзор</span>
                    <span class="inputfile__content">Загрузите ваше фото</span>
                  </label>
                </div>
              </div>
              <div class="grid__col grid__col-md-8 grid__col-sm-6">
                <div class="inputbox">
                  <label class="inputbox__label hidden-visually" for="form-review-message">Ваше сообщение</label>
                  <div class="inputbox__wrapper">
                    <textarea class="textarea" name="form-review-message" id="form-review-message" placeholder="Ваше сообщение"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn--primary btn--wider" type="submit">Отправить сообщение</button>
          </form>
        </div>
      </section>
    </div>
  </main>

<?php
get_footer();
