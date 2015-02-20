/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
*/


function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 60,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            $('header').addClass('smaller');
            $('.project-overview').addClass('small-header');
        } else {
            if ($('header').hasClass('smaller')) {
              $('header').removeClass('smaller');
              $('.project-overview').removeClass('small-header');
            }
        }
    });
}
window.onload = init();
