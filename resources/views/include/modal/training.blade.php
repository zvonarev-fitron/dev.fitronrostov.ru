<style>
    .container_training label{
        cursor:pointer;
        transition:all .25s
    }
    .container_training #modal_background,
    .container_training .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_training #modal_background{
        transition:height .25s
    }
    .container_training .modal_content{
        transform:scale(0);
        transition:transform .5s
    }
    .container_training #modal_training{
        display:none
    }
    .container_training #modal_training:checked~#modal_background{
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
    .container_training #modal_training:checked~.modal_content{
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
    .container_training #modal_training:checked~.modal_content #modal_close_training{
        color:rgba(51,51,51,.4);
        font-size:22px;
        position:absolute;
        right:7px;
        top:7px;
        transition:color .2s,transform .5s
    }
    .container_training #modal_training:checked~.modal_content #modal_close_training:focus,
    .container_training #modal_training:checked~.modal_content #modal_close_training:hover{
        color:#333;
        transform:rotate(1turn)
    }
    .container_training .modal_content .header .title_header{
        color: red;
        background-color: #eff5f9;
        margin-top: 5px;
        line-height: 40px;
        font-size: 17px;
        text-align: center;
    }
    .container_training .modal_content .header .form_of_back{
        color: deeppink;
        background-color: gainsboro;
        text-align: center;
        font-size: 20px;
        line-height: 30px;
    }
    .container_training .modal_content .header .top_header h2{
        margin:0;
        text-align:center
    }
    .container_training .group_tag{
        text-align:center
    }
    .container_training .group_tag .message {
        color: #0f3b89;
        margin:0 0 10px 0;
        padding: 0;
    }
    .container_training .group_tag .button_file{
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
    .container_training .group_tag .button_file:hover{
        background: #f03;
    }
    .container_training .group_tag .button_file:hover span{
        color: white;
    }
    .container_training .group_tag .button_file span{
        color:red;
        display:block;
        transform:skew(24deg)
    }
    .container_training .group_tag .error{
        color: #f03;
        font-size: 10px;
        text-align: left;
    }
    .container_training .group_tag .group_tag_row{
        display:flex;
        justify-content:space-around
    }
    .container_training .group_tag .group_tag_row.file{
        display:flex;
        justify-content: left;
    }
    .container_training .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        margin:5px 0;
        flex-direction: column;
    }
    .container_training .group_tag .group_tag_row .group_tag_checkbox span{
        color: #0f3b89;
        margin-right: 5px;
    }
    .container_training .group_tag .group_tag_row .group_tag_checkbox a{
        color:red;
        text-decoration: none;
    }
    .container_training .group_tag .group_tag_row .group_tag_input{
        width:285px;
        font-family: "Gotham SSm A", "Gotham SSm B";
    }
    .container_training .group_tag .group_tag_row .group_tag_input label{
        display:block;
        font-weight:700;
        margin:5px 0 10px;
        color: #0f3b89;
        text-align: left;
    }
    .container_training .group_tag .group_tag_row .group_tag_input label:after{
        color:red;
        content:"*"
    }
    .container_training .group_tag .group_tag_row .group_tag_input input{
        color:#0f3b89;
        padding:10px
    }
    .container_training .group_tag .group_tag_row .group_tag_input input,
    .container_training .group_tag .group_tag_row .group_tag_input select{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        height:46px;
        outline:none;
        width:280px
    }

    .container_training .group_tag .group_tag_row .group_tag_input textarea{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        /*height:46px;*/
        outline:none;
        width: 100%;
    }
    .container_training .group_tag .group_tag_row .group_tag_input select{
        color:#f03
    }
    .container_training .group_tag .group_tag_row .group_tag_input select option{
        color:#0f3b89
    }
    .container_training .group_tag .button_submit{
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
    .container_training .group_tag .button_submit span{
        color:#fff;
        display:block;
        transform:skew(24deg)
    }
    .container_training .group_tag .group_captcha {
        margin-top: 5px;
        flex-direction: column;
        align-items: center;
    }
    @media only screen and (max-width:700px){
        .container_training #modal_training:checked~.modal_content{
            width:300px
        }
        .container_training .group_tag .group_tag_row{
            align-items:flex-start;
            display:flex;
            flex-direction:column
        }
        .container_training .group_tag .group_tag_row .group_tag_checkbox{
            display:block
        }
    }
</style>

<div id="training" class="container_training">
    <input type="checkbox" id="modal_training">
    <label for="modal_training" id="modal_background" style="z-index: 999;"></label>
    <div class="modal_content" style="z-index: 1000;">
        <div class="header">
            <div class="top_header">
                <h2 id="form_training_title">Узнать о тренировки</h2>
                <label for="modal_training" id="modal_close_training"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_training_ok_back" style="opacity: 0;" class="form_of_back" class="title_header"></div>
            <div class="content_form">
                <form action="{{ route('join_training') }}" method="post" id="training_fdbc_modal" enctype="multipart/form-data">
                    @csrf
                    <input id="form_training_id" name="form_training_id" type="hidden" value="{{ $params['training']->id }}">
                    <input id="form_training_id_name" name="form_training_id_name" type="hidden" value="{{ $params['training']->name }}">
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_training_name">Представтесь</label>
                                <input type="text" id="form_training_name" name="form_training_name" />
                                <div id="form_training_name_error" class="error" style="opacity:0;">Необходимо заполнить «Представьтесь».</div>
                                <div id="form_training_name_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_training_club">Выберите клуб</label>
                                <select type="text" id="form_training_club" name="form_training_club">
                                    <option selected value="{{ $params['select_club']->id }}#{{ $params['select_club']->name }}">{{ $params['select_club']->name }}</option>
                                    @foreach($params['clubs'] as $club)
                                        <option value="{{ $club->id }}#{{ $club->name }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                <div class="error" style="opacity:0;">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input flex_width">
                                <label for="form_training_phone">Телефон</label>
                                <input type="tel" id="form_training_phone" name="form_training_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_training_phone_error" class="error" style="opacity:0;">Необходимо заполнить Телефон</div>
                                <div id="form_training_phone_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_training_email">Email</label>
                                <input type="email" id="form_training_email" name="form_training_email" />
                                <div id="form_training_email_error" class="error" style="opacity:0;">Необходимо заполнить «Email».</div>
                                <div id="form_training_email_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input" style="width: 100%;">
                                <label for="form_training_text">Сообщение</label>
                                <textarea name="form_training_text" id="form_training_text" cols="30" rows="5"></textarea>
                                <div id="form_training_text_error" class="error" style="opacity: 0;">Необходимо написать сообщение</div>
                                <div id="form_training_text_back_error" class="error" style="opacity: 0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_training_captcha"></div>
                            <div id="form_training_captcha_back_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <div>
                                    <input type="checkbox" id="form_training_agree" name="form_training_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <a href="/privacy-policy" target="_blank" data-privacy-policy="">персональных данных</a>
                                </div>
                                <div id="form_training_agree_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                                <div id="form_training_agree_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <p class="message">
                            Максимальный размер загружаемого файла - 4Мб
                            Форматы: jpg, doc, docx, pdf, txt, odt, pages
                        </p>
                        <div class="group_tag_row">
                            <label for="form_training_file" class="button_file"><span>Прикрепить файл</span></label>
                            <input id="form_training_file" type="file" name="form_training_file" style="display: none;">
                            <button id="form_training_submit_button" class="button_submit" type="submit" disabled><span>Отправить</span></button>
                        </div>
                        <div class="group_tag_row file">
                            <div id="form_training_file_back_error" class="error" style="opacity:0;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var training_modal_form = function() {
        return window.grecaptcha.render('form_training_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_training',
            'expired-callback': 'recaptchaExpiredCallback_training',
            'error-callback': 'recaptchaErrorCallback_training'
        });
    };
    document.getElementById('form_training_file').addEventListener('change', function(){
        var file = this.value;
        file = file.replace (/\\/g, "/").split ('/').pop ();
        var form_training_file_back_error = document.getElementById ('form_training_file_back_error');
        form_training_file_back_error.innerHTML = 'Имя файла: ' + file;
        form_training_file_back_error.style.opacity = 1;
    });

    jQuery(function($){$("#form_training_phone").mask("+7(999) 999-9999");});

    var recaptchaCallback_training = function(){ document.getElementById('form_training_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_training = function(){ document.getElementById('form_training_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_training = function(){ document.getElementById('form_training_submit_button').setAttribute("disabled", 'true'); };

    document.getElementById('modal_close_training').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        document.getElementById('form_training_name').value = null;
        document.getElementById('form_training_phone').value = null;
        document.getElementById('form_training_email').value = null;
        document.getElementById('form_training_agree').checked = false;
        var form_training_ok_back = document.getElementById('form_training_ok_back');
        form_training_ok_back.innerText = null;
        form_training_ok_back.style.opacity = 0;
    });

    document.getElementById('training_fdbc_modal').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_training_captcha_back_error = document.getElementById('form_training_captcha_back_error');
        form_training_captcha_back_error.style.opacity = 0;
        var form_training_name_back_error = document.getElementById('form_training_name_back_error');
        form_training_name_back_error.style.opacity = 0;
        var form_training_phone_back_error = document.getElementById('form_training_phone_back_error');
        form_training_phone_back_error.style.document = 0;
        var form_training_email_back_error = document.getElementById('form_training_email_back_error');
        form_training_email_back_error.style.opacity = 0;
        var form_training_agree_back_error = document.getElementById('form_training_agree_back_error');
        form_training_agree_back_error.style.opacity = 0;
        var form_training_file_back_error = document.getElementById('form_training_file_back_error');
        form_training_file_back_error.style.opacity = 0;

        var form_training_name_error = +!(data.has('form_training_name') && !!data.get('form_training_name'));
        var form_training_phone_error = +!(data.has('form_training_phone') && !!data.get('form_training_phone'));
        var form_training_email_error = +!(data.has('form_training_email') && !!data.get('form_training_email'));
        var form_training_agree_error = +!(data.has('form_training_agree') && !!data.get('form_training_agree'));
        var form_training_text_error = +!(data.has('form_training_text') && !!data.get('form_training_text'));

        document.getElementById('form_training_name_error').style.opacity = form_training_name_error;
        document.getElementById('form_training_phone_error').style.opacity = form_training_phone_error;
        document.getElementById('form_training_email_error').style.opacity = form_training_email_error;
        document.getElementById('form_training_agree_error').style.opacity = form_training_agree_error;
        document.getElementById('form_training_text_error').style.opacity = form_training_text_error;

        if(!(form_training_name_error + form_training_phone_error + form_training_email_error + form_training_agree_error + form_training_text_error)){
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
                                        form_training_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_training_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_training_name':
                                        form_training_name_back_error.innerText = objRezult[i][j][0];
                                        form_training_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_training_phone':
                                        form_training_phone_back_error.innerText = objRezult[i][j][0];
                                        form_training_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_training_email':
                                        form_training_email_back_error.innerText = objRezult[i][j][0];
                                        form_training_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_training_agree':
                                        form_training_agree_back_error.innerText = objRezult[i][j][0];
                                        form_training_agree_back_error.style.opacity = 1;
                                        break;
                                    case 'form_training_file':
                                        form_training_file_back_error.innerText = objRezult[i][j];
                                        form_training_file_back_error.style.opacity = 1;
                                        break;
                                    case 'form_training_id':
                                        var form_training_ok_back = document.getElementById('form_training_ok_back');
                                        form_training_ok_back.innerText = objRezult[i][j];
                                        form_training_ok_back.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_training_ok_back = document.getElementById('form_training_ok_back');
                            form_training_ok_back.innerText = objRezult[i];
                            form_training_ok_back.style.opacity = 1;
                        }
                    }
                    grecaptcha.reset(training_modal_form_captcha);
                    document.getElementById('form_training_submit_button').setAttribute("disabled", 'true');
//                    console.log(objRezult);
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
