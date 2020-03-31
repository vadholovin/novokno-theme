<div class="article article--project">
  <figure class="article__thumb">
    <a href="<?php the_permalink(); ?>"></a>
    <img class="lozad"
         data-src="<?php the_post_thumbnail_url( 'image-350x200' ); ?>"
         alt="">
  </figure>

  <h3 class="article__heading">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h3>
</div>
