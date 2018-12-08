@extends('layout')

@section('meta')
<meta name="description" content="Узнать о всех новостях и событиях фитнес-клуба Фитрон на официальном сайте. Записаться на тренировку по специальному предложению.">
@endsection

@section('link')
<link href="/uikit-2.27.4/css/uikit.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/sticky.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/slider.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/form-select.min.css" rel="stylesheet">
<link href="/assets/2ce3d78e/switchery.min.css" rel="stylesheet">
<link href="https://cloud.typography.com/6992556/7479572/css/fonts.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
@endsection

@section('navtitle')
<a href="/"></a>
@endsection

@section('pagehead')
<div id="pagehead" style="background: url(/images/bg2.jpg) no-repeat center;background-size: cover;">
    <div class="container">
        <h1>Новости</h1>
        <ul class="uk-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="url"><span itemprop="name">Главная</span></a></li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="uk-active"><span itemprop="name">Новости</span></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
    <div class="pagecontent fitronlife-events uk-margin-large-top">
        <div class="uk-slidenav-position">
            <div class="uk-slider-container">
                <ul class="uk-slider uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3">
                    <li>
                        <div class="event event-past">
                            <div class="event-date"><b>31</b> <span>март</span></div>
                            <a href="https://fitron.club/fitron-life/events/sportivnaa-akrobatika/" class="event-image-text">
                                <img src="/uploads/events/instfitronsportacrobat2-0681d967cc.jpg" alt="Спортивная акробатика">
                                <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/instfitronsportacrobat2-0681d967cc.jpg) no-repeat center center;background-size: cover;"></div>
                                <div class="event-text">
                                    <b>FITRON</b>
                                    <br>Газетный
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="event event-past">
                            <div class="event-date"><b>14</b> <span>ма</span></div>
                            <a href="https://fitron.club/fitron-life/events/pozdravlaem-pobeditela-fitronchallenge/" class="event-image-text">
                                <img src="/uploads/events/img2402sel-ceeea77c56.jpg" alt="Поздравляем победителя #FitronChallenge">
                                <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/img2402sel-ceeea77c56.jpg) no-repeat center center;background-size: cover;"></div>
                                <div class="event-text">
                                    <b>Поздравляем победителя</b>
                                    <br>ИТОГИ #FitronChallenge
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="event event-past">
                            <div class="event-date"><b>15</b> <span>июн</span></div>
                            <a href="https://fitron.club/fitron-life/events/novaa-studia-gruppovyh-programm/" class="event-image-text">
                                <img src="/uploads/events/image1-3-972a0cec11.jpeg" alt="Новая студия групповых программ">
                                <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/image1-3-972a0cec11.jpeg) no-repeat center center;background-size: cover;"></div>
                                <div class="event-text">
                                    <b>Новая студия групповых программ</b>
                                    <br>в Fitron Орбита
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="event event-past">
                            <div class="event-date"><b>15</b> <span>июн</span></div>
                            <a href="https://fitron.club/fitron-life/events/novaa-outdoor-plosadka/" class="event-image-text">
                                <img src="/uploads/events/wcrikv85occ-4390436bc8.jpg" alt="Новая outdoor площадка">
                                <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/wcrikv85occ-4390436bc8.jpg) no-repeat center center;background-size: cover;"></div>
                                <div class="event-text">
                                    <b>Новая outdoor площадка</b>
                                    <br>на набережной
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="event event-past">
                            <div class="event-date"><b>2</b> <span>июл</span></div>
                            <a href="https://fitron.club/fitron-life/events/pozdravlaem/" class="event-image-text">
                                <img src="/uploads/events/wcrikv85occ-4390436bc8.jpg" alt="Поздравляем!">
                                <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/wcrikv85occ-4390436bc8.jpg) no-repeat center center;background-size: cover;"></div>
                                <div class="event-text">
                                    <b>Поздравляем с победой!</b>
                                    <br>                                    </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="" class="slidenav slidenav-previous" data-uk-slider-item="previous"><b></b></a>
            <a href="" class="slidenav slidenav-next" data-uk-slider-item="next"><b></b></a>
        </div>
    </div>
@endsection

@section('script')
<script src="/assets/d2b55c23/jquery.js"></script>
<script src="/assets/44c734f/yii.js"></script>
<script src="/uikit-2.27.4/js/uikit.min.js"></script>
<script src="/uikit-2.27.4/js/components/sticky.min.js"></script>
<script src="/uikit-2.27.4/js/components/lightbox.min.js"></script>
<script src="/uikit-2.27.4/js/components/slider.min.js"></script>
<script src="/uikit-2.27.4/js/components/form-select.min.js"></script>
<script src="/assets/2ce3d78e/switchery.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/sticky-bottom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js"></script>
<script src="/js/mobile-menu.js"></script>
<script src="/js/fitronlife-events.js"></script>
<script type="text/javascript" >
    var _rutarget = window._rutarget || [];
    _rutarget.push({'event': 'otherPage'});
    $(".instacont a, .instalink, .socials a, .madeby-link, .external-link").on('click',function(){
        _rutarget.push({'event': 'otherPage'});
    });
    $(".instalink").on('click', function () {
        dataLayer.push({'event':'ua-event','eventCategory':'social', 'eventAction':'Insta', 'eventLabel': 'Icon'});
    });
    $(".fblink").on('click', function () {
        dataLayer.push({'event':'ua-event','eventCategory':'social', 'eventAction':'FB', 'eventLabel': 'Icon'});
    });
    $(".vklink").on('click', function () {
        dataLayer.push({'event':'ua-event','eventCategory':'social', 'eventAction':'VK', 'eventLabel': 'Icon'});
    });
    $(".instacont a").on('click',function(){
        dataLayer.push({'event':'ua-event','eventCategory':'social', 'eventAction':'Insta', 'eventLabel': 'Photo'});
    });
</script>
<script type="text/javascript">
    function initialize(){
        var mapstyles = [{"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"lightness":"-100"},{"saturation":"100"},{"gamma":"10.00"},{"visibility":"simplified"},{"weight":"0.56"},{"color":"#a4a4a4"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"lightness":"11"},{"saturation":"-3"}]},{"featureType":"landscape","elementType":"all","stylers":[{"lightness":"22"},{"weight":"0.01"},{"gamma":"1.39"},{"saturation":"-100"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural","elementType":"all","stylers":[{"visibility":"off"},{"lightness":"-53"},{"saturation":"49"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"on"},{"hue":"#ff0000"},{"lightness":"8"},{"saturation":"30"},{"gamma":"0.00"},{"weight":"1.23"}]},{"featureType":"poi.attraction","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.government","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#aadd55"}]},{"featureType":"poi.place_of_worship","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"},{"color":"#ff0000"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#e7e7e7"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#c3c3c3"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#8b8b8b"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"},{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#dcdcdc"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"water","elementType":"geometry","stylers":[{"saturation":"27"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#034694"}]}];
        var point = {};

        point['millenium'] = new google.maps.LatLng("47.235903","39.705112");
        point['orbita'] = new google.maps.LatLng("47.294246","39.705040");
        point['gazetnyi'] = new google.maps.LatLng("47.226983","39.713653");

        var map = new google.maps.Map(
            document.getElementById("googlemap"),{
                center: point['millenium'],
                zoom: 17,
                controls: false,
                //scrollwheel: false,
                //draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: mapstyles
            });

        var imagemillenium = {
            url: '/images/map-pin-millenium.png',
            scaledSize: new google.maps.Size(91, 65),
            anchor: new google.maps.Point(45, 11)
        };
        var imageorbita = {
            url: '/images/map-pin-orbita.png',
            scaledSize: new google.maps.Size(91, 65),
            anchor: new google.maps.Point(45, 11)
        };
        var imagegazetnyi = {
            url: '/images/map-pin-gazetnyi.png',
            scaledSize: new google.maps.Size(91, 65),
            anchor: new google.maps.Point(45, 11)
        };

        var markermillenium = new google.maps.Marker({
            position: point['millenium'],
            map:map,
            icon:imagemillenium,
            title:""
        });
        var marker2 = new google.maps.Marker({
            position: point['orbita'],
            map:map,
            icon:imageorbita,
            title:""
        });
        var marker2 = new google.maps.Marker({
            position: point['gazetnyi'],
            map:map,
            icon:imagegazetnyi,
            title:""
        });
        (function(){
            var time;
            var centerpoint = point['millenium'];
            $(window).resize(function() {
                if (time)
                    clearTimeout(time);
                time = setTimeout(function(){
                    google.maps.event.trigger(map, 'resize');
                    map.setCenter(centerpoint);
                },600);
            });
            $('body').on('clubchange', function(){
                var centerpoint = point[$("#top-panel .select-club .label").data('id')];
                map.setCenter(centerpoint);
            });
        })();
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD26YUuv-fjY4NmUXuFK88na-ZGQVe5Ddk&callback=initialize"></script>
@endsection