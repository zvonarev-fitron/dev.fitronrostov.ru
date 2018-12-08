@extends('layout')

@section('meta')
<meta name="yandex-verification" content="ad39a6bce37ad5a1" />
<meta name="google-site-verification" content="80u8lyLx582r9gPcM2OOh_GC36PZ_OlBEu3ux0Dl1L0" />
<meta name="description" content="Записаться на занятия в фитнес-клуб FITRON в Ростове-на-Дону. Выгодные цены на абонементы в тренажерном зале, который оснащен современным оборудованием. На территории клуба расположен бассейн, тренажерный зал с кардио-зоной и зал групповых программ.">
@endsection

@section('link')
<link href="/uikit-2.27.4/css/uikit.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/sticky.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/slidenav.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/slider.min.css" rel="stylesheet">
<link href="/uikit-2.27.4/css/components/slideshow.min.css" rel="stylesheet">
<link href="/assets/2ce3d78e/switchery.min.css" rel="stylesheet">
<link href="https://cloud.typography.com/6992556/7479572/css/fonts.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
@endsection

@section('main_slider')
<div class="bottomright uk-hidden-small">
    <div class="bottomright-inner">
        <div class="select-club-cont">
            <div class="title-label">Выберите клуб</div>
            <div class="select-club">
                <div class="select">
                    <span class="label" data-id="orbita">FITRON Орбита</span>
                </div>
                <div class="another-clubs">
                    <div class="another-club" data-id="millenium">FITRON Миллениум</div>
                    <div class="another-club" data-id="gazetnyi">FITRON Газетный</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-slider">
    <div class="slider-inner" data-uk-slideshow="{autoplay:true}">
        <ul class="uk-slideshow uk-overlay-active">

            <li>
                <img src="/uploads/carousel/1076576-888ee85fb2.jpg" alt="Только в июле. Спеши!">
                <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                    <div class="slider-text">
                        <a href="http://space.fitron.club/specialoffer?utm_source=site&utm_medium=banner&utm_campaign=mounth" rel="nofollow"><b>Только в июле. Спеши!</b></a><br><br><br><a href="http://space.fitron.club/specialoffer?utm_source=site&utm_medium=banner&utm_campaign=mounth" rel="nofollow" class="more">узнать больше</a>                        </div>
                </div>
            </li>
            <li>
                <img src="/uploads/carousel/fitronmobileappitog-03-b164c1abaf.jpg" alt="Android">
                <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                    <div class="slider-text">
                        <a href="https://play.google.com/store/apps/details?id=com.itrack.fitron378516" rel="nofollow"><b>Android</b></a><br>Скачать<br><br><a href="https://play.google.com/store/apps/details?id=com.itrack.fitron378516" rel="nofollow" class="more">узнать больше</a>                        </div>
                </div>
            </li>
            <li>
                <img src="/uploads/carousel/fitronmobileappitog-02-955e21b6cd.jpg" alt="IOS">
                <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                    <div class="slider-text">
                        <a href="https://itunes.apple.com/us/app/fitron/id862699219?mt=8" rel="nofollow"><b>IOS</b></a><br>Скачать<br><br><a href="https://itunes.apple.com/us/app/fitron/id862699219?mt=8" rel="nofollow" class="more">узнать больше</a>                        </div>
                </div>
            </li>
        </ul>
        <ul class="slideshow-nav uk-grid uk-grid-width-1-3 uk-grid-collapse">
            <li data-uk-slideshow-item="0"><a href=""></a></li>
            <li data-uk-slideshow-item="1"><a href=""></a></li>
            <li data-uk-slideshow-item="2"><a href=""></a></li>
        </ul>
        <a href="" class="uk-slideshow-prev" data-uk-slideshow-item="previous"><b></b></a>
        <a href="" class="uk-slideshow-next" data-uk-slideshow-item="next"><b></b></a>
    </div>
</div>
<div id="main-events-schedule">
    <div id="main-events">
        <div class="main-events-cont">
            <div class="events-top">
                <div class="uk-slidenav-position" data-uk-slider="{infinite: false}">

                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid-width-1-1">
                            <li>
                                <div class="event-top">
                                    <div class="event-date"><b>31</b> <span>мар</span></div>
                                    <div class="event-image-text">
                                        <img src="/uploads/events/instfitronsportacrobat2-0681d967cc.jpg" alt="Спортивная акробатика">
                                        <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/instfitronsportacrobat2-0681d967cc.jpg) no-repeat center center;background-size: cover;"></div>
                                        <div class="event-text">
                                            <a href="https://fitron.club/fitron-life/events/sportivnaa-akrobatika/"><b>FITRON</b></a>
                                            <br>Газетный                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-top">
                                    <div class="event-date"><b>14</b> <span>мая</span></div>
                                    <div class="event-image-text">
                                        <img src="/uploads/events/img2402sel-ceeea77c56.jpg" alt="Поздравляем победителя #FitronChallenge">
                                        <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/img2402sel-ceeea77c56.jpg) no-repeat center center;background-size: cover;"></div>
                                        <div class="event-text">
                                            <a href="https://fitron.club/fitron-life/events/pozdravlaem-pobeditela-fitronchallenge/"><b>Поздравляем победителя</b></a>
                                            <br>ИТОГИ #FitronChallenge                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-top">
                                    <div class="event-date"><b>15</b> <span>июн</span></div>
                                    <div class="event-image-text">
                                        <img src="/uploads/events/image1-3-972a0cec11.jpeg" alt="Новая студия групповых программ">
                                        <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/image1-3-972a0cec11.jpeg) no-repeat center center;background-size: cover;"></div>
                                        <div class="event-text">
                                            <a href="https://fitron.club/fitron-life/events/novaa-studia-gruppovyh-programm/"><b>Новая студия групповых программ</b></a>
                                            <br>в Fitron Орбита                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-top">
                                    <div class="event-date"><b>15</b> <span>июн</span></div>
                                    <div class="event-image-text">
                                        <img src="/uploads/events/wcrikv85occ-4390436bc8.jpg" alt="Новая outdoor площадка">
                                        <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/wcrikv85occ-4390436bc8.jpg) no-repeat center center;background-size: cover;"></div>
                                        <div class="event-text">
                                            <a href="https://fitron.club/fitron-life/events/novaa-outdoor-plosadka/"><b>Новая outdoor площадка</b></a>
                                            <br>на набережной                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-top">
                                    <div class="event-date"><b>2</b> <span>июл</span></div>
                                    <div class="event-image-text">
                                        <img src="/uploads/events/wcrikv85occ-4390436bc8.jpg" alt="Поздравляем!">
                                        <div class="imageoverlay" style="background: #0f3b89 url(/uploads/events/wcrikv85occ-4390436bc8.jpg) no-repeat center center;background-size: cover;"></div>
                                        <div class="event-text">
                                            <a href="https://fitron.club/fitron-life/events/pozdravlaem/"><b>Поздравляем с победой!</b></a>
                                            <br>                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                    -->
                </div>
            </div>
            <div class="events-bottom">
                <div class="uk-slidenav-position" data-uk-slider="{infinite: false, center:true}">

                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid-width-1-3">
                            <li>
                                <div class="event-bottom event-past">
                                    <div class="event-date"><b>31</b> мар</div>
                                    <div class="event-image-text">
                                        <div class="event-text">
                                            FITRON Газетный                                        </div>
                                        <a href="https://fitron.club/fitron-life/events/sportivnaa-akrobatika/">подробнее</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-bottom event-past">
                                    <div class="event-date"><b>14</b> мая</div>
                                    <div class="event-image-text">
                                        <div class="event-text">
                                            Поздравляем победителя ИТОГИ #FitronChallenge                                        </div>
                                        <a href="https://fitron.club/fitron-life/events/pozdravlaem-pobeditela-fitronchallenge/">подробнее</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-bottom event-past">
                                    <div class="event-date"><b>15</b> июн</div>
                                    <div class="event-image-text">
                                        <div class="event-text">
                                            Новая студия групповых программ в Fitron Орбита                                        </div>
                                        <a href="https://fitron.club/fitron-life/events/novaa-studia-gruppovyh-programm/">подробнее</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-bottom event-past">
                                    <div class="event-date"><b>15</b> июн</div>
                                    <div class="event-image-text">
                                        <div class="event-text">
                                            Новая outdoor площадка на набережной                                        </div>
                                        <a href="https://fitron.club/fitron-life/events/novaa-outdoor-plosadka/">подробнее</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="event-bottom event-past">
                                    <div class="event-date"><b>2</b> июл</div>
                                    <div class="event-image-text">
                                        <div class="event-text">
                                            Поздравляем с победой!                                         </div>
                                        <a href="https://fitron.club/fitron-life/events/pozdravlaem/">подробнее</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="slidenav slidenav-previous" data-uk-slider-item="previous"><b></b></a>
                    <a href="" class="slidenav slidenav-next" data-uk-slider-item="next"><b></b></a>
                </div>
            </div>
        </div>
    </div>
    <div id="main-schedule">
        <p class="caption"><b>Расписание</b></p>
        <div class="select-club">
            <div class="select">
                <span class="label" data-id="orbita">FITRON Орбита</span>
            </div>
            <div class="another-clubs">
                <div class="another-club" data-id="millenium">FITRON Миллениум</div>
                <div class="another-club" data-id="gazetnyi">FITRON Газетный</div>
            </div>
        </div>
        <div class="schedule-cont active" id="shedule-cont-orbita">
            <ul>
                <li><span class="time">08 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/cardio/running-interval/">Running Interval 17+</a><br>Cardio Zone</div></li>
                <li><span class="time">08 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/functional-training/outdoor/">OUTDOOR (FT INTERVAL) 17+</a><br>Outdoor</div></li>
                <li><span class="time">09 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/strength-programs/lean-arms/">Lean  Arms 17+</a><br>Group Hall</div></li>
                <li><span class="time">13 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/cardio/running-interval/">Running Interval 17+</a><br>Cardio Zone</div></li>
                <li><span class="time">14 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/kosmo-treking/">Космо - Трекинг 12-16</a><br>Cardio Zone</div></li>
                <li><span class="time">14 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/tvorceskaa-masterskaa/">Творческая мастерская 3-4, 5-8</a><br>Kids Club</div></li>
                <li><span class="time">14 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/strength-programs/lean-legs/">Lean Legs 17+</a><br>Group Hall</div></li>
                <li><span class="time">14 : 45</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/funkcionalnaa-trenirovka/">Функциональная тренировка 12-16</a><br>Group Hall</div></li>
                <li><span class="time">15 : 45</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/spina-press/">Спина + пресс 12-16</a><br>Group Hall</div></li>
                <li><span class="time">16 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/functional-training/ft-interval/">FT INTERVAL 17+</a><br>Group Hall</div></li>
                <li><span class="time">16 : 40</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/zaradka/">Зарядка 3-4</a><br>Group Hall</div></li>
                <li><span class="time">17 : 15</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/pryg-skok/">Прыг - скок 3-4</a><br>Group Hall</div></li>
                <li><span class="time">17 : 50</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/hop-hop/">Хоп-хоп 5-8</a><br>Group Hall</div></li>
                <li><span class="time">18 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/cardio/step-time/">Step time 17+</a><br>Group Hall</div></li>
                <li><span class="time">18 : 40</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/lunohody/">Луноходы 5-8</a><br>Group Hall</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/authors-group-programs/cosmo-pump/">Cosmo Pump 17+</a><br>Group Hall</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/martial-arts/boxing/">Бокс 17+</a><br>Fight Zone</div></li>
                <li><span class="time">19 : 15</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/kosmo-tur/">Космо - Тур 9-11</a><br>Cycle Zone</div></li>
                <li><span class="time">19 : 45</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/kosmo-assorti/">Космо - ассорти 9-11</a><br>Group Hall</div></li>
                <li><span class="time">20 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/mind-and-body/pilates/">Pilates 17+</a><br>Group Hall</div></li>
                <li><span class="time">20 : 30</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/STRETCH/">STRETCH 9-11</a><br>Group Hall</div></li>
            </ul>
        </div>
        <div class="schedule-cont uk-hidden" id="shedule-cont-millenium">
            <ul>
                <li class="schedule-past"><span class="time">07 : 30</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/cardio/running-interval/">Running Interval 17+</a><br>Зона ТЗ</div></li>
                <li><span class="time">08 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/strength-programs/hard-core/">Hard Core 17+</a><br>Group Hall</div></li>
                <li><span class="time">11 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/spina-press/">Спина + пресс 9-11, 12-16</a><br>Kids club</div></li>
                <li><span class="time">11 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/mind-and-body/pilates/">Pilates 17+</a><br>Group Hall</div></li>
                <li><span class="time">12 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/authors-group-programs/cosmo-pump/">Cosmo Pump 17+</a><br>Group Hall</div></li>
                <li><span class="time">14 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/authors-group-programs/cosmo-mama/">Cosmo Mama 17+</a><br>Group Zone</div></li>
                <li><span class="time">16 : 45</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/funkcionalnaa-trenirovka/">Функциональная тренировка 9-11, 12-16</a><br>Kids club</div></li>
                <li><span class="time">17 : 45</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/kikboxing/">Кикбоксинг 9-11, 12-16</a><br>Fight Zone</div></li>
                <li><span class="time">18 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/water-programs/sputniki/">Спутники 5-8</a><br>Бассейн</div></li>
                <li><span class="time">18 : 30</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/funkcionalnaa-trenirovka/">Функциональная тренировка 5-8</a><br>Kids club</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/water-programs/start-plavanie/">СТАРТ-ПЛАВАНИЕ 5-8, 9-11</a><br>Бассейн</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/authors-group-programs/cosmo-cycle/">Cosmo Cycle</a><br>Cycle Zone</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/authors-group-programs/cosmo-balance/">Cosmo Balance</a><br>Group Hall</div></li>
                <li><span class="time">19 : 15</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/lunohody/">Луноходы 3-4</a><br>Kids club</div></li>
                <li><span class="time">19 : 45</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/childrens-fitness/kosmiceskaa-zaradka/">Космическая зарядка 3-4</a><br>Kids club</div></li>
                <li><span class="time">20 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/strength-programs/hard-core/">Hard Core 17+</a><br>Group Hall</div></li>
                <li><span class="time">20 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/water-programs/water-press/">Water Press 17+</a><br>Бассейн</div></li>
                <li><span class="time">20 : 15</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/mind-and-body/yoga/">Йога</a><br>Group Hall</div></li>
                <li><span class="time">20 : 30</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/martial-arts/boxing/">Бокс 17+</a><br>Fight Zone</div></li>
                <li><span class="time">20 : 30</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/mind-and-body/stretch/">Стретчинг 17+</a><br>Group Hall</div></li>
            </ul>
        </div>
        <div class="schedule-cont uk-hidden" id="shedule-cont-gazetnyi">
            <ul>
                <li><span class="time">11 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/strength-programs/lean-legs/">Lean Legs</a><br>ГП 1</div></li>
                <li><span class="time">12 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/mind-and-body/deep-stretch/">Deep  Stretch</a><br>ГП 1</div></li>
                <li><span class="time">14 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/functional-training/ft-interval/">FT INTERVAL</a><br>ГП 1</div></li>
                <li><span class="time">18 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/strength-programs/lean-arms/">Lean  Arms</a><br>ГП 1</div></li>
                <li><span class="time">18 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/mind-and-body/pilates-intro/">Pilates Intro</a><br>ГП 1</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/authors-group-programs/cosmo-cycle/">Cosmo Cycle</a><br>КЗ</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/dance-programs/dance-mix/">Dance-mix 17+</a><br>Group Hall</div></li>
                <li><span class="time">19 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/functional-training/ft-interval/">FT INTERVAL</a><br>ГП 1</div></li>
                <li><span class="time">20 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/strength-programs/core/">Core 17+</a><br>Group Hall</div></li>
                <li><span class="time">20 : 00</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/authors-group-programs/cosmo-balance/">Cosmo Balance</a><br>ГП 1</div></li>
                <li><span class="time">20 : 30</span> <div class="text"><a class="name" target="_blank" href="https://fitron.club/fitnes-uslugi/mind-and-body/stretch/">Стретчинг 17+</a><br>Group Hall</div></li>
            </ul>
        </div>
    </div>
    <div class="uk-clearfix"></div>
    <div class="schedule-buttons">
        <a href="#" class="button-up"><b></b></a>
        <a href="#" class="button-down"><b></b></a>
        <a href="https://fitron.club/clubs/orbita/schedule/" class="button-all">расписание на неделю</a>
    </div>
</div>
@endsection

@section('main-advantages')
<div id="main-advantages">
    <div class="container">
        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2">
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-1.svg" alt="Пространство" width="140">
                            <img src="/images/advantages-icon-1-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Пространство" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Пространство<p>
                            <p>Самые большие и оснащённые тренажёрные залы - 1200 м<sup>2</sup>, и залы групповых программ - 300 м<sup>2</sup>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-8.svg" alt="Уровень" width="140">
                            <img src="/images/advantages-icon-8-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Уровень" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Уровень<p>
                            <p>Высочайший уровень и технологии фитнеса от команды Ростовской Фитнес Группы FITRON</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-3.svg" alt="Инновации" width="140">
                            <img src="/images/advantages-icon-3-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Инновации" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Инновации<p>
                            <div class="uk-margin">
                                <ul style="padding-left: 15px;">
                                    <li>Открытые свободные планировки фитнес-зон;</li>
                                    <li>Самые передовые системы очистки воздуха и воды;</li>
                                    <li>Последние разработки фитнес-оборудования от мировых лидеров Precor, Techno Gym, Hoist, Foreman: впервые в России!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-7.svg" alt="Фитнес сеть" width="140">
                            <img src="/images/advantages-icon-7-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Фитнес сеть" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Фитнес сеть<p>
                            <div class="uk-margin">
                                4 больших фитнес клуба и 2 бассейна, доступных по единой мульти-карте:
                                <ul style="padding-left: 15px;">
                                    <li>FITRON Миллениум на Соборном,</li>
                                    <li>FITRON Орбита на Северном,</li>
                                    <li>FITRON Газетный,</li>
                                    <li>ФизКульт ТЦ &laquo;Горизонт&raquo;,</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-2.svg" alt="Удобство" width="140">
                            <img src="/images/advantages-icon-2-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Удобство" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Удобство<p>
                            <p>Самые просторные раздевалки с полно-ростовыми (эргономичными) шкафчиками, с возможностью выбора свободного шкафчика.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-5.svg" alt="Мировые стандарты" width="140">
                            <img src="/images/advantages-icon-5-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Мировые стандарты" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Мировые стандарты<p>
                            <p>Высокие мировые стандарты сервиса от Ростовской Фитнес Группы FITRON</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-6.svg" alt="Безопасность" width="140">
                            <img src="/images/advantages-icon-6-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Безопасность" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Безопасность<p>
                            <p>Новые технологии безопасности – система доступа в клуб по отпечаткам пальцев!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-top">
                <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                    <div class="uk-width-1-4">
                        <div class="uk-overlay">
                            <img src="/images/advantages-icon-4.svg" alt="Дизайн" width="140">
                            <img src="/images/advantages-icon-4-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Дизайн" width="140">
                        </div>
                    </div>
                    <div class="uk-width-3-4">
                        <div class="uk-panel">
                            <p class="head">Дизайн<p>
                            <p>Ультрасовременный концептуальный дизайн, передающий атмосферу космической станции.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="/assets/d2b55c23/jquery.js?v=1522143243"></script>
<script src="/assets/44c734f/yii.js?v=1522143243"></script>
<script src="/uikit-2.27.4/js/uikit.min.js?v=1513081638"></script>
<script src="/uikit-2.27.4/js/components/sticky.min.js?v=1513081638"></script>
<script src="/uikit-2.27.4/js/components/lightbox.min.js?v=1513081638"></script>
<script src="/js/uk-slider-mod.js?v=1485298260"></script>
<script src="/js/main-events-schedule.js?v=1510307988"></script>
<script src="/uikit-2.27.4/js/components/slideshow.min.js?v=1513081638"></script>
<script src="/uikit-2.27.4/js/components/parallax.min.js?v=1513081638"></script>
<script src="/assets/2ce3d78e/switchery.min.js?v=1522143244"></script>
<script src="/js/main.js?v=1524059514"></script>
<script src="/js/sticky-bottom.js?v=1485298260"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TimelineMax.min.js"></script>
<script src="/js/mobile-menu.js?v=1485298260"></script>
<script type="text/javascript">
    jQuery(window).on('load', function () {

        var maxtopmargin = {};
        var newtopmargin = {};


        var maxtopmargin = {};
        var newtopmargin = {};
        maxtopmargin["millenium"] = $("#shedule-cont-millenium").outerHeight() - $("#shedule-cont-millenium ul").outerHeight(true);
        newtopmargin["millenium"] = -(8-2)*$("#shedule-cont-millenium li").outerHeight(true);
        if (maxtopmargin["millenium"] > newtopmargin["millenium"]) newtopmargin["millenium"] = maxtopmargin["millenium"];
        $("#shedule-cont-millenium ul").css("margin-top",newtopmargin["millenium"]+"px");


        maxtopmargin["orbita"] = $("#shedule-cont-orbita").outerHeight() - $("#shedule-cont-orbita ul").outerHeight(true);
        maxtopmargin["orbita"] = $("#shedule-cont-orbita").outerHeight() - 21*$("#shedule-cont-millenium li").outerHeight(true);

        newtopmargin["orbita"] = -(14-2)*$("#shedule-cont-millenium li").outerHeight(true);
        if (maxtopmargin["orbita"] > newtopmargin["orbita"]) newtopmargin["orbita"] = maxtopmargin["orbita"];
        $("#shedule-cont-orbita ul").css("margin-top",newtopmargin["orbita"]+"px");


        maxtopmargin["gazetnyi"] = $("#shedule-cont-gazetnyi").outerHeight() - $("#shedule-cont-gazetnyi ul").outerHeight(true);
        maxtopmargin["gazetnyi"] = $("#shedule-cont-gazetnyi").outerHeight() - 11*$("#shedule-cont-millenium li").outerHeight(true);

        newtopmargin["gazetnyi"] = -(5-2)*$("#shedule-cont-millenium li").outerHeight(true);
        if (maxtopmargin["gazetnyi"] > newtopmargin["gazetnyi"]) newtopmargin["gazetnyi"] = maxtopmargin["gazetnyi"];
        $("#shedule-cont-gazetnyi ul").css("margin-top",newtopmargin["gazetnyi"]+"px");

    });
</script>
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




