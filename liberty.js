jQuery(function(){
    $(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 20 ) { 
            $('#scrollUp').css('right','10px');
        } else { 
            $('#scrollUp').removeAttr( 'style' );
        }

    });
    });
});