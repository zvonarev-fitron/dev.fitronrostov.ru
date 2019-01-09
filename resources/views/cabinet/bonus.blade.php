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
            <h1>Личный кабинет</h1>
            <ul class="uk-breadcrumb">
                <li>
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li class="uk-active">
                    <span itemprop="name">Личный кабинет</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="cabinet_container">
        <div class="cabinet_container_content">
            <div class="cabinet_container_content_menu">
                <ul>
                    <li>
                        <select size="1">
                            <option value="1">Fitron-орбита</option>
                            <option value="2">Fitron-millenium</option>
                        </select>
                    </li>
                    <li>
                        <div>
                            <img src="###" alt="">
                        </div>
                        <div>
                            <div>Иван Иванов</div>
                            <div>Баланс: 10 000 р.</div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.index') }}">Клубная карта</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.schedule') }}">Расписание</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.calendar') }}">Календарь</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.active') }}">Активность</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.deposit') }}">Депозит</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.service') }}">Мои услуги</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.bonus') }}">Бонус</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.trainer') }}">Тренеры</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.messages') }}">Сообщения (2)</a>
                    </li>
                    <li>
                        <a href="{{ route('cabinet.feedback') }}">Обратная связь</a>
                    </li>

                </ul>
            </div>

            <div class="cabinet_container_content_page">
                Мои услуги
            </div>

        </div>
    </div>
@endsection




{{--@section('main')--}}
{{--<div class="container"></div>--}}
{{--<div id="card-individual" class="club-card-container uk-margin-large-top">--}}
{{--<div class="container">--}}
{{--<div class="pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1">--}}
{{--<div class="image-cont uk-width-medium-1-3">--}}
{{--<div class="card-image">--}}
{{--<div class="image-individual">--}}
{{--@if(in_array(8, $params['special_type_cards_ids']))--}}
{{--<div class="card_akchii"><a href="/special">АКЦИЯ</a></div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="description-cont uk-width-medium-2-3">--}}
{{--<div class="pagecontent uk-text-center">--}}
{{--<p class="pageh2"><b>Индивидуальные</b></p>--}}
{{--<p>Индивидуальные клубные карты открывают доступ в космические фитнес клубы в любое удобное для Вас время в Часы работы клуба. Они включают в себя неограниченное пользование возможностями клуба. Посещение более 50 специально разработанных групповых программ. Доступ к насыщенной спортивной жизни сети FITRON, занятиям Outdoor.</p>--}}
{{--<p>--}}
{{--<a class="showprivilege" data-uk-toggle="{target:'#card-individual', cls:'opened'}">--}}
{{--<i class="icon plus-to-minus"></i>Ваши привилегии</a>--}}
{{--<span class="redbutton"><span data-id="8" class="cards_fdbc">узнать цену</span></span>--}}
{{--</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-privilege pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">--}}
{{--<div>--}}
{{--<ol class="uk-grid uk-grid-width-1-1">--}}
{{--<li><b>Содоступ в 4 клуба РФГ FITRON</b><br>возможность посещения 2-х клубов сети FITRON и 2-х клубов сети ФизКульт в г. Ростове-на-Дону</li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--<div class="uk-width-medium-2-3">--}}
{{--<ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">--}}
{{--<li><b>Персональные вводные тренировки (3 шт.)</b></li>--}}
{{--<li><b>Секция на выбор&nbsp;(1 шт.)</b></li>--}}
{{--<li><b>Гостевые визиты (3 шт.)</b></li>--}}
{{--<li><b>Полотенце</b></li>--}}
{{--<li><b>Привилегии от партнёров.</b></li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--</div>--}}
{{--<p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="card-vip" class="club-card-container">--}}
{{--<div class="container">--}}
{{--<div class="pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1">--}}
{{--<div class="image-cont uk-width-medium-1-3">--}}
{{--<div class="card-image"><div class="image-vip">--}}
{{--@if(in_array(9, $params['special_type_cards_ids']))--}}
{{--<div class="card_akchii"><a href="/special">АКЦИЯ</a></div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="description-cont uk-width-medium-2-3">--}}
{{--<div class="pagecontent uk-text-center">--}}
{{--<p class="pageh2"><b>VIP</b></p>--}}
{{--<p>Дополнительно ко всем привилегиям FITRON данный вид карты даёт возможность пользоваться специально выделенными раздевалками, а также может включать в себя бесплатные дополнительные услуги в клубах, скидки на дополнительные услуги, доступы в другие клубы РФГ FITRON, заморозку на более длительный срок и прочие приятные мелочи.</p>--}}
{{--<p><a class="showprivilege" data-uk-toggle="{target:'#card-vip', cls:'opened'}">--}}
{{--<i class="icon plus-to-minus"></i>Ваши привилегии</a>--}}
{{--<span class="redbutton"><span data-id="9" class="cards_fdbc">узнать цену</span></span></p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-privilege pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">--}}
{{--<div>--}}
{{--<ol class="uk-grid uk-grid-width-1-1">--}}
{{--<li><b>Содоступ в 4 клуба РФГ FITRON</b><br>возможность посещения 2-х клубов сети FITRON и 2-х клубов сети ФизКульт в г. Ростове-на-Дону</li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--<div class="uk-width-medium-2-3">--}}
{{--<ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">--}}
{{--<li><b>Персональные вводные тренировки (3 шт.)</b></li>--}}
{{--<li><b>Персональные тренировки на выбор (5 шт.)</b></li>--}}
{{--<li><b>Секция на выбор&nbsp;(1 шт.)</b></li>--}}
{{--<li><b>10% скидка на персональные тренировки</b></li>--}}
{{--<li><b>10% скидка на услуги массажных студий</b></li>--}}
{{--<li><b>10% скидка на продление Вашей клубной карты</b></li>--}}
{{--<li><b>Банный халат</b></li>--}}
{{--<li><b>2&nbsp;Полотенца: банное и лицевое</b></li>--}}
{{--<li><b>Отдельная VIP раздевалка с финской сауной</b></li>--}}
{{--<li><b>Гостевые визиты (5 шт.)</b></li>--}}
{{--<li><b>Заморозка (30 дней)</b></li>--}}
{{--<li><b>Привилегии от партнёров.</b></li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--</div>--}}
{{--<p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="card-comfort" class="club-card-container">--}}
{{--<div class="container">--}}
{{--<div class="pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1">--}}
{{--<div class="image-cont uk-width-medium-1-3">--}}
{{--<div class="card-image"><div class="image-allinone">--}}
{{--@if(in_array(10, $params['special_type_cards_ids']))--}}
{{--<div class="card_akchii"><a href="/special">АКЦИЯ</a></div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="description-cont uk-width-medium-2-3">--}}
{{--<div class="pagecontent uk-text-center">--}}
{{--<p class="pageh2"><b>Comfort ( off peak )</b></p>--}}
{{--<p>Клубная карта comfort (off peak) позволяет пользоваться всеми возможностями фитнес-клубов FITRON с 07:00 до 17:00 и с 21:00 до 23:00 в любой день недели. выходные и праздничные дни без ограничений по времени.</p>--}}
{{--<p><a class="showprivilege" data-uk-toggle="{target:'#card-comfort', cls:'opened'}">--}}
{{--<i class="icon plus-to-minus"></i>Ваши привилегии</a>--}}
{{--<span class="redbutton"><span data-id="10" class="cards_fdbc">узнать цену</span></span></p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-privilege pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">--}}
{{--<div>--}}
{{--<ol class="uk-grid uk-grid-width-1-1">--}}
{{--<li><b>Содоступ в 2 клуба</b><br>возможность посещения 2-х клубов сети FITRON</li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--<div class="uk-width-medium-2-3">--}}
{{--<ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">--}}
{{--<li><b>Персональные вводные тренировки (3 шт.)</b></li>--}}
{{--<li><b>Секция на выбор&nbsp;(1 шт.)</b></li>--}}
{{--<li><b>Гостевые визиты (3 шт.)</b></li>--}}
{{--<li><b>Привилегии от партнёров.</b></li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--</div>--}}
{{--<p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="card-teen" class="club-card-container">--}}
{{--<div class="container">--}}
{{--<div class="pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1">--}}
{{--<div class="image-cont uk-width-medium-1-3">--}}
{{--<div class="card-image"><div class="image-allinone">--}}
{{--@if(in_array(11, $params['special_type_cards_ids']))--}}
{{--<div class="card_akchii"><a href="/special">АКЦИЯ</a></div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="description-cont uk-width-medium-2-3">--}}
{{--<div class="pagecontent uk-text-center">--}}
{{--<p class="pageh2"><b>Teen</b></p>--}}
{{--<p>Клубные карты открывают двери в мир фитнеса и здорового образа жизни детям &nbsp;от 12 до 16 лет.&nbsp;--}}
{{--Teen клуб FITRON — это всестороннее развитие, учитывая возраст и особенности Вашего ребёнка.--}}
{{--Отдельное&nbsp;расписание, специально подобранные программы и спортивные секции помогут детям в этом возрасте развиваться с пользой для здоровья.</p>--}}
{{--<p>Teen карта продается без ограничений.&nbsp;Не требуется обязательное наличие взрослой карты.</p>--}}
{{--<p><a class="showprivilege" data-uk-toggle="{target:'#card-teen', cls:'opened'}">--}}
{{--<i class="icon plus-to-minus"></i>Ваши привилегии</a>--}}
{{--<span class="redbutton"><span data-id="11" class="cards_fdbc">узнать цену</span></span></p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-privilege pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">--}}
{{--<div>--}}
{{--<ol class="uk-grid uk-grid-width-1-1">--}}
{{--<li><b>Содоступ в 2 клуба</b><br>возможность посещения 2-х клубов сети FITRON</li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--<div class="uk-width-medium-2-3">--}}
{{--<ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">--}}
{{--<li><b>Персональные вводные тренировки (3 шт.)</b></li>--}}
{{--<li><b>Секция на выбор&nbsp;(1 шт.)</b></li>--}}
{{--<li><b>Гостевые визиты (3 шт.)</b></li>--}}
{{--<li><b>Полотенце</b></li>--}}
{{--<li><b>Привилегии от партнёров.</b></li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--</div>--}}
{{--<p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="card-kids" class="club-card-container">--}}
{{--<div class="container">--}}
{{--<div class="pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1">--}}
{{--<div class="image-cont uk-width-medium-1-3">--}}
{{--<div class="card-image">--}}
{{--<div class="image-kids">--}}
{{--@if(in_array(12, $params['special_type_cards_ids']))--}}
{{--<div class="card_akchii"><a href="/special">АКЦИЯ</a></div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="description-cont uk-width-medium-2-3">--}}
{{--<div class="pagecontent uk-text-center">--}}
{{--<p class="pageh2"><b>Kids</b></p>--}}
{{--<p>Детские клубные карты открывают двери в мир фитнеса и здорового образа жизни детям от 3-х &nbsp;до 12лет. Детский клуб FITRON — это всестороннее развития Вашего ребенка с широким спектр фитнес-программ, спортивных секций, а также занятий, направленных на формирование творческих и интеллектуальных способностей ребенка.</p>--}}
{{--<p>Детская карта продается без ограничений.&nbsp;Не требуется обязательное наличие взрослой карты.</p>--}}
{{--<p><a class="showprivilege" data-uk-toggle="{target:'#card-kids', cls:'opened'}">--}}
{{--<i class="icon plus-to-minus"></i>Ваши привилегии</a>--}}
{{--<span class="redbutton"><span data-id="12" class="cards_fdbc">узнать цену</span></span></p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-privilege pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">--}}
{{--<div>--}}
{{--<ol class="uk-grid uk-grid-width-1-1">--}}
{{--<li><b>Содоступ в 4 клуба РФГ FITRON</b><br>возможность посещения 2-х клубов сети FITRON и 2-х клубов сети ФизКульт в г. Ростове-на-Дону</li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--<div class="uk-width-medium-2-3">--}}
{{--<ol class="secondol uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3">--}}
{{--<li><b>Вводный инструктаж (1 шт.)</b></li>--}}
{{--<li><b>Платный урок на выбор (1 шт.)</b></li>--}}
{{--<li><b>Гостевые визиты (3 шт.)</b></li>--}}
{{--<li><b>Полотенце</b></li>--}}
{{--<li><b>Привилегии от партнёров.</b></li>--}}
{{--</ol>--}}
{{--</div>--}}
{{--</div>--}}
{{--<p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="card-corporate" class="club-card-container">--}}
{{--<div class="container">--}}
{{--<div class="pagecontent">--}}
{{--<div class="uk-grid uk-grid-width-1-1">--}}
{{--<div class="image-cont uk-width-medium-1-3">--}}
{{--<div class="card-image">--}}
{{--<div class="image-allinone">--}}
{{--@if(in_array(13, $params['special_type_cards_ids']))--}}
{{--<div class="card_akchii"><a href="/special">АКЦИЯ</a></div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="description-cont uk-width-medium-2-3">--}}
{{--<div class="pagecontent uk-text-center">--}}
{{--<p class="pageh2"><b>Корпоративные</b></p>--}}
{{--<p><b>Корпоративный космический день здоровья в FITRON!</b></p>--}}
{{--<p>Мы приглашаем коллектив Вашей организации на Корпоративный день здоровья!--}}
{{--Заряд положительных эмоций и позитивного настроения гарантирован!</p>--}}
{{--<p><a class="showprivilege" data-uk-toggle="{target:'#card-corporate', cls:'opened'}">--}}
{{--<i class="icon plus-to-minus"></i>Ваши привилегии</a>--}}
{{--<span class="redbutton"><span data-id="13" class="cards_fdbc">узнать цену</span></span></p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-privilege pagecontent">--}}
{{--<ol class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-margin-top">--}}
{{--<li>Корпоративные клубные карты позволяют сотрудникам компаний тренироваться в первоклассных комфортных фитнес-клубах РФГ FITRON на специальных условиях</li>--}}
{{--<li>Возможность выбрать наиболее подходящий для каждого сотрудника клуб из 6 клубов</li>--}}
{{--<li>Заключение корпоративного контракта возможно при покупке от 10 и более годовых клубных карт</li>--}}
{{--<li>Чем больше сотрудников приобретает членство в рамках корпоративной программы, тем выгоднее клубная карта для компании и ее сотрудников</li>--}}
{{--<li>Для компаний, которые частично или полностью оплачивают стоимость членства для своих сотрудников, существуют дополнительные бонусы и привилегии</li>--}}
{{--</ol>--}}
{{--<p class="uk-text-small">Привилегии, включённые в клубные карты, могут изменяться в зависимости от вида карты.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="container uk-margin-large-top"></div>--}}
{{--<div class="redhr"></div>--}}
{{--@endsection--}}


@section('script')
    {{--<script src="{{ asset('js/uikit.min.js') }}" defer></script>--}}
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
            // window.cards_modal_form_captcha = cards_modal_form();
        };
    </script>
@endsection

{{--@push('modal')--}}
{{--@includeIf('include.modal.cards')--}}
{{--@endpush--}}



