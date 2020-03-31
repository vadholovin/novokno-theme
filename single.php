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
              <div class="post-foot">
                <a class="like-btn" href="">
                  <?php novokno_icon('like', 'stroked') ?>
                  <span class="like-btn__count">115</span>
                </a>
                <ul class="share post-share">
                  <li class="share__item" title="VKontakte">
                    <a class="share__link" href="" aria-label="VKontakte" rel="noopener" target="_blank">
                      <img class="icon icon-vk-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/vk-square.svg" />
                    </a>
                  </li>
                  <li class="share__item" title="Odnoklassniki">
                    <a class="share__link" href="" aria-label="Odnoklassniki" rel="noopener" target="_blank">
                      <img class="icon icon-odnoklassniki-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/odnoklassniki-square.svg" />
                    </a>
                  </li>
                  <li class="share__item" title="Facebook">
                    <a class="share__link" href="" aria-label="Facebook" rel="noopener" target="_blank">
                      <img class="icon icon-facebook-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/facebook-square.svg" />
                    </a>
                  </li>
                  <li class="share__item" title="Twitter">
                    <a class="share__link" href="" aria-label="Twitter" rel="noopener" target="_blank">
                      <img class="icon icon-twitter-square" aria-hidden="true" focusable="false" src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-square.svg" />
                    </a>
                  </li>
                </ul>
              </div>
            </div>

          <?php endwhile; endif; ?>

      </div>
    </div>
    
    <?php
    // Выводит общий баннер для заявки на замер
    get_template_part( 'template-parts/banner-application' );
    ?>

  </div>
</main>

<?php
get_footer();
