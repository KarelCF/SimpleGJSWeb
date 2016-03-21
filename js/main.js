AV.initialize('Ci7A1vL38yoHrI53zAJtEkDP-gzGzoHsz', 'EJww4luyde0wRb0fs8XrS3GA');
var Email = AV.Object.extend('Email');
var email = new Email();

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
        $("#mc-embedded-subscribe-form").validate({
            submitHandler: function(form) {
                var emailValue = $("input[name='EMAIL']").val();
                if (emailValue != "")  {
                    saveEmail(emailValue);
                    form.submit();
                }
            }
        });

    });

});

function saveEmail(emailValue) {
    email.set('email', emailValue);
    email.save(function(err) {
        console.log('save email failed');
    });
}