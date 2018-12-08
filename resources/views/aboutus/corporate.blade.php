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
        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-10 uk-margin-top">
            <div class="uk-width-medium-3-10">
                <div class="uk-visible-small pagenav-mobile"><span class="uk-navbar-toggle"></span> Разделы</div>
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left">
                    <li><a href="{{route('mission')}}">Миссия</a></li>
                    <li><a href="{{route('boss')}}">Руководство</a></li>
                    <li><a href="{{route('vacancies')}}">Вакансии</a></li>
                    <li><a href="{{route('press')}}">Пресса</a></li>
                    <li><a href="{{route('franchise')}}">Франчайзинг</a></li>
                    <li class="uk-active"><a href="{{route('corporate')}}">Корпоративным клиентам</a></li>
                    <li><a href="{{route('payment')}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top uk-margin-large-bottom">
                    <p class="pageh2"><b>Корпоративный космический день здоровья в FITRON!</b></p>
                    <p>Приглашаем коллектив Вашей организации на Корпоративный День здоровья!
                        <br>Это гостевой визит, дающий право на бесплатное посещение клуба сотрудниками Вашей компании
                        под кураторством личного менеджера в тренажерном зале, зале групповых программ или бассейне.</p>
                    <p><b>Корпоративный фитнес - это модно и престижно!</b></p>
                    <p>Здоровый сотрудник - это продуктивный сотрудник. Продуктивный сотрудник - это качественная
                        работа. Качественная работа - это успешная компания! Создайте команду на работе – займитесь
                        фитнесом вместе! Получите больше скидок и привилегий!</p>
                    <p><b>Результат:</b></p>
                    <ul>
                        <li>Повышение уровня обслуживания клиентов</li>
                        <li>Укрепление корпоративного духа среди сотрудников</li>
                        <li>Уменьшение больничных листов</li>
                        <li>Повышение работоспособности и хорошего настроения</li>
                    </ul>
                    <div class="vacancies-application">
                        <div class="uk-grid uk-grid-width-1-1">
                            <div class="uk-width-medium-1-3">
                                <span data-id="101" class="redbutton corporate_fdbc"><span>подать заявку</span></span>
                            </div>
                            <div class="uk-width-medium-2-3">
                                Оставьте заявку на корпоративный фитнес-день<br>и мы пригласим Вас!
                            </div>
                        </div>
                    </div>
                    <p class="pageh2 uk-margin-large-top"><b>Корпоративное членство позволяет:</b></p>
                    <div class="uk-grid uk-grid-width-1-1">
                        <div class="uk-width-medium-1-3 uk-margin-top corporate-card">
                            <img src="/images/corporate-card.png" alt="Корпоративная клубная карта">
                        </div>
                        <div class="uk-width-medium-2-3 uk-margin-top">
                            <ul style="padding-left: 15px;">
                                <li>Приобретать клубные карты сотрудникам компаний в г. Ростове- на-Дону  на специальных условиях.</li>
                                <li>Получить УНИКАЛЬНУЮ корпоративную программу, систему скидок и дополнительных привилегий для компаний от 8 человек и более!</li>
                                <li>Выгодно вложиться: чем больше человек приобретает членство в рамках корпоративного договора, тем выгоднее клубная карта для каждого из Ваших сотрудников.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="vacancies-application">
                        <div class="uk-grid uk-grid-width-1-1">
                            <div class="uk-width-medium-1-3 uk-flex uk-flex-middle uk-flex-center">
                                <span data-id="102" class="redbutton corporate_fdbc"><span>узнать условия</span></span>
                            </div>
                            <div class="uk-width-medium-2-3">
                                Получите специальные условия на корпоративный фитнес для ваших сотрудников — поднимите трудоспособность вашей команды.
                            </div>
                        </div>
                    </div>
                    <p class="pageh2 uk-margin-large-top"><b>Почему выбирают нас?</b></p>
                    <ul>
                        <li>Высочайшее качество предоставляемых услуг, самые современные технологии фитнеса</li>
                        <li>Большой выбор дополнительных услуг</li>
                        <li>Разветвленная сеть клубов – возможность удовлетворения всех территориальных предпочтений
                            сотрудников компании</li>
                        <li>Клубы разной направленности и ценовой категории – возможность вовлечения в фитнес –
                            программу различных категорий сотрудников компании: от топ – менеджмента до персонала
                            офиса</li>
                        <li>Гибкая ценовая политика – корпоративные скидки</li>
                        <li>Возможность увеличения контрактов – присоединение сотрудников в течение срока действия
                            контракта</li>
                        <li>Дополнительные скидки при продлении членства</li>
                        <li>Индивидуальный менеджер</li>
                    </ul>
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-large-top corporate-logos">
                        <div>
                            <img src="/images/logo-wc.png" alt="World Class - сеть фитнес-клубов">
                        </div>
                        <div>
                            <img src="/images/logo-fc.png" alt="ФизКульт - сеть фитнес-клубов">
                        </div>
                        <div>
                            <img src="/images/logo-fitron.png" alt="FITRON - сеть фитнес-клубов">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
@endsection

@push('modal')
    @includeIf('include.modal.corporate')
@endpush

@section('script')
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
            window.corporate_modal_form_captcha = corporate_modal_form();
        }
    </script>
@endsection
