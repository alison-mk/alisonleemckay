$(function() {
    stickyHeader();
    changeBg();
});


// Switch menus on scroll
function stickyHeader() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
        var shrinkOne = 10;
        var shrinkTwo = 120;

        if (distanceY > shrinkOne) {
           $(".main-header").fadeOut();
           $(".about").addClass("small-header");
        } else {
           $(".main-header").fadeIn();
           $(".about").removeClass("small-header");
        }

        if (distanceY > shrinkTwo) {
           $(".baby-header").fadeIn();
        } else {
           $(".baby-header").fadeOut();
        }
    });
}


// Change background color
function changeBg() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
        var blush = 250;
        var mint = 750;

        if ((distanceY > blush) && (distanceY < mint)) {
           $("body").addClass("blush");
        } else {
           $("body").removeClass("blush");
        }

        if (distanceY > mint) {
           $("body").addClass("mint");
        } else {
           $("body").removeClass("mint");
        }
    });
}
