$(document).ready(scroller());

// Switch menus on scroll
function scroller() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
        var shrinkOne = 10;
        var shrinkTwo = 120;

        if (distanceY > shrinkOne) {
           $(".main-header").fadeOut();
           $(".about").addClass(".small-header");
        } else {
           $(".main-header").fadeIn();
           $(".about").removeClass(".small-header");
        }

        if (distanceY > shrinkTwo) {
           $(".baby-header").fadeIn();
        } else {
           $(".baby-header").fadeOut();
        }
    });
}
