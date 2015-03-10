// toggle transition on scroll
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 40,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            
            // header transition
            $('header').addClass('smaller');
            
            // body transition
            $('.about').addClass('small-header');
        
        } else {
            if ($('header').hasClass('smaller')) {
            	
                // header transition
                $('header').removeClass('smaller');
            	
                // body transition
                $('.about').removeClass('small-header');
            }
        }
    });    
}

window.onload = init();