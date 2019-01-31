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
            <div class="cc_contacts">
            <div class="cc_h_1">
                <div class="cc_v">
                    <div class="cc_vh_vi">
                        <div class="cc_vh_i">
                            <i class="fas fa-phone-volume" style="font-size: 105%;"></i>
                        </div>
                    </div>
                    <div class="cc_vh">
                        <span class="cc_vh_head">{{ __('Сеть Фитнес-клубов FITRON') }}</span>
                        <span class="cc_vh_phone">
                            <a href="tel:88633018000">{{ __('+7(863)301-8000') }}</a>
                        </span>
                    </div>
                </div>
                <div class="cc_v">
                    <div class="cc_vh_vi">
                        <div class="cc_vh_i">
                            <i class="fas fa-phone-volume" style="font-size: 105%;"></i>
                        </div>
                    </div>
                    <div class="cc_vh">
                        <span class="cc_vh_head">{{ __('Офис продаж') }}</span>
                        <span  class="cc_vh_phone"><a href="tel:88633012000">{{ __('+7(863)301-2000') }}</a></span>
                    </div>
                </div>
                <div class="cc_v">
                    <div class="cc_vh_n">
                        {{--<div class="cc_vh_i"></div>--}}
                    </div>
                    <div class="cc_vh_v_n">
                        <div class="cc_vh_1">
                            <span class="cc_vh_name">{{ __('ПН. - СБ.') }}</span>
                            <span class="cc_vh_name">{{ __('ВС.') }}</span>
                        </div>
                        <div class="cc_vh_2">
                            <span class="cc_vh_val">{{ __('07:00 - 23:00') }}</span>
                            <span class="cc_vh_val">{{ __('09:00 - 21:00') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cc_h_2">
                <form action="/" method="get">
                    @csrf
                    <div class="cc_f">
                        <div class="cc_f_row">
                            <p class="cc_f_p">{{ __('Мы рады ответить на любой ваш вопрос,') }}<br>{{ __('выслушать ваше предложение или замечание') }}</p>
                        </div>
                        <div class="cc_f_row">
                            <div class="cc_f_row_col">
                                <input type="text" class="cc_f_i" name="name" id="name" required />
                                <label for="name" class="cc_f_l">{{ __('Имя') }}<span>{{ __('*') }}</span></label>
                            </div>
                            <div class="cc_f_row_col">
                                <input type="text" class="cc_f_i" name="surname" id="surname" required />
                                <label for="surname" class="cc_f_l">{{ __('Фамилия') }}<span>{{ __('*') }}</span></label>
                            </div>
                        </div>
                        <div class="cc_f_row">
                            <div class="cc_f_row_col">
                                <input type="phone" class="cc_f_i" name="phone" id="phone" required />
                                <label for="phone" class="cc_f_l">{{ __('Телефон') }}<span>{{ __('*') }}</span></label>
                            </div>
                            <div class="cc_f_row_col">
                                <input type="email" class="cc_f_i" name="email" id="email" required />
                                <label for="email" class="cc_f_l">{{ __('Электронная почта') }}<span>{{ __('*') }}</span></label>
                            </div>
                        </div>
                        <div class="cc_f_row_col">
                            <input type="text" class="cc_f_i cc_f_w" name="subject" id="subject" required />
                            <label for="subject" class="cc_f_l">{{ __('Тема сообщения') }}<span>{{ __('*') }}</span></label>
                        </div>
                        <div class="cc_f_row_col">
                            <textarea name="message" id="message" class="cc_f_i cc_f_t" placeholder="Сообщение"></textarea>
                            {{--<label for="message" class="cc_f_l">{{ __('Сообщение') }}</label>--}}
                        </div>
                        <div class="cc_f_row_c">
                            <input type="checkbox" id="processing" name="processing" class="cc_f_pro" checked>
                            <label for="processing" class="cc_f_pro_l">{{ __('Я согласен на обработку') }} </label>
                            <label for="modal_policy" style="color:red;">{{ __('персональных данных') }}</label>
                            <span class="cc_f_ps"><span>{{ __('*') }}</span>{{__(' - обязательные для заполнения поля')}}</span>
                        </div>
                        <div class="cc_f_row cc_f_row_btn">
                            <button type="submit" class="cc_f_btn"><span>{{ __('Отправить') }}</span></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        </div>
        {{--<div class="redhr"></div>--}}
        {{--<div id="mapYandex">--}}
            {{--<yandex-map--}}
                {{--zoom="14"--}}
                {{--class="ymap"--}}
                {{--:cluster-options="{1: {clusterDisableClickZoom: true, layout}}"--}}
                {{--:coords="coords"--}}
                {{--:placemarks="placemarks"--}}
            {{--></yandex-map>--}}
        {{--</div>--}}
    </div>
    <div class="redhr"></div>
@endsection

{{--@section('script')--}}
    {{--<style>--}}
        {{--#mapYandex {--}}
            {{--width: 100%;--}}
            {{--height: 650px;--}}
        {{--}--}}
        {{--.ymap {--}}
            {{--width: 100%;--}}
            {{--height: 100%;--}}
        {{--}--}}
        {{--.ymaps-2-1-71-balloon__layout {--}}
            {{--border: 1px solid red;--}}
            {{--transform: skew(-24deg);--}}
        {{--}--}}
        {{--.ymaps-2-1-71-balloon__content {--}}
            {{--transform: skew(24deg);--}}
            {{--margin-left: 10px;--}}
        {{--}--}}
        {{--.ymaps-2-1-71-balloon__close {--}}
            {{--transform: skew(24deg);--}}
        {{--}--}}
        {{--.ymaps-2-1-71-balloon-content__header {--}}
            {{--color: red;--}}
        {{--}--}}
        {{--.ymaps-2-1-71-balloon-content__footer {--}}
            {{--color: #0d77b6;--}}
        {{--}--}}
        {{--.ymaps-2-1-71-balloon__tail {--}}
            {{--box-shadow: none;--}}
        {{--}--}}
    {{--</style>--}}
    {{--<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js'></script>--}}
    {{--<script src='https://unpkg.com/vue-yandex-maps'></script>--}}
    {{--<script>--}}
        {{--var onloadCaptcha = function(){--}}
            {{--window.feedback_modal_form_captcha = feedback_modal_form();--}}
        {{--};--}}
        {{--new Vue({--}}
            {{--el: '#mapYandex',--}}
            {{--data: {--}}
                {{--coords: [ 47.244437379875556, 39.71312181027406 ],--}}
                {{--layout: '<div>@{{ properties.balloonContentHeader }}</div><div>@{{ properties.balloonContentFooter }}</div>',--}}
                {{--placemarks: [--}}
                    {{--{--}}
                        {{--coords: [47.22710058071068, 39.71357946060061],--}}
                        {{--properties: {--}}
                            {{--balloonContentHeader: 'FITRON Газетный',--}}
                            {{--balloonContentFooter: 'ул. Красноармейская 170/84',--}}
                            {{--hintContent: 'FITRON Газетный'--}}
                            {{--// balloonContentBody: '1'--}}
                        {{--}--}}
                    {{--},--}}
                    {{--{--}}
                        {{--coords: [47.254215435374945, 39.71064619919548],--}}
                        {{--properties: {--}}
                            {{--balloonContentHeader: 'FITRON Орбита',--}}
                            {{--balloonContentFooter: 'пр. Королева, 10/4',--}}
                            {{--hintContent: 'FITRON Орбита'--}}
                            {{--// balloonContentBody: '1'--}}
                        {{--}--}}
                    {{--},--}}
                    {{--{--}}
                        {{--coords: [47.23589992787666, 39.70506322562767],--}}
                        {{--properties: {--}}
                            {{--balloonContentHeader: 'FITRON Миллениум<br>Cycle-студия Cyclon',--}}
                            {{--balloonContentFooter: 'пер. Соборный, 94г',--}}
                            {{--hintContent: 'FITRON Миллениум<br>Cycle-студия Cyclon'--}}
                            {{--// balloonContentBody: '1'--}}
                        {{--}--}}
                    {{--}--}}
                    {{--// {--}}
                    {{--//     coords: [47.23585621977553, 39.705217452646025],--}}
                    {{--//     properties: {--}}
                    {{--//         balloonContentHeader: 'Cycle-студия Cyclon',--}}
                    {{--//         balloonContentFooter: 'пер. Соборный, 94г',--}}
                    {{--//         hintContent: 'Cycle-студия Cyclon'--}}
                    {{--//         // balloonContentBody: '1'--}}
                    {{--//     }--}}
                    {{--// }--}}
                {{--]--}}
            {{--}--}}
        {{--})--}}
    {{--</script>--}}
{{--@endsection--}}
