(function($) {
    "use strict";
    UIkit.on('domready.uk.dom', function() {
        //if ()
        var eventsSlider = UIkit.slider('.fitronlife-events .uk-slidenav-position',{infinite: false,center: true});
        var pastcount = $('.fitronlife-events .event-past').length;
        var eventscount = $('.fitronlife-events .event').length;
        if (eventscount == pastcount) pastcount--;
        //if (eventscount - 2 == pastcount) pastcount--;
        eventsSlider.updateFocus(pastcount,1);
        /*
        var eventswidth=$(".fitronlife-events").width();
        var resize = function(e){
            if ($(".fitronlife-events").width()!=contentwidth){

                contentwidth=$(".fitronlife-events").width();
            }
        };
        (function(){
            var time;
            window.onresize = function(e){
                if (time)
                    clearTimeout(time);
                time = setTimeout(function(){
                    resize(e);
                },200);
            }
        })();
        */
        /*
        for (var i=0; i<pastcount; i++){
            $(".fitronlife-events .slidenav-next").click();
        }
        */
    });
}(jQuery));