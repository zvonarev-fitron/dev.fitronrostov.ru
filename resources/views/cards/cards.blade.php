@extends('layout')

@section('link')
<link href="/uikit-2.27.4/css/uikit.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/sticky.min.css" rel="stylesheet">
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
        <h1>Клубные карты</h1>
        <ul class="uk-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="url"><span itemprop="name">Главная</span></a></li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="uk-active"><span itemprop="name">Клубные карты</span></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
    <div id="card-individual" class="club-card-container uk-margin-large-top">
        <div class="container">
            <div class="pagecontent">
                <div class="uk-grid uk-grid-width-1-1">
                    <div class="image-cont uk-width-medium-1-3">
                        <div class="card-image"><div class="image-individual"></div></div>
                    </div>
                    <div class="description-cont uk-width-medium-2-3">
                        <div class="pagecontent uk-text-center">
                            <p class="pageh2"><b>Индивидуальные</b></p>
                            <p>Индивидуальные клубные карты открывают доступ в космические фитнес клубы в любое удобное для Вас время в Часы работы клуба. Они включают в себя неограниченное пользование возможностями клуба. Посещение более 50 специально разработанных групповых программ. Доступ к насыщенной спортивной жизни сети FITRON, занятиям Outdoor.</p>
                            <p><a class="showprivilege" data-uk-toggle="{target:'#card-individual', cls:'opened'}"><i class="icon plus-to-minus"></i>Ваши привилегии</a> <span data-href="https://fitron.club/ajax-form/?id=11&title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D1%86%D0%B5%D0%BD%D1%83+%D0%98%D0%BD%D0%B4%D0%B8%D0%B2%D0%B8%D0%B4%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9+%D0%BA%D0%B0%D1%80%D1%82%D1%8B" data-contact-ajax class="redbutton"><span>узнать цену</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-privilege pagecontent">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">
                        <div>
                            <ol class="uk-grid uk-grid-width-1-1">
                                <li><b>Содоступ в 4 клуба РФГ FITRON</b><br>возможность посещения 2-х клубов сети FITRON и 2-х клубов сети ФизКульт в г. Ростове-на-Дону</li>
                            </ol>
                        </div>
                        <div class="uk-width-medium-2-3">
                            <ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                                <li><b>Персональные вводные тренировки (3 шт.)</b></li>
                                <li><b>Секция на выбор (1 шт.)</b></li>
                                <li><b>Гостевые визиты (3 шт.)</b></li>
                                <li><b>Полотенце</b></li>
                                <li><b>Привилегии от партнёров.</b></li>
                            </ol>
                        </div>
                    </div>
                    <p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="card-vip" class="club-card-container">
        <div class="container">
            <div class="pagecontent">
                <div class="uk-grid uk-grid-width-1-1">
                    <div class="image-cont uk-width-medium-1-3">
                        <div class="card-image"><div class="image-vip"></div></div>
                    </div>
                    <div class="description-cont uk-width-medium-2-3">
                        <div class="pagecontent uk-text-center">
                            <p class="pageh2"><b>VIP</b></p>
                            <p>Дополнительно ко всем привилегиям FITRON данный вид карты даёт возможность пользоваться специально выделенными раздевалками, а также может включать в себя бесплатные дополнительные услуги в клубах, скидки на дополнительные услуги, доступы в другие клубы РФГ FITRON, заморозку на более длительный срок и прочие приятные мелочи.</p>
                            <p><a class="showprivilege" data-uk-toggle="{target:'#card-vip', cls:'opened'}"><i class="icon plus-to-minus"></i>Ваши привилегии</a> <span data-href="https://fitron.club/ajax-form/?id=12&title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D1%86%D0%B5%D0%BD%D1%83+VIP+%D0%BA%D0%B0%D1%80%D1%82%D1%8B" data-contact-ajax class="redbutton"><span>узнать цену</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-privilege pagecontent">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">
                        <div>
                            <ol class="uk-grid uk-grid-width-1-1">
                                <li><b>Содоступ в 4 клуба РФГ FITRON</b><br>возможность посещения 2-х клубов сети FITRON и 2-х клубов сети ФизКульт в г. Ростове-на-Дону</li>
                            </ol>
                        </div>
                        <div class="uk-width-medium-2-3">
                            <ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                                <li><b>Персональные вводные тренировки (3 шт.)</b></li>
                                <li><b>Персональные тренировки на выбор (5 шт.)</b></li>
                                <li><b>Секция на выбор (1 шт.)</b></li>
                                <li><b>10% скидка на персональные тренировки</b></li>
                                <li><b>10% скидка на услуги массажных студий</b></li>
                                <li><b>10% скидка на продление Вашей клубной карты</b></li>
                                <li><b>Банный халат</b></li>
                                <li><b>2 Полотенца: банное и лицевое</b></li>
                                <li><b>Отдельная VIP раздевалка с финской сауной</b></li>
                                <li><b>Гостевые визиты (5 шт.)</b></li>
                                <li><b>Заморозка (30 дней)</b></li>
                                <li><b>Привилегии от партнёров.</b></li>
                            </ol>
                        </div>
                    </div>
                    <p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="card-comfort" class="club-card-container">
        <div class="container">
            <div class="pagecontent">
                <div class="uk-grid uk-grid-width-1-1">
                    <div class="image-cont uk-width-medium-1-3">
                        <div class="card-image"><div class="image-allinone"></div></div>
                    </div>
                    <div class="description-cont uk-width-medium-2-3">
                        <div class="pagecontent uk-text-center">
                            <p class="pageh2"><b>Comfort ( off peak )</b></p>
                            <p>Клубная карта comfort (off peak) позволяет пользоваться всеми возможностями фитнес-клубов FITRON с 07:00 до 17:00 и с 21:00 до 23:00 в любой день недели. выходные и праздничные дни без ограничений по времени.</p>
                            <p><a class="showprivilege" data-uk-toggle="{target:'#card-comfort', cls:'opened'}"><i class="icon plus-to-minus"></i>Ваши привилегии</a> <span data-href="https://fitron.club/ajax-form/?id=13&title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D1%86%D0%B5%D0%BD%D1%83+Comfort+%28off+peak%29+%D0%BA%D0%B0%D1%80%D1%82%D1%8B" data-contact-ajax class="redbutton"><span>узнать цену</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-privilege pagecontent">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">
                        <div>
                            <ol class="uk-grid uk-grid-width-1-1">
                                <li><b>Содоступ в 2 клуба</b><br>возможность посещения 2-х клубов сети FITRON</li>
                            </ol>
                        </div>
                        <div class="uk-width-medium-2-3">
                            <ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                                <li><b>Персональные вводные тренировки (3 шт.)</b></li>
                                <li><b>Секция на выбор (1 шт.)</b></li>
                                <li><b>Гостевые визиты (3 шт.)</b></li>
                                <li><b>Привилегии от партнёров.</b></li>
                            </ol>
                        </div>
                    </div>
                    <p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="card-teen" class="club-card-container">
        <div class="container">
            <div class="pagecontent">
                <div class="uk-grid uk-grid-width-1-1">
                    <div class="image-cont uk-width-medium-1-3">
                        <div class="card-image"><div class="image-teen"></div></div>
                    </div>
                    <div class="description-cont uk-width-medium-2-3">
                        <div class="pagecontent uk-text-center">
                            <p class="pageh2"><b>Teen</b></p>
                            <p>Клубные карты открывают двери в мир фитнеса и здорового образа жизни детям  от 12 до 16 лет.
                                Teen клуб FITRON — это всестороннее развитие, учитывая возраст и особенности Вашего ребёнка.
                                Отдельное расписание, специально подобранные программы и спортивные секции помогут детям в этом возрасте развиваться с пользой для здоровья.</p>
                            <p>Teen карта продается без ограничений. Не требуется обязательное наличие взрослой карты.</p>
                            <p><a class="showprivilege" data-uk-toggle="{target:'#card-teen', cls:'opened'}"><i class="icon plus-to-minus"></i>Ваши привилегии</a> <span data-href="https://fitron.club/ajax-form/?id=14&title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D1%86%D0%B5%D0%BD%D1%83+Teen+%D0%BA%D0%B0%D1%80%D1%82%D1%8B" data-contact-ajax class="redbutton"><span>узнать цену</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-privilege pagecontent">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">
                        <div>
                            <ol class="uk-grid uk-grid-width-1-1">
                                <li><b>Содоступ в 2 клуба</b><br>возможность посещения 2-х клубов сети FITRON</li>
                            </ol>
                        </div>
                        <div class="uk-width-medium-2-3">
                            <ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                                <li><b>Персональные вводные тренировки (3 шт.)</b></li>
                                <li><b>Секция на выбор (1 шт.)</b></li>
                                <li><b>Гостевые визиты (3 шт.)</b></li>
                                <li><b>Полотенце</b></li>
                                <li><b>Привилегии от партнёров.</b></li>
                            </ol>
                        </div>
                    </div>
                    <p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="card-kids" class="club-card-container">
        <div class="container">
            <div class="pagecontent">
                <div class="uk-grid uk-grid-width-1-1">
                    <div class="image-cont uk-width-medium-1-3">
                        <div class="card-image"><div class="image-kids"></div></div>
                    </div>
                    <div class="description-cont uk-width-medium-2-3">
                        <div class="pagecontent uk-text-center">
                            <p class="pageh2"><b>Kids</b></p>
                            <p>Детские клубные карты открывают двери в мир фитнеса и здорового образа жизни детям от 3-х  до 12лет. Детский клуб FITRON — это всестороннее развития Вашего ребенка с широким спектр фитнес-программ, спортивных секций, а также занятий, направленных на формирование творческих и интеллектуальных способностей ребенка.</p>
                            <p>Детская карта продается без ограничений. Не требуется обязательное наличие взрослой карты.</p>
                            <p><a class="showprivilege" data-uk-toggle="{target:'#card-kids', cls:'opened'}"><i class="icon plus-to-minus"></i>Ваши привилегии</a> <span data-href="https://fitron.club/ajax-form/?id=15&title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D1%86%D0%B5%D0%BD%D1%83+Kids+%D0%BA%D0%B0%D1%80%D1%82%D1%8B" data-contact-ajax class="redbutton"><span>узнать цену</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-privilege pagecontent">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">
                        <div>
                            <ol class="uk-grid uk-grid-width-1-1">
                                <li><b>Содоступ в 4 клуба РФГ FITRON</b><br>возможность посещения 2-х клубов сети FITRON и 2-х клубов сети ФизКульт в г. Ростове-на-Дону</li>
                            </ol>
                        </div>
                        <div class="uk-width-medium-2-3">
                            <ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                                <li><b>Вводный инструктаж (1 шт.)</b></li>
                                <li><b>Платный урок на выбор (1 шт.)</b></li>
                                <li><b>Гостевые визиты (3 шт.)</b></li>
                                <li><b>Полотенце</b></li>
                                <li><b>Привилегии от партнёров.</b></li>
                            </ol>
                        </div>
                    </div>
                    <p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="card-corporate" class="club-card-container">
        <div class="container">
            <div class="pagecontent">
                <div class="uk-grid uk-grid-width-1-1">
                    <div class="image-cont uk-width-medium-1-3">
                        <div class="card-image"><div class="image-allinone"></div></div>
                    </div>
                    <div class="description-cont uk-width-medium-2-3">
                        <div class="pagecontent uk-text-center">
                            <p class="pageh2"><b>Корпоративные</b></p>
                            <p><b>Корпоративный космический день здоровья в FITRON!</b></p>
                            <p>Мы приглашаем коллектив Вашей организации на Корпоративный день здоровья!
                                Заряд положительных эмоций и позитивного настроения гарантирован!</p>
                            <p><a class="showprivilege" data-uk-toggle="{target:'#card-corporate', cls:'opened'}"><i class="icon plus-to-minus"></i>Ваши привилегии</a> <span data-href="https://fitron.club/ajax-form/?id=6&title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F+%D0%BD%D0%B0+%D0%BA%D0%BE%D1%80%D0%BF%D0%BE%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9+%D1%84%D0%B8%D1%82%D0%BD%D0%B5%D1%81" data-contact-ajax class="redbutton"><span>узнать цену</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-privilege pagecontent">
                    <ol class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">
                        <li>Корпоративные клубные карты позволяют сотрудникам компаний тренироваться в первоклассных комфортных фитнес-клубах РФГ FITRON на специальных условиях</li>
                        <li>Возможность выбрать наиболее подходящий для каждого сотрудника клуб из 6 клубов</li>
                        <li>Заключение корпоративного контракта возможно при покупке от 10 и более годовых клубных карт</li>
                        <li>Чем больше сотрудников приобретает членство в рамках корпоративной программы, тем выгоднее клубная карта для компании и ее сотрудников</li>
                        <li>Для компаний, которые частично или полностью оплачивают стоимость членства для своих сотрудников, существуют дополнительные бонусы и привилегии</li>
                    </ol>
                    <p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/assets/d2b55c23/jquery.js"></script>
    <script src="/assets/44c734f/yii.js"></script>
    <script src="/uikit-2.27.4/js/uikit.min.js"></script>
    <script src="/uikit-2.27.4/js/components/sticky.min.js"></script>
    <script src="/uikit-2.27.4/js/components/lightbox.min.js"></script>
    <script src="/assets/2ce3d78e/switchery.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/sticky-bottom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js"></script>
    <script src="/js/mobile-menu.js"></script>
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

