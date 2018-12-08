document.addEventListener('DOMContentLoaded', function(){
    //var header = document.querySelector('#maincont header');
    var header = document.querySelector('#header_nav_menu');
    var topPage = 80;
    var min = false;
    var max = true;

    var $tw = document.querySelector('.headtablecont');
    var topHeadTableCont = 380;
    var minTw = false;
    var maxTw = true;

    window.addEventListener('scroll', function(){
            var scrolledY = window.pageYOffset || document.documentElement.scrollTop;
            if(scrolledY <= topPage && min){
                header.classList.remove('uk-active');
                header.style = 'margin: 0;';
                min = false;
                max = true;
            }
            else if(scrolledY > topPage && max){
                header.classList.add('uk-active');
                header.style = 'position: fixed; top: 0px; width: ' + header.offsetWidth + 'px; z-index: 10; border-bottom: 1px solid #ff0033;';
                min = true;
                max = false;
            }
            if(!!$tw){
                if(scrolledY <= topHeadTableCont && minTw){
                    $tw.classList.remove('uk-active');
                    $tw.style = 'margin: 0;';
                    minTw = false;
                    maxTw = true;
                }
                else if(scrolledY > topHeadTableCont && maxTw){
                    $tw.classList.add('uk-active');
                    $tw.style = 'position: fixed; top: 87px; width: ' + $tw.offsetWidth + 'px;';
                    minTw = true;
                    maxTw = false;
                }
            }
    });

    var select_anothers = document.querySelectorAll('.select-club .another-clubs');
    for(var i = 0; i < select_anothers.length; i++ ) {
        select_anothers[i].addEventListener('click', function (event) {
            event.stopPropagation();
            var another_club = event.target;
            var another_clubs = another_club.parentElement;
            var select_club = another_clubs.parentElement;
            var select = select_club.querySelector('.select');
            var label = select.querySelector('.label');
            var select_id = another_club.dataset.id;
            var select_code = another_club.dataset.code;
            var select_name = another_club.innerText;
            var label_id = label.dataset.id;
            var label_code = label.dataset.code;
            var label_name = label.innerText;
            var labels = document.querySelectorAll('.select-club .select .label');
            var anothers = document.querySelectorAll('.select-club .another-clubs .another-club');

            for (var i = 0; i < labels.length; i++) {
                labels[i].dataset.code = select_code;
                labels[i].dataset.id = select_id;
                labels[i].innerText = select_name;
            }
            for (var i = 0; i < anothers.length; i++){
                if(anothers[i].dataset.code == select_code){
                    anothers[i].dataset.code = label_code;
                    anothers[i].dataset.id = label_id;
                    anothers[i].innerText = label_name;
                }
            }
            document.querySelector('#footer-contact-set-' + label_code).classList.remove('uk-active');
            document.querySelector('#footer-contact-set-' + select_code).classList.add('uk-active');
            select_club.classList.toggle('select-open');
            $('body').trigger('clubchange');

            var ssc = document.querySelector('#shedule-cont-' + select_code);
            if(!!ssc){
                var slc = document.querySelector('#shedule-cont-' + label_code);
                slc.classList.remove('active');
                slc.classList.add('uk-hidden');
                ssc.classList.remove('uk-hidden');
                ssc.classList.add('active');
            }
        });
    }
});

