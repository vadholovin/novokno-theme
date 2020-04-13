<div class="banner lozad banner--simple" data-background-image="<?php the_field( 'service_banner_bg' ); ?>">
  <div class="container">
    <div class="banner__content">
      <div class="banner__heading heading">
        <h2 class="heading__title"><?php the_field( 'service_banner_title' ); ?></h2>
        <p class="heading__subtitle"><?php the_field( 'service_banner_subtitle' ); ?></p>
      </div>
      <div class="banner__accent"><?php the_field( 'service_banner_cost' ); ?></div>
      <?php
      $service_banner_btn = get_field( 'service_banner_btn' );	

      if( $service_banner_btn ) : ?>
      <button
        class="btn btn--primary" type="button"
        data-form-subject="<?php echo $service_banner_btn['subject']; ?>">
        <?php echo $service_banner_btn['text']; ?>
      </button>
      <?php endif; ?>
    </div>
  </div>
</div>