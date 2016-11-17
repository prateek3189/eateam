$(document).ready(function(){
    if($('form').length) {
        $('form label.animate').on("click", function(){
            var forAttr = $(this).attr('for');
            $(this).animate({
                "top": "2px",
                "font-size": "16px"
            }, 500);
            $('#' + forAttr).show('500');
            $(this).parent('.field-box').addClass('active')
        });

        $('form input[type=text]').on("blur", function(){
            if($(this).val() === '') {
                var forAttr = $(this).attr('id');
                $('label[for=' + forAttr + ']').animate({
                    "top": "15px",
                    "font-size": "20px"
                }, 500);
                $(this).hide();
            }
            $(this).parent('.field-box').removeClass('active');
        });

        $('form textarea').on("focus", function(){
            var forAttr = $(this).attr('id');
            $('label[for=' + forAttr + ']').slideUp(500);
            $(this).parent('.textarea-field').addClass('active')
        });

        $('form textarea').on("blur", function(){
            if($(this).val() === '') {
                var forAttr = $(this).attr('id');
                $('label[for=' + forAttr + ']').slideDown(500);
            }
            $(this).parent('.textarea-field').removeClass('active')
        });
    }
});
