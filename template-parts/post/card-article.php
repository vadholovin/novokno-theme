<?php
if ( is_front_page() ) : ?>
<div class="article article--slide">
<?php else : ?>
<div class="article">
<?php endif; ?>

  <figure class="article__thumb">
    <a href="<?php the_permalink(); ?>"></a>
    <?php
    if ( is_front_page() ) : ?>
    <img class="swiper-lazy"
         data-src="<?php the_post_thumbnail_url( 'image-350x280' ); ?>"
         alt="">
    <?php else : ?>
    <img class="lozad"
         data-src="<?php the_post_thumbnail_url( 'image-350x200' ); ?>"
         alt="">
    <?php endif; ?>
  </figure>

  <h3 class="article__heading">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h3>

  <div class="article__excerpt">
    <?php the_excerpt(); ?>
  </div>
</div>
