<style>
    .container_special label{
        cursor:pointer;
        transition:all .25s
    }
    .container_special #modal_background_special,
    .container_special .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_special #modal_background_special{
        transition:height .25s
    }
    .container_special .modal_content{
        transform:scale(0);
        transition:transform .5s
    }
    .container_special #modal_special{
        display:none
    }
    .container_special #modal_special:checked~#modal_background_special{
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
    .container_special #modal_special:checked~.modal_content{
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
        top:10%;
        transform:scale(1);
        transition:transform .5s;
        visibility:visible;
        width:600px
    }
    .container_special #modal_special:checked~.modal_content #modal_close_special{
        color:rgba(51,51,51,.4);
        font-size:22px;
        position:absolute;
        right:7px;
        top:7px;
        transition:color .2s,transform .5s
    }
    .container_special #modal_special:checked~.modal_content #modal_close_special:focus,
    .container_special #modal_special:checked~.modal_content #modal_close_special:hover{
        color:#333;
        transform:rotate(1turn)
    }
    .container_special .modal_content .header_special .title_header_special{
        color: red;
        background-color: #eff5f9;
        margin-top: 5px;
        line-height: 40px;
        font-size: 17px;
        text-align: center;
    }
    .container_special .modal_content .header_special .form_of_back{
        color: deeppink;
        background-color: gainsboro;
        text-align: center;
        font-size: 20px;
        line-height: 30px;
    }
    .container_special .modal_content .header_special .top_header_special h2{
        margin:0 18px;
        text-align:center
    }
    .container_special .group_tag{
        text-align:center
    }
    .container_special .group_tag .message {
        color: #0f3b89;
        margin:0 0 10px 0;
        padding: 0;
    }
    .container_special .group_tag .button_file{
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
    .container_special .group_tag .button_file:hover{
        background: #f03;
    }
    .container_special .group_tag .button_file:hover span{
        color: white;
    }
    .container_special .group_tag .button_file span{
        color:red;
        display:block;
        transform:skew(24deg)
    }
    .container_special .group_tag .error{
        color: #f03;
        font-size: 10px;
        text-align: left;
        opacity: 0;
    }
    .container_special .group_tag .group_tag_row{
        display:flex;
        justify-content:space-around
    }
    .container_special .group_tag .group_tag_row.file{
        display:flex;
        justify-content: left;
    }
    .container_special .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        margin:5px 0;
        flex-direction: column;
    }
    .container_special .group_tag .group_tag_row .group_tag_checkbox span{
        color: #0f3b89;
        margin-right: 5px;
    }
    .container_special .group_tag .group_tag_row .group_tag_checkbox a{
        color:red;
        text-decoration: none;
    }
    .container_special .group_tag .group_tag_row .group_tag_input{
        width:285px;
        font-family: "Gotham SSm A", "Gotham SSm B";
    }
    .container_special .group_tag .group_tag_row .group_tag_input label{
        display:block;
        font-weight:700;
        margin:5px 0 10px;
        color: #0f3b89;
        text-align: left;
    }
    .container_special .group_tag .group_tag_row .group_tag_input label:after{
        color:red;
        content:"*"
    }
    .container_special .group_tag .group_tag_row .group_tag_input input{
        color:#0f3b89;
        padding:10px
    }
    .container_special .group_tag .group_tag_row .group_tag_input input,
    .container_special .group_tag .group_tag_row .group_tag_input select{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        height:46px;
        outline:none;
        width:280px
    }

    .container_special .group_tag .group_tag_row .group_tag_input textarea{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        /*height:46px;*/
        outline:none;
        width: 100%;
    }
    .container_special .group_tag .group_tag_row .group_tag_input select{
        color:#f03
    }
    .container_special .group_tag .group_tag_row .group_tag_input select option{
        color:#0f3b89
    }
    .container_special .group_tag .button_submit{
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
    .container_special .group_tag .button_submit span{
        color:#fff;
        display:block;
        transform:skew(24deg)
    }
    .container_special .group_tag .group_captcha {
        margin-top: 5px;
        flex-direction: column;
        align-items: center;
    }
    @media only screen and (max-width:700px){
        .container_special #modal_special:checked~.modal_content{
            width:300px;
            top:6%;
            bottom:8%;
        }
        .container_special .group_tag .group_tag_row{
            align-items:center;
            display:flex;
            flex-direction:column
        }
        .container_special .group_tag .group_tag_row .group_tag_checkbox{
            display:block
        }
    }
    @media only screen and (max-width:410px) {
        .container_special #modal_special:checked~.modal_content{
            padding: 10px 0;
        }
        .container_special .group_tag .group_tag_row .group_tag_input input,
        .container_special .group_tag .group_tag_row .group_tag_input select {
            width: 100%;
        }
        .container_special .group_tag .group_tag_row .group_tag_input {
            width: 100%;
        }
        .container_special .group_tag {
            width: 90%;
            margin:auto;
        }
    }
</style>

<div id="special" class="container_special">
    <input type="checkbox" id="modal_special">
    <label for="modal_special" id="modal_background_special" style="z-index: 1001;"></label>
    <div class="modal_content" style="z-index: 1002;overflow-y: auto;">
        <div class="header_special">
            <div class="top_header_special">
                <h2 id="form_special_title"></h2>
                <label for="modal_special" id="modal_close_special"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_special_ok_back" style="opacity: 0;" class="form_of_back" class="title_header_special"></div>
            <div class="content_form">
                <form action="{{ route('join_special') }}" method="post" id="special_fdbc_modal" enctype="multipart/form-data">
                    @csrf
                    <input id="form_special_id" name="form_special_id" type="hidden">
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_special_name">Представьтесь</label>
                                <input type="text" id="form_special_name" name="form_special_name" />
                                <div id="form_special_name_back_error" class="error">Необходимо заполнить «Представьтесь»</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_special_club">Выберите клуб</label>
                                <select type="text" id="form_special_club" name="form_special_club">
                                    <option selected value="{{ $params['select_club']->id }}#{{ $params['select_club']->name }}">{{ $params['select_club']->name }}</option>
                                    @foreach($params['clubs'] as $club)
                                        <option value="{{ $club->id }}#{{ $club->name }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                <div id="form_special_club_back_error" class="error">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input flex_width">
                                <label for="form_special_phone">Телефон</label>
                                <input type="tel" id="form_special_phone" name="form_special_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_special_phone_back_error" class="error">Необходимо заполнить Телефон</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_special_email">Email</label>
                                <input type="email" id="form_special_email" name="form_special_email" />
                                <div id="form_special_email_back_error" class="error">Необходимо заполнить «Email»</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input" style="width: 100%;">
                                <label for="form_special_text">Сообщение</label>
                                <textarea name="form_special_text" id="form_special_text" cols="30" rows="5"></textarea>
                                <div id="form_special_text_back_error" class="error">Необходимо написать сообщение</div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_special_captcha"></div>
                            <div id="form_special_captcha_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <div>
                                    <input type="checkbox" id="form_special_agree" name="form_special_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <label for="modal_policy" style="color:red">персональных данных</label>
                                </div>
                                <div id="form_special_agree_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <button id="form_special_submit_button" class="button_submit" type="submit"><span>Отправить</span></button>
                        </div>
                        <div class="group_tag_row file">
                            <div id="form_special_file_back_error" class="error" style="opacity:0;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var special_modal_form = function() {
        return window.grecaptcha.render('form_special_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_special',
            'expired-callback': 'recaptchaExpiredCallback_special',
            'error-callback': 'recaptchaErrorCallback_special'
        });
    };

    var form_special_title = document.getElementById('form_special_title');
    var form_special_id = document.getElementById('form_special_id');

    document.getElementById('special_r_2').addEventListener('click', function(event){
        form_special_title.innerText = 'Купить в рассрочку';
        form_special_id.value = event.currentTarget.dataset.id;
    });

    document.getElementById('special_r_1').addEventListener('click', function(event){
        form_special_title.innerText = 'Купить в рассрочку';
        form_special_id.value = event.currentTarget.dataset.id;
    });

    document.getElementById('special_2').addEventListener('click', function(event){
        form_special_title.innerText = 'Уточнить подробности акции';
        form_special_id.value = event.currentTarget.dataset.id;
    });

    document.getElementById('special_1').addEventListener('click', function(event){
        form_special_title.innerText = 'Уточнить подробности акции';
        form_special_id.value = event.currentTarget.dataset.id;
    });

    jQuery(function($){$("#form_special_phone").mask("+7(999) 999-9999");});

    var recaptchaCallback_special = function(){ document.getElementById('form_special_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_special = function(){ document.getElementById('form_special_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_special = function(){ document.getElementById('form_special_submit_button').setAttribute("disabled", 'true'); };

    function cleanSpecialForm(event)
    {
        document.getElementById('form_special_name').value = null;
        document.getElementById('form_special_phone').value = null;
        document.getElementById('form_special_email').value = null;
        document.getElementById('form_special_text').value = null;
        document.getElementById('form_special_agree').checked = false;

        document.getElementById('form_special_submit_button').removeAttribute('disabled');

        var form_special_ok_back = document.getElementById('form_special_ok_back');
        form_special_ok_back.innerText = null;
        form_special_ok_back.style.opacity = 0;

        document.getElementById('form_special_captcha_back_error').style.opacity = 0;
        document.getElementById('form_special_name_back_error').style.opacity = 0;
        document.getElementById('form_special_phone_back_error').style.opacity = 0;
        document.getElementById('form_special_email_back_error').style.opacity = 0;
        document.getElementById('form_special_agree_back_error').style.opacity = 0;
        document.getElementById('form_special_file_back_error').style.opacity = 0;
        document.getElementById('form_special_club_back_error').style.opacity = 0;
        document.getElementById('form_special_text_back_error').style.opacity = 0;
    }

    document.getElementById('modal_close_special').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        cleanSpecialForm(event);
    });

    document.getElementById('modal_background_special').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        cleanSpecialForm(event);
    });

    document.getElementById('special_fdbc_modal').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_special_captcha_back_error = document.getElementById('form_special_captcha_back_error');
        form_special_captcha_back_error.style.opacity = 0;
        var form_special_name_back_error = document.getElementById('form_special_name_back_error');
        form_special_name_back_error.style.opacity = 0;
        var form_special_phone_back_error = document.getElementById('form_special_phone_back_error');
        form_special_phone_back_error.style.document = 0;
        var form_special_email_back_error = document.getElementById('form_special_email_back_error');
        form_special_email_back_error.style.opacity = 0;
        var form_special_agree_back_error = document.getElementById('form_special_agree_back_error');
        form_special_agree_back_error.style.opacity = 0;
        var form_special_text_back_error = document.getElementById('form_special_text_back_error');
        form_special_text_back_error.style.opacity = 0;
        var form_special_file_back_error = document.getElementById('form_special_file_back_error');
        form_special_file_back_error.style.opacity = 0;

        var form_special_name_error = +!(data.has('form_special_name') && !!data.get('form_special_name'));
        var form_special_phone_error = +!(data.has('form_special_phone') && !!data.get('form_special_phone'));
        var form_special_email_error = +!(data.has('form_special_email') && !!data.get('form_special_email'));
        var form_special_agree_error = +!(data.has('form_special_agree') && !!data.get('form_special_agree'));
        var form_special_text_error = +!(data.has('form_special_text') && !!data.get('form_special_text'));

        document.getElementById('form_special_name_back_error').style.opacity = form_special_name_error;
        document.getElementById('form_special_phone_back_error').style.opacity = form_special_phone_error;
        document.getElementById('form_special_email_back_error').style.opacity = form_special_email_error;
        document.getElementById('form_special_agree_back_error').style.opacity = form_special_agree_error;
        document.getElementById('form_special_text_back_error').style.opacity = form_special_text_error;

        if(!(form_special_name_error + form_special_phone_error + form_special_email_error + form_special_agree_error + form_special_text_error)){
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
                    var form_special_ok_back = document.getElementById('form_special_ok_back');
                    var objRezult = JSON.parse(xhr.responseText);
                    for(var i in objRezult) {
                        if ('error' == i) {
                            for (var j in objRezult[i]) {
                                switch (j) {
                                    case 'g-recaptcha-response':
                                        form_special_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_special_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_special_name':
                                        form_special_name_back_error.innerText = objRezult[i][j][0];
                                        form_special_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_special_phone':
                                        form_special_phone_back_error.innerText = objRezult[i][j][0];
                                        form_special_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_special_email':
                                        form_special_email_back_error.innerText = objRezult[i][j][0];
                                        form_special_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_special_agree':
                                        form_special_agree_back_error.innerText = objRezult[i][j][0];
                                        form_special_agree_back_error.style.opacity = 1;
                                        break;
                                    case 'form_special_id':
                                        form_special_ok_back.innerText = objRezult[i][j];
                                        form_special_ok_back.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            form_special_ok_back.innerText = objRezult[i];
                            form_special_ok_back.style.opacity = 1;
                            console.log(objRezult);
                        }
                    }
//                    grecaptcha.reset(special_modal_form_captcha);
                    document.getElementById('form_special_submit_button').setAttribute("disabled", 'true');
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
