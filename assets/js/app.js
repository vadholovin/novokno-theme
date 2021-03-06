"use strict";

/* eslint-disable */

/**
 * SVG4EVERYBODY
 */
document.addEventListener('DOMContentLoaded', function () {
  svg4everybody();
});

(function ($) {})(jQuery);
/**
 * MENU
 */


jQuery(function ($) {
  $('.menu-item-has-children').children('a').attr('href', 'javascript:void(0)');
});
document.addEventListener('DOMContentLoaded', function () {
  var dropdowns = document.querySelectorAll('.mobile-menu .menu-item-has-children > a');

  var showDropdown = function showDropdown(e) {
    e.preventDefault();
    e.target.parentElement.classList.toggle('is-active');
    var panel = e.target.nextElementSibling;

    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  };

  Array.prototype.forEach.call(dropdowns, function (el, i) {
    el.addEventListener('click', showDropdown);
  });
});
/**
 * BURGER
 */

document.addEventListener('DOMContentLoaded', function () {
  var burger = document.querySelector('#burger');
  var menu = document.querySelector('#mobile-nav');
  var menuOverlay = document.querySelector('#mobile-nav-overlay');

  var showMenu = function showMenu(e) {
    e.target.classList.toggle('burger--close');

    if (menu.matches('.is-closed')) {
      menu.classList.replace('is-closed', 'is-open');
      document.body.classList.add('is-nav-mobile-open');
    }
  };

  var closeMenu = function closeMenu() {
    menu.classList.replace('is-open', 'is-closed');
    burger.classList.toggle('burger--close');
    document.body.classList.remove('is-nav-mobile-open');
  };

  burger.addEventListener('click', showMenu);
  menuOverlay.addEventListener('click', closeMenu);
});
/**
 * TABS
 */

(function ($) {
  function tabs() {
    // data-tab-target - вешается на таб
    // data-tab и tab-group  - на содержимое таба
    // tab-group должен быть одинаковый у всех табов одной группы (в одном контейнере, например)
    $(document).on('click', '[data-tab-target]', function (e) {
      e.preventDefault();
      var activeClass = 'is-active';
      $(this).addClass(activeClass).parent().siblings().find('.' + activeClass).removeClass(activeClass);
      var targetTab = $(this).data('tab-target'),
          tab = $(document).find('[data-tab="' + targetTab + '"]'),
          tabGroup = tab.data('tab-group');
      $(document).find('[data-tab-group="' + tabGroup + '"]').hide().removeClass(activeClass);
      tab.show(0, function () {
        $(this).addClass(activeClass);
      });
    });
  }

  tabs();
})(jQuery);
/**
 * SWIPER
 */


document.addEventListener('DOMContentLoaded', function () {
  var portfolio = new Swiper('.js-portfolio-slider', {
    preloadImages: false,
    lazy: true,
    spaceBetween: 20,
    slidesPerView: 4,
    keyboard: {
      enabled: true
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
      dragSize: 150
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 8
      },
      500: {
        slidesPerView: 3,
        spaceBetween: 12
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var articles = new Swiper('.js-articles-slider', {
    preloadImages: false,
    lazy: true,
    spaceBetween: 26,
    slidesPerView: 3,
    keyboard: {
      enabled: true
    },
    navigation: {
      nextEl: '.js-articles-swiper .swiper-button-next',
      prevEl: '.js-articles-swiper .swiper-button-prev'
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      500: {
        slidesPerView: 2,
        spaceBetween: 12
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 26
      }
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var similar = new Swiper('.js-similar-slider', {
    preloadImages: false,
    lazy: true,
    spaceBetween: 26,
    slidesPerView: 3,
    keyboard: {
      enabled: true
    },
    navigation: {
      nextEl: '.js-similar-swiper .swiper-button-next',
      prevEl: '.js-similar-swiper .swiper-button-prev'
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      500: {
        slidesPerView: 2,
        spaceBetween: 12
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 26
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 26
      }
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var info = new Swiper('.js-info-slider', {
    preloadImages: false,
    // lazy: true,
    autoHeight: true,
    observer: true,
    observeParents: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    keyboard: {
      enabled: true
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
  info.updateAutoHeight(300);
});
document.addEventListener('DOMContentLoaded', function () {
  var banner = new Swiper('.js-banner-slider', {
    preloadImages: false,
    lazy: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    keyboard: {
      enabled: true
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  for (var i = 0; i <= 3; i++) {
    var wrapper = '#finished-goods-block0' + i;
    var slider = '#finished-goods-slider0' + i;
    var next = wrapper + ' .swiper-button-next';
    var prev = wrapper + ' .swiper-button-prev';
    var finishedGoods = new Swiper(slider, {
      preloadImages: false,
      lazy: true,
      spaceBetween: 20,
      slidesPerView: 3,
      observer: true,
      observeParents: true,
      keyboard: {
        enabled: true
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      navigation: {
        nextEl: next,
        prevEl: prev
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 6
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 16
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20
        }
      }
    });
  }
});
document.addEventListener('DOMContentLoaded', function () {
  var equipment = new Swiper('#equipment-slider', {
    // preloadImages: false,
    // lazy: true,
    spaceBetween: 20,
    slidesPerView: 3,
    keyboard: {
      enabled: true
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '#equipment-block .swiper-button-next',
      prevEl: '#equipment-block .swiper-button-prev'
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      500: {
        slidesPerView: 2,
        spaceBetween: 12
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var products = document.querySelectorAll('.product');

  for (var i = 0; i < products.length; i++) {
    var thumbs = '#product-thumbs-' + i;
    var slider = '#product-slider-' + i;
    var productThumbs = new Swiper(thumbs, {
      preloadImages: false,
      lazy: true,
      slidesPerView: 3,
      spaceBetween: 20,
      direction: 'vertical',
      keyboard: {
        enabled: true
      },
      breakpoints: {
        320: {
          spaceBetween: 8
        },
        1024: {
          spaceBetween: 20
        }
      }
    });
    var product = new Swiper(slider, {
      preloadImages: false,
      lazy: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      thumbs: {
        swiper: productThumbs
      }
    });
  }
});
document.addEventListener('DOMContentLoaded', function () {
  var productThumbs = new Swiper('#product-thumbs', {
    preloadImages: false,
    lazy: true,
    slidesPerView: 3,
    spaceBetween: 20,
    direction: 'vertical',
    keyboard: {
      enabled: true
    },
    breakpoints: {
      320: {
        spaceBetween: 8
      },
      1024: {
        spaceBetween: 20
      }
    }
  });
  var product = new Swiper('#product-slider', {
    preloadImages: false,
    lazy: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    thumbs: {
      swiper: productThumbs
    }
  });
});
/**
 * NOUISLIDER
 */

document.addEventListener('DOMContentLoaded', function () {
  var ranges = document.querySelectorAll('.js-range');

  var createRange = function createRange(el) {
    var start = parseInt(el.dataset.start, 10);
    var step = parseInt(el.dataset.step, 10) || null;
    var connect = el.dataset.connect || false;
    var orientation = el.dataset.orientation || 'horizontal';
    var tooltips = el.dataset.tooltips === 'true' ? true : false;
    var min = parseInt(el.dataset.min);
    var max = parseInt(el.dataset.max);
    var direction = el.dataset.direction || 'ltr';
    noUiSlider.create(el, {
      start: start,
      step: step,
      connect: connect,
      orientation: orientation,
      tooltips: tooltips,
      direction: direction,
      range: {
        'min': min,
        'max': max
      },
      format: {
        to: function to(value) {
          return parseInt(value) + '';
        },
        from: function from(value) {
          return Number(value);
        }
      }
    });
  };

  var updateRange = function updateRange(el) {
    var min = parseInt(el.dataset.min);
    var max = parseInt(el.dataset.max);
    el.noUiSlider.updateOptions({
      range: {
        'min': min,
        'max': max
      }
    });
  };

  if (typeof ranges != 'undefined' && ranges != null) {
    Array.prototype.forEach.call(ranges, function (el, i) {
      createRange(el);
    });
  }
});
/**
 * SET CUSTOM COLOR
 */

document.addEventListener('DOMContentLoaded', function () {
  var colorInput = document.querySelector('.js-color-input');
  var colorRadio = document.querySelectorAll('[name=color]');

  var toggleSiblings = function toggleSiblings(sibling) {
    var siblings = Array.prototype.filter.call(sibling.parentNode.children, function (child) {
      return child !== sibling;
    });

    for (var i = 0; i < siblings.length; i++) {
      if (sibling.classList.contains('is-active')) {
        siblings[i].classList.add('is-inactive');
      } else {
        siblings[i].classList.remove('is-inactive');
      }
    }
  };

  var showCustomColor = function showCustomColor(event) {
    var el = event.target;
    var color = el.value;
    var wrapper = el.parentElement;
    wrapper.classList.add('is-active');
    wrapper.style.backgroundColor = color;
    toggleSiblings(wrapper);
  };

  var clearCustomColor = function clearCustomColor(el) {
    var wrapper = el.parentElement;
    el.value = null;
    wrapper.classList.remove('is-active');
    wrapper.removeAttribute('style');
    toggleSiblings(wrapper);
  };

  colorInput.addEventListener('change', showCustomColor, false);

  for (var i = 0; i < colorRadio.length; i++) {
    colorRadio[i].addEventListener('change', function () {
      clearCustomColor(colorInput);
    }, false);
  }
});
/**
 * PROPERTY WIDTH
 */

document.addEventListener('DOMContentLoaded', function () {
  var bars = document.querySelectorAll('[data-property-width]');

  if (typeof bars != 'undefined' && bars != null) {
    Array.prototype.forEach.call(bars, function (el, i) {
      var width = el.getAttribute('data-property-width');
      el.style.width = width.trim() + '%';
    });
  }
});
/**
 * LAZY LOAD IMAGES
 */

document.addEventListener('DOMContentLoaded', function () {
  var observer = lozad('.lozad', {});
  observer.observe();
});
/**
 * TOOLTIPS
 */

document.addEventListener('DOMContentLoaded', function () {
  tippy('[data-tippy-content]', {// theme: 'light',
  });
});
/**
 * HEADER SCROLL
 */

document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('.js-header'),
      headerBottom = document.querySelector('.js-header-bottom');
  window.addEventListener("scroll", function () {
    var posY = window.pageYOffset || document.documentElement.scrollTop;

    if (posY > 90) {
      headerBottom.classList.add('main-header-bottom--scrolled');
      header.classList.add('main-header--scrolled');
    } else {
      headerBottom.classList.remove('main-header-bottom--scrolled');
      header.classList.remove('main-header--scrolled');
    }
  });
});
/**
 * INPUT MASK
 */

document.addEventListener('DOMContentLoaded', function () {
  var phones = document.querySelectorAll('.js-input-phone');

  if (typeof phones != 'undefined' && phones != null) {
    Array.prototype.forEach.call(phones, function (el, i) {
      var cleavePhone = new Cleave(el, {
        blocks: [2, 0, 3, 0, 3, 2, 2],
        delimiters: [' ', '(', ')', ' ', '-'],
        numericOnly: true
      });
      el.addEventListener('focus', function (e) {
        if (!cleavePhone.properties.prefix) {
          cleavePhone.properties.prefix = '+7';
          cleavePhone.properties.prefixLength = 2;
          e.target.value = '+7 ';
        }
      });
      el.addEventListener('blur', function (e) {
        if (cleavePhone.properties.prefix === '+7' && e.target.value === '+7 ') {
          cleavePhone.properties.prefix = '';
          cleavePhone.properties.prefixLength = null;
          e.target.value = null;
        }
      });
    });
  }
});
/**
 * POPUPS
 */

(function ($) {
  $.extend(true, $.magnificPopup.defaults, {
    tClose: 'Закрыть (Esc)',
    // Alt text on close button
    tLoading: 'Загрузка...',
    // Text that is displayed during loading. Can contain %curr% and %total% keys
    gallery: {
      tPrev: 'Предыдущий (Клавиша левая стрелка)',
      // Alt text on left arrow
      tNext: 'Следующий (Клавиша правая стрелка)',
      // Alt text on right arrow
      tCounter: '%curr% / %total%' // Markup for "1 of 7" counter

    },
    image: {
      tError: '<a href="%url%">Изображение</a> не загрузилось.' // Error message when image could not be loaded

    },
    ajax: {
      tError: '<a href="%url%">Контент</a> не загрузился.' // Error message when ajax request failed

    }
  });
  $('.js-popup-call').magnificPopup({
    removalDelay: 300,
    items: {
      src: '#call-request'
    },
    fixedContentPos: false,
    autoFocusLast: false,
    callbacks: {
      open: function open() {
        $('body').addClass('is-modal-open');
      },
      close: function close() {
        $('body').removeClass('is-modal-open');
      }
    }
  });
  $('.js-popup-measure').magnificPopup({
    removalDelay: 300,
    items: {
      src: '#general-request'
    },
    fixedContentPos: false,
    autoFocusLast: false,
    callbacks: {
      open: function open() {
        $('body').addClass('is-modal-open');
      },
      close: function close() {
        $('body').removeClass('is-modal-open');
      }
    }
  }); // Project images

  if ($('.project-post a[href*=".jpg"], .project-post a[href*=".jpeg"], .project-post a[href*=".png"]').length) {
    var links = $('.project-post a[href*=".jpg"], .project-post a[href*=".jpeg"], .project-post a[href*=".png"]');
    links.magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      },
      zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out'
      }
    });
  }
})(jQuery);
/**
 * READMORE
 */


(function ($) {
  $('.js-product-features-table').readmore({
    collapsedHeight: 240,
    speed: 75,
    moreLink: '<a class="product-features__more" href="#">Все характеристики</a>',
    lessLink: '',
    heightMargin: 16
  });
})(jQuery);