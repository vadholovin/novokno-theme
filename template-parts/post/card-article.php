<?php
if ( is_front_page() ) : ?>

  <div class="article article--slide">
    <figure class="article__thumb">
      <a href="<?php the_permalink(); ?>"></a>
      <img class="swiper-lazy"
          data-src="<?php the_post_thumbnail_url( 'image-350x280' ); ?>"
          alt="">
    </figure>

    <h3 class="article__heading">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <div class="article__excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>

<?php
elseif ( is_home() || is_page( 'projects' ) ) : ?>

<div class="grid__col grid__col-sm-4 grid__col-6">
  <?php if ( is_page( 'projects' ) ) : ?>
  <div class="article article--project">
  <?php else : ?>
  <div class="article">
  <?php endif; ?>
    <figure class="article__thumb">
      <a href="<?php the_permalink(); ?>"></a>
      <img class="lozad"
          data-src="<?php the_post_thumbnail_url( 'image-350x200' ); ?>"
          alt="">
    </figure>

    <h3 class="article__heading">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <?php if ( is_home() ) : ?>
    <div class="article__excerpt">
      <?php the_excerpt(); ?>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php else : ?>

  <div class="article">
    <figure class="article__thumb">
      <a href="<?php the_permalink(); ?>"></a>
      <img class="lozad"
          data-src="<?php the_post_thumbnail_url( 'image-350x200' ); ?>"
          alt="">
    </figure>

    <h3 class="article__heading">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <div class="article__excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>

<?php endif; ?>