<?php
/**
 * Главная страница
 */

get_header();
?>

<main class="wrapper" role="main">
  <div class="layout">
    <?php
    // Выводит верхний слайдер
    get_template_part( 'template-parts/top-slider' );

    // Выводит верхний блок преимуществ
    get_template_part( 'template-parts/top-flag-list' );
    ?>
    
  </div>

  <div class="layout layout--main">
    <div class="combine">
      <div class="layout">
        <div class="container">
          <div class="combine__heading heading heading--center">
            <ul class="tabs combine-tabs">
              <li class="tabs__tab-wrap heading__title">
                <button class="tab is-active" role="tab" data-tab-target="combine00">Готовые решения</button>
              </li>
              <li class="tabs__tab-wrap heading__title">
                <button class="tab" role="tab" data-tab-target="combine01">Калькулятор стоимости</button>
              </li>
            </ul>
            <p class="heading__subtitle">Поможем определиться с ценой! Выберите калькулятор для подробного рассчёта.</p>
          </div>
          <div class="tabs-content combine-tabs-content">
            <div class="tabs-content__wrapper is-active" role="tabpanel" data-tab="combine00" data-tab-group="combine">
              <ul class="tabs finished-tabs">
                <li class="tabs__tab-wrap">
                  <button class="tab is-active" role="tab" data-tab-target="finished00">
                    <div class="tab__inner">
                      <svg class="finished-tabs__icon" width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="32" height="28" stroke="#E6E6E6" stroke-width="2"></rect>
                        <rect x="1" y="1" width="15.7083" height="28" stroke="#E6E6E6" stroke-width="2"></rect>
                        <line x1="17" y1="16.1538" x2="19.6154" y2="16.1538" stroke="#E6E6E6" stroke-width="2"></line>
                      </svg>
                      <span class="tab__text">Окна</span>
                    </div>
                  </button>
                </li>
                <li class="tabs__tab-wrap">
                  <button class="tab" role="tab" data-tab-target="finished01">
                    <div class="tab__inner">
                      <svg class="finished-tabs__icon" width="33" height="31" viewBox="0 0 33 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.35889" y="1" width="30.6413" height="16.6522" stroke="#E6E6E6" stroke-width="2"></rect>
                        <rect x="1.35889" y="1" width="20.0956" height="16.6522" stroke="#E6E6E6" stroke-width="2"></rect>
                        <line x1="21.9521" y1="8.32605" x2="24.463" y2="8.32605" stroke="#E6E6E6" stroke-width="2"></line>
                        <rect x="1" y="1.16144" width="31" height="28.525" stroke="#E6E6E6" stroke-width="2"></rect>
                      </svg>
                      <span class="tab__text">Балконы и лоджии</span>
                    </div>
                  </button>
                </li>
                <li class="tabs__tab-wrap">
                  <button class="tab" role="tab" data-tab-target="finished02">
                    <div class="tab__inner">
                      <svg class="finished-tabs__icon" width="21" height="31" viewBox="0 0 21 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="18.15" height="29" stroke="#E6E6E6" stroke-width="2"></rect>
                        <line x1="2.83789" y1="14.7384" x2="6.77251" y2="14.7384" stroke="#E6E6E6" stroke-width="2"></line>
                      </svg>
                      <span class="tab__text">Двери</span>
                    </div>
                  </button>
                </li>
                <li class="tabs__tab-wrap">
                  <button class="tab" role="tab" data-tab-target="finished03">
                    <div class="tab__inner">
                      <svg class="finished-tabs__icon" width="21" height="28" viewBox="0 0 21 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="11" y1="-4.37114e-08" x2="11" y2="28" stroke="#E5E5E5" stroke-width="2"></line>
                        <line x1="20" y1="-4.37114e-08" x2="20" y2="28" stroke="#E5E5E5" stroke-width="2"></line>
                        <line x1="19" y1="1" x2="11" y2="0.999999" stroke="#E5E5E5" stroke-width="2"></line>
                        <line x1="19" y1="27" x2="11" y2="27" stroke="#E5E5E5" stroke-width="2"></line>
                        <line x1="16" y1="14" y2="14" stroke="#E5E5E5" stroke-width="2"></line>
                      </svg>
                      <span class="tab__text">Комплектующие</span>
                    </div>
                  </button>
                </li>
              </ul>
              <div class="tabs-content finished-tabs-content">
                <div class="tabs-content__wrapper is-active" role="tabpanel" data-tab="finished00" data-tab-group="finished">
                  <div class="finished-goods-block swiper-block" id="finished-goods-block00">
                    <div class="swiper-container finished-goods-slider" id="finished-goods-slider00">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
                <div class="tabs-content__wrapper" role="tabpanel" data-tab="finished01" data-tab-group="finished">
                  <div class="finished-goods-block swiper-block" id="finished-goods-block01">
                    <div class="swiper-container finished-goods-slider" id="finished-goods-slider01">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
                <div class="tabs-content__wrapper" role="tabpanel" data-tab="finished02" data-tab-group="finished">
                  <div class="finished-goods-block swiper-block" id="finished-goods-block02">
                    <div class="swiper-container finished-goods-slider" id="finished-goods-slider02">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
                <div class="tabs-content__wrapper" role="tabpanel" data-tab="finished03" data-tab-group="finished">
                  <div class="finished-goods-block swiper-block" id="finished-goods-block03">
                    <div class="swiper-container finished-goods-slider" id="finished-goods-slider03">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-single-non-opening.jpg" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" alt="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">680</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 100</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ одностворчатое 110х68 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">3 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-double-non-opening.jpg" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" alt="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 280</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ двустворчатое 135х128 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">5 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">7 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="finished-goods__tile">
                            <div class="finished-goods__inner">
                              <a class="finished-goods__picture" href="">
                                <div class="finished-goods__picture-inner">
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/content/windows/window-triple-non-opening.jpg" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" alt="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое" />
                                  <div class="finished-goods__size finished-goods__size--horizontal">
                                    <span class="finished-goods__size-value">1 950</span>
                                  </div>
                                  <div class="finished-goods__size finished-goods__size--vertical">
                                    <span class="finished-goods__size-value">1 350</span>
                                  </div>
                                </div>
                              </a>
                              <a class="finished-goods__heading" href="" title="Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое">
                                <span class="finished-goods__title">Окно ПВХ трёхстворчатое 135х195 см глухое/ поворотное правое</span>
                              </a>
                              <div class="finished-goods__prices">
                                <div class="finished-goods__prices-unit">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">9 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">за шт.</div>
                                </div>
                                <div class="finished-goods__prices-unit finished-goods__prices-unit--old">
                                  <div class="finished-goods__price">
                                    <span class="finished-goods__price-value">12 660</span>
                                    <span class="finished-goods__price-currency">₽</span>
                                  </div>
                                  <div class="finished-goods__price-note">c монтажем</div>
                                </div>
                              </div>
                              <div class="finished-goods__actions">
                                <button class="btn btn--primary" type="button">Рассчитать</button>
                                <button class="btn-text" type="button">Заказать в 1 клик</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabs-content__wrapper" role="tabpanel" data-tab="combine01" data-tab-group="combine">

              <?php
              // Выводит калькулятор окон
              get_template_part( 'template-parts/calc-windows' );
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    // Выводит блок услуг остекления
    get_template_part( 'template-parts/nav-line' );
    
    // Выводит Инфо баннер
    get_template_part( 'template-parts/banner-info' );
    ?>
    
    <section class="portfolio">
      <div class="container">
        <div class="portfolio__heading heading heading--center">
          <h2 class="heading__title">Портфолио</h2>
          <p class="heading__subtitle">За 10 лет работы, мы установили более 5 760 пластиковых окон</p>
        </div>
        <div class="swiper-container portfolio-slider js-portfolio-slider" id="portfolio-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-1.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-1.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-2.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-2.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-3.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-3.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-4.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-4.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-1.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-1.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-2.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-2.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-3.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-3.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="portfolio-item" href="assets/img/content/portfolio/portfolio-4.jpg">
                <img class="portfolio-item__img swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/portfolio/portfolio-4.jpg" alt="">
                <div class="swiper-lazy-preloader"></div>
              </a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>

    <?php
    // Выводит баннер с рассрочкой
    get_template_part( 'template-parts/banner-installment' );
    ?>

    <section class="articles">
      <div class="container">
        <div class="articles__heading heading heading--center">
          <h2 class="heading__title">Полезная информация</h2>
          <p class="heading__subtitle">Больше информации в <a href=''>специальном разделе</a>
          </p>
        </div>
        <div class="articles-swiper-block swiper-block js-articles-swiper">
          <div class="swiper-container articles-slider js-articles-slider" id="articles-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-1.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Этапы работ по утеплению балкона</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-2.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Как правильно выбрать профиль</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-3.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Защита от насекомых</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-4.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Этапы работ по утеплению балкона</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-5.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Как правильно выбрать профиль</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-6.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Защита от насекомых</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-7.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Этапы работ по утеплению балкона</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-8.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Как правильно выбрать профиль</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="article article--slide">
                  <figure class="article__thumb">
                    <a href=""></a>
                    <img class="swiper-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/content/articles/article-9.jpg" alt="">
                  </figure>
                  <h3 class="article__heading">
                    <a href="">Защита от насекомых</a>
                  </h3>
                  <p class="article__excerpt">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>
    
    <?php
    // Выводит общий баннер для заявки на замер
    get_template_part( 'template-parts/banner-application' );
    ?>

  </div>
</main>

<?php
get_footer();
