/*****************************************/
/********** FUNCIONES ESTANDAR ***********/
/*****************************************/
svg_replace();
boton_to_top_normal();
if (jQuery('.animated_letters').length) { animated_letters(); }

/*****************************************/
/************** FORMULARIOS **************/
/*****************************************/
(function () {

  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
    (function () {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function () {
        return this.replace(rtrim, '');
      };
    })();
  }

  [].slice.call(document.querySelectorAll('.input__field')).forEach(function (inputEl) {
    // in case the input is already filled..
    if (inputEl.value.trim() !== '') {
      classie.add(inputEl.parentNode, 'input--filled');
    }

    // events:
    inputEl.addEventListener('focus', onInputFocus);
    inputEl.addEventListener('blur', onInputBlur);
  });

  function onInputFocus(ev) {
    classie.add(ev.target.parentNode, 'input--filled');
  }

  function onInputBlur(ev) {
    if (ev.target.value.trim() === '') {
      classie.remove(ev.target.parentNode, 'input--filled');
    }
  }
})();

/*****************************************/
/******** LOADING PACE FIRST TIME ********/
/*****************************************/
Pace.once('hide', function () {
  // INICIO
  inicio();
});

/*****************************************/
/*********** FUNCIONES INICIO ************/
/*****************************************/
function inicio() {

  // LOADING
  jQuery('body').addClass('loaded');
  setTimeout(
    function () {
      jQuery('.cargador').css('display', 'none');
    }, 500);

  // BASICAS
  shrink_body();
  if (jQuery('.carrusel').length) { bg_carousel(); }
  if (jQuery('.type-carousel').length) { gallery_carousel(); }
  if (jQuery('.type-slider').length) { gallery_slider(); }
  if (jQuery('.animated_head').length) { animate_heads(); }
  if (jQuery('.skills__item').length) { animate_iconos(); }
  if (jQuery('.banner__content').length) { animate_banner(); }
  if (jQuery('.carrusel').length) { animate_cabecera(); }
  if (jQuery('.normal__animation').length) { scroll_magic(); }
  if (jQuery('.modal').length) { btn_contacto_modal(); }
  if (jQuery('.btn_ancla_contact').length) { btn_contacto(); }
}

/*********** BTN CONTACT MODAL  ************/
function btn_contacto_modal() {
  jQuery('.modal header .btn_contacto').click(function (event) {
    event.preventDefault();
    jQuery('.modal').modal('toggle');
    setTimeout(
      function () {
        jQuery('html, body').animate({
          scrollTop: jQuery('#contacto').offset().top
        }, 500);
      }, 500);
  });
}

/*********** BTN CONTACT  ************/
function btn_contacto() {
  jQuery('.btn_ancla_contact').click(function (event) {
    event.preventDefault();
    setTimeout(
      function () {
        jQuery('html, body').animate({
          scrollTop: jQuery('#contacto').offset().top
        }, 500);
      }, 500);
  });
}

/*********** ANIMATED LETTERS  ************/
function animated_letters() {
  jQuery('.animated_letters').each(function () {
    var text = jQuery(this).text().split(' ');
    for (var i = 0, len = text.length; i < len; i++) {
      text[i] = '<span class="word-' + i + '"><span class="word-' + i + '">' + text[i] + '</span></span>';
    }
    jQuery(this).html(text.join(' '));
  });
}

/*********** SCROLL MAGIC  ************/
function scroll_magic() {

  // init controller
  var controller = new ScrollMagic.Controller();

  // build scene
  new ScrollMagic.Scene({
    triggerElement: ".normal__animation",
    triggerHook: 1, // show, when scrolled 10% into view
    // duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50, // move trigger to center of element
    // reverse: false
  })
    .setClassToggle(".normal__animation", "animation") // add class to reveal
    .addTo(controller);

  // build scene
  new ScrollMagic.Scene({
    triggerElement: ".normal__animation2",
    triggerHook: 1, // show, when scrolled 10% into view
    // duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50, // move trigger to center of element
    // reverse: false
  })
    .setClassToggle(".normal__animation2", "animation") // add class to reveal
    .addTo(controller);

  // build scenes
  new ScrollMagic.Scene({
    triggerElement: ".banner__bg",
    triggerHook: "onEnter",
    duration: "200%"
  })
    .setTween(".banner_bg__fondo", { y: "100%", ease: Linear.easeNone })
    .addTo(controller);

  // build scenes
  new ScrollMagic.Scene({
    triggerElement: ".intro",
    triggerHook: 0,
    offset: "300",
  })
    .setClassToggle(".banner_bg__fondo", "animation") // add class to reveal
    .addTo(controller)
}

/*****************************************/
/******** CARRUSEL FULLPAGE BG ***********/
/*****************************************/
function bg_carousel() {

  var owl = jQuery('.carrusel .owl-carousel');

  var $elemento;

  owl.on('initialized.owl.carousel', function (event) {
    jQuery('.owl-carousel .active').eq(1).addClass('focus');
    jQuery('.owl-carousel .active').eq(2).addClass('focus');
    $elemento = event.item.index;
  });

  owl.owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false
  })

  owl.on('translated.owl.carousel', function (event) {

    var current = jQuery('.modal .owl-carousel .active');
    var current_position = jQuery('.modal .owl-carousel .active').find('.item').data('position');

    jQuery('.modal .current_item').removeClass('active');
    jQuery('.modal .current_' + current_position).addClass('active');

    jQuery('.modal .carrusel__navigation__bar_progress_item').removeClass('active');

    for (var i = 0; i < current_position; i++) {
      var real = i + 1;
      jQuery('.modal .carrusel__navigation__bar_progress_item[data-position="' + real + '"]').addClass('active');
    }
  });

}

/*****************************************/
/******** CARRUSEL FULLPAGE BG ***********/
/*****************************************/
function gallery_carousel() {

  var owl = jQuery('.type-carousel .owl-carousel');

  var $elemento;

  owl.on('initialized.owl.carousel', function (event) {
    jQuery('.owl-carousel .active').eq(1).addClass('focus');
    jQuery('.owl-carousel .active').eq(2).addClass('focus');
    $elemento = event.item.index;
  });

  owl.owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoWidth: true,
    items: 3,
    dots: false
  })

  owl.on('translated.owl.carousel', function (event) {

    var current = jQuery('.modal .owl-carousel .active');
    var current_position = jQuery('.modal .owl-carousel .active').find('.item').data('position');

    jQuery('.modal .current_item').removeClass('active');
    jQuery('.modal .current_' + current_position).addClass('active');

    jQuery('.modal .carrusel__navigation__bar_progress_item').removeClass('active');

    for (var i = 0; i < current_position; i++) {
      var real = i + 1;
      jQuery('.modal .carrusel__navigation__bar_progress_item[data-position="' + real + '"]').addClass('active');
    }
  });

}

/*****************************************/
/******** CARRUSEL FULLPAGE BG ***********/
/*****************************************/
function gallery_slider() {

  var owl_slider = jQuery('.type-slider .owl-carousel');

  var $elemento;

  owl_slider.on('initialized.owl.carousel', function (event) {
    jQuery('.owl-carousel .active').eq(1).addClass('focus');
    jQuery('.owl-carousel .active').eq(2).addClass('focus');
    $elemento = event.item.index;
  });

  owl_slider.owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false
  })

  // owl.on('translated.owl.carousel', function (event) {

  //   var current = jQuery('.modal .owl-carousel .active');
  //   var current_position = jQuery('.modal .owl-carousel .active').find('.item').data('position');

  //   jQuery('.modal .current_item').removeClass('active');
  //   jQuery('.modal .current_' + current_position).addClass('active');

  //   jQuery('.modal .carrusel__navigation__bar_progress_item').removeClass('active');

  //   for (var i = 0; i < current_position; i++) {
  //     var real = i + 1;
  //     jQuery('.modal .carrusel__navigation__bar_progress_item[data-position="' + real + '"]').addClass('active');
  //   }
  // });

}

/*****************************************/
/************** SHRINK BODY **************/
/*****************************************/
function shrink_body() {
  var offset = 150;
  var duration = 300;
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('body').addClass('shrink');
    } else {
      jQuery('body').removeClass('shrink');
    }
  });
}

/*****************************************/
/************** SVG REPLACE **************/
/*****************************************/
function svg_replace() {
  jQuery('img[src$=\".svg\"]').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    jQuery.get(imgURL, function (data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');
      // Add replaced image's ID to the new SVG
      if (typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if (typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      }
      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');
      // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
      if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
      }
      // Replace image with new SVG
      $img.replaceWith($svg);
    }, 'xml');
  });
}

/******** BOTON TOP NORMAL ********/
function boton_to_top_normal() {
  jQuery('.back-to-top').click(function (event) {
    event.preventDefault();
    jQuery('html, body').animate({ scrollTop: 0 }, 300);
    return false;
  });
}

/******** ANIMACIONES TRABAJOS ********/

// ANIMACION BLOQUES GENERALES
function animate_blocks() {
  jQuery('.normal__animation').each(function () {
    var _this = this;
    var inview = new Waypoint({
      element: _this,
      handler: function (direction) {
        jQuery(this.element).addClass('animation');
      },
      offset: '100%'
    });
  });
}

// ANIMACION HEADERS
function animate_heads() {

  jQuery('.animated_head').each(function () {
    var _this = this;
    var inview = new Waypoint({
      element: _this,
      handler: function (direction) {
        jQuery(this.element).addClass('animation');
        jQuery('.animation .animated_letters > span').each(function (i) {
          var $li = jQuery(this);
          setTimeout(function () {
            $li.addClass('loaded');
          }, i * 100); // delay 100 ms
        });
      },
      offset: '80%'
    });
  });
}

// ANIMACION ICONOS
function animate_iconos() {
  var waypoints = jQuery('.skills__item').waypoint({
    handler: function (direction) {
      element: this,
        jQuery('.skills__item li').each(function (i) {
          var $li = jQuery(this);
          setTimeout(function () {
            $li.addClass('animation');
          }, i * 150); // delay 100 ms
        });
    },
    offset: '80%'
  })
}

// ANIMACION BANNER
function animate_banner() {
  var waypoints = jQuery('.banner__content').waypoint({
    handler: function (direction) {
      element: this,
        jQuery(this.element).addClass('animation');
      jQuery('.animation.banner__content .animated_letters > span').each(function (i) {
        var $li = jQuery(this);
        setTimeout(function () {
          $li.addClass('loaded');
        }, i * 200); // delay 100 ms
      });
    },
    offset: '80%'
  })
}

// ANIMACION CABECERA
function animate_cabecera() {
  var waypoints = jQuery('.carrusel').waypoint({
    handler: function (direction) {
      element: this,
        jQuery(this.element).addClass('animation');
      jQuery('.carrusel .animated_letters > span').each(function (i) {
        var $li = jQuery(this);
        setTimeout(function () {
          $li.addClass('loaded');
        }, i * 200); // delay 100 ms
      });
    },
    offset: '80%'
  })
}