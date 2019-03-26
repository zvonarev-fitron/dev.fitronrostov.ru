<style>
.container_feedback label{
    cursor:pointer;
    transition:all .25s
}
.container_feedback #modal_background_feedback,
.container_feedback .modal_content{
    cursor:pointer;
    height:0;
    opacity:0;
    overflow:hidden;
    visibility:hidden;
    width:0
}
.container_feedback #modal_background_feedback{
    transition:height .25s
}
.container_feedback .modal_content{
    transform:scale(0);
    transition:transform .5s
}
.container_feedback #modal_feedback{
    display:none
}
.container_feedback #modal_feedback:checked~#modal_background_feedback{
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
.container_feedback #modal_feedback:checked~.modal_content{
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
.container_feedback #modal_feedback:checked~.modal_content #modal_close_feedback{
    color:rgba(51,51,51,.4);
    font-size:22px;
    position:absolute;
    right:20px;
    top:12px;
    transition:color .2s,transform .5s
}
.container_feedback #modal_feedback:checked~.modal_content #modal_close_feedback:focus,
.container_feedback #modal_feedback:checked~.modal_content #modal_close_feedback:hover{
    color:#333;
    transform:rotate(1turn)
}
.container_feedback .modal_content .header_feedback .top_header_feedback{
    margin-bottom:25px
}
.container_feedback .modal_content .header_feedback .form_of_back{
    color: deeppink;
    background-color: gainsboro;
    text-align: center;
    font-size: 20px;
    line-height: 30px;
}
.container_feedback .modal_content .header_feedback .top_header_feedback h2{
    margin:0 18px;
    text-align:center
}
.container_feedback .group_tag{
    text-align:center
}
.container_feedback .group_tag .error{
    color: #f03;
    font-size: 10px;
    text-align: left;
    opacity: 0;
}
.container_feedback .group_tag .group_tag_row{
    display:flex;
    justify-content:space-around
}
.container_feedback .group_tag .group_tag_row .group_tag_checkbox{
    align-self:center;
    display:flex;
    margin:35px 0;
    flex-direction: column;
}
.container_feedback .group_tag .group_tag_row .group_tag_checkbox span{
    color: #0f3b89;
    margin-right: 5px;
}
.container_feedback .group_tag .group_tag_row .group_tag_checkbox a{
    color:red;
    text-decoration: none;
}
.container_feedback .group_tag .group_tag_row .group_tag_input{
    width:285px;
    font-family: "Gotham SSm A", "Gotham SSm B";
}
.container_feedback .group_tag .group_tag_row .group_tag_input label{
    display:block;
    font-weight:700;
    margin:20px 0 10px;
    color: #0f3b89;
    text-align: left;
}
.container_feedback .group_tag .group_tag_row .group_tag_input label:after{
    color:red;
    content:"*"
}
.container_feedback .group_tag .group_tag_row .group_tag_input input{
    color:#0f3b89;
    padding:10px
}
.container_feedback .group_tag .group_tag_row .group_tag_input input,
.container_feedback .group_tag .group_tag_row .group_tag_input select{
    background-color:#f9f9fb;
    border:none;
    border-top:2px solid #0f3b89;
    box-sizing:border-box;
    font-size:18px;
    height:46px;
    outline:none;
    width:280px
}
.container_feedback .group_tag .group_tag_row .group_tag_input select{
    color:#f03
}
.container_feedback .group_tag .group_tag_row .group_tag_input select option{
    color:#0f3b89
}
.container_feedback .group_tag .button_submit{
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
.container_feedback .group_tag .button_submit span{
    color:#fff;
    display:block;
    transform:skew(24deg)
}
.container_feedback .group_tag .group_captcha {
    margin-top: 40px;
    flex-direction: column;
    align-items: center;
    display: flex;
}
@media only screen and (max-width:700px){
    .container_feedback #modal_feedback:checked~.modal_content{
        width:300px;
        top:6%;
        bottom:8%;
    }
    .container_feedback .group_tag .group_tag_row{
        align-items:center;
        display:flex;
        flex-direction:column
    }
    .container_feedback .group_tag .group_tag_row .group_tag_checkbox{
        display:block
    }
}
@media only screen and (max-width:410px) {
    .container_feedback #modal_feedback:checked~.modal_content{
        padding: 10px 0;
    }
    .container_feedback .group_tag .group_tag_row .group_tag_input input,
    .container_feedback .group_tag .group_tag_row .group_tag_input select {
        width: 100%;
    }
    .container_feedback .group_tag .group_tag_row .group_tag_input {
        width: 100%;
    }
    .container_feedback .group_tag {
        width:90%;
        margin:auto;
    }
}
</style>
<div id="feedback" class="container_feedback">
    <input type="checkbox" id="modal_feedback">
    <label for="modal_feedback" id="modal_background_feedback" style="z-index: 1001;"></label>
    <div class="modal_content" style="z-index: 1002;overflow-y: auto;">
        <div class="header_feedback">
            <div class="top_header_feedback">
                <h2>Обратный звонок</h2>
                <label for="modal_feedback" id="modal_close_feedback"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_feedback_ok_back" style="opacity: 0;" class="form_of_back"></div>
            <div class="content_form">
                <form action="{{ route('join_feedback') }}" method="post" id="fdbc_modal" enctype="multipart/form-data">
                    @csrf
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_feedback_name">Представьтесь</label>
                                <input type="text" id="form_feedback_name" name="form_feedback_name" />
                                <div id="form_feedback_name_back_error" class="error">Необходимо заполнить «Представьтесь»</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_feedback_club">Выберите клуб</label>
                                <select type="text" id="form_feedback_club" name="form_feedback_club">
                                    <option selected value="{{ $params['select_club']->id }}#{{ $params['select_club']->name }}">{{ $params['select_club']->name }}</option>
                                    @foreach($params['clubs'] as $club)
                                    <option value="{{ $club->id }}#{{ $club->name }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                <div id="form_feedback_name_club_error" class="error">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_feedback_phone">Телефон</label>
                                <input type="tel" id="form_feedback_phone" name="form_feedback_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_feedback_phone_back_error" class="error">Необходимо заполнить Телефон</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_feedback_email">Email</label>
                                <input type="email" id="form_feedback_email" name="form_feedback_email" />
                                <div id="form_feedback_email_back_error" class="error">Необходимо заполнить «Email»</div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_feedback_captcha"></div>
                            <div id="form_feedback_captcha_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <div>
                                    <input type="checkbox" id="form_feedback_agree" name="form_feedback_agree" value="1">
                                    <span>Я согласен (-а) на обработку </span>
                                    <label for="modal_policy" style="color:red">персональных данных</label>
                                </div>
                            </div>
                        </div>
                        <div id="form_feedback_agree_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                        <button id="form_feedback_submit_button" class="button_submit" type="submit"><span>Отправить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var feedback_modal_form = function() {
        return window.grecaptcha.render('form_feedback_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_feedback',
            'expired-callback': 'recaptchaExpiredCallback_feedback',
            'error-callback': 'recaptchaErrorCallback_feedback'
        });
    };

    jQuery(function($){$("#form_feedback_phone").mask("+7(999) 999-9999");});

    var recaptchaCallback_feedback = function(){ document.getElementById('form_feedback_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_feedback = function(){ document.getElementById('form_feedback_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_feedback = function(){ document.getElementById('form_feedback_submit_button').setAttribute("disabled", 'true'); };

    function cleanFeedBackForm(event)
    {
        document.getElementById('form_feedback_name').value = null;
        document.getElementById('form_feedback_phone').value = null;
        document.getElementById('form_feedback_email').value = null;
        document.getElementById('form_feedback_agree').checked = false;

        var form_feedback_ok_back = document.getElementById('form_feedback_ok_back');
        form_feedback_ok_back.innerText = null;
        form_feedback_ok_back.style.opacity = 0;

        document.getElementById('form_feedback_captcha_back_error').style.opacity = 0;
        document.getElementById('form_feedback_name_back_error').style.opacity = 0;
        document.getElementById('form_feedback_phone_back_error').style.opacity = 0;
        document.getElementById('form_feedback_email_back_error').style.opacity = 0;
        document.getElementById('form_feedback_agree_back_error').style.opacity = 0;
    }

    document.getElementById('modal_close_feedback').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        cleanFeedBackForm(event)
    });

    document.getElementById('modal_background_feedback').addEventListener('click', function(event){
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        cleanFeedBackForm(event)
    });

    document.getElementById('fdbc_modal').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);

        var form_feedback_captcha_back_error = document.getElementById('form_feedback_captcha_back_error');
        form_feedback_captcha_back_error.style.opacity = 0;
        var form_feedback_name_back_error = document.getElementById('form_feedback_name_back_error');
        form_feedback_name_back_error.style.opacity = 0;
        var form_feedback_phone_back_error = document.getElementById('form_feedback_phone_back_error');
        form_feedback_phone_back_error.style.document = 0;
        var form_feedback_email_back_error = document.getElementById('form_feedback_email_back_error');
        form_feedback_email_back_error.style.opacity = 0;
        var form_feedback_agree_back_error = document.getElementById('form_feedback_agree_back_error');
        form_feedback_agree_back_error.style.opacity = 0;

        var form_feedback_name_error = +!(data.has('form_feedback_name') && !!data.get('form_feedback_name'));
        var form_feedback_phone_error = +!(data.has('form_feedback_phone') && !!data.get('form_feedback_phone'));
        var form_feedback_email_error = +!(data.has('form_feedback_email') && !!data.get('form_feedback_email'));
        var form_feedback_agree_error = +!(data.has('form_feedback_agree') || !!data.get('form_feedback_agree'));

        document.getElementById('form_feedback_name_back_error').style.opacity = form_feedback_name_error;
        document.getElementById('form_feedback_phone_back_error').style.opacity = form_feedback_phone_error;
        document.getElementById('form_feedback_email_back_error').style.opacity = form_feedback_email_error;
        document.getElementById('form_feedback_agree_back_error').style.opacity = form_feedback_agree_error;

        if(!(form_feedback_name_error + form_feedback_phone_error + form_feedback_email_error + form_feedback_agree_error)){
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
                                        form_feedback_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_feedback_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_feedback_name':
                                        form_feedback_name_back_error.innerText = objRezult[i][j][0];
                                        form_feedback_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_feedback_phone':
                                        form_feedback_phone_back_error.innerText = objRezult[i][j][0];
                                        form_feedback_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_feedback_email':
                                        form_feedback_email_back_error.innerText = objRezult[i][j][0];
                                        form_feedback_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_feedback_agree':
                                        form_feedback_agree_back_error.innerText = objRezult[i][j][0];
                                        form_feedback_agree_back_error.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_feedback_ok_back = document.getElementById('form_feedback_ok_back');
                            form_feedback_ok_back.innerText = objRezult[i];
                            form_feedback_ok_back.style.opacity = 1;
                            console.log(objRezult);
                        }
                    }
//                    grecaptcha.reset(feedback_modal_form_captcha);
                    document.getElementById('form_feedback_submit_button').setAttribute("disabled", 'true');
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
