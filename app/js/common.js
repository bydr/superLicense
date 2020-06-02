$(function() {

	// Custom JS
    var menuPopup = $('.mobile-menu');

    $(".mobile-menu__btn").on("click", function(){
            if (menuPopup.hasClass('is-active')) {
                $('body, html').removeClass('mobile-menu__showed');
                menuPopup.removeClass('is-active');
            } else {
                $('body, html').addClass('mobile-menu__showed');
                menuPopup.addClass('is-active');
            }
        return false;
    });

    // $(document).on('click', function(e){
    //     if (!$(e.target).closest('.menu').length){
    //         $('body').removeClass('body_pointer');
    //         $menu_popup.slideUp(300);
    //     }
    // });

    $('.website-sections__price').matchHeight();
    $('.website-sections__title').matchHeight();
    $('.website-sections__item').matchHeight();


});
