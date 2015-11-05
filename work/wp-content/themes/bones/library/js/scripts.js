/*
 * Bones Scripts File
 * Author: Alison McKay
 *
 * This file contains all js scripts on the site.
 *
 * The file is called automatically in the footer so as not to
 * slow the page load.
 *
*/


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
           $("#inner-content").addClass("small-header");
           $(".baby-header").fadeIn(200);
        } else {
           $(".main-header").fadeIn(200);
           $("#inner-content").removeClass("small-header");
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
