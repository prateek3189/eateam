// Disable developer mode
if(true) {
    $(document).keydown(function(e){
        if(e.which === 123 || e.which === 17 || e.which === 83) {
            return false;
        }
    });
}
$(document).ready(function(){
    $('.mobile-nav-image').on('click', function(){
        $('.nav-menu-list').toggle();
    });

    if($('.about-left-panel').length) {
        $(window).scroll(function(){
            if($(window).scrollTop() > 540) {
                $('.about-left-panel ul').css({position: 'fixed', top: 0});
            } else {
                $('.about-left-panel ul').css({position: 'static', top: 0});
            }
        });

        $('.about-left-panel a').on('click', function(){
            $('.about-left-panel a').removeClass('active');
            $(this).addClass('active');
        });
    }

    if($('.accord-action').length) {
        $('.accord-action').on('click', function(){
            var action = $(this).attr('lang');
            var panelId = $(this).attr('dir');
            if(action === 'close') {
                $('.panel-' + panelId).slideUp();
                $('.close_'+ panelId).hide();
                $('.open_'+ panelId).show();
            } else {
                $('.panel-' + panelId).slideDown();
                $('.close_'+ panelId).show();
                $('.open_'+ panelId).hide();
            }
        });
    }

    if($('.fiter-talent').length) {
        $('.fiter-talent').on('click', function(){
            var key = $(this).attr('lang');
            $('.accordian-head').hide();
            $('.accordian-content').hide();
            $('.filter_'+key).show();
            $('a[lang=close]').hide();
            $('a[lang=open]').show();
        });
    }
});
