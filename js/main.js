$(document).ready(function() {

    var swiperSlider = $('.swiper-container').swiper({
        mode: 'horizontal',
        loop: true,
        grabCursor: false,
        simulateTouch: true,
        onSwiperCreated: function(swiper){
            $('[data-caption-animate]').each(function(){
                var $toAnimateElement = $(this);
                var toAnimateDelay = $(this).attr('data-caption-delay');
                var toAnimateDelayTime = 0;
                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                if( !$toAnimateElement.hasClass('animated') ) {
                    $toAnimateElement.addClass('not-animated');
                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                    setTimeout(function() {
                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                    }, toAnimateDelayTime);
                }
            });
        },
    });

    $('#slider-arrow-left').on('click', function(e){
        e.preventDefault();
        swiperSlider.swipePrev();
    });

    $('#slider-arrow-right').on('click', function(e){
        e.preventDefault();
        swiperSlider.swipeNext();
    });


});