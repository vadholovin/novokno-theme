<?php
/**
 * Баннер с рассрочкой
 */

?>

<section class="installment">
  <div class="container">
    <div class="grid grid--no-gutters">
      <div class="grid__col grid__col-md-5">
        <div class="installment__module-left">
          <div class="installment__heading heading heading--info">
            <?php
            $installment_title = get_field( 'installment_title', 'option' );	

            if( $installment_title ): ?>
            <h2 class="heading__title">
              <?php echo $installment_title['part_1']; ?>
              <br>
              <span class="heading__title--thin"><?php echo $installment_title['part_2']; ?></span>
            </h2>
            <?php endif; ?>
            <p class="heading__subtitle"><?php the_field( 'installment_subtitle', 'option' ); ?></p>
          </div>
          <ul class="installment-list">
            <li class="installment__item" title="Bank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/credit-1.png" alt="Bank" />
            </li>
            <li class="installment__item" title="Bank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/credit-2.png" alt="Bank" />
            </li>
            <li class="installment__item" title="Bank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/credit-3.png" alt="Bank" />
            </li>
          </ul>
          <a href="" class="btn installment__btn">Подробнее</a>
        </div>
      </div>
      <div class="grid__col grid__col-md-7">
        <div class="installment__module-right">
          <form class="form installment-calc">
            <div class="installment-calc__col installment-calc__col--left">
              <div class="installment-calc__unit">
                <div class="installment-calc__label">Стоимость заказа:</div>
                <div class="installment-calc__value">
                  <span id='order-cost'>135 555</span> ₽
                </div>
                <div class="range js-range" data-start="100000" data-min="10000" data-max="500000" data-connect="lower"></div>
              </div>
              <div class="installment-calc__unit">
                <div class="installment-calc__label">Срок рассрочки</div>
                <div class="installment-calc__value">
                  <span id='installment-period'>0</span> месяцев
                </div>
                <div class="range js-range" data-start="3" data-min="0" data-max="6" data-connect="lower"></div>
              </div>
              <div class="installment-calc__foot">
                <a class="icon-link js-popup-measure" href="">
                  <?php novokno_icon('phone-arrow', 'stroked') ?>
                  <span class="icon-link__text">Оставить заявку</span>
                </a>
                <?php
                $installment_phone = get_field( 'installment_phone', 'option' );	

                if( $installment_phone ): ?>
                <p class="installment-calc__note">Телефон отдела продаж:
                  <a href='tel:<?php echo $installment_phone['link']; ?>'>
                    <?php echo $installment_phone['number']; ?>
                  </a>
                </p>
                <?php endif; ?>
              </div>
            </div>
            <div class="installment-calc__col installment-calc__col--right">
              <div class="installment-calc__unit">
                <div class="installment-calc__label">Первоначальный взнос:</div>
                <div class="installment-calc__value">
                  <span id='total-initial-fee'>135 555</span> ₽
                </div>
              </div>
              <div class="installment-calc__unit">
                <div class="installment-calc__label">Ежемесячный платёж:</div>
                <div class="installment-calc__value">
                  <span id='total-monthly-payment'>35 555</span> ₽
                </div>
              </div>
              <div class="installment-calc__unit">
                <div class="installment-calc__label">Переплата:</div>
                <div class="installment-calc__value">
                  <span id='total-overpayment'>0</span> ₽
                </div>
              </div>
              <div class="installment-calc__unit">
                <div class="installment-calc__label">Срок рассрочки:</div>
                <div class="installment-calc__value">
                  <span id='total-installment-period'>0</span> месяцев
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>