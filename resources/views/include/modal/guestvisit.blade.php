<style>
    .container_modal_guest_visit label{
        cursor:pointer;
        transition:all .25s
    }
    .container_modal_guest_visit #modal_background_guest_visit,
    .container_modal_guest_visit .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_modal_guest_visit #modal_background_guest_visit{
        transition:height .25s
    }
    .container_modal_guest_visit .modal_content{
        transform:scale(0);
        transition:transform .5s
    }
    .container_modal_guest_visit #modal_guest_visit{
        display:none
    }
    .container_modal_guest_visit #modal_guest_visit:checked~#modal_background_guest_visit{
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
    .container_modal_guest_visit #modal_guest_visit:checked~.modal_content{
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
    .container_modal_guest_visit #modal_guest_visit:checked~.modal_content #modal_close_guest_visit{
        color:rgba(51,51,51,.4);
        font-size:22px;
        position:absolute;
        right:20px;
        top:12px;
        transition:color .2s,transform .5s
    }
    .container_modal_guest_visit #modal_guest_visit:checked~.modal_content #modal_close_guest_visit:focus,
    .container_modal_guest_visit #modal_guest_visit:checked~.modal_content #modal_close_guest_visit:hover{
        color:#333;
        transform:rotate(1turn)
    }
    .container_modal_guest_visit .modal_content .header_guestvisit .top_header_guestvisit{
        margin-bottom:25px
    }
    .container_modal_guest_visit .modal_content .header_guestvisit .top_header_guestvisit h2{
        margin:0 30px;
        text-align:center
    }
    .container_modal_guest_visit .group_tag{
        text-align:center
    }
    .container_modal_guest_visit .group_tag .error{
        color:#f03;
        font-size:12px;
        opacity: 0;
    }
    .container_modal_guest_visit .group_tag .group_tag_row{
        display:flex;
        justify-content:space-around
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        margin: 0 0
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_checkbox span{
        color: #0f3b89;
        margin-right: 5px;
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_checkbox a{
        color:red
    }
    /*.container_modal_guest_visit .group_tag .group_tag_row .group_tag_msg{*/
        /*margin-bottom:25px;*/
        /*color: #0f3b89;*/
    /*}*/
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input{
        width:285px
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input label{
        display:block;
        font-weight:700;
        margin:20px 0 10px;
        font-family: "Gotham SSm A", "Gotham SSm B";
        color: #0f3b89;
        text-align: left;
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input label:after{
        color:red;
        content:"*";
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input input{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        color:#0f3b89;
        font-size:18px;
        height:46px;
        outline:none;
        padding:10px;
        width:280px
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input input#form_guest_visit_name{
        width:98%
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input textarea{
        background-color:#f9f9fb;
        border:none;
        border-top:2px solid #0f3b89;
        box-sizing:border-box;
        color:#0f3b89;
        font-size:18px;
        height:146px;
        outline:none;
        width:98%
    }
    /*.container_modal_guest_visit .group_tag .group_tag_row .group_tag_input.form_guest_visit_name,*/
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input.form_guest_visit_text{
        width:99%
    }
    .container_modal_guest_visit .group_tag .button_submit{
        background:#f03;
        border:none;
        cursor:pointer;
        display:inline-block;
        padding:10px;
        text-align:center;
        transform:skew(-24deg);
        width:180px
    }
    .container_modal_guest_visit .group_tag .button_submit span{
        color:#fff;
        display:block;
        transform:skew(24deg)
    }
    .container_modal_guest_visit .group_tag .button_file{
        background:#fff;
        border:1px solid #f03;
        cursor:pointer;
        display:inline-block;
        padding:10px;
        text-align:center;
        transform:skew(-24deg);
        width:180px
    }
    .container_modal_guest_visit .group_tag .button_file span{
        color:#f03;
        display:block;
        transform:skew(24deg)
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input select {
        color: red;
        background-color: #f9f9fb;
        border: none;
        border-top: 2px solid #0f3b89;
        box-sizing: border-box;
        font-size: 18px;
        height: 46px;
        outline: none;
        width: 280px;
    }
    @media only screen and (max-width:700px){
        .container_modal_guest_visit #modal_guest_visit:checked~.modal_content{
            width:300px;
            top:6%;
            bottom:8%;
            overflow-y: auto;
        }
        .container_modal_guest_visit .group_tag .group_tag_row{
            align-items:center;
            display:flex;
            flex-direction:column
        }
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_checkbox{
            display:block
        }
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_checkbox,
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input label{
            margin:5px 0
        }
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_button{
            display:flex
        }
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_button .button_file,
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_button .button_submit{
            width:149px
        }
    }
    @media only screen and (max-width:410px) {
        .container_modal_guest_visit #modal_guest_visit:checked~.modal_content{
            padding: 10px 0;
        }
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input input,
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input select {
            width: 100%;
        }
        .container_modal_guest_visit .group_tag .group_tag_row .group_tag_input {
            width: 100%;
        }
        .container_modal_guest_visit .group_tag {
            width: 90%;
            margin: auto;
        }
    }
</style>
<div id="feedback" class="container_modal_guest_visit">
    <input type="checkbox" id="modal_guest_visit">
    <label for="modal_guest_visit" id="modal_background_guest_visit" style="z-index: 899;"></label>
    <div class="modal_content"  style="z-index: 900;">
        <div class="header_guestvisit">
            <div class="top_header_guestvisit">
                <h2>Получить бесплатный гостевой визит</h2>
                <label for="modal_guest_visit" id="modal_close_guest_visit"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_guest_visit_ok_back" style="opacity: 0;" class="form_guest_visit_of_back"></div>
            <div class="content_form">
                <form action="{{ route('join_guest_visit') }}" method="post" id="form_guest_visit_up">
                    @csrf
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input form_guest_visit_name">
                                <label for="form_guest_visit_name">Представьтесь</label>
                                <input type="text" id="form_guest_visit_name" name="form_guest_visit_name" class="" />
                                <div id="form_guest_visit_name_back_error" class="error">Необходимо заполнить «Представьтесь».</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_guest_visit_club">Выберите клуб</label>
                                <select type="text" id="form_guest_visit_club" name="form_guest_visit_club">
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
                                <label for="form_guest_visit_phone">Телефон</label>
                                <input type="tel" id="form_guest_visit_phone" name="form_guest_visit_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_guest_visit_phone_back_error" class="error">Необходимо заполнить Телефон</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_guest_visit_email">Email</label>
                                <input type="email" id="form_guest_visit_email" name="form_guest_visit_email" />
                                <div id="form_guest_visit_email_back_error" class="error">Необходимо заполнить «Email».</div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_guest_visit_captcha"></div>
                            <div id="form_guest_visit_captcha_back_error" class="error" style="opacity:0;">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <input type="checkbox" name="form_guest_visit_agree" id="form_guest_visit_agree" value="1" aria-invalid="true">
                                <span>Я согласен (-а) на обработку</span>
                                <label for="modal_policy" style="color:red">персональных данных</label>
                            </div>
                        </div>
                        <div id="form_guest_visit_agree_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                        <div class="group_tag_row">
                            <div class="group_tag_button">
                                <button id="form_guest_visit_submit_button" class="button_submit" type="submit"><span>Отправить</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var guest_visit_modal_form = function() {
        return window.grecaptcha.render('form_guest_visit_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_guest_visit',
            'expired-callback': 'recaptchaExpiredCallback_guest_visit',
            'error-callback': 'recaptchaErrorCallback_guest_visit'
        });
    };

    var recaptchaCallback_guest_visit = function(){ document.getElementById('form_guest_visit_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_guest_visit = function(){ document.getElementById('form_guest_visit_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_guest_visit = function(){ document.getElementById('form_guest_visit_submit_button').setAttribute("disabled", 'true'); };

    jQuery(function($){ $("#form_guest_visit_phone").mask("+7(999) 999-9999"); });

    document.getElementById('modal_background_guest_visit').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        clearFormGuestVisit(event);
    });

    document.getElementById('modal_close_guest_visit').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        clearFormGuestVisit(event);
    });

    function clearFormGuestVisit(event){
        document.getElementById('form_guest_visit_name').value = null;
        document.getElementById('form_guest_visit_phone').value = null;
        document.getElementById('form_guest_visit_email').value = null;
        document.getElementById('form_guest_visit_agree').checked = false;
        document.getElementById('form_guest_visit_submit_button').removeAttribute("disabled");
        var form_guest_visit_ok_back = document.getElementById('form_guest_visit_ok_back');
        form_guest_visit_ok_back.innerText = null;
        form_guest_visit_ok_back.style.opacity = 0;
        document.getElementById('form_guest_visit_name_back_error').style.opacity = 0;
        document.getElementById('form_guest_visit_phone_back_error').style.opacity = 0;
        document.getElementById('form_guest_visit_email_back_error').style.opacity = 0;
        document.getElementById('form_guest_visit_agree_back_error').style.opacity = 0;
    }

    document.getElementById('form_guest_visit_up').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_guest_visit_captcha_back_error = document.getElementById('form_guest_visit_captcha_back_error');
        form_guest_visit_captcha_back_error.style.opacity = 0;
        var form_guest_visit_name_back_error = document.getElementById('form_guest_visit_name_back_error');
        form_guest_visit_name_back_error.style.opacity = 0;
        var form_guest_visit_phone_back_error = document.getElementById('form_guest_visit_phone_back_error');
        form_guest_visit_phone_back_error.style.document = 0;
        var form_guest_visit_email_back_error = document.getElementById('form_guest_visit_email_back_error');
        form_guest_visit_email_back_error.style.opacity = 0;
        var form_guest_visit_agree_back_error = document.getElementById('form_guest_visit_agree_back_error');
        form_guest_visit_agree_back_error.style.opacity = 0;

        var form_guest_visit_name_error = +!(data.has('form_guest_visit_name') && !!data.get('form_guest_visit_name'));
        var form_guest_visit_phone_error = +!(data.has('form_guest_visit_phone') && !!data.get('form_guest_visit_phone'));
        var form_guest_visit_email_error = +!(data.has('form_guest_visit_email') && !!data.get('form_guest_visit_email'));
        var form_guest_visit_agree_error = +!(data.has('form_guest_visit_agree') || !!data.get('form_guest_visit_agree'));

        document.getElementById('form_guest_visit_name_back_error').style.opacity = form_guest_visit_name_error;
        document.getElementById('form_guest_visit_phone_back_error').style.opacity = form_guest_visit_phone_error;
        document.getElementById('form_guest_visit_email_back_error').style.opacity = form_guest_visit_email_error;
        document.getElementById('form_guest_visit_agree_back_error').style.opacity = form_guest_visit_agree_error;

        if(!(form_guest_visit_name_error + form_guest_visit_phone_error + form_guest_visit_email_error + form_guest_visit_agree_error)){
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
                if (xhr.readyState == 4 && xhr.status == 419) {
                    alert('<h2>Ошибка загрузки страницы(419)</h2>');
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
                                        form_sign_up_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_sign_up_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_guest_visit_name':
                                        form_sign_up_name_back_error.innerText = objRezult[i][j][0];
                                        form_sign_up_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_guest_visit_phone':
                                        form_sign_up_phone_back_error.innerText = objRezult[i][j][0];
                                        form_sign_up_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_guest_visit_email':
                                        form_sign_up_email_back_error.innerText = objRezult[i][j][0];
                                        form_sign_up_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_guest_visit_club':
                                        form_sign_up_club_back_error.innerText = objRezult[i][j][0];
                                        form_sign_up_club_back_error.style.opacity = 1;
                                        break;
                                    case 'form_guest_visit_agree':
                                        form_sign_up_agree_back_error.innerText = objRezult[i][j][0];
                                        form_sign_up_agree_back_error.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_guest_visit_ok_back = document.getElementById('form_guest_visit_ok_back');
                            form_guest_visit_ok_back.innerText = objRezult[i];
                            form_guest_visit_ok_back.style.opacity = 1;
                            console.log(objRezult);
                        }
                    }
                    //grecaptcha.reset(sign_up_modal_form);
                    document.getElementById('form_guest_visit_submit_button').setAttribute("disabled", 'true');
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
