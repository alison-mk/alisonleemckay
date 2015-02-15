$(document).ready(function(){
  $('.anchor').click(function(){
    $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
      }, 1500);
      return false;
  });
});  

function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 60,
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