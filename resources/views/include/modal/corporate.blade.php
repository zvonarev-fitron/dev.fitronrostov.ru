<style>
    .container_corporate label{
        cursor:pointer;
        transition:all .25s
    }
    .container_corporate #modal_background_corporate,
    .container_corporate .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_corporate #modal_background_corporate{
        transition:height .25s
    }
    .container_corporate .modal_content{
        transform:scale(0);
        transition:transform .5s
    }
    .container_corporate #modal_corporate{
        display:none
    }
    .container_corporate #modal_corporate:checked~#modal_background_corporate{
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
    .container_corporate #modal_corporate:checked~.modal_content{
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
        top:16%;
        transform:scale(1);
        transition:transform .5s;
        visibility:visible;
        width:600px
    }
    .container_corporate #modal_corporate:checked~.modal_content #modal_close_corporate{
        color:rgba(51,51,51,.4);
        font-size:22px;
        position:absolute;
        right:10px;
        top:8px;
        transition:color .2s,transform .5s;
    }
    .container_corporate #modal_corporate:checked~.modal_content #modal_close_corporate:focus,
    .container_corporate #modal_corporate:checked~.modal_content #modal_close_corporate:hover{
        color:#333;
        transform:rotate(1turn)
    }
    .container_corporate .modal_content .header_corporate .top_header_corporate{
        margin-bottom:25px
    }
    .container_corporate .modal_content .header_corporate .top_header_corporate h2{
        margin:0 25px;
        text-align:center
    }
    .container_corporate .group_tag{
        text-align:center
    }
    .container_corporate .group_tag .message {
        color: #0f3b89;
        margin:0;
        padding: 0;
    }
    .container_corporate .group_tag .button_file{
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
    .container_corporate .group_tag .button_file:hover{
        background: #f03;
    }
    .container_corporate .group_tag .button_file:hover span{
        color: white;
    }
    .container_corporate .group_tag .button_file span{
        color:red;
        display:block;
        transform:skew(24deg)
    }
    .container_corporate .group_tag .error{
        color: #f03;
        font-size: 10px;
        text-align: left;
        opacity: 0;
    }
    .container_corporate .group_tag .group_tag_row{
        display:flex;
        justify-content:space-around
    }
    .container_corporate .group_tag .group_tag_row.file{
        display:flex;
        justify-content: flex-start;
    }
    .container_corporate .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        /*margin:35px 0;*/
        flex-direction: column;
    }
    .container_corporate .group_tag .group_tag_row .group_tag_checkbox span{
        color: #0f3b89;
        margin-right: 5px;
    }
    .container_corporate .group_tag .group_tag_row .group_tag_checkbox a{
        color:red;
        text-decoration: none;
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input{
        width:285px;
        font-family: "Gotham SSm A", "Gotham SSm B";
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input label{
        display:block;
        font-weight:700;
        margin:20px 0 10px;
        color: #0f3b89;
        text-align: left;
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input label:after{
        color:red;
        content:"*"
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input input{
        color:#0f3b89;
        padding:10px
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input input,
    .container_corporate .group_tag .group_tag_row .group_tag_input select{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        height:46px;
        outline:none;
        width:280px
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input textarea{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        /*height:46px;*/
        outline:none;
        width: 100%;
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input select{
        color:#f03
    }
    .container_corporate .group_tag .group_tag_row .group_tag_input select option{
        color:#0f3b89
    }
    .container_corporate .group_tag .button_submit{
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
    .container_corporate .group_tag .button_submit span{
        color:#fff;
        display:block;
        transform:skew(24deg)
    }
    .container_corporate .group_tag .group_captcha {
        margin-top: 15px;
        flex-direction: column;
        align-items: center;
    }
    @media only screen and (max-width:700px){
        .container_corporate #modal_corporate:checked~.modal_content{
            width:300px;
            top:6%;
            bottom:8%;
        }
        .container_corporate .group_tag .group_tag_row{
            align-items:center;
            display:flex;
            flex-direction:column
        }
        .container_corporate .group_tag .group_tag_row .group_tag_checkbox{
            display:block
        }
        .container_corporate .group_tag .group_tag_row .button_file {
            margin: 15px 0;
        }
    }
    @media only screen and (max-width:410px) {
        .container_corporate #modal_corporate:checked~.modal_content{
            padding: 10px 0;
        }
        .container_corporate .group_tag .group_tag_row .group_tag_input input,
        .container_corporate .group_tag .group_tag_row .group_tag_input select {
            width: 100%;
        }
        .container_corporate .group_tag .group_tag_row .group_tag_input {
            width: 100%;
        }
        .container_corporate .group_tag {
            width: 90%;
            margin: auto;
        }
    }
</style>

<div id="corporate" class="container_corporate">
    <input type="checkbox" id="modal_corporate">
    <label for="modal_corporate" id="modal_background_corporate" style="z-index: 899;"></label>
    <div class="modal_content" style="z-index: 900;overflow-y: auto">
        <div class="header_corporate">
            <div class="top_header_corporate">
                <h2 id="form_corporate_title"></h2>
                <label for="modal_corporate" id="modal_close_corporate"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_corporate_ok_back" style="opacity: 0;" class="form_corporate_of_back"></div>
            <div class="content_form">
                <form action="{{ route('join_corporate') }}" method="post" id="corporate_fdbc_modal" enctype="multipart/form-data">
                    @csrf
                    <input id="form_corporate_id" name="form_corporate_id" type="hidden" value="">
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_corporate_name">Представьтесь</label>
                                <input type="text" id="form_corporate_name" name="form_corporate_name" />
                                <div id="form_corporate_name_back_error" class="error">Необходимо заполнить «Представьтесь»</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_corporate_club">Выберите клуб</label>
                                <select type="text" id="form_corporate_club" name="form_corporate_club">
                                    <option selected value="{{ $params['select_club']->id }}#{{ $params['select_club']->name }}">{{ $params['select_club']->name }}</option>
                                    @foreach($params['clubs'] as $club)
                                        <option value="{{ $club->id }}#{{ $club->name }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                <div id="form_corporate_club_back_error" class="error">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_corporate_phone">Телефон</label>
                                <input type="tel" id="form_corporate_phone" name="form_corporate_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_corporate_phone_back_error" class="error">Необходимо заполнить Телефон</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_corporate_email">Email</label>
                                <input type="email" id="form_corporate_email" name="form_corporate_email" />
                                <div id="form_corporate_email_back_error" class="error">Необходимо заполнить «Email»</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input" style="width: 100%;">
                                <label for="form_corporate_text">Сообщение</label>
                                <textarea name="form_corporate_text" id="form_corporate_text" cols="30" rows="5"></textarea>
                                <div id="form_corporate_text_back_error" class="error">Необходимо написать сообщение</div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_corporate_captcha"></div>
                            <div id="form_corporate_captcha_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <div>
                                    <input type="checkbox" id="form_corporate_agree" name="form_corporate_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <label for="modal_policy" style="color:red">персональных данных</label>
                                    {{--<a href="/privacy-policy" target="_blank" data-privacy-policy="">персональных данных</a>--}}
                                </div>
                                <div id="form_corporate_agree_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                            </div>
                        </div>
                        <p class="message">
                            Максимальный размер загружаемого файла - 4Мб
                            Форматы: jpg, doc, docx, pdf, txt, odt, pages
                        </p>
                        <div class="group_tag_row">
                            <label for="form_corporate_file" class="button_file"><span>Прикрепить файл</span></label>
                            <input id="form_corporate_file" type="file" name="form_corporate_file" style="display: none;">
                            <button id="form_corporate_submit_button" class="button_submit" type="submit"><span>Отправить</span></button>
                        </div>
                        <div class="group_tag_row file">
                            <div id="form_corporate_file_back_error" class="error"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var corporate_modal_form = function() {
        return window.grecaptcha.render('form_corporate_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_corporate',
            'expired-callback': 'recaptchaExpiredCallback_corporate',
            'error-callback': 'recaptchaErrorCallback_corporate'
        });
    };
    jQuery(function($){$("#form_corporate_phone").mask("+7(999) 999-9999");});

    var recaptchaCallback_corporate = function(){ document.getElementById('form_corporate_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_corporate = function(){ document.getElementById('form_corporate_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_corporate = function(){ document.getElementById('form_corporate_submit_button').setAttribute("disabled", 'true'); };

    document.getElementById('form_corporate_file').addEventListener('change', function(){
        var file = this.value;
        file = file.replace (/\\/g, "/").split ('/').pop ();
        var form_corporate_file_back_error = document.getElementById ('form_corporate_file_back_error');
        form_corporate_file_back_error.innerHTML = 'Имя файла: ' + file;
        form_corporate_file_back_error.style.opacity = 1;
    });

    document.querySelectorAll('.corporate_fdbc').forEach(function(el){
        el.addEventListener('click', function(event){
            event.preventDefault();
            var title = null;
            switch(this.dataset.id){
                case '101':
                    title = 'ЗАЯВКА НА КОРПОРАТИВНЫЙ ФИТНЕС-ДЕНЬ';
                    break;
                case '102':
                    title = 'УЗНАТЬ УСЛОВИЯ НА КОРПОРАТИВНЫЙ ФИТНЕС';
                    break;
                default:
                    title = null;
                    break;
            }
            document.getElementById('form_corporate_title').innerText = title;
            document.getElementById('form_corporate_id').value = this.dataset.id;
            document.getElementById('modal_corporate').click();
        });
    });

    function cleanCorporateForm(event)
    {
        document.getElementById('form_corporate_name').value = null;
        document.getElementById('form_corporate_phone').value = null;
        document.getElementById('form_corporate_email').value = null;
        document.getElementById('form_corporate_text').value = null;
        document.getElementById('form_corporate_file').value = null;
        document.getElementById('form_corporate_file_back_error').innerText = null;
        document.getElementById('form_corporate_agree').checked = false;

        document.getElementById('form_corporate_submit_button').removeAttribute('disabled');

        var form_corporate_ok_back = document.getElementById('form_corporate_ok_back');
        form_corporate_ok_back.innerText = null;
        form_corporate_ok_back.style.opacity = 0;

        document.getElementById('form_corporate_captcha_back_error').style.opacity = 0;
        document.getElementById('form_corporate_name_back_error').style.opacity = 0;
        document.getElementById('form_corporate_phone_back_error').style.opacity = 0;
        document.getElementById('form_corporate_email_back_error').style.opacity = 0;
        document.getElementById('form_corporate_agree_back_error').style.opacity = 0;
        document.getElementById('form_corporate_text_back_error').style.opacity = 0;
        document.getElementById('form_corporate_file_back_error').style.opacity = 0;
    }

    document.getElementById('modal_close_corporate').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        cleanCorporateForm(event);
    });

    document.getElementById('modal_background_corporate').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        cleanCorporateForm(event);
    });

    document.getElementById('corporate_fdbc_modal').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_corporate_captcha_back_error = document.getElementById('form_corporate_captcha_back_error');
        form_corporate_captcha_back_error.style.opacity = 0;
        var form_corporate_name_back_error = document.getElementById('form_corporate_name_back_error');
        form_corporate_name_back_error.style.opacity = 0;
        var form_corporate_phone_back_error = document.getElementById('form_corporate_phone_back_error');
        form_corporate_phone_back_error.style.document = 0;
        var form_corporate_email_back_error = document.getElementById('form_corporate_email_back_error');
        form_corporate_email_back_error.style.opacity = 0;
        var form_corporate_agree_back_error = document.getElementById('form_corporate_agree_back_error');
        form_corporate_agree_back_error.style.opacity = 0;
        var form_corporate_text_back_error = document.getElementById('form_corporate_text_back_error');
        form_corporate_text_back_error.style.opacity = 0;
        var form_corporate_file_back_error = document.getElementById('form_corporate_file_back_error');
        form_corporate_file_back_error.style.opacity = 0;

        var form_corporate_name_error = +!(data.has('form_corporate_name') && !!data.get('form_corporate_name'));
        var form_corporate_phone_error = +!(data.has('form_corporate_phone') && !!data.get('form_corporate_phone'));
        var form_corporate_email_error = +!(data.has('form_corporate_email') && !!data.get('form_corporate_email'));
        var form_corporate_text_error = +!(data.has('form_corporate_text') && !!data.get('form_corporate_text'));
        var form_corporate_agree_error = +!(data.has('form_corporate_agree') || !!data.get('form_corporate_agree'));

        document.getElementById('form_corporate_name_back_error').style.opacity = form_corporate_name_error;
        document.getElementById('form_corporate_phone_back_error').style.opacity = form_corporate_phone_error;
        document.getElementById('form_corporate_email_back_error').style.opacity = form_corporate_email_error;
        document.getElementById('form_corporate_text_back_error').style.opacity = form_corporate_text_error;
        document.getElementById('form_corporate_agree_back_error').style.opacity = form_corporate_agree_error;

        if(!(form_corporate_name_error + form_corporate_phone_error + form_corporate_email_error + form_corporate_agree_error + form_corporate_text_error)){
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
                                        form_corporate_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_corporate_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_corporate_name':
                                        form_corporate_name_back_error.innerText = objRezult[i][j][0];
                                        form_corporate_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_corporate_phone':
                                        form_corporate_phone_back_error.innerText = objRezult[i][j][0];
                                        form_corporate_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_corporate_email':
                                        form_corporate_email_back_error.innerText = objRezult[i][j][0];
                                        form_corporate_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_corporate_agree':
                                        form_corporate_agree_back_error.innerText = objRezult[i][j][0];
                                        form_corporate_agree_back_error.style.opacity = 1;
                                        break;
                                    case 'form_corporate_text':
                                        form_corporate_text_back_error.innerText = objRezult[i][j][0];
                                        form_corporate_text_back_error.style.opacity = 1;
                                        break;
                                    case 'form_corporate_file':
                                        form_corporate_file_back_error.innerText = objRezult[i][j];
                                        form_corporate_file_back_error.style.opacity = 1;
                                        break;
                                    case 'form_corporate_id':
                                        var form_corporate_ok_back = document.getElementById('form_corporate_ok_back');
                                        form_corporate_ok_back.innerText = objRezult[i][j];
                                        form_corporate_ok_back.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_corporate_ok_back = document.getElementById('form_corporate_ok_back');
                            form_corporate_ok_back.innerText = objRezult[i];
                            form_corporate_ok_back.style.opacity = 1;
                            console.log(objRezult);
                        }
                    }
//                    grecaptcha.reset(corporate_modal_form_captcha);
                    document.getElementById('form_corporate_submit_button').setAttribute("disabled", 'true');
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
