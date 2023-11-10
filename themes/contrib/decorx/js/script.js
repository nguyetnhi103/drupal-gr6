jQuery(document).ready(function ($) {
    // Mobile menu.
    $('.mobile-menu').click(function () {
        $(this).next('.primary-menu-wrapper').toggleClass('active-menu');
    });
    $('.close-mobile-menu').click(function () {
        $(this).closest('.primary-menu-wrapper').toggleClass('active-menu');
    });
    //header.
    var header = document.getElementById("header");
    if (document.body.classList.contains('logged-out')){
        header.style.removeProperty('top');
    }
    // Full page search.
    $('.search-icon').click(function () {
        $('.search-box').css('display', 'flex');
        return false;
    });
    $('.search-close').click(function () {
        $('.search-box').css('display', 'none');
        return false;
    });

    // Scroll To Top.
    $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            $('.scrolltop').css('display', 'flex');
            $("header#header").addClass("active");
        } else {
            $('.scrolltop').fadeOut('slow');
            $("#header").removeClass("active");
        }
    });
    
    $('.scrolltop').click(function () {
        $('html, body').scrollTop(0);
    });
    // if ($('ol li').siblings().length > 0) {
    //     // Add an icon after the first <li>
    //     $('ol li:first').append('/');
    // }

    // $('a.nav-link').hover(
    //     function () {
    //       // Show the submenu
    //       $(this).find('ul.dropdown-menu').addClass('show-menu');
    //     },
    //     function () {
    //       // Hide the submenu when the mouse leaves
    //       $(this).find('ul.dropdown-menu').removeClass('show-menu');
    //     }
    // );
    jQuery('nav > ul > li').hover(function(){
        jQuery('ul', jQuery(this)).addClass('show');
          }, function(){
          jQuery('ul', jQuery(this)).removeClass('show');
    });
    
});

/* If device width is more than 767px */
jQuery(window).on('load', function () {
    // Add empty space for fixed footer.
    if (jQuery(window).width() > 767) {
        var footerheight = jQuery('#footer').outerHeight(true) - 250;
        jQuery('#last-section').css('height', footerheight);
    }
});
