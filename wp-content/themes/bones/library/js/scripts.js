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

// Konami source code
function Egg(){this.eggs=[],this.hooks=[],this.kps=[],this.activeEgg="",this.ignoredKeys=[16],arguments.length&&this.AddCode.apply(this,arguments)}Egg.prototype.__execute=function(a){return"function"==typeof a&&a.call(this)},Egg.prototype.__toCharCodes=function(a){var b={up:38,down:40,left:37,right:39,enter:13,space:32,ctrl:17,alt:18,tab:9,esc:27},c=Object.keys(b);"string"==typeof a&&(a=a.split(",").map(function(a){return a.trim()}));var d=a.map(function(a){return a===parseInt(a,10)?a:c.indexOf(a)>-1?b[a]:a.charCodeAt(0)});return d.join(",")},Egg.prototype.AddCode=function(a,b,c){return this.eggs.push({keys:this.__toCharCodes(a),fn:b,metadata:c}),this},Egg.prototype.AddHook=function(a){return this.hooks.push(a),this},Egg.prototype.handleEvent=function(a){var b=a.which,c=b>=65&&90>=b;if(!("keydown"!==a.type||a.metaKey||a.ctrlKey||a.altKey||a.shiftKey)){var d=a.target.tagName;if(("HTML"===d||"BODY"===d)&&c)return void a.preventDefault()}"keyup"===a.type&&this.eggs.length>0&&(c&&(a.shiftKey||(b+=32)),-1===this.ignoredKeys.indexOf(b)&&this.kps.push(b),this.eggs.forEach(function(a,b){var c=this.kps.toString().indexOf(a.keys)>=0;c&&(this.kps=[],this.activeEgg=a,this.__execute(a.fn,this),this.hooks.forEach(this.__execute,this),this.activeEgg="")},this))},Egg.prototype.Listen=function(){return void 0!==document.addEventListener&&(document.addEventListener("keydown",this,!1),document.addEventListener("keyup",this,!1)),this},Egg.prototype.listen=Egg.prototype.Listen,Egg.prototype.addCode=Egg.prototype.AddCode,Egg.prototype.addHook=Egg.prototype.AddHook;

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
           $("#content").addClass("small-header");
           $(".baby-header").fadeIn(200);
        } else {
           $(".main-header").fadeIn(200);
           $("#content").removeClass("small-header");
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

// Set up konami code
var egg = new Egg();
egg
  .addCode("d,o,n,u,t", function() {
    $("body").addClass("donut");
  })
  .addHook(function(){
    console.log("You've activated the donuts!");
  })
  .listen();
