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
        <div class="pagecontent uk-margin-top uk-margin-large-bottom">
            <p class="join-head">Превосходи в движении<br>вместе с нами!</p>
            <div class="form_join_fdbc_content">
            <div class="form_join_fdbc">
                <div id="form_join_ok_back" style="opacity: 0;" class="form_of_back" class="title_header">Ваш запрос отправлен</div>
                <form id="join_fdbc" action="{{ route('join_join') }}" method="post">
                    @csrf
                    <div class="group_tag">
                        <div class="group_tag_row flex">
                            <div class="group_tag_input flex_width">
                                <label class="control-label" for="form_join_name">Представьтесь</label>
                                <input type="text" id="form_join_name" class="form-control" name="form_join_name">
                                <div id="form_join_name_error" class="error" style="opacity:0;">Необходимо заполнить «Представьтесь».</div>
                                <div id="form_join_name_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input flex_width">
                                <label for="form_join_club">Выберите клуб</label>
                                <select type="text" id="form_join_club" name="form_join_club">
                                    <option selected value="{{ $params['select_club']->id }}#{{ $params['select_club']->name }}">{{ $params['select_club']->name }}</option>
                                    @foreach($params['clubs'] as $club)
                                        <option value="{{ $club->id }}#{{ $club->name }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                <div class="error" style="opacity:0;">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row flex">
                            <div class="group_tag_input flex_width">
                                <label for="form_join_phone">Телефон</label>
                                <input type="tel" id="form_join_phone" name="form_join_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_join_phone_error" class="error" style="opacity:0;">Необходимо заполнить Телефон</div>
                                <div id="form_join_phone_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input flex_width">
                                <label for="form_join_email">Email</label>
                                <input type="email" id="form_join_email" name="form_join_email" />
                                <div id="form_join_email_error" class="error" style="opacity:0;">Необходимо заполнить «Email».</div>
                                <div id="form_join_email_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>

                        <div class="group_tag_row">
                            <div class="group_tag_input" style="width: 100%;">
                                <label for="form_join_text">Сообщение</label>
                                <textarea name="form_join_text" id="form_join_text" cols="30" rows="5"></textarea>
                                <div id="form_join_text_error" class="error" style="opacity: 0;">Необходимо написать сообщение</div>
                                <div id="form_join_text_back_error" class="error" style="opacity: 0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha" style="text-align: center;">
                            <div id="form_join_captcha"></div>
                            <div id="form_join_captcha_back_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox" style="text-align: center;">
                                <div>
                                    <input type="checkbox" id="form_join_agree" name="form_join_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <a href="/privacy-policy" target="_blank">персональных данных</a>
                                </div>
                                <div id="form_join_agree_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                                <div id="form_join_agree_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row" style="text-align: center;">
                            <button id="form_join_submit_button" class="button_submit" type="submit" disabled><span>Отправить</span></button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
    <script>
        var join_modal_form = function() {
            return window.grecaptcha.render('form_join_captcha', {
                'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
                'theme': 'light',
                'callback': 'recaptchaCallback_join',
                'expired-callback': 'recaptchaExpiredCallback_join',
                'error-callback': 'recaptchaErrorCallback_join'
            });
        };
        jQuery(function($){$("#form_join_phone").mask("+7(999) 999-9999");});

        var recaptchaCallback_join = function(){ document.getElementById('form_join_submit_button').removeAttribute("disabled"); };
        var recaptchaExpiredCallback_join = function(){ document.getElementById('form_join_submit_button').setAttribute("disabled", 'true'); };
        var recaptchaErrorCallback_join = function(){ document.getElementById('form_join_submit_button').setAttribute("disabled", 'true'); };

        document.getElementById('join_fdbc').addEventListener('submit', function(event){
            event.preventDefault();
            var data = new FormData(this);

            var form_join_captcha_back_error = document.getElementById('form_join_captcha_back_error');
            form_join_captcha_back_error.style.opacity = 0;
            var form_join_name_back_error = document.getElementById('form_join_name_back_error');
            form_join_name_back_error.style.opacity = 0;
            var form_join_phone_back_error = document.getElementById('form_join_phone_back_error');
            form_join_phone_back_error.style.document = 0;
            var form_join_email_back_error = document.getElementById('form_join_email_back_error');
            form_join_email_back_error.style.opacity = 0;
            var form_join_agree_back_error = document.getElementById('form_join_agree_back_error');
            form_join_agree_back_error.style.opacity = 0;
            var form_join_text_back_error = document.getElementById('form_join_text_back_error');
            form_join_text_back_error.style.opacity = 0;

            var form_join_name_error = +!(data.has('form_join_name') && !!data.get('form_join_name'));
            var form_join_phone_error = +!(data.has('form_join_phone') && !!data.get('form_join_phone'));
            var form_join_email_error = +!(data.has('form_join_email') && !!data.get('form_join_email'));
            var form_join_agree_error = +!(data.has('form_join_agree') && !!data.get('form_join_agree'));
            var form_join_text_error = +!(data.has('form_join_text') && !!data.get('form_join_text'));

            document.getElementById('form_join_name_error').style.opacity = form_join_name_error;
            document.getElementById('form_join_phone_error').style.opacity = form_join_phone_error;
            document.getElementById('form_join_email_error').style.opacity = form_join_email_error;
            document.getElementById('form_join_agree_error').style.opacity = form_join_agree_error;
            document.getElementById('form_join_text_error').style.opacity =  form_join_text_error;

            if(!(form_join_name_error + form_join_phone_error + form_join_email_error + form_join_agree_error + form_join_text_error)){
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
                                            form_join_captcha_back_error.innerText = objRezult[i][j][0];
                                            form_join_captcha_back_error.style.opacity = 1;
                                            break;
                                        case 'form_join_name':
                                            form_join_name_back_error.innerText = objRezult[i][j][0];
                                            form_join_name_back_error.style.opacity = 1;
                                            break;
                                        case 'form_join_phone':
                                            form_join_phone_back_error.innerText = objRezult[i][j][0];
                                            form_join_phone_back_error.style.opacity = 1;
                                            break;
                                        case 'form_join_email':
                                            form_join_email_back_error.innerText = objRezult[i][j][0];
                                            form_join_email_back_error.style.opacity = 1;
                                            break;
                                        case 'form_join_agree':
                                            form_join_agree_back_error.innerText = objRezult[i][j][0];
                                            form_join_agree_back_error.style.opacity = 1;
                                            break;
                                        case 'form_join_text':
                                            form_join_text_back_error.innerText = objRezult[i][j][0];
                                            form_join_text_back_error.style.opacity = 1;
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }
                            if ('ok' == i) {
                                var form_join_ok_back = document.getElementById('form_join_ok_back');
                                form_join_ok_back.innerText = objRezult[i];
                                form_join_ok_back.style.opacity = 1;
                            }
                        }
                        grecaptcha.reset(join_modal_form_captcha);
                        document.getElementById('form_join_submit_button').setAttribute("disabled", 'true');
//                        console.log(objRezult);
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
        window.join_modal_form_captcha = join_modal_form();
    };
</script>
@endsection


