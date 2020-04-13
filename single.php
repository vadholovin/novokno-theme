<?php
/**
 * Шаблон для статьи
 */
get_header();
?>

<main class="wrapper">
  <div class="layout layout--main">
    <div class="post-content">
      <div class="container">
        <?php
        if ( have_posts() ) : 
          while ( have_posts() ) : the_post(); ?>
                  
            <div class="post">
              <div class="content-zone post-body">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
              </div>
            </div>

          <?php endwhile; endif; ?>

      </div>
    </div>
    
    <?php
    // Выводит общий баннер для заявки на замер
    get_template_part( 'template-parts/banner/banner-application' );
    ?>

  </div>
</main>

<?php
get_footer();
