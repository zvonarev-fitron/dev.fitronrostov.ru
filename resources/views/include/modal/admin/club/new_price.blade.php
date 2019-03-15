<style>
    .container_new_price_club label{
        cursor:pointer;
        transition:all .25s
    }
    .container_new_price_club #modal_background,
    .container_new_price_club .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_new_price_club #modal_background{
        transition:height .25s
    }
    .container_new_price_club .modal_content{
        transform:scale(0);
        transition:transform .5s
    }
    .container_new_price_club #modal_new_price_club{
        display:none
    }
    .container_new_price_club #modal_new_price_club:checked~#modal_background{
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
    .container_new_price_club #modal_new_price_club:checked~.modal_content{
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
    .container_new_price_club #modal_new_price_club:checked~.modal_content #modal_close_new_price_club{
        color:rgba(51,51,51,.4);
        font-size:22px;
        position:absolute;
        right:20px;
        top:12px;
        transition:color .2s,transform .5s
    }
    .container_new_price_club #modal_new_price_club:checked~.modal_content #modal_close_new_price_club:focus,
    .container_new_price_club #modal_new_price_club:checked~.modal_content #modal_close_new_price_club:hover{
        color:#333;
        transform:rotate(1turn)
    }
    .container_new_price_club .modal_content .header_new_price_club .top_header_new_price_club{
        margin-bottom:25px
    }
    .container_new_price_club .modal_content .header_new_price_club .form_of_back{
        color: deeppink;
        background-color: gainsboro;
        text-align: center;
        font-size: 20px;
        line-height: 30px;
    }
    .container_new_price_club .modal_content .header_new_price_club .top_header_new_price_club h2{
        margin:0 18px;
        text-align:center
    }
    .container_new_price_club .group_tag{
        text-align:center
    }
    .container_new_price_club .group_tag .error{
        color:#f03;
        font-size:12px
    }
    .container_new_price_club .group_tag .group_tag_row{
        display:flex;
        justify-content:space-around
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        margin:35px 0;
        flex-direction: column;
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_checkbox span{
        color: #0f3b89;
        margin-right: 5px;
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_checkbox a{
        color:red;
        text-decoration: none;
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_input{
        width:285px;
        font-family: "Gotham SSm A", "Gotham SSm B";
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_input label{
        display:block;
        font-weight:700;
        margin:20px 0 10px;
        color: #0f3b89;
        text-align: left;
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_input label:after{
        color:red;
        content:"*"
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_input input{
        color:#0f3b89;
        padding:10px
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_input input,
    .container_new_price_club .group_tag .group_tag_row .group_tag_input select{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        font-size:18px;
        height:46px;
        outline:none;
        width:280px
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_input select{
        color:#f03
    }
    .container_new_price_club .group_tag .group_tag_row .group_tag_input select option{
        color:#0f3b89
    }
    .container_new_price_club .group_tag .button_submit{
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
    .container_new_price_club .group_tag .button_submit span{
        color:#fff;
        display:block;
        transform:skew(24deg)
    }
    .container_new_price_club .group_tag .group_captcha {
        margin-top: 40px;
        flex-direction: column;
        align-items: center;
        display: flex;
    }
    @media only screen and (max-width:700px){
        .container_new_price_club #modal_new_price_club:checked~.modal_content{
            width:300px;
            top:1%;
            bottom: 1%;
        }
        .container_new_price_club .group_tag .group_tag_row{
            align-items:center;
            display:flex;
            flex-direction:column
        }
        .container_new_price_club .group_tag .group_tag_row .group_tag_checkbox{
            display:block
        }
    }
    @media only screen and (max-width:410px) {
        .container_new_price_club #modal_new_price_club:checked~.modal_content{
            padding: 10px 0;
        }
        .container_new_price_club .group_tag .group_tag_row .group_tag_input input,
        .container_new_price_club .group_tag .group_tag_row .group_tag_input select {
            width: 100%;
        }
        .container_new_price_club .group_tag .group_tag_row .group_tag_input {
            width: 100%;
        }
        .container_new_price_club .group_tag {
            width:90%;
            margin:auto;
        }
    }
</style>

<div id="new_price_club" class="container_new_price_club">
    <input type="checkbox" id="modal_new_price_club">
    <label for="modal_new_price_club" id="modal_background" style="z-index: 899;"></label>
    <div class="modal_content" style="z-index: 900;overflow-y: auto;">
        <div class="header_new_price_club">
            <div class="top_header_new_price_club">
                <h2>Обратный звонок</h2>
                <label for="modal_new_price_club" id="modal_close_new_price_club"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_new_price_club_ok_back" style="opacity: 0;" class="form_of_back"></div>
            <div class="content_form">
                <form action="{{ route('join_new_price_club') }}" method="post" id="fdbc_modal" enctype="multipart/form-data">
                    @csrf
                    <div class="group_tag">
                        <div class="group_tag_row">

                            <div class="group_tag_input">
                                <label for="form_new_price_club_name">Представьтесь</label>
                                <input type="text" id="form_new_price_club_name" name="form_new_price_club_name" />
                                <div id="form_new_price_club_name_error" class="error" style="opacity:0;">Необходимо заполнить «Представьтесь».</div>
                                <div id="form_new_price_club_name_back_error" class="error" style="opacity:0;"></div>
                            </div>

                            <div class="group_tag_input">
                                <label for="form_new_price_club_club">Выберите клуб</label>
                                <select type="text" id="form_new_price_club_club" name="form_new_price_club_club">
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
                                <label for="form_new_price_club_phone">Телефон</label>
                                <input type="tel" id="form_new_price_club_phone" name="form_new_price_club_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_new_price_club_phone_error" class="error" style="opacity:0;">Необходимо заполнить Телефон</div>
                                <div id="form_new_price_club_phone_back_error" class="error" style="opacity:0;"></div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_new_price_club_email">Email</label>
                                <input type="email" id="form_new_price_club_email" name="form_new_price_club_email" />
                                <div id="form_new_price_club_email_error" class="error" style="opacity:0;">Необходимо заполнить «Email».</div>
                                <div id="form_new_price_club_email_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_new_price_club_captcha"></div>
                            <div id="form_new_price_club_captcha_back_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <div>
                                    <input type="checkbox" id="form_new_price_club_agree" name="form_new_price_club_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <label for="modal_policy" style="color:red">персональных данных</label>
                                    {{--<a href="/privacy-policy" target="_blank">персональных данных</a>--}}
                                </div>
                                <div id="form_new_price_club_agree_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                                <div id="form_new_price_club_agree_back_error" class="error" style="opacity:0;"></div>
                            </div>
                        </div>
                        <button id="form_new_price_club_submit_button" class="button_submit" type="submit" disabled><span>Отправить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var new_price_club_modal_form = function() {
        return window.grecaptcha.render('form_new_price_club_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_new_price_club',
            'expired-callback': 'recaptchaExpiredCallback_new_price_club',
            'error-callback': 'recaptchaErrorCallback_new_price_club'
        });
    };

    jQuery(function($){$("#form_new_price_club_phone").mask("+7(999) 999-9999");});

    var recaptchaCallback_new_price_club = function(){ document.getElementById('form_new_price_club_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_new_price_club = function(){ document.getElementById('form_new_price_club_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_new_price_club = function(){ document.getElementById('form_new_price_club_submit_button').setAttribute("disabled", 'true'); };

    document.getElementById('modal_close_new_price_club').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        document.getElementById('form_new_price_club_name').value = null;
        document.getElementById('form_new_price_club_phone').value = null;
        document.getElementById('form_new_price_club_email').value = null;
        document.getElementById('form_new_price_club_agree').checked = false;
        var form_new_price_club_ok_back = document.getElementById('form_new_price_club_ok_back');
        form_new_price_club_ok_back.innerText = null;
        form_new_price_club_ok_back.style.opacity = 0;
    });

    document.getElementById('fdbc_modal').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_new_price_club_captcha_back_error = document.getElementById('form_new_price_club_captcha_back_error');
        form_new_price_club_captcha_back_error.style.opacity = 0;
        var form_new_price_club_name_back_error = document.getElementById('form_new_price_club_name_back_error');
        form_new_price_club_name_back_error.style.opacity = 0;
        var form_new_price_club_phone_back_error = document.getElementById('form_new_price_club_phone_back_error');
        form_new_price_club_phone_back_error.style.document = 0;
        var form_new_price_club_email_back_error = document.getElementById('form_new_price_club_email_back_error');
        form_new_price_club_email_back_error.style.opacity = 0;
        var form_new_price_club_agree_back_error = document.getElementById('form_new_price_club_agree_back_error');
        form_new_price_club_agree_back_error.style.opacity = 0;

        var form_new_price_club_name_error = +!(data.has('form_new_price_club_name') && !!data.get('form_new_price_club_name'));
        var form_new_price_club_phone_error = +!(data.has('form_new_price_club_phone') && !!data.get('form_new_price_club_phone'));
        var form_new_price_club_email_error = +!(data.has('form_new_price_club_email') && !!data.get('form_new_price_club_email'));
        var form_new_price_club_agree_error = +!(data.has('form_new_price_club_agree') || !!data.get('form_new_price_club_agree'));

        document.getElementById('form_new_price_club_name_error').style.opacity = form_new_price_club_name_error;
        document.getElementById('form_new_price_club_phone_error').style.opacity = form_new_price_club_phone_error;
        document.getElementById('form_new_price_club_email_error').style.opacity = form_new_price_club_email_error;
        document.getElementById('form_new_price_club_agree_error').style.opacity = form_new_price_club_agree_error;

        if(!(form_new_price_club_name_error + form_new_price_club_phone_error + form_new_price_club_email_error + form_new_price_club_agree_error)){
            var xhr = new XMLHttpRequest();
            xhr.open(this.getAttribute('method'), this.getAttribute('action'), true);
            xhr.setRequestheader_new_price_club('X-Requested-With', 'XMLHttpRequest');
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
                                        form_new_price_club_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_new_price_club_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_new_price_club_name':
                                        form_new_price_club_name_back_error.innerText = objRezult[i][j][0];
                                        form_new_price_club_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_new_price_club_phone':
                                        form_new_price_club_phone_back_error.innerText = objRezult[i][j][0];
                                        form_new_price_club_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_new_price_club_email':
                                        form_new_price_club_email_back_error.innerText = objRezult[i][j][0];
                                        form_new_price_club_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_new_price_club_agree':
                                        form_new_price_club_agree_back_error.innerText = objRezult[i][j][0];
                                        form_new_price_club_agree_back_error.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_new_price_club_ok_back = document.getElementById('form_new_price_club_ok_back');
                            form_new_price_club_ok_back.innerText = objRezult[i];
                            form_new_price_club_ok_back.style.opacity = 1;
                        }
                    }
                    grecaptcha.reset(new_price_club_modal_form_captcha);
                    document.getElementById('form_new_price_club_submit_button').setAttribute("disabled", 'true');
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

