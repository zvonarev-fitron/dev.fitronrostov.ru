<style>
    .container_cards label{
        cursor:pointer;
        transition:all .25s
    }
    .container_cards #modal_background,
    .container_cards .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_cards #modal_background{
        transition:height .25s
    }
    .container_cards .modal_content{
        transform:scale(0);
        transition:transform .5s
    }
    .container_cards #modal_cards{
        display:none
    }
    .container_cards #modal_cards:checked~#modal_background{
        background-color:hsla(0,0%,50.2%,.8);
        height:100%;
        left:0;
        opacity:1;
        position:fixed;
        top:0;
        transition:height .25s;
        visibility:visible;
        width:100%
    }
    .container_cards #modal_cards:checked~.modal_content{
        background-color:#fff;
        border-radius:3px;
        cursor:auto;
        height:auto;
        left:0;
        margin:auto;
        opacity:1;
        padding:10px 40px;
        pointer-events:auto;
        position:fixed;
        right:0;
        top:5%;
        transform:scale(1);
        transition:transform .5s;
        visibility:visible;
        width:600px
    }
    .container_cards #modal_cards:checked~.modal_content #modal_close_cards{
        color:rgba(51,51,51,.4);
        font-size:22px;
        position:absolute;
        right:20px;
        top:12px;
        transition:color .2s,transform .5s
    }
    .container_cards #modal_cards:checked~.modal_content #modal_close_cards:focus,
    .container_cards #modal_cards:checked~.modal_content #modal_close_cards:hover{
        color:#333;
        transform:rotate(1turn)
    }
    .container_cards .modal_content .header .top_header{
        margin-bottom:25px
    }
    .container_cards .modal_content .header .form_of_back{
        color: deeppink;
        background-color: gainsboro;
        text-align: center;
        font-size: 20px;
        line-height: 30px;
    }
    .container_cards .modal_content .header .top_header h2{
        margin:0;
        text-align:center
    }
    .container_cards .group_tag{
        text-align:center
    }
    .container_cards .group_tag .message {
        color: #0f3b89;
        margin:0;
        padding: 0;
    }
    .container_cards .group_tag .button_file{
        background: white;
        box-sizing: border-box;
        border: 1px solid red;
        cursor:pointer;
        display:inline-block;
        padding:10px;
        text-align:center;
        transform:skew(-24deg);
        width:200px;
        outline: none;
    }
    .container_cards .group_tag .button_file:hover{
        background: #f03;
    }
    .container_cards .group_tag .button_file:hover span{
        color: white;
    }
    .container_cards .group_tag .button_file span{
        color:red;
        display:block;
        transform:skew(24deg)
    }
    .container_cards .group_tag .error{
        color:#f03;
        font-size:12px
    }
    .container_cards .group_tag .group_tag_row{
        display:flex;
        justify-content:space-around
    }
    .container_vacancies .group_tag .group_tag_row.file{
        display:flex;
        justify-content: flex-start;
    }
    .container_cards .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        margin:35px 0;
        flex-direction: column;
    }
    .container_cards .group_tag .group_tag_row .group_tag_checkbox span{
        color: #0f3b89;
        margin-right: 5px;
    }
    .container_cards .group_tag .group_tag_row .group_tag_checkbox a{
        color:red;
        text-decoration: none;
    }
    .container_cards .group_tag .group_tag_row .group_tag_input{
        width:285px;
        font-family: "Gotham SSm A", "Gotham SSm B";
    }
    .container_cards .group_tag .group_tag_row .group_tag_input label{
        display:block;
        font-weight:700;
        margin:20px 0 10px;
        color: #0f3b89;
        text-align: left;
    }
    .container_cards .group_tag .group_tag_row .group_tag_input label:after{
        color:red;
        content:"*"
    }
    .container_cards .group_tag .group_tag_row .group_tag_input input{
        color:#0f3b89;
        padding:10px
    }
    .container_cards .group_tag .group_tag_row .group_tag_input input,
    .container_cards .group_tag .group_tag_row .group_tag_input select{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        height:46px;
        outline:none;
        width:280px
    }
    .container_cards .group_tag .group_tag_row .group_tag_input textarea{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        /*height:46px;*/
        outline:none;
        width: 100%;
    }
    .container_cards .group_tag .group_tag_row .group_tag_input select{
        color:#f03
    }
    .container_cards .group_tag .group_tag_row .group_tag_input select option{
        color:#0f3b89
    }
    .container_cards .group_tag .button_submit{
        background:#f03;
        border:none;
        cursor:pointer;
        display:inline-block;
        padding:10px;
        text-align:center;
        transform:skew(-24deg);
        width:200px;
        outline: none;
    }
    .container_cards .group_tag .button_submit span{
        color:#fff;
        display:block;
        transform:skew(24deg)
    }
    .container_cards .group_tag .group_captcha {
        margin-top: 40px;
        flex-direction: column;
        align-items: center;
    }
    @media only screen and (max-width:700px){
        .container_cards #modal_cards:checked~.modal_content{
            width:300px
        }
        .container_cards .group_tag .group_tag_row{
            align-items:flex-start;
            display:flex;
            flex-direction:column
        }
        .container_cards .group_tag .group_tag_row .group_tag_checkbox{
            display:block
        }
    }
</style>

<div id="cards" class="container_cards">
    <input type="checkbox" id="modal_cards">
    <label for="modal_cards" id="modal_background" style="z-index: 899;"></label>
    <div class="modal_content" style="z-index: 900;">
        <div class="header">
            <div class="top_header">
                <h2 id="form_cards_title"></h2>
                <label for="modal_cards" id="modal_close_cards"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_cards_ok_back" style="opacity: 0;" class="form_cards_of_back"></div>
            <div class="content_form">
                <form action="{{ route('join_cards') }}" method="post" id="fdbc_modal" enctype="multipart/form-data">
                    @csrf
                    <input id="form_cards_id" name="form_cards_id" type="hidden" value="">
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_cards_name">Представтесь</label>
                                <input type="text" id="form_cards_name" name="form_cards_name" />
                                <div id="form_cards_name_error" class="error" style="opacity:0;">Необходимо заполнить «Представьтесь».</div>
                                <div id="form_cards_name_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_cards_club">Выберите клуб</label>
                                <select type="text" id="form_cards_club" name="form_cards_club">
                                    <option selected value="{{ $params['select_club']->id }}#{{ $params['select_club']->name }}">{{ $params['select_club']->name }}</option>
                                    @foreach($params['clubs'] as $club)
                                        <option value="{{ $club->id }}#{{ $club->name }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                <div class="error" style="opacity:0;">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_cards_phone">Телефон</label>
                                <input type="tel" id="form_cards_phone" name="form_cards_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_cards_phone_error" class="error" style="opacity:0;">Необходимо заполнить Телефон</div>
                                <div id="form_cards_phone_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_cards_email">Email</label>
                                <input type="email" id="form_cards_email" name="form_cards_email" />
                                <div id="form_cards_email_error" class="error" style="opacity:0;">Необходимо заполнить «Email».</div>
                                <div id="form_cards_email_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input" style="width: 100%;">
                                <label for="form_cards_text">Сообщение</label>
                                <textarea name="form_cards_text" id="form_cards_text" cols="30" rows="5"></textarea>
                                <div id="form_cards_text_error" class="error" style="opacity: 0;">Необходимо написать сообщение</div>
                                <div id="form_cards_text_back_error" class="error" style="opacity: 0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_cards_captcha"></div>
                            <div id="form_cards_captcha_back_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <div>
                                    <input type="checkbox" id="form_cards_agree" name="form_cards_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <label for="modal_policy" style="color:red">персональных данных</label>
                                    {{--<a href="/privacy-policy" target="_blank" data-privacy-policy="">персональных данных</a>--}}
                                </div>
                                <div id="form_cards_agree_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                                <div id="form_cards_agree_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <p class="message">
                            Максимальный размер загружаемого файла - 4Мб
                            Форматы: jpg, doc, docx, pdf, txt, odt, pages
                        </p>
                        <div class="group_tag_row">
                            <label for="form_cards_file" class="button_file"><span>Прикрепить файл</span></label>
                            <input id="form_cards_file" type="file" name="form_cards_file" style="display: none;">
                            <button id="form_cards_submit_button" class="button_submit" type="submit" disabled><span>Отправить</span></button>
                        </div>
                        <div class="group_tag_row file">
                            <div id="form_cards_file_back_error" class="error" style="opacity:0;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var cards_modal_form = function() {
        return window.grecaptcha.render('form_cards_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_cards',
            'expired-callback': 'recaptchaExpiredCallback_cards',
            'error-callback': 'recaptchaErrorCallback_cards'
        });
    };
    jQuery(function($){$("#form_cards_phone").mask("+7(999) 999-9999");});

    var recaptchaCallback_cards = function(){ document.getElementById('form_cards_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_cards = function(){ document.getElementById('form_cards_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_cards = function(){ document.getElementById('form_cards_submit_button').setAttribute("disabled", 'true'); };

    document.querySelectorAll('.cards_fdbc').forEach(function(el){
        el.addEventListener('click', function(event){
            event.preventDefault();
            var title = null;
            switch(this.dataset.id){
                case '8':
                    title = 'УЗНАТЬ ЦЕНУ ИНДИВИДУАЛЬНОЙ КАРТЫ';
                    break;
                case '9':
                    title = 'УЗНАТЬ ЦЕНУ VIP КАРТЫ';
                    break;
                case '10':
                    title = 'УЗНАТЬ ЦЕНУ COMFORT (OFF PEAK) КАРТЫ';
                    break;
                case '11':
                    title = 'УЗНАТЬ ЦЕНУ TEEN КАРТЫ';
                    break;
                case '12':
                    title = 'УЗНАТЬ ЦЕНУ KIDS КАРТЫ';
                    break;
                case '13':
                    title = 'УЗНАТЬ УСЛОВИЯ НА КОРПОРАТИВНЫЙ ФИТНЕС';
                    break;
                default:
                    title = null;
                    break;
            }
            document.getElementById('form_cards_title').innerText = title;
            document.getElementById('form_cards_id').value = this.dataset.id;
            document.getElementById('modal_cards').click();
        });
    });

    document.getElementById('modal_close_cards').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        document.getElementById('form_cards_name').value = null;
        document.getElementById('form_cards_phone').value = null;
        document.getElementById('form_cards_email').value = null;
        document.getElementById('agree').checked = false;
        var form_cards_ok_back = document.getElementById('form_cards_ok_back');
        form_cards_ok_back.innerText = null;
        form_cards_ok_back.style.opacity = 0;
    });

    document.getElementById('fdbc_modal').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_cards_captcha_back_error = document.getElementById('form_cards_captcha_back_error');
        form_cards_captcha_back_error.style.opacity = 0;
        var form_cards_name_back_error = document.getElementById('form_cards_name_back_error');
        form_cards_name_back_error.style.opacity = 0;
        var form_cards_phone_back_error = document.getElementById('form_cards_phone_back_error');
        form_cards_phone_back_error.style.document = 0;
        var form_cards_email_back_error = document.getElementById('form_cards_email_back_error');
        form_cards_email_back_error.style.opacity = 0;
        var form_cards_agree_back_error = document.getElementById('form_cards_agree_back_error');
        form_cards_agree_back_error.style.opacity = 0;
        var form_cards_text_back_error = document.getElementById('form_cards_text_back_error');
        form_cards_text_back_error.style.opacity = 0;
        var form_cards_file_back_error = document.getElementById('form_cards_file_back_error');
        form_cards_file_back_error.style.opacity = 0;

        var form_cards_name_error = +!(data.has('form_cards_name') && !!data.get('form_cards_name'));
        var form_cards_phone_error = +!(data.has('form_cards_phone') && !!data.get('form_cards_phone'));
        var form_cards_email_error = +!(data.has('form_cards_email') && !!data.get('form_cards_email'));
        var form_cards_agree_error = +!(data.has('form_cards_agree') || !!data.get('form_cards_agree'));

        document.getElementById('form_cards_name_error').style.opacity = form_cards_name_error;
        document.getElementById('form_cards_phone_error').style.opacity = form_cards_phone_error;
        document.getElementById('form_cards_email_error').style.opacity = form_cards_email_error;
        document.getElementById('form_cards_agree_error').style.opacity = form_cards_agree_error;

        if(!(form_cards_name_error + form_cards_phone_error + form_cards_email_error + form_cards_agree_error)){
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
                                        form_cards_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_cards_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_cards_name':
                                        form_cards_name_back_error.innerText = objRezult[i][j][0];
                                        form_cards_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_cards_phone':
                                        form_cards_phone_back_error.innerText = objRezult[i][j][0];
                                        form_cards_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_cards_email':
                                        form_cards_email_back_error.innerText = objRezult[i][j][0];
                                        form_cards_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_cards_agree':
                                        form_cards_agree_back_error.innerText = objRezult[i][j][0];
                                        form_cards_agree_back_error.style.opacity = 1;
                                        break;
                                    case 'form_cards_text':
                                        form_cards_text_back_error.innerText = objRezult[i][j][0];
                                        form_cards_text_back_error.style.opacity = 1;
                                        break;
                                    case 'form_cards_file':
                                        form_cards_file_back_error.innerText = objRezult[i][j];
                                        form_cards_file_back_error.style.opacity = 1;
                                        break;
                                    case 'form_cards_id':
                                        var form_cards_ok_back = document.getElementById('form_cards_ok_back');
                                        form_cards_ok_back.innerText = objRezult[i][j];
                                        form_cards_ok_back.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_cards_ok_back = document.getElementById('form_cards_ok_back');
                            form_cards_ok_back.innerText = objRezult[i];
                            form_cards_ok_back.style.opacity = 1;
                        }
                    }
                    grecaptcha.reset(cards_modal_form_captcha);
                    document.getElementById('form_cards_submit_button').setAttribute("disabled", 'true');
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
