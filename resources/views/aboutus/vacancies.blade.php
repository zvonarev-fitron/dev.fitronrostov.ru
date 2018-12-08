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
            <h1>{{$params['page']->menu}}<br>+7(863) 301-8000 (доб.2) и прямой номер</h1>
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
                    <li class="uk-active"><a href="{{route('vacancies')}}">Вакансии</a></li>
                    <li><a href="{{route('press')}}">Пресса</a></li>
                    <li><a href="{{route('franchise')}}">Франчайзинг</a></li>
                    <li><a href="{{route('corporate')}}">Корпоративным клиентам</a></li>
                    <li><a href="{{route('payment')}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top uk-margin-large-bottom">
                    <p class="pageh2" style="font-size: 16px;text-transform: none"><b>В связи с открытием в нашем клубе FITRON ОРБИТА бассейна, набираем новую команду инструкторского состава!!</b></p>
                    <p class="pageh2" style="font-size: 16px;text-transform: none"><b>Инструктор/тренер бассейна.</b></p>
                    <p><b>Основные задачи:</b></p>
                    <ul>
                        <li>проведение групповых и индивидуальных занятий с детьми и взрослыми;
                        </li><li>персональные тренировки;
                        </li><li>фитнес-консультации;
                        </li><li>дежурство;
                        </li><li>оказание помощи на воде, поддержание порядка в бассейне.
                        </li></ul>
                    <p><b>Требования:</b></p>
                    <ul>
                        <li>наличие разряда по плаванию приветствуется;
                        </li><li>доброжелательность, коммуникабельность, харизматичность;
                        </li><li>профильное образование (физкультура, спорт, медицина) или спортивный опыт;
                        </li><li>желание развиваться профессионально.
                        </li></ul>

                    <p><b>Условия:</b></p>
                    <ul>
                        <li>работа в нашем клубе Fitron на СЖМ;
                        </li><li>оформление ТК РФ, соцпакет, стабильная заработная плата;
                        </li><li>возможность профессионального и карьерного роста;
                        </li><li>внутрикорпоративное обучение.
                        </li></ul>

                    <div class="vacancies-privilege">
                        <p class="pageh2"><b>Актуальные вакансии:</b></p>
                        <ol class="uk-grid uk-grid-width-1-1">
                            <li><b>Инструктор тренажёрного зала</b></li>
                            <li><b>Инструктор групповых программ</b></li>
                            <li><b>Инструктор детского клуба</b></li>
                        </ol>
                    </div>
                    <div class="vacancies-application">
                        <div class="uk-grid uk-grid-width-1-1">
                            <div class="uk-width-medium-1-3">
                                <span class="redbutton">
                                    {{--<span>подать заявку</span>--}}
                                    <label for="modal_vacancies" >подать заявку</label>
                                </span>
                            </div>
                            <div class="uk-width-medium-2-3">
                                Приглашаем активных, талантливых и успешных пройти конкурсный отбор на позиции и стать частью нашей дружной команды!
                            </div>
                        </div>
                    </div>
                    <p><strong>Требования:</strong></p>
                    <ul>
                        <li>знание физиологии, биомеханики, анатомии, основы спортивного тестирования</li>
                        <li>вопросы рационального питания</li>
                        <li>уверенное желание работать в сфере услуг фитнеса</li>
                        <li>физкультурное/медицинское образование и/или опыт в проф. спорте</li>
                        <li>опыт тренерской работы приветствуется</li>
                    </ul>
                    <p><strong>Задачи:</strong></p>
                    <ul>
                        <li>проведение фитнес-занятий, персональных тренировок, консультации для клиентов</li>
                        <li>быть всегда в хорошем настроении и делиться им с нашими клиентами</li>
                    </ul>
                    <p><strong>Мы предлагаем:</strong></p>
                    <ul>
                        <li>стабильную и своевременную заработную плату, соцпакет, оформление по ТК РФ</li>
                        <li>возможность профессионального роста, первоклассное оборудование для эффективной работы</li>
                        <li>пакет уникальных Привилегий сотрудников Ростовской Фитнес-Группы Михаила Плужникова</li>
                    </ul>
                    <div class="vacancies-privilege uk-margin-large-top">
                        <p class="pageh2"><b>Привилегии сотрудников:</b></p>
                        <ol class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3">
                            <li><b>Право</b><br>на посещение и пользование услугами клуба</li>
                            <li><b>Скидка</b><br>на продукцию фитнес-бара</li>
                            <li><b>Скидка</b><br>на дополнительные услуги фитнес–департамента</li>
                            <li><b>Скидка</b><br>на дополнительные услуги рецепции</li>
                            <li><b>Скидка</b><br>на пользование услугами и продукцию салона AltEgo</li>
                            <li><b>Скидка</b><br>для родственников и друзей на приобретение членства в любом из клубов компании</li>
                            <li><b>Корпоративный тел. номер</b><br>(для руководителей служб и отделов, а также менеджеров отдела продаж и маркетинга)</li>
                            <li><b>Развоз сотрудников</b><br>работающих до закрытия клуба, по месту жительства в пределах г. Ростова-на-Дону</li>
                        </ol>
                    </div>
                    <div class="vacancies-application uk-margin-bottom">
                        <p><b>Мы оформляем Вас по ТК РФ!<br>Вы становитесь частью самой крупной и успешной сети фитнес клубов в г. Ростов-на-Дону с уникальной Историей, Миссией, Ценностями и Корпоративной культурой.</b></p>
                        <ul>
                            <li>Программы обучения и профессионального развития с привлечением московских и международных специалистов.</li>
                            <li>Адаптационная программа погружения для новых сотрудников.</li>
                            <li>Прозрачная программа карьерного и профессионального роста.</li>
                            <li>Регулярные мотивационные конкурсы и проекты.</li>
                            <li>Здоровая атмосфера взаимной поддержки в команде и зажигательные корпоративы.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="redhr"></div>
@endsection

@push('modal')
    @includeIf('include.modal.vacancies')
@endpush

@section('script')
<script>
var onloadCaptcha = function(){
window.feedback_modal_form_captcha = feedback_modal_form();
window.vacancies_modal_form_captcha = vacancies_modal_form();
}
</script>
@endsection
