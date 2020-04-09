<?php
/**
 * Template Name: Окна
 */

get_header();
?>

  <main class="wrapper">
    <div class="layout layout--main">
      <section class="products">
        <div class="layout">
          <div class="container">
            <div class="products__heading heading heading--center">
              <h2 class="heading__title">Пластиковые окна</h2>
              <p class="heading__subtitle">Остекление квартир, домов, дач в Подольске с гарантией на 5 лет</p>
            </div>
            <ul class="tabs goods-primary-tabs">
              <li class="tabs__tab-wrap">
                <button class="tab is-active" role="tab" data-tab-target="goods00">Окна в квартиру</button>
              </li>
              <li class="tabs__tab-wrap">
                <button class="tab" role="tab" data-tab-target="goods01">Окна в дом</button>
              </li>
              <li class="tabs__tab-wrap">
                <button class="tab" role="tab" data-tab-target="goods02">Окна на дачу</button>
              </li>
            </ul>

            <div class="tabs-content goods-primary-tabs-content">

              <?php
              $categories = array( 'window-flat', 'window-house', 'window-dacha' );

              foreach ($categories as $i => $category) : ?>

              <div class="tabs-content__wrapper <?php if ($i == 0) echo 'is-active'; ?>" role="tabpanel" data-tab="goods00" data-tab-group="goods">
                <ul class="tabs goods-secondary-tabs">
                  <?php
                  $args = array(
                    'numberposts'    => -1,
                    'post_type'      => $category,
                    'order'          => 'ASC',
                  );

                  $query = new WP_Query($args);

                  if( $query->have_posts() ) : while( $query->have_posts() ) :
                    $query->the_post();
                    ?>
                  <li class="tabs__tab-wrap">
                    <button class="tab is-active" role="tab" data-tab-target="apartment00">Geolan</button>
                  </li>
                  <?php
                    endwhile; 
                    wp_reset_postdata();
                  endif;
                  ?>
                </ul>
                <div class="tabs-content goods-secondary-tabs-content">


                  <div class="tabs-content__wrapper is-active" role="tabpanel" data-tab="apartment00" data-tab-group="apartment">
                    <div class="grid goods-list">
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-single-non-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Пластиковое окно с глухой створкой">
                              <span class="goods-tile__title">Пластиковое окно</span>
                              <span class="goods-tile__subtitle">с глухой створкой</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-single-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Пластиковое окно с открывающейсая створкой">
                              <span class="goods-tile__title">Пластиковое окно</span>
                              <span class="goods-tile__subtitle">с открывающейсая створкой</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-double-non-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Двухстворчатое окно c глухими створками">
                              <span class="goods-tile__title">Двухстворчатое окно</span>
                              <span class="goods-tile__subtitle">c глухими створками</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-double-opening-non-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Двухстворчатое окно с открывающейся и глухой створкой">
                              <span class="goods-tile__title">Двухстворчатое окно</span>
                              <span class="goods-tile__subtitle">с открывающейся и глухой створкой</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-double-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Двухстворчатое окно с двумя открывающимися створками">
                              <span class="goods-tile__title">Двухстворчатое окно</span>
                              <span class="goods-tile__subtitle">с двумя открывающимися створками</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-triple-non-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Трёхстворчатое окно с тремя глухими створками">
                              <span class="goods-tile__title">Трёхстворчатое окно</span>
                              <span class="goods-tile__subtitle">с тремя глухими створками</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-triple-opening-non-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Трёхстворчатое окно с одной открывающейся створкой">
                              <span class="goods-tile__title">Трёхстворчатое окно</span>
                              <span class="goods-tile__subtitle">с одной открывающейся створкой</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-triple-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Трёхстворчатое окно с двумя открывающимися створками">
                              <span class="goods-tile__title">Трёхстворчатое окно</span>
                              <span class="goods-tile__subtitle">с двумя открывающимися створками</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-balcony-non-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Балконный блок с глухими створками">
                              <span class="goods-tile__title">Балконный блок</span>
                              <span class="goods-tile__subtitle">с глухими створками</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-balcony-opening-non-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Трёхстворчатое окно с одной открывающейся створкой">
                              <span class="goods-tile__title">Трёхстворчатое окно</span>
                              <span class="goods-tile__subtitle">с одной открывающейся створкой</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                      <div class="grid__col grid__col-sm-4 grid__col-6">
                        <div class="goods-tile">
                          <div class="goods-tile__inner">
                            <a class="goods-tile__picture" href="">
                              <img src="assets/img/content/windows/window-balcony-opening.jpg" title="" alt="" />
                            </a>
                            <a class="goods-tile__heading" href="" title="Трёхстворчатое окно с двумя открывающимися створками">
                              <span class="goods-tile__title">Трёхстворчатое окно</span>
                              <span class="goods-tile__subtitle">с двумя открывающимися створками</span>
                            </a>
                            <div class="goods-tile__prices">
                              <div class="goods-tile__price">
                                <span class="goods-tile__price-label">Цена:</span>
                                <span class="goods-tile__price-value">10 100</span>
                                <span class="goods-tile__price-currency">₽</span>
                              </div>
                              <div class="goods-tile__price-old"> 12 100 ₽</div>
                            </div>
                            <button class="btn btn--primary btn--block">Рассчитать</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div>
              </div>
              <?php
              endforeach;
              ?>

            </div>
          </div>
        </div>
      </section>

      <?php
      // Выводит общий баннер для заявки на замер
      get_template_part( 'template-parts/banner/banner-installment' );
      ?>

      <div class="banner lozad  banner--simple" data-background-image="assets/img/backgrounds/bg-window.jpg">
        <div class="container">
          <div class="banner__content">
            <div class="banner__heading heading">
              <h2 class="heading__title">Ламинация окон</h2>
              <p class="heading__subtitle">Новые возможности цветовых решений для рам и области их использования.</p>
            </div>
            <div class="banner__accent">от 3 990 руб.</div>
            <button class="btn btn--primary" type="button">Оставить заявку</button>
          </div>
        </div>
      </div>
    </div>
  </main>
  
<?php
get_footer();
