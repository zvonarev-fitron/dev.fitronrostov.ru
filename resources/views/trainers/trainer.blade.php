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
            <h1>Тренеры</h1>
            <ul class="uk-breadcrumb">
                <li><a href="/"><span>Главная</span></a></li>
                <li><a href="{{ route('trainers_index', ['club' => $params['query']['club'][0], 'type' => $params['query']['type'][0]]) }}"><span>Тренеры</span></a></li>
                <li class="uk-active"><span>{{ $params['club_trainer']->name }}</span></li>
                <li class="uk-active"><span>{{ $params['type_trainer']->name }}</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('main')
    <div class="container">
        <div class="fitnes-uslugi-trenery uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-10 uk-margin-top">
            <div class="uk-width-medium-3-10" id="types_clubs_trainers_menu">
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left" id="types_trainers">
                    <li class="{{ in_array(0, $params['query']['type']) ? 'uk-active' : ''}}">
                        <a href="javascript:void(0)" data-id-type="0" class="trainers_type">Показать все направления</a>
                    </li>
                    @foreach($params['types_trainers'] as $type)
                        <li class="{{ in_array($type->id, $params['query']['type']) ? 'uk-active' : ''}}">
                            <a href="javascript:void(0)" data-id-type="{{ $type->id }}" class="trainers_type">{{ $type->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left" id="clubs_trainers">
                    <li class="{{ in_array(0, $params['query']['club']) ? 'uk-active' : ''}}">
                        <a href="javascript:void(0)" data-id-club="0" class="trainers_type">Показать все клубы</a>
                    </li>
                    <li class="{{ in_array($params['select_club']->id, $params['query']['club']) ? 'uk-active' : ''}}">
                        <a href="javascript:void(0)" data-id-club="{{ $params['select_club']->id }}" class="trainers_type">{{ $params['select_club']->name }}</a>
                    </li>
                    @foreach($params['clubs'] as $club)
                        <li class="{{ in_array($club->id, $params['query']['club']) ? 'uk-active' : ''}}">
                            <a href="javascript:void(0)" data-id-club="{{ $club->id }}" class="trainers_type">{{ $club->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top uk-margin-large-bottom trener">
                    <div class="programs-breadcrumbs"></div>
                    <img src="{{ url($params['trainer']->image) }}" alt="{{ $params['trainer']->name }}">
                    <p class="trener-name uk-margin-large-top"><b>{{ $params['trainer']->name }}</b></p>
                    <hr class="underhead">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2">
                        <div class="uk-margin-large-bottom">{!! $params['trainer']->description !!}</div>
                        @if($params['trainer']->youtube)
                        <div class="uk-margin-large-bottom">
                            <iframe width="100%" height="190" src="https://www.youtube.com/embed/{{ $params['trainer']->youtube }}?rel=0&amp;showinfo=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        </div>
                        @endif
                    </div>
                    <p class="trener-name uk-text-center"><b>Задать вопрос тренеру</b></p>
                    <div class="form_trainer_fdbc">
                        <div id="form_trainer_ok_back" style="opacity: 0;" class="title_header">Ваш запрос отправлен</div>
                        <form id="trainer_fdbc" action="{{ route('join_trainer') }}" method="post">
                            @csrf
                            <input type="hidden" id="form_trainer_id" name="form_trainer_id" value="{{ $params['trainer']->id }}">
                            <input type="hidden" id="form_trainer_id_name" name="form_trainer_id_name" value="{{ $params['trainer']->name }}">
                            <div class="group_tag">
                                <div class="group_tag_row">
                                    <div class="group_tag_input">
                                        <label class="control-label" for="form_trainer_name">Представьтесь</label>
                                        <input type="text" id="form_trainer_name" class="form-control" name="form_trainer_name">
                                        <div id="form_trainer_name_error" class="error" style="opacity:0;">Необходимо заполнить «Представьтесь».</div>
                                        <div id="form_trainer_name_back_error" class="error" style="opacity:0;"></div>
                                    </div>
                                </div>
                                <div class="group_tag_row flex">
                                    <div class="group_tag_input flex_width">
                                        <label for="form_trainer_phone">Телефон</label>
                                        <input type="tel" id="form_trainer_phone" name="form_trainer_phone" placeholder="+7 (___)___- ____" />
                                        <div id="form_trainer_phone_error" class="error" style="opacity:0;">Необходимо заполнить Телефон</div>
                                        <div id="form_trainer_phone_back_error" class="error" style="opacity:0;"></div>
                                    </div>
                                    <div class="group_tag_input flex_width">
                                        <label for="form_trainer_email">Email</label>
                                        <input type="email" id="form_trainer_email" name="form_trainer_email" />
                                        <div id="form_trainer_email_error" class="error" style="opacity:0;">Необходимо заполнить «Email».</div>
                                        <div id="form_trainer_email_back_error" class="error" style="opacity:0;"></div>
                                    </div>
                                </div>

                                <div class="group_tag_row">
                                    <div class="group_tag_input" style="width: 100%;">
                                        <label for="form_trainer_text">Сообщение</label>
                                        <textarea name="form_trainer_text" id="form_trainer_text" cols="30" rows="5"></textarea>
                                        <div id="form_trainer_text_error" class="error" style="opacity: 0;">Необходимо написать сообщение</div>
                                        <div id="form_trainer_text_back_error" class="error" style="opacity: 0;"></div>
                                    </div>
                                </div>
                                <div class="group_tag_row group_captcha" style="text-align: center;">
                                    <div id="form_trainer_captcha"></div>
                                    <div id="form_trainer_captcha_back_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                                </div>
                                <div class="group_tag_row">
                                    <div class="group_tag_checkbox" style="text-align: center;">
                                        <div>
                                            <input type="checkbox" id="form_trainer_agree" name="form_trainer_agree" value="1">
                                            <span>Я согласен (-а) на обработку </span>
                                            <a href="/privacy-policy" target="_blank">персональных данных</a>
                                        </div>
                                        <div id="form_trainer_agree_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                                        <div id="form_trainer_agree_back_error" class="error" style="opacity:0;"></div>
                                    </div>
                                </div>
                                <div class="group_tag_row" style="text-align: center;">
                                    <button id="form_trainer_submit_button" class="button_submit" type="submit" disabled><span>Отправить</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
    <script>
        var trainer_modal_form = function() {
            return window.grecaptcha.render('form_trainer_captcha', {
                'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
                'theme': 'light',
                'callback': 'recaptchaCallback_trainer',
                'expired-callback': 'recaptchaExpiredCallback_trainer',
                'error-callback': 'recaptchaErrorCallback_trainer'
            });
        };
        jQuery(function($){$("#form_trainer_phone").mask("+7(999) 999-9999");});

        var recaptchaCallback_trainer = function(){ document.getElementById('form_trainer_submit_button').removeAttribute("disabled"); };
        var recaptchaExpiredCallback_trainer = function(){ document.getElementById('form_trainer_submit_button').setAttribute("disabled", 'true'); };
        var recaptchaErrorCallback_trainer = function(){ document.getElementById('form_trainer_submit_button').setAttribute("disabled", 'true'); };

        document.getElementById('trainer_fdbc').addEventListener('submit', function(event){
            event.preventDefault();
            var data = new FormData(this);

            var form_trainer_captcha_back_error = document.getElementById('form_trainer_captcha_back_error');
            form_trainer_captcha_back_error.style.opacity = 0;
            var form_trainer_name_back_error = document.getElementById('form_trainer_name_back_error');
            form_trainer_name_back_error.style.opacity = 0;
            var form_trainer_phone_back_error = document.getElementById('form_trainer_phone_back_error');
            form_trainer_phone_back_error.style.document = 0;
            var form_trainer_email_back_error = document.getElementById('form_trainer_email_back_error');
            form_trainer_email_back_error.style.opacity = 0;
            var form_trainer_agree_back_error = document.getElementById('form_trainer_agree_back_error');
            form_trainer_agree_back_error.style.opacity = 0;
            var form_trainer_text_back_error = document.getElementById('form_trainer_text_back_error');
            form_trainer_text_back_error.style.opacity = 0;

            var form_trainer_name_error = +!(data.has('form_trainer_name') && !!data.get('form_trainer_name'));
            var form_trainer_phone_error = +!(data.has('form_trainer_phone') && !!data.get('form_trainer_phone'));
            var form_trainer_email_error = +!(data.has('form_trainer_email') && !!data.get('form_trainer_email'));
            var form_trainer_agree_error = +!(data.has('form_trainer_agree') && !!data.get('form_trainer_agree'));
            var form_trainer_text_error = +!(data.has('form_trainer_text') && !!data.get('form_trainer_text'));

            document.getElementById('form_trainer_name_error').style.opacity = form_trainer_name_error;
            document.getElementById('form_trainer_phone_error').style.opacity = form_trainer_phone_error;
            document.getElementById('form_trainer_email_error').style.opacity = form_trainer_email_error;
            document.getElementById('form_trainer_agree_error').style.opacity = form_trainer_agree_error;
            document.getElementById('form_trainer_text_error').style.opacity = form_trainer_text_error;

            if(!(form_trainer_name_error + form_trainer_phone_error + form_trainer_email_error + form_trainer_agree_error + form_trainer_text_error)){
                var xhr = new XMLHttpRequest();
                xhr.open(this.getAttribute('method'), this.getAttribute('action'), true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onload = function(){
                    if (xhr.readyState == 4 && xhr.status == 404) {
                        alert('<h2>Ошибка загрузки страницы(404)</h2>');
                    }
                    if (xhr.readyState == 4 && xhr.status == 422) {
                        alert('<h2>Ошибка загрузки страницы(422)</h2>');
                    }
                    if (xhr.readyState == 4 && xhr.status == 405) {
                        alert('<h2>Ошибка загрузки страницы(405)</h2>');
                    }
                    if (xhr.readyState == 4 && xhr.status == 500) {
                        alert('<h2>Ошибка загрузки страницы(500)</h2>');
                    }
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var objRezult = JSON.parse(xhr.responseText);
                        for(var i in objRezult) {
                            if ('error' == i) {
                                for (var j in objRezult[i]) {
                                    switch (j) {
                                        case 'g-recaptcha-response':
                                            form_trainer_captcha_back_error.innerText = objRezult[i][j][0];
                                            form_trainer_captcha_back_error.style.opacity = 1;
                                            break;
                                        case 'form_trainer_name':
                                            form_trainer_name_back_error.innerText = objRezult[i][j][0];
                                            form_trainer_name_back_error.style.opacity = 1;
                                            break;
                                        case 'form_trainer_phone':
                                            form_trainer_phone_back_error.innerText = objRezult[i][j][0];
                                            form_trainer_phone_back_error.style.opacity = 1;
                                            break;
                                        case 'form_trainer_email':
                                            form_trainer_email_back_error.innerText = objRezult[i][j][0];
                                            form_trainer_email_back_error.style.opacity = 1;
                                            break;
                                        case 'form_trainer_agree':
                                            form_trainer_agree_back_error.innerText = objRezult[i][j][0];
                                            form_trainer_agree_back_error.style.opacity = 1;
                                            break;
                                        case 'form_trainer_text':
                                            form_trainer_text_back_error.innerText = objRezult[i][j][0];
                                            form_trainer_text_back_error.style.opacity = 1;
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }
                            if ('ok' == i) {
                                var form_trainer_ok_back = document.getElementById('form_trainer_ok_back');
                                form_trainer_ok_back.innerText = objRezult[i];
                                form_trainer_ok_back.style.opacity = 1;
                            }
                        }
                        grecaptcha.reset(trainer_modal_form_captcha);
                        document.getElementById('form_trainer_submit_button').setAttribute("disabled", 'true');
                        console.log(objRezult);
                    }
                };
                xhr.onerror = function () {
                    console.log('Ошибка');
                };
                xhr.send(data);
            }
            return false;
        });
    </script>
@endsection

@section('script')
<script>
    var onloadCaptcha = function(){
        window.feedback_modal_form_captcha = feedback_modal_form();
        window.trainer_modal_form_captcha = trainer_modal_form();
    };
</script>
@endsection
