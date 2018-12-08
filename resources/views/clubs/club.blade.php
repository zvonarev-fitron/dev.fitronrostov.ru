@extends('layouts.layout')

{{--@section('logo')--}}
    {{--<div id="topleftcont" class="uk-hidden-small">--}}
        {{--<div class="toplefttop"></div>--}}
        {{--<div id="topleftblock">--}}
            {{--<div class="bottomwhite"></div>--}}
        {{--</div>--}}
        {{--<div class="blueline"></div>--}}
    {{--</div>--}}
{{--@endsection--}}

@section('pagehead')
    <div id="pagehead" style="background: url(/images/bg2.jpg) no-repeat center;background-size: cover;">
        <div class="container">
            <h1>{{$params['page']->menu}}</h1>
            <ul class="uk-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">{{$params['page']->menu}}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    @if('millenium' == $params['club'])
        <div class="container">
            <div itemscope="" itemtype="http://schema.org/ExerciseGym">
                <meta itemprop="logo" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="image" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="url" content="https://fitron.club/clubs/millenium/">
                <div class="pagecontent clubtext uk-margin-top uk-margin-large-bottom">
                    <h2 itemprop="name">FITRON Миллениум</h2>
                    <p class="head-links">
                        <a href="https://fitron.club/clubs/millenium/schedule/">Расписание</a>            <a href="https://fitron.club/clubs/millenium/trainers/">Тренеры</a>        </p>
                    <div class="uk-grid uk-grid-width-1-1">
                        <div class="uk-width-large-1-2 uk-margin-large-top">
                            <p>Фитнес-клуб повышенного класса комфортности с лучшим тренерским составом и инновационно-техническим оснащением.
                                <br>Ключевым преимуществом FITRON Миллениум является система мультикомфортности, благодаря которой клуб обладает:
                                <br>- огромными фитнес-зонами;
                                <br>- самыми большими студиями в городе;
                                <br>- просторной кардио-зоной;
                                <br>- высококомфортабельным бассейном;
                                <br>- большими раздевалками с полноростовыми шкафчиками;
                                <br>- детским клубом с отдельной раздевалкой и детской студией.</p>            </div>
                        <div class="uk-width-large-1-2">
                            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Контакты</b></p>
                                    <hr>
                                    <p><a href="tel:+78633109571" class="comagic_phone2">+7 (863) 310-9571</a></p>
                                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                        <meta itemprop="addressCountry" content="Россия">
                                        г. <span itemprop="addressLocality">Ростов-на-Дону</span>,
                                        <span itemprop="streetAddress">пер. Соборный 94г</span>
                                        <br><a href="https://goo.gl/maps/M5wm5G7bA5U2" class="showmap" data-slug="millenium" target="_blank" rel="nofollow">Показать на карте</a>
                                        <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                    <meta itemprop="latitude" content="47.235903">
                                    <meta itemprop="longitude" content="39.705112">
                                </span>
                                    </p>
                                </div>
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Режим работы</b></p>
                                    <hr>
                                    <p><b>Пн - Сб:</b><br>07:00 - 23:00</p>
                                    <p><b>Вс и праздники:</b><br>09:00 - 21:00</p>
                                    <meta itemprop="openingHours" content="Mo-Sa 7:00-23:00,Su 9:00-21:00">
                                </div>
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Детский клуб</b></p>
                                    <hr>
                                    <p><b>Пн - Пт:</b><br>12:00 - 21:00</p>
                                    <p><b>Сб - Вс:</b><br>11:00 - 17:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pagecontent clubnews uk-margin-top uk-margin-large-bottom">
                <h3>Новости</h3>
                <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                    <div class="uk-margin-large-top">
                        <p class="subhead">11 июля 2018 г.</p>
                        <p><a href="https://fitron.club/fitron-life/news/bassejn-fitron-orbita-otkryt/">Бассейн Fitron Орбита открыт</a></p>
                    </div>
                    <div class="uk-margin-large-top">
                        <p class="subhead">15 июня 2018 г.</p>
                        <p><a href="https://fitron.club/fitron-life/news/prezentacia-novoj-outdoor-plosadki/">Презентация новой outdoor-площадки</a></p>
                    </div>
                    <div class="uk-margin-large-top">
                        <p class="subhead">07 июня 2018 г.</p>
                        <p><a href="https://fitron.club/fitron-life/news/mobilnoe-prilozenie-vremenno-ne-rabotaet/">Мобильное приложение временно не работает.</a></p>
                    </div>
                </div>
                <p class="newsall"><a href="https://fitron.club/fitron-life/news/">все новости</a></p>
            </div>
        </div>
        <div id="clubs-interior-new">
            <div class="container">
                <div class="pagecontent">
                    <p class="slider-heading"><b>Инфраструктура</b></p>
                </div>
            </div>
            <iframe src="/wowslider/2/{{$params['view_club']->id}}/" scrolling="no" style="width:100%;height:825px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
            <div class="texts">
                <ul class="uk-slideshow" style="height: 20px;">
                    <li data-id="0" data-slideshow-slide="html" aria-hidden="false" class="uk-active" style="height: 20px;">
                        <span class="form-link" data-href="https://fitron.club/ajax-form/?id=19&amp;title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5+%D0%BE+%D0%BA%D0%BB%D1%83%D0%B1%D0%B5&amp;o=1" data-contact-ajax="">Узнать больше</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="pagecontent contactmanager uk-margin-top uk-margin-large-bottom">
                <div class="uk-grid uk-grid-width-1-1">
                    <h3 class="uk-text-center">Написать управляющему</h3>
                </div>
                <div class="uk-grid uk-grid-width-1-1">
                    <div id="form-info-w0" style="display: none;">
                        <div class="uk-alert uk-alert-success" role="alert" data-uk-alert="">
                            <button class="uk-alert-close uk-close"></button>
                            <span>Ваш запрос отправлен</span>
                        </div>
                    </div>
                    <form id="w0" class="uk-form contact-form" action="https://fitron.club/join/" method="post" data-type="form-widget" enctype="multipart/form-data">
                        <input type="hidden" name="_csrf-frontend" value="O0NszgWIg7U9HLh2N1ZZa6pYWAoUAaj7RC0CF_J8dE0MHA64dtCzxg1Li0FkYys74h51WF5X5rczSkF5hThAHQ==">
                        <div class="form-group field-contactform-clubreq">
                            <input type="hidden" id="contactform-clubreq" class="form-control" name="ContactForm[clubreq]" value="0">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-ajax">
                            <input type="hidden" id="contactform-ajax" class="form-control" name="ContactForm[ajax]" value="1">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-formid">
                            <input type="hidden" id="contactform-formid" class="form-control" name="ContactForm[formID]" value="2">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-objectid">
                            <input type="hidden" id="contactform-objectid" class="form-control" name="ContactForm[objectID]">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-name required">
                            <label class="control-label" for="contactform-name">Представьтесь</label>
                            <input type="text" id="contactform-name" class="form-control" name="ContactForm[name]" aria-required="true">

                            <div class="help-block"></div>
                        </div><div class="form-group field-contactform-club">
                            <input type="hidden" id="contactform-club" class="form-control" name="ContactForm[club]" value="1">
                            <div class="help-block"></div>
                        </div>
                        <div class="uk-grid uk-grid-small uk-grid-width-1-1 uk-grid-width-medium-1-2">
                            <div class="form-group field-contactform-phone required">
                                <label class="control-label" for="contactform-phone">Телефон</label>
                                <input type="tel" id="contactform-phone" class="form-control" name="ContactForm[phone]" aria-required="true">
                                <div class="help-block"></div>
                            </div>                <div class="form-group field-contactform-email required">
                                <label class="control-label" for="contactform-email">Email</label>
                                <input type="text" id="contactform-email" class="form-control" name="ContactForm[email]" aria-required="true">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="form-group field-contactform-body required">
                            <label class="control-label" for="contactform-body">Сообщение</label>
                            <textarea id="contactform-body" class="form-control" name="ContactForm[body]" rows="6" aria-required="true"></textarea>
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group form-captcha uk-hidden field-contactform-verifycode">
                            <label class="control-label" for="contactform-verifycode">Код с картинки</label>
                            <div class="uk-grid uk-grid-small uk-grid-width-1-2"><div class="uk-width-medium-1-3"><img id="w0-verifycode-image" src="https://fitron.club/captcha/?v=5b62abca9f3591.46796097" alt=""></div><div class="uk-width-medium-2-3"><input type="text" id="contactform-verifycode" class="form-control" name="ContactForm[verifyCode]"></div></div>
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-agree required">
                            <input type="hidden" name="ContactForm[agree]" value="0"><label><input type="checkbox" id="contactform-agree" name="ContactForm[agree]" value="1"> Я согласен (-а) на обработку <a href="/privacy-policy" target="_blank" data-privacy-policy="">персональных данных</a></label>
                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-attach">
                            <label class="control-label" for="contactform-attach">Прикрепить файл</label>
                            <input type="hidden" name="ContactForm[attach]" value=""><input type="file" id="contactform-attach" name="ContactForm[attach]" accept="image/jpg,image/jpeg,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/x-iwork-pages-sffpages,application/vnd.oasis.opendocument.text,text/plain,application/pdf">
                            <div class="help-block"></div>
                        </div>
                        <p class="uk-text-center">Максимальный размер загружаемого файла - 4Мб<br>Форматы: jpg, doc, docx, pdf, txt, odt, pages</p>
                        <div class="form-buttons uk-grid uk-grid-small uk-grid-width-1-2">
                            <div class="uk-text-right"><button type="button" class="attach-button"><span>прикрепить файл</span></button></div>
                            <div><button type="submit" class="redbutton" name="contact-button"><span>отправить</span></button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="club-map-modal" class="uk-modal">
                <div class="uk-modal-dialog">
                    <a class="uk-modal-close uk-close"></a>
                    <div class="uk-position-cover"><div class="uk-align-center"><i class="uk-icon-spinner uk-icon-large uk-icon-spin"></i></div></div>
                    <div class="modalcont"></div>
                </div>
            </div>
        </div>
    @elseif('gazetnyi' == $params['club'])
        <div class="container">

            <div itemscope="" itemtype="http://schema.org/ExerciseGym">
                <meta itemprop="logo" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="image" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="url" content="https://fitron.club/clubs/gazetnyi/">

                <div class="pagecontent clubtext uk-margin-top uk-margin-large-bottom">
                    <h2 itemprop="name">FITRON Газетный</h2>
                    <p class="head-links">
                        <a href="https://fitron.club/clubs/gazetnyi/schedule/">Расписание</a>            <a href="https://fitron.club/clubs/gazetnyi/trainers/">Тренеры</a>        </p>
                    <div class="uk-grid uk-grid-width-1-1">
                        <div class="uk-width-large-1-2 uk-margin-large-top">
                        </div>
                        <div class="uk-width-large-1-2">
                            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2">
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Контакты</b></p>
                                    <hr>
                                    <p><a href="tel:+78633109571" class="comagic_phone2">+7 (863) 310-9571</a></p>
                                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                        <meta itemprop="addressCountry" content="Россия">
                                        г. <span itemprop="addressLocality">Ростов-на-Дону</span>,
                                        <span itemprop="streetAddress">ул. Красноармейская 170</span>
                                        <br><a href="https://goo.gl/maps/rsoFhohhkEB2" class="showmap" data-slug="gazetnyi" target="_blank" rel="nofollow">Показать на карте</a>
                                        <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="47.226983">
                                <meta itemprop="longitude" content="39.713653">
                            </span>
                                    </p>
                                </div>
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Режим работы</b></p>
                                    <hr>
                                    <p><b>Пн - Сб:</b><br>07:00 - 23:00</p>
                                    <p><b>Вс и праздники:</b><br>09:00 - 21:00</p>                        <meta itemprop="openingHours" content="Mo-Sa 7:00-23:00,Su 9:00-21:00">                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @elseif('orbita' == $params['club'])
        <div class="container">

            <div itemscope="" itemtype="http://schema.org/ExerciseGym">
                <meta itemprop="logo" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="image" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="url" content="https://fitron.club/clubs/orbita/">

                <div class="pagecontent clubtext uk-margin-top uk-margin-large-bottom">
                    <h2 itemprop="name">FITRON Орбита</h2>
                    <p class="head-links">
                        <a href="https://fitron.club/clubs/orbita/schedule/">Расписание</a>            <a href="https://fitron.club/clubs/orbita/trainers/">Тренеры</a>        </p>
                    <div class="uk-grid uk-grid-width-1-1">
                        <div class="uk-width-large-1-2 uk-margin-large-top">
                            <p>Просторный, многофункциональный фитнес-клуб с максимальным спектром услуг для всех - от начинающих до профессионалов.
                                <br>Преимущества:
                                <br>- тренажерный зал 1250 м<sup>2</sup> с бойцовской зоной,
                                <br>- просторная кардиозона,
                                <br>- удобные студии для групповых занятий,
                                <br>- тренажеры HOIST, Technogym, Precor, Life Fitness,
                                <br>- большие раздевалки со шкафчиками в полный рост,
                                <br>- детский клуб с отдельной студией и раздевалкой,
                                <br>- авторские программы тренировок,
                                <br>- действующие спортсмены в тренерском составе.</p>            </div>
                        <div class="uk-width-large-1-2">
                            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Контакты</b></p>
                                    <hr>
                                    <p><a href="tel:+78633109571" class="comagic_phone2">+7 (863) 310-9571</a></p>
                                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                        <meta itemprop="addressCountry" content="Россия">
                                        г. <span itemprop="addressLocality">Ростов-на-Дону</span>,
                                        <span itemprop="streetAddress">пр. Королёва 10/4</span>
                                        <br><a href="https://goo.gl/maps/YKxj7vnJrH62" class="showmap" data-slug="orbita" target="_blank" rel="nofollow">Показать на карте</a>
                                        <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="47.294246">
                                <meta itemprop="longitude" content="39.705040">
                            </span>
                                    </p>
                                </div>
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Режим работы</b></p>
                                    <hr>
                                    <p><b>Пн - Сб:</b><br>07:00 - 23:00</p>
                                    <p><b>Вс и праздники:</b><br>09:00 - 21:00</p>                        <meta itemprop="openingHours" content="Mo-Sa 7:00-23:00,Su 9:00-21:00">                    </div>
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Детский клуб</b></p>
                                    <hr>
                                    <p><b>Пн - Пт:</b><br>12:00 - 21:00</p>
                                    <p><b>Сб - Вс:</b><br>11:00 - 17:00</p>                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="clubs-interior-new">
            <div class="container">
                <div class="pagecontent">
                    <p class="slider-heading"><b>Инфраструктура</b></p>
                </div>
            </div>
            <iframe src="/wowslider/5/{{$params['view_club']->id}}/" scrolling="no" style="width:100%;height:553px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
            <div class="texts" style="top: 20px;">
                <ul class="uk-slideshow" style="height: 20px;">
                    <li data-id="0" data-slideshow-slide="html" aria-hidden="false" class="uk-active" style="height: 20px;">
                        <span class="form-link" data-href="https://fitron.club/ajax-form/?id=19&amp;title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5+%D0%BE+%D0%BA%D0%BB%D1%83%D0%B1%D0%B5&amp;o=1" data-contact-ajax="">Узнать больше</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">


            <div class="pagecontent contactmanager uk-margin-top uk-margin-large-bottom">
                <div class="uk-grid uk-grid-width-1-1">
                    <h3 class="uk-text-center">Написать управляющему</h3>
                </div>
                <div class="uk-grid uk-grid-width-1-1">

                    <div id="form-info-w0" style="display: none;">
                        <div class="uk-alert uk-alert-success" role="alert" data-uk-alert="">
                            <button class="uk-alert-close uk-close"></button>
                            <span>Ваш запрос отправлен</span>
                        </div>
                    </div>

                    <form id="w0" class="uk-form contact-form" action="https://fitron.club/join/" method="post" data-type="form-widget" enctype="multipart/form-data">
                        <input type="hidden" name="_csrf-frontend" value="jb5CyEyHOxHCclS2Z0MI-wkVSQ2ZWK0musdS3bBSasm64SC-P98LYvIlZ4E0dnqrQVNkX9MO42rNoBGzxxZemQ==">
                        <div class="form-group field-contactform-clubreq">

                            <input type="hidden" id="contactform-clubreq" class="form-control" name="ContactForm[clubreq]" value="0">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-ajax">

                            <input type="hidden" id="contactform-ajax" class="form-control" name="ContactForm[ajax]" value="1">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-formid">

                            <input type="hidden" id="contactform-formid" class="form-control" name="ContactForm[formID]" value="20">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-objectid">

                            <input type="hidden" id="contactform-objectid" class="form-control" name="ContactForm[objectID]">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-name required">
                            <label class="control-label" for="contactform-name">Представьтесь</label>
                            <input type="text" id="contactform-name" class="form-control" name="ContactForm[name]" aria-required="true">

                            <div class="help-block"></div>
                        </div><div class="form-group field-contactform-club">

                            <input type="hidden" id="contactform-club" class="form-control" name="ContactForm[club]" value="2">

                            <div class="help-block"></div>
                        </div>
                        <div class="uk-grid uk-grid-small uk-grid-width-1-1 uk-grid-width-medium-1-2">
                            <div class="form-group field-contactform-phone required">
                                <label class="control-label" for="contactform-phone">Телефон</label>
                                <input type="tel" id="contactform-phone" class="form-control" name="ContactForm[phone]" aria-required="true">

                                <div class="help-block"></div>
                            </div>                <div class="form-group field-contactform-email required">
                                <label class="control-label" for="contactform-email">Email</label>
                                <input type="text" id="contactform-email" class="form-control" name="ContactForm[email]" aria-required="true">

                                <div class="help-block"></div>
                            </div>            </div>


                        <div class="form-group field-contactform-body required">
                            <label class="control-label" for="contactform-body">Сообщение</label>
                            <textarea id="contactform-body" class="form-control" name="ContactForm[body]" rows="6" aria-required="true"></textarea>

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group form-captcha uk-hidden field-contactform-verifycode">
                            <label class="control-label" for="contactform-verifycode">Код с картинки</label>
                            <div class="uk-grid uk-grid-small uk-grid-width-1-2"><div class="uk-width-medium-1-3"><img id="w0-verifycode-image" src="https://fitron.club/captcha/?v=5b62f697377f54.18920531" alt=""></div><div class="uk-width-medium-2-3"><input type="text" id="contactform-verifycode" class="form-control" name="ContactForm[verifyCode]"></div></div>

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-agree required">

                            <input type="hidden" name="ContactForm[agree]" value="0"><label><input type="checkbox" id="contactform-agree" name="ContactForm[agree]" value="1"> Я согласен (-а) на обработку <a href="/privacy-policy" target="_blank" data-privacy-policy="">персональных данных</a></label>

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-contactform-attach">
                            <label class="control-label" for="contactform-attach">Прикрепить файл</label>
                            <input type="hidden" name="ContactForm[attach]" value=""><input type="file" id="contactform-attach" name="ContactForm[attach]" accept="image/jpg,image/jpeg,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/x-iwork-pages-sffpages,application/vnd.oasis.opendocument.text,text/plain,application/pdf">

                            <div class="help-block"></div>
                        </div>
                        <p class="uk-text-center">Максимальный размер загружаемого файла - 4Мб<br>Форматы: jpg, doc, docx, pdf, txt, odt, pages</p>

                        <div class="form-buttons uk-grid uk-grid-small uk-grid-width-1-2">
                            <div class="uk-text-right"><button type="button" class="attach-button"><span>прикрепить файл</span></button></div>
                            <div><button type="submit" class="redbutton" name="contact-button"><span>отправить</span></button></div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="container">

            <div id="club-map-modal" class="uk-modal">
                <div class="uk-modal-dialog">
                    <a class="uk-modal-close uk-close"></a>
                    <div class="uk-position-cover"><div class="uk-align-center"><i class="uk-icon-spinner uk-icon-large uk-icon-spin"></i></div></div>
                    <div class="modalcont"></div>
                </div>
            </div>

        </div>
    @elseif('cyclon' == $params['club'])
        <div class="container">

            <div itemscope="" itemtype="http://schema.org/ExerciseGym">
                <meta itemprop="logo" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="image" content="https://fitron.club/touch-icon-ipad-retina.png">
                <meta itemprop="url" content="https://fitron.club/clubs/cyclon/">

                <div class="pagecontent clubtext uk-margin-top uk-margin-large-bottom">
                    <h2 itemprop="name">Cycle-студия Cyclon</h2>
                    <p class="head-links">
                        <a href="https://fitron.club/clubs/cyclon/schedule/">Расписание</a>                    </p>
                    <div class="uk-grid uk-grid-width-1-1">
                        <div class="uk-width-large-1-2 uk-margin-large-top">
                            <p>Cycle-студия Cyclon - это 21 велотренажер от LifeFitness и экран размером 2.5 * 4 метра. Система Polar Club получает информацию о сердечном ритме, сжигаемых калориях и усилиях в реальном времени. Технология ICG Connect собирает данные с велотренажеров и визуализирует на экране.
                                <br>Тренеры Cyclon прошли сертификацию и знают о сайклинге все. А еще они заводные ребята, которые не дают скучать и заряжают драйвом на каждой тренировке.</p>            </div>
                        <div class="uk-width-large-1-2">
                            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2">
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Контакты</b></p>
                                    <hr>
                                    <p><a href="tel:+78633109570" class="comagic_phone1">+7 (863) 310-9570</a></p>
                                    <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                        <meta itemprop="addressCountry" content="Россия">
                                        г. <span itemprop="addressLocality">Ростов-на-Дону</span>,
                                        <span itemprop="streetAddress">пер. Соборный 94г</span>
                                        <br><a href="https://goo.gl/maps/M5wm5G7bA5U2" class="showmap" data-slug="cyclon" target="_blank" rel="nofollow">Показать на карте</a>
                                        <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="47.235903">
                                <meta itemprop="longitude" content="39.705112">
                            </span>
                                    </p>
                                </div>
                                <div class="uk-margin-large-top">
                                    <p class="subhead"><b>Режим работы</b></p>
                                    <hr>
                                    <p>Студия работает по расписанию. Записаться на занятия и посмотреть расписание студии можно в мобильном приложении FITRON.</p><a href="https://play.google.com/store/apps/details?id=com.itrack.fitron378516" target="_blank"><img style="width: 120px;" alt="Доступно в Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/ru_badge_web_generic.png"></a><a href="https://itunes.apple.com/us/app/fitron/id862699219?mt=8" target="_blank"><img style="margin: 8px;width: 95px;" alt="Доступно в App Store" src="/images/app-store-button.png"></a>                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="clubs-interior-new">
            <div class="container">
                <div class="pagecontent">
                    <p class="slider-heading"><b>Инфраструктура</b></p>
                </div>
            </div>

            <div class="bigpics">
                <ul class="uk-slideshow" style="height: 1270px;">
                    <li data-id="0" data-slideshow-slide="img" aria-hidden="false" class="uk-active" style="height: 1270px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;/uploads/interior/img5633-ded844e94c.jpg&quot;);"></div>
                        <img src="/uploads/interior/img5633-ded844e94c.jpg" alt="" style="width: 100%; height: auto; opacity: 0;">
                    </li>
                </ul>
                <a href="" class="uk-slideshow-prev" data-uk-slideshow-item="previous"><b></b></a>
                <a href="" class="uk-slideshow-next" data-uk-slideshow-item="next"><b></b></a>
            </div>
            <div class="thumbs">
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid uk-grid-small" style="min-width: 189.859px; min-height: 120px;">
                        <li data-id="0" class="uk-active" data-slider-slide="0" style="left: 0px; width: 189.859px;">
                            <div><img src="/uploads/interior/img5633-ded844e94c.jpg" alt="" draggable="false"></div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="texts">
                <ul class="uk-slideshow" style="height: 20px;">
                    <li data-id="0" data-slideshow-slide="html" aria-hidden="false" class="uk-active" style="height: 20px;">
                        <span class="form-link" data-href="https://fitron.club/ajax-form/?id=19&amp;title=%D0%A3%D0%B7%D0%BD%D0%B0%D1%82%D1%8C+%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5+%D0%BE+%D0%BA%D0%BB%D1%83%D0%B1%D0%B5&amp;o=4" data-contact-ajax="">Узнать больше</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">



        </div>
        <div class="container">

            <div id="club-map-modal" class="uk-modal">
                <div class="uk-modal-dialog">
                    <a class="uk-modal-close uk-close"></a>
                    <div class="uk-position-cover"><div class="uk-align-center"><i class="uk-icon-spinner uk-icon-large uk-icon-spin"></i></div></div>
                    <div class="modalcont"></div>
                </div>
            </div>

        </div>
    @endif
    <div class="redhr"></div>
@endsection
