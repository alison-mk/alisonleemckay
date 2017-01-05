// Activate basic site functions
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
        var color2 = 250;
        var color3 = 750;

        if ((distanceY > color2) && (distanceY < color3)) {
           $("body").addClass("color2");
        } else {
           $("body").removeClass("color2");
        }

        if (distanceY > color3) {
           $("body").addClass("color3");
        } else {
           $("body").removeClass("color3");
        }
    });
}
