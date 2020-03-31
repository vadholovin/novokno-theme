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
            <p class="heading__subtitle">Статьи написанные компетентными специалистами из нашей сферы</p>
          </div>


            <div class="articles__list">
              <div class="grid articles__grid">
              <?php
              $args = array(
              'post_type'      => 'projects',
              );

              $q = get_posts( $args ); ?>
              <script>
              var posts_projects = '<?php echo serialize( $q->query_vars ) ?>',
                  current_page_projects = <?php echo $q->query_vars['paged'] ?>,
                  max_page_projects = <?php echo $q->max_num_pages ?>
              </script>
              <?php
              foreach ( $q as $post ) : setup_postdata( $post ); ?>
                  <div class="grid__col grid__col-sm-4 grid__col-6">
                    <?php get_template_part( 'template-parts/post/card-project' ); ?>
                  </div>
              <?php endforeach; ?>

                <div class="btn__container grid__col-12">
                <?php
                if (  $wp_query->max_num_pages > 1 ) : ?>
                  <button class="btn btn--wider js-more-articles">Загрузить еще</button>
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