<?php if ( 'window' == get_post_type() ) : ?>
<div class="goods-tile">
<?php elseif ( 'door' == get_post_type() ) : ?>
<div class="goods-tile goods-tile--doors">
<?php endif; ?>

  <div class="goods-tile__inner">
    <figure class="goods-tile__picture">
      <?php if ( has_post_thumbnail() ): ?>
      <img src="<?php echo esc_url( get_the_post_thumbnail_url(get_the_ID(),'image-h-240') ); ?>"
           title="<?php the_field( 'goods_title' ) . ' ' . the_field( 'goods_subtitle' ); ?>"
           alt="" />
      <?php endif; ?>
    </figure>
    <h3 class="goods-tile__heading">
      <span class="goods-tile__title"><?php the_field( 'goods_title' ); ?></span>
      <span class="goods-tile__subtitle"><?php the_field( 'goods_subtitle' ); ?></span>
    </h3>
    <div class="goods-tile__prices">
      <div class="goods-tile__price">
        <span class="goods-tile__price-label">Цена:</span>
        <span class="goods-tile__price-value"><?php the_field( 'goods_price' ); ?></span>
        <span class="goods-tile__price-currency">₽</span>
      </div>
      <?php if ( get_field( 'goods_price_old' ) ) : ?>
      <div class="goods-tile__price-old"><?php the_field( 'goods_price_old' ); ?> ₽</div>
      <?php endif; ?>
    </div>

    <?php if ( 'window' == get_post_type() ) : ?>
    <button class="btn btn--primary btn--block">Рассчитать</button>
    <?php elseif ( 'door' == get_post_type() ) : ?>
    <button class="btn btn--primary btn--block">Подробнее</button>
    <?php endif; ?>

  </div>
</div>
