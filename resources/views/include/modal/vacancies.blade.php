<style>
    .container_vacancies label{
        cursor:pointer;
        transition:all .25s
    }
    .container_vacancies #modal_background,
    .container_vacancies .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_vacancies #modal_background{
        transition:height .25s
    }
    .container_vacancies .modal_content{
        transform:scale(0);
        transition:transform .5s;
        z-index: 1002;
    }
    .container_vacancies #modal_vacancies{
        display:none
    }
    .container_vacancies #modal_vacancies:checked~#modal_background{
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
    .container_vacancies #modal_vacancies:checked~.modal_content{
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
        top:8%;
        transform:scale(1);
        transition:transform .5s;
        visibility:visible;
        width:600px
    }
    .container_vacancies #modal_vacancies:checked~.modal_content #modal_close_vacancies{
        color:rgba(51,51,51,.4);
        font-size:22px;
        position:absolute;
        right:7px;
        top:7px;
        transition:color .2s,transform .5s
    }
    .container_vacancies #modal_vacancies:checked~.modal_content #modal_close_vacancies:focus,
    .container_vacancies #modal_vacancies:checked~.modal_content #modal_close_vacancies:hover{
        color:#333;
        transform:rotate(1turn)
    }
    .container_vacancies .modal_content .header_vacancies .title_header_vacancies{
        color: red;
        background-color: #eff5f9;
        margin-top: 5px;
        line-height: 40px;
        font-size: 17px;
        text-align: center;
    }
    .container_vacancies .modal_content .header_vacancies .top_header_vacancies h2{
        margin:0;
        text-align:center
    }
    .container_vacancies .group_tag{
        text-align:center
    }
    .container_vacancies .group_tag .message {
        color: #0f3b89;
        margin:0 0 10px 0;
        padding: 0;
    }
    .container_vacancies .group_tag .error{
        color:#f03;
        font-size:12px
    }
    .container_vacancies .group_tag .group_tag_row{
        display:flex;
        justify-content: space-around;
    }
    .container_vacancies .group_tag .group_tag_row.file{
        display:flex;
        justify-content: flex-start;
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        margin:5px 0;
        flex-direction: column;
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_checkbox span{
        color: #0f3b89;
        margin-right: 5px;
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_checkbox a{
        color:red;
        text-decoration: none;
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_input{
        width: 100%;
        font-family: "Gotham SSm A", "Gotham SSm B";
    }

    .container_vacancies .group_tag .group_tag_row .group_tag_input.group_tag_input_second{
        margin-left: 20px;
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_input label{
        display:block;
        font-weight:700;
        margin:5px 0 10px;
        color: #0f3b89;
        text-align: center;
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_input label:after{
        color:red;
        content:"*"
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_input input{
        color:#0f3b89;
        padding:10px
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_input input,
    .container_vacancies .group_tag .group_tag_row .group_tag_input textarea{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        /*height:46px;*/
        outline:none;
        width: 100%;
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_input select{
        color:#f03
    }
    .container_vacancies .group_tag .group_tag_row .group_tag_input select option{
        color:#0f3b89
    }
    .container_vacancies .group_tag .button_submit{
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
    .container_vacancies .group_tag .button_submit span{
        color:#fff;
        display:block;
        transform:skew(24deg)
    }
    .container_vacancies .group_tag .button_file{
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
    .container_vacancies .group_tag .button_file:hover{
        background: #f03;
    }
    .container_vacancies .group_tag .button_file:hover span{
        color: white;
    }
    .container_vacancies .group_tag .button_file span{
        color:red;
        display:block;
        transform:skew(24deg)
    }
    .container_vacancies .group_tag .group_captcha {
        margin-top: 5px;
        flex-direction: column;
        align-items: center;
    }
    @media only screen and (max-width:700px){
        .container_vacancies #modal_vacancies:checked~.modal_content{
            width:300px;
            top:6%;
            bottom:8%;
        }
        .container_vacancies .group_tag .group_tag_row{
            align-items:center;
            display:flex;
            flex-direction:column
        }
        .container_vacancies .group_tag .group_tag_row .group_tag_checkbox{
            display:block
        }
        .container_vacancies .group_tag .group_tag_row .group_tag_input.group_tag_input_second {
            margin-left: 0;
        }
        .container_vacancies .group_tag .button_file {
            margin: 15px 0;
        }
        .container_vacancies .modal_content {
            z-index: 1002;
            overflow-y: auto;
        }
    }
    @media only screen and (max-width:410px) {
        .container_vacancies #modal_vacancies:checked~.modal_content {
            padding: 10px 0;
        }
        .container_vacancies .group_tag {
            width: 90%;
            margin: auto;
        }
    }
</style>

<div class="container_vacancies">
    <input type="checkbox" id="modal_vacancies">
    <label for="modal_vacancies" id="modal_background" style="z-index: 1001;"></label>
    <div class="modal_content">
        <div class="header_vacancies">
            <div class="top_header_vacancies">
                <h2>Хочу у вас работать</h2>
                <label for="modal_vacancies" id="modal_close_vacancies"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_ok_vacancies_back" style="opacity: 0;" class="title_header_vacancies"></div>
            <div class="content_form">
                <form action="{{ route('join_vacancies') }}" method="post" id="vacancies_fdbc_modal" enctype="multipart/form-data">
                    @csrf
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_vacancies_name">Представьтесь</label>
                                <input type="text" id="form_vacancies_name" name="form_vacancies_name" />
                                <div id="form_vacancies_name_error" class="error" style="opacity:0;">Необходимо заполнить «Представьтесь».</div>
                                <div id="form_vacancies_name_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_vacancies_phone">Телефон</label>
                                <input type="tel" id="form_vacancies_phone" name="form_vacancies_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_vacancies_phone_error" class="error" style="opacity:0;">Необходимо заполнить Телефон</div>
                                <div id="form_vacancies_phone_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input group_tag_input_second">
                                <label for="form_vacancies_email">Email</label>
                                <input type="email" id="form_vacancies_email" name="form_vacancies_email" />
                                <div id="form_vacancies_email_error" class="error" style="opacity:0;">Необходимо заполнить «Email».</div>
                                <div id="form_vacancies_email_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input form_query_trainer_text">
                                <label for="form_vacancies_text">Сообщение</label>
                                <textarea name="form_vacancies_text" id="form_vacancies_text" cols="30" rows="5"></textarea>
                                <div id="form_vacancies_text_error" class="error" style="opacity:0;">Необходимо написать сообщение</div>
                                <div id="form_vacancies_text_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_vacancies_captcha"></div>
                            <div id="form_vacancies_captcha_back_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <div>
                                    <input type="checkbox" id="form_vacancies_agree" name="form_vacancies_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <label for="modal_policy" style="color:red">персональных данных</label>
                                    {{--<a href="/privacy-policy" target="_blank">персональных данных</a>--}}
                                </div>
                                <div id="form_vacancies_agree_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                                <div id="form_vacancies_agree_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <p class="message">
                            Максимальный размер загружаемого файла - 4Мб
                            Форматы: jpg, doc, docx, pdf, txt, odt, pages
                        </p>
                        <div class="group_tag_row">
                            <label for="form_vacancies_file" class="button_file"><span>Прикрепить файл</span></label>
                            <input id="form_vacancies_file" type="file" name="form_vacancies_file" style="display: none;">
                            <button id="form_vacancies_submit_button" class="button_submit" type="submit" disabled><span>Отправить</span></button>
                        </div>
                        <div class="group_tag_row file">
                            <div id="form_vacancies_file_back_error" class="error" style="opacity:0;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var vacancies_modal_form = function() {
        return window.grecaptcha.render('form_vacancies_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_vacancies',
            'expired-callback': 'recaptchaExpiredCallback_vacancies',
            'error-callback': 'recaptchaErrorCallback_vacancies'
        });
    };

    document.getElementById('form_vacancies_file').addEventListener('change', function(){
        var file = this.value;
        file = file.replace (/\\/g, "/").split ('/').pop ();
        var form_vacancies_file_back_error = document.getElementById ('form_vacancies_file_back_error');
        form_vacancies_file_back_error.innerHTML = 'Имя файла: ' + file;
        form_vacancies_file_back_error.style.opacity = 1;
    });

    // var form_vacancies_file_name = function(){
    //     var file = document.getElementById ('form_vacancies_file').value;
    //     file = file.replace (/\\/g, "/").split ('/').pop ();
    //     var form_vacancies_file_back_error = document.getElementById ('form_vacancies_file_back_error');
    //     form_vacancies_file_back_error.innerHTML = 'Имя файла: ' + file;
    //     form_vacancies_file_back_error.style.opacity = 1;
    // };

    jQuery(function($){$("#form_vacancies_phone").mask("+7(999) 999-9999");});

    var recaptchaCallback_vacancies = function(){ document.getElementById('form_vacancies_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_vacancies = function(){ document.getElementById('form_vacancies_submit_button').addAttribute("disabled"); };
    var recaptchaErrorCallback_vacancies = function(){ document.getElementById('form_vacancies_submit_button').addAttribute("disabled"); };

    document.getElementById('modal_close_vacancies').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        document.getElementById('form_vacancies_name').value = null;
        document.getElementById('form_vacancies_phone').value = null;
        document.getElementById('form_vacancies_email').value = null;
        document.getElementById('form_vacancies_text').value = null;
        document.getElementById('form_vacancies_agree').checked = false;
        document.getElementById('form_ok_vacancies_back').style.opacity = 0;
    });

    document.getElementById('vacancies_fdbc_modal').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_vacancies_captcha_back_error = document.getElementById('form_vacancies_captcha_back_error');
        form_vacancies_captcha_back_error.style.opacity = 0;
        var form_vacancies_name_back_error = document.getElementById('form_vacancies_name_back_error');
        form_vacancies_name_back_error.style.opacity = 0;
        var form_vacancies_phone_back_error = document.getElementById('form_vacancies_phone_back_error');
        form_vacancies_phone_back_error.style.document = 0;
        var form_vacancies_email_back_error = document.getElementById('form_vacancies_email_back_error');
        form_vacancies_email_back_error.style.opacity = 0;
        var form_vacancies_text_back_error = document.getElementById('form_vacancies_text_back_error');
        form_vacancies_text_back_error.style.opacity = 0;
        var form_vacancies_agree_back_error = document.getElementById('form_vacancies_agree_back_error');
        form_vacancies_agree_back_error.style.opacity = 0;
        var form_vacancies_file_back_error = document.getElementById('form_vacancies_file_back_error');
        form_vacancies_file_back_error.style.opacity = 0;

        var form_vacancies_name_error = +!(data.has('form_vacancies_name') && !!data.get('form_vacancies_name'));
        var form_vacancies_phone_error = +!(data.has('form_vacancies_phone') && !!data.get('form_vacancies_phone'));
        var form_vacancies_email_error = +!(data.has('form_vacancies_email') && !!data.get('form_vacancies_email'));
        var form_vacancies_text_error = +!(data.has('form_vacancies_text') && !!data.get('form_vacancies_text'));
        var form_vacancies_agree_error = +!(data.has('form_vacancies_agree') || !!data.get('form_vacancies_agree'));

        document.getElementById('form_vacancies_name_error').style.opacity = form_vacancies_name_error;
        document.getElementById('form_vacancies_phone_error').style.opacity = form_vacancies_phone_error;
        document.getElementById('form_vacancies_email_error').style.opacity = form_vacancies_email_error;
        document.getElementById('form_vacancies_text_error').style.opacity = form_vacancies_text_error;
        document.getElementById('form_vacancies_agree_error').style.opacity = form_vacancies_agree_error;

        if(!(form_vacancies_name_error + form_vacancies_phone_error + form_vacancies_email_error + form_vacancies_agree_error)){
            var xhr = new XMLHttpRequest();
            xhr.open(this.getAttribute('method'), this.getAttribute('action'), true);
            xhr.setRequestheader_vacancies('X-Requested-With', 'XMLHttpRequest');
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
                                        form_vacancies_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_vacancies_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_vacancies_name':
                                        form_vacancies_name_back_error.innerText = objRezult[i][j][0];
                                        form_vacancies_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_vacancies_phone':
                                        form_vacancies_phone_back_error.innerText = objRezult[i][j][0];
                                        form_vacancies_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_vacancies_email':
                                        form_vacancies_email_back_error.innerText = objRezult[i][j][0];
                                        form_vacancies_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_vacancies_text':
                                        form_vacancies_text_back_error.innerText = objRezult[i][j][0];
                                        form_vacancies_text_back_error.style.opacity = 1;
                                        break;
                                    case 'form_vacancies_agree':
                                        form_vacancies_agree_back_error.innerText = objRezult[i][j][0];
                                        form_vacancies_agree_back_error.style.opacity = 1;
                                        break;
                                    case 'form_vacancies_file':
                                        form_vacancies_file_back_error.innerText = objRezult[i][j];
                                        form_vacancies_file_back_error.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_ok_vacancies_back = document.getElementById('form_ok_vacancies_back');
                            form_ok_vacancies_back.innerText = objRezult[i];
                            form_ok_vacancies_back.style.opacity = 1;
                        }
                    }
                    grecaptcha.reset(vacancies_modal_form_captcha);
                    document.getElementById('form_vacancies_submit_button').setAttribute("disabled", 'true');
                    //console.log(objRezult);
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
