<?php
/**
 * Template Name: Проекты
 */

get_header();
?>
  <main class="wrapper">
    <div class="layout layout--main">
      <section class="articles-content">
        <div class="container">
          <div class="articles__heading heading heading--center">
            <h2 class="heading__title">Проекты</h2>
            <p class="heading__subtitle">Проекты выполненные компанией «Новые Окна»</p>
          </div>


            <div class="articles__list">
              <div class="grid articles__grid">
              <?php
              $args = array(
                'posts_per_page' => 9,
                'post_type'      => 'projects',
                'paged'          => 1,
              );

              $query = new WP_Query( $args );
              
              if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                get_template_part( 'template-parts/post/card-article' );
              endwhile; endif; ?>

                <div class="btn__container grid__col-12">
                <?php
                if (  $query->max_num_pages > 1 ) : ?>
                  
                  <button class="btn btn--wider js-more-posts"
                          data-current="1"
                          data-ajax-posts='<?php echo serialize( $query->query_vars ); ?>'
                          data-max-pages='<?php echo $query->max_num_pages; ?>'>
                    Загрузить еще
                  </button>
                <?php endif; ?>
                </div>
              </div>
            </div>



        </div>
      </section>
    </div>
  </main>

<?php
get_footer();