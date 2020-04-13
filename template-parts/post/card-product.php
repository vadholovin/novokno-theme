<div class="goods-tile">
  <div class="goods-tile__inner">
    <figure class="goods-tile__picture">
      <?php if ( has_post_thumbnail() ): ?>
      <img data-src="<?php echo esc_url( get_the_post_thumbnail_url(get_the_ID(),'image-h-240') ); ?>"
          class="lozad"
          title="<?php the_field( 'product_title' ) . ' ' . the_field( 'product_subtitle' ); ?>"
          alt="" />
      <?php endif; ?>
    </figure>

    <h3 class="goods-tile__heading">
      <span class="goods-tile__title"><?php the_field( 'product_title' ); ?></span>
      <span class="goods-tile__subtitle"><?php the_field( 'product_subtitle' ); ?></span>
    </h3>

    <div class="goods-tile__prices">
      <div class="goods-tile__price">
        <span class="goods-tile__price-label">Цена:</span>
        <?php if ( get_field( 'product_cost' ) ) :
        $price = get_field( 'product_cost' );
        $price = number_format($price, 0, '.', ' '); ?>
        <span class="goods-tile__price-value">от <?= $price; ?></span>
        <?php endif; ?>
        <span class="goods-tile__price-currency">₽/ шт.</span>
      </div>
      <?php if ( get_field( 'product_cost_old' ) ) :
        $price_old = get_field( 'product_cost_old' );
        $price_old = number_format($price_old, 0, '.', ' '); ?>
      <div class="goods-tile__price-old"><?= $price_old; ?> ₽/ шт.</div>
      <?php endif; ?>
    </div>

    <a href="<?php the_permalink(); ?>" class="btn btn--primary btn--block">Подробнее</a>
    
    <?php if ( get_field( 'product_short_desc' ) ) : ?>
    <div class="goods-tile__desc"><?php the_field( 'product_short_desc' ); ?></div>
    <?php endif; ?>
  </div>
</div>
