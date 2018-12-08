@extends('layouts.layout')

@section('logo')
    <div id="topleftcont" class="uk-hidden-small">
        <div class="toplefttop"></div>
        <div id="topleftblock">
            <div class="bottomwhite"></div>
        </div>
        <div class="blueline"></div>
    </div>
@endsection

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
    <div class="container">
        <div class="contacts">
            <div class="contacts_content">
                <div class="contacts_content_phone">
                    <div class="contacts_content_phone_txt">
                        Единый номер для всех клубов
                    </div>
                    <div class="contacts_content_phone_number">
                        + 7 (863) 310 95 71
                    </div>
                </div>
                <div class="contacts_content_work">
                    <div class="contacts_content_work_head">
                        График работы:
                    </div>
                    <div class="contacts_content_work_start">
                        <div class="contacts_content_work_label">
                            ПН. - ПЯТН.
                        </div>
                        <div class="contacts_content_work_txt">
                            09:00 - 22:00
                        </div>
                    </div>
                    <div class="contacts_content_work_end">
                        <div class="contacts_content_work_label">
                            ПН. - ПЯТН.
                        </div>
                        <div class="contacts_content_work_txt">
                            09:00 - 22:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="redhr"></div>
        <div id="mapYandex">
            <yandex-map
                zoom="14"
                class="ymap"
                :cluster-options="{1: {clusterDisableClickZoom: true, layout}}"
                :coords="coords"
                :placemarks="placemarks"
            ></yandex-map>
        </div>
    </div>
    <div class="redhr"></div>
@endsection

@section('script')
    <style>
        #mapYandex {
            width: 100%;
            height: 650px;
        }
        .ymap {
            width: 100%;
            height: 100%;
        }
        .ymaps-2-1-71-balloon__layout {
            border: 1px solid red;
            transform: skew(-24deg);
        }
        .ymaps-2-1-71-balloon__content {
            transform: skew(24deg);
            margin-left: 10px;
        }
        .ymaps-2-1-71-balloon__close {
            transform: skew(24deg);
        }
        .ymaps-2-1-71-balloon-content__header {
            color: red;
        }
        .ymaps-2-1-71-balloon-content__footer {
            color: #0d77b6;
        }
        .ymaps-2-1-71-balloon__tail {
            box-shadow: none;
        }
    </style>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js'></script>
    <script src='https://unpkg.com/vue-yandex-maps'></script>
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
        };
        new Vue({
            el: '#mapYandex',
            data: {
                coords: [ 47.244437379875556, 39.71312181027406 ],
                layout: '<div>@{{ properties.balloonContentHeader }}</div><div>@{{ properties.balloonContentFooter }}</div>',
                placemarks: [
                    {
                        coords: [47.22710058071068, 39.71357946060061],
                        properties: {
                            balloonContentHeader: 'FITRON Газетный',
                            balloonContentFooter: 'ул. Красноармейская 170/84',
                            hintContent: 'FITRON Газетный'
                            // balloonContentBody: '1'
                        }
                    },
                    {
                        coords: [47.254215435374945, 39.71064619919548],
                        properties: {
                            balloonContentHeader: 'FITRON Орбита',
                            balloonContentFooter: 'пр. Королева, 10/4',
                            hintContent: 'FITRON Орбита'
                            // balloonContentBody: '1'
                        }
                    },
                    {
                        coords: [47.23589992787666, 39.70506322562767],
                        properties: {
                            balloonContentHeader: 'FITRON Миллениум<br>Cycle-студия Cyclon',
                            balloonContentFooter: 'пер. Соборный, 94г',
                            hintContent: 'FITRON Миллениум<br>Cycle-студия Cyclon'
                            // balloonContentBody: '1'
                        }
                    }
                    // {
                    //     coords: [47.23585621977553, 39.705217452646025],
                    //     properties: {
                    //         balloonContentHeader: 'Cycle-студия Cyclon',
                    //         balloonContentFooter: 'пер. Соборный, 94г',
                    //         hintContent: 'Cycle-студия Cyclon'
                    //         // balloonContentBody: '1'
                    //     }
                    // }
                ]
            }
        })
    </script>
@endsection
