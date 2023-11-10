(function ($, Drupal, once) {
  Drupal.behaviors.vtBehavior = {
    attach: function (context, settings) {

      //mobile menu
      jQuery(once('.vt-menu--main', '.burger')).click(function () {
        jQuery(this).closest('.vt-menu--main').addClass("vt-mobile-main-menu");
      });
      jQuery('.vt-menu--main .vt-menu-main').after().click(function () {
        jQuery('.vt-menu--main').removeClass("vt-mobile-main-menu");
      });

      // on scroll stickey header only for desktop
      function header_scrollFunction(x) {
        if (x.matches) { // If media query matches
          $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 200) {
              $(".stickey_header").removeClass("sticky-bar");
              $('#back-top').fadeOut(500);
            } else {
              $(".stickey_header").addClass("sticky-bar");
              $('#back-top').fadeIn(500);
            }
          });
        }
      }
      var x = window.matchMedia("(min-width: 767px)")
      header_scrollFunction(x) // Call listener function at run time
      x.addEventListener('scroll' , header_scrollFunction) // Attach listener function on state changes

      // nice select init
      $('select').niceSelect();

      // Scroll Up
      $('#back-top a').on("click", function () {
        console.log("sda");
        $('body,html').animate({
          scrollTop: 0
        }, 800);
        return FALSE;
      });
    }
  };
})(jQuery, Drupal, once);
