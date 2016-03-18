$(document).ready(function() {

    var swiperSlider = $('.swiper-container').swiper({
        mode: 'horizontal',
        loop: true,
        grabCursor: false,
        simulateTouch: true,
        onSlideChangeEnd: function(swiper){
            var a = $('#slider').find('.swiper-slide-visible');
            console.log($(a).attr('class'));
            if ($(a).hasClass('slide-1')) {
                $('#header').removeClass("dark");
                $('#logo').find('img').each(function(){
                    $(this).attr('src', 'img/icon@2x.png')
                });
            } else if ($(a).hasClass('slide-2')) {
                $('#header').addClass("dark");
                $('#logo').find('img').each(function(){
                    $(this).attr('src', 'img/icon_light@2x.png')
                });
            }

        }

    });

    $('#slider-arrow-left').on('click', function(e){
        e.preventDefault();
        swiperSlider.swipePrev();
    });

    $('#slider-arrow-right').on('click', function(e){
        e.preventDefault();
        swiperSlider.swipeNext();
    });


    $('#email-submit-btn').on('click', function(e) {
        var emailTemp = $("#mc-embedded-subscribe-form").validate();
        var emailValid = emailTemp.valid();
        var emailValue = $("input[name='EMAIL']").val();
        if (emailValue != "" && emailValid)  {
            alert("ok");
            createEmailFile(emailValue);
        }
    });

});

function createEmailFile(email) {
    $.ajax({
        type: 'POST',
        data: {email: email},
        url: 'getEmail.php',
        success: function(data) {
            alert('file saved');
        },
        error: function() {
            alert('error');
        }
    });
}