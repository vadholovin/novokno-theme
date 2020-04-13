<div class="reviews-item">
  <figure class="reviews-item__picture">
    <img src="<?php the_field( 'review_photo' ); ?>"
        alt="<?php the_field( 'review_name' ); ?>">
  </figure>
  <div class="reviews-item__text"><?php the_field( 'review_text' ); ?></div>
  <div class="reviews-item__name"><?php the_field( 'review_name' ); ?></div>
  <div class="reviews-item__city"><?php the_field( 'review_city' ); ?></div>
</div>
