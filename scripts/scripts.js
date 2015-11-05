$(function() {
    stickyHeader();
    changeBg();
});


// Switch menus on scroll
function stickyHeader() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
        var shrink = 10;

        if (distanceY > shrink) {
           $(".main-header").fadeOut(200);
           $(".about").addClass("small-header");
           $(".baby-header").fadeIn(200);
        } else {
           $(".main-header").fadeIn(200);
           $(".about").removeClass("small-header");
           $(".baby-header").fadeOut(200);
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
