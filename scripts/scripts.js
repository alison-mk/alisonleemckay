function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 40,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            $('header').addClass('smaller');
            $('.about').addClass('small-header');
        } else {
            if ($('header').hasClass('smaller')) {
            	$('header').removeClass('smaller');
            	$('.about').removeClass('small-header');
            }
        }
    });
}
window.onload = init();