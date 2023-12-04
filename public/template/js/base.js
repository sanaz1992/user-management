$(document).ready(function () {

    $('.dropdown-toggle').dropdown();
    //    منوی همبرگری
    $(function () {
        $('.navigation').uNav();
    });
    //    menu-hambergeri
    $('.burger, .overlay').click(function () {
        $('.burger').toggleClass('clicked');
        $('.overlay').toggleClass('show');
        $('nav').toggleClass('show');
        $('body').toggleClass('overflow');
    });

    /*.................move To top..............*/
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 350) {
            jQuery('#topcontrol').css({ bottom: "20px" });
        } else {
            jQuery('#topcontrol').css({ bottom: "-100px" });
        }
    });
    jQuery('#topcontrol').click(function () {
        jQuery('html, body').animate({ scrollTop: '0px' }, 800);
        return false;
    });

    $(".searchbtn").click(function () {
        $(this).toggleClass("bg-grean"),
            $(".icon-search2").toggleClass('color-whidth'),
            $(".input").focus().toggleClass('active-width').val('')
    })



    // nav-fix
    $(window).scroll(function () {
        var $heightScrolled = $(window).scrollTop();
        var $defaultHeight = 200;

        if ($heightScrolled < $defaultHeight) {
            $('.header-site-mobil').removeClass("header-site-mobil1")
            $('.header-site').removeClass("header-site1")
        } else {
            $('.header-site-mobil').addClass("header-site-mobil1")
            $('.header-site').addClass("header-site1")
        }
    });
});
