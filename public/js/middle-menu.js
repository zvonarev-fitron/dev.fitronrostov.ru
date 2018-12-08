//OPEN TRIGGER
var middleOpenTrigger = $('.middle-menu-trigger');
var middleOpenTriggerTop = middleOpenTrigger.find('.menu-trigger-bar.top');
var middleOpenTriggerMiddle = middleOpenTrigger.find('.menu-trigger-bar.middle');
var middleOpenTriggerBottom = middleOpenTrigger.find('.menu-trigger-bar.bottom');

//CLOSE TRIGGER
var middleCloseTrigger = $('.middle-close-trigger');
var middleCloseTriggerLeft = middleCloseTrigger.find('.close-trigger-bar.left');
var middleCloseTriggerRight = middleCloseTrigger.find('.close-trigger-bar.right');

//MENU
var midmenu = $('#topnav ul');

//TL
var midtlOpen = new TimelineMax({paused: true});
var midtlClose = new TimelineMax({paused: true});

//OPEN TIMELINE
midtlOpen.add("preOpen")
.to(middleOpenTriggerTop, 0.4, {
  x: "+80px", y: "-80px", delay: 0.1, ease: Power4.easeIn
}, "preOpen")
.to(middleOpenTriggerMiddle, 0.4, {
  x: "+=80px", y: "-=80px", ease: Power4.easeIn,
  onComplete: function() {
      middleOpenTrigger.addClass('menu-trigger-hide');
      middleCloseTrigger.removeClass('menu-trigger-hide');
  }
}, "preOpen")
.to(middleOpenTriggerBottom, 0.4, {
  x: "+=80px", y: "-=80px", delay: 0.2, ease: Power4.easeIn
}, "preOpen")
.add("open", "-=0.4")
.fromTo(midmenu, 0.6, {
  className: 'middle-menu-hide'
}, {
  className: 'middle-menu-show', ease: Power4.easeOut
}, "-=0.2")
.add("preClose", "-=0.8")
.to(middleCloseTriggerLeft, 0.8, {
  x: "-=100px", y: "+=100px", ease: Power4.easeOut
}, "preClose")
.to(middleCloseTriggerRight, 0.8, {
  x: "+=100px", y: "+=100px", delay: 0.2, ease: Power4.easeOut
}, "preClose");

//CLOSE TIMELINE
midtlClose.add("close")
    .to(midmenu, 0.6, {
        className: 'middle-menu-halfhide', ease: Power4.easeOut, onComplete: function() {
            midmenu.removeClass('middle-menu-show');
            midmenu.addClass('middle-menu-hide');
            midmenu.removeClass('middle-menu-halfhide');
        }
    }, "close")
.to(middleCloseTriggerLeft, 0.2, {
  x: "+=100px", y: "-=100px", ease: Power4.easeIn
}, "close")
.to(middleCloseTriggerRight, 0.2, {
  x: "-=100px", y: "-=100px", delay: 0.1, ease: Power4.easeIn, onComplete: function() {
        middleCloseTrigger.addClass('menu-trigger-hide');
        middleOpenTrigger.removeClass('menu-trigger-hide');
    }
}, "close")
.to(middleOpenTriggerTop, 1, {
  x: "-=80px", y: "+=80px", delay: 0.2, ease: Power4.easeOut
}, "close")
.to(middleOpenTriggerMiddle, 1, {
  x: "-=80px", y: "+=80px", ease: Power4.easeOut
}, "close")
.to(middleOpenTriggerBottom, 1, {
  x: "-=80px", y: "+=80px", delay: 0.1, ease: Power4.easeOut
}, "close");

//EVENTS
middleOpenTrigger.on('click', function(){
    if(midtlOpen.progress() < 1){
        midtlOpen.play();
    } else {
        midtlOpen.restart();
    }
});
       
middleCloseTrigger.on('click', function(){
    if(midtlClose.progress() < 1){
        midtlClose.play();
    } else {
        midtlClose.restart();
    }
});