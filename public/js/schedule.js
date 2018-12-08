(function($) {
    "use strict";
    UIkit.on('domready.uk.dom', function() {

        $(".table-viewport").on("scroll",function(){
            $(".headtablecont table").css("left","-"+$(this).scrollLeft()+"px");
        });
        $(".schedule-right").on("click",function(e){
            e.preventDefault();
            $(".table-viewport").animate({scrollLeft: "+="+$("th.dayhead").outerWidth()}, 800);
        });
        $(".schedule-left").on("click",function(e){
            e.preventDefault();
            $(".table-viewport").animate({scrollLeft: "-="+$("th.dayhead").outerWidth()}, 800);
        });
        function countschedwidth(){
            var targetwidth = $(".headtable-viewport").width();
            if (targetwidth>599) targetwidth = targetwidth/3;
            else if (targetwidth>399) targetwidth = targetwidth/2;
            targetwidth = targetwidth - 32;
            $("#schedulecont .schedule-table th div, #schedulecont .schedule-table .event").width(targetwidth);
        }
        if($(window).outerWidth()<768) countschedwidth();
        $(window).on("resize",function(){
            if($(window).outerWidth()<768){
                countschedwidth();
            } else {
                $("#schedulecont .schedule-table th div, #schedulecont .schedule-table .event").width("");
            }
        });

        /*
        $("#schedulecont .select-club .select").on('click', function () {
            $("#schedulecont .select-club").toggleClass("select-open");
        });
        $(document).mouseup(function (e) {
            var container = $("#schedulecont .select-club");
            if (container.has(e.target).length === 0){
                container.removeClass("select-open");
            }
        });
        */
    });
}(jQuery));