<?php
global $post;
$current_page = $post->ID;

$TEMPLATES = array(
  'products-alumark.php',
  'products-gealan.php',
  'products-kbe.php',
  'products-rehau.php',
  'products-satels.php',
  'products-veka.php',
);
?>
<div class="product-similar">
  <div class="container">
    <div class="product-similar__heading">
      <h2 class="product-similar__title">Другие категории:</h2>
    </div>

    <div class="product-similar-swiper-block swiper-block js-similar-swiper">
      <div class="swiper-container similar-slider js-similar-slider">
        <div class="swiper-wrapper">

          <?php
          foreach ($TEMPLATES as $template) :
            $page_id = get_page_id_by_template($template);

            if ( $page_id != $current_page ) :
              $link = get_the_permalink( $page_id );
            ?>
            <div class="swiper-slide">
              <div class="goods-tile goods-tile--related">
                <div class="goods-tile__inner">
                  <figure class="goods-tile__picture">
                    <a href="<?= $link ?>">
                      <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/card/product-big.jpg" title="<?= get_the_title( $page_id ) ?>" alt="" />
                    </a>
                  </figure>
                  <a class="goods-tile__heading" href="<?= $link; ?>">
                    <span class="goods-tile__title">
                      <?= get_the_title( $page_id ) ?>
                    </span>
                  </a>
                  <a class="btn btn--primary btn--block" href="<?= $link; ?>">Перейти</a>
                </div>
              </div>
            </div>
          <?php endif; endforeach; ?>


        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</div>
