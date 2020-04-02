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

              $query = new WP_Query( $args ); ?>
              <script>
              var posts_projects = '<?php echo addslashes(json_encode( $query->query_vars )); ?>',
                  current_page_projects = <?php echo $query->query_vars['paged']; ?>,
                  max_page_projects = <?php echo $query->max_num_pages; ?>;
              </script>
              <?php
              if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part( 'template-parts/post/card-article' ); ?>
              <?php endwhile; endif; ?>

                <div class="btn__container grid__col-12">
                <?php
                if ( $query->max_num_pages > 1 ) : ?>
                  <button class="btn btn--wider js-more-projects">Загрузить еще</button>
                <?php endif; wp_reset_postdata(); ?>
                </div>
              </div>
            </div>



        </div>
      </section>
    </div>
  </main>

<?php
get_footer();