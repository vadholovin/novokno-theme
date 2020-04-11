<div class="banner lozad  banner--top" data-background-image="<?php the_field( 'topbanner_bg' ); ?>">
  <div class="container">
    <div class="banner__content">
      <div class="banner__heading heading">
        <h1 class="heading__title"><?php the_field( 'topbanner_title' ); ?></h1>
        <p class="heading__subtitle"><?php the_field( 'topbanner_subtitle' ); ?></p>
      </div>
      <?php
      $topbanner_btn = get_field( 'topbanner_btn' );	

      if( $topbanner_btn ) : ?>
      <button class="btn btn--primary btn--wider js-popup-call" type="button"
              data-form-subject="<?php echo $topbanner_btn['subject']; ?>">
        <?php echo $topbanner_btn['text']; ?>
      </button>
      <?php endif; ?>
    </div>
  </div>
</div>
