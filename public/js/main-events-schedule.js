(function($) {
    "use strict";
    UIkit.on('domready.uk.dom', function() {
        var slidertop = UIkit.slider('#main-events .events-top .uk-slidenav-position',{infinite: false});
        var sliderbottom = UIkit.slider('#main-events .events-bottom .uk-slidenav-position',{infinite: false, center:true});
        slidertop.on('focusitem.uk.slider', function(event, index, item, slider) {
            sliderbottom.updateFocus(index,1,false);
            setOnCLicks();
        });
        sliderbottom.on('focusitem.uk.slider', function(event, index, item, slider) {
            slidertop.updateFocus(index,1,false);
            setOnCLicks();
        });
        setOnCLicks();
        slidertop.updateFocus($('#main-events .events-bottom .event-past').length,1);
        function setOnCLicks(){
            $("#main-events li").off('click');
            $("#main-events li.uk-slide-after").on('click',function(){
                $("#main-events .slidenav-next").click();
            });
            $("#main-events li.uk-slide-before").on('click',function(){
                $("#main-events .slidenav-previous").click();
            });
        }

        $(".schedule-buttons .button-down").on('click',function(e){
            e.preventDefault();
            var $activeCont = $(".schedule-cont.active");
            var $activeContUl = $activeCont.find('ul');
            var maxtopmargin = $activeCont.outerHeight() - $activeContUl.outerHeight();
            var contMarginTop = parseInt($activeContUl.css('margin-top'));
            if (contMarginTop > maxtopmargin){
                var contMarginTopNew = contMarginTop - $activeCont.find('li').outerHeight(true);
                if (contMarginTopNew < maxtopmargin) contMarginTopNew = maxtopmargin;
                $activeContUl.animate({marginTop: '-='+(contMarginTop - contMarginTopNew)},500);
            }
        });
        $(".schedule-buttons .button-up").on('click',function(e){
            e.preventDefault();
            var $activeCont = $(".schedule-cont.active");
            var $activeContUl = $activeCont.find('ul');
            var contMarginTop = parseInt($activeContUl.css('margin-top'));
            if (contMarginTop < 0){
                var contMarginTopNew = contMarginTop + $activeCont.find('li').outerHeight(true);
                if (contMarginTopNew > 0) contMarginTopNew = 0;
                $activeContUl.animate({marginTop: '+='+(contMarginTopNew - contMarginTop)},500);
            }
        });
    });
}(jQuery));