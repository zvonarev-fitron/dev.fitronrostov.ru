<style>
.container_modal_query_trainer label{
    cursor:pointer;
    transition:all .25s
}
.container_modal_query_trainer #modal_background_trainer,
.container_modal_query_trainer .modal_content{
    cursor:pointer;
    height:0;
    opacity:0;
    overflow:hidden;
    visibility:hidden;
    width:0
}
.container_modal_query_trainer #modal_background_trainer{
    transition:height .25s
}
.container_modal_query_trainer .modal_content{
    transform:scale(0);
    transition:transform .5s
}
.container_modal_query_trainer #modal_query_trainer{
    display:none
}
.container_modal_query_trainer #modal_query_trainer:checked~#modal_background_trainer{
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
.container_modal_query_trainer #modal_query_trainer:checked~.modal_content{
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
.container_modal_query_trainer #modal_query_trainer:checked~.modal_content #modal_close_query_trainer{
    color:rgba(51,51,51,.4);
    font-size:22px;
    position:absolute;
    right:20px;
    top:12px;
    transition:color .2s,transform .5s
}
.container_modal_query_trainer #modal_query_trainer:checked~.modal_content #modal_close_query_trainer:focus,
.container_modal_query_trainer #modal_query_trainer:checked~.modal_content #modal_close_query_trainer:hover{
    color:#333;
    transform:rotate(1turn)
}
.container_modal_query_trainer .modal_content .header_trainer .top_header_trainer{
    margin-bottom:25px
}
.container_modal_query_trainer .modal_content .header_trainer .top_header_trainer h2{
    margin:0 18px;
    text-align:center
}
.container_modal_query_trainer .group_tag{
    text-align:center
}
.container_modal_query_trainer .group_tag .error{
    color: #f03;
    font-size: 10px;
    text-align: left;
    opacity: 0;
}
.container_modal_query_trainer .group_tag .group_tag_row{
    display:flex;
    justify-content:space-around
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_checkbox{
    align-self:center;
    display:flex;
    margin:25px 0
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_checkbox span{
    color: #0f3b89;
    margin-right: 5px;
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_checkbox a{
    color:red
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_msg{
    margin-bottom:25px;
    color: #0f3b89;
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input{
    width:285px
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input label{
    display:block;
    font-weight:700;
    margin:20px 0 10px;
    font-family: "Gotham SSm A", "Gotham SSm B";
    color: #0f3b89;
    text-align: left;
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input label:after{
    color:red;
    content:"*";
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input input{
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
/*.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input input#form_query_trainer_name{*/
    /*width:98%*/
/*}*/
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input textarea{
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
/*.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input.form_query_trainer_name,*/
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input.form_query_trainer_text{
    width:99%
}
.container_modal_query_trainer .group_tag .button_submit{
    background:#f03;
    border:none;
    cursor:pointer;
    display:inline-block;
    padding:10px;
    text-align:center;
    transform:skew(-24deg);
    width:180px
}
.container_modal_query_trainer .group_tag .button_submit span{
    color:#fff;
    display:block;
    transform:skew(24deg)
}
.container_modal_query_trainer .group_tag .button_file span{
    color:#f03;
    display:block;
    transform:skew(24deg)
}
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input select {
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
    .container_modal_query_trainer #modal_query_trainer:checked~.modal_content{
        width:300px;
        top:6%;
        bottom:8%;
        overflow-y: auto;
    }
    .container_modal_query_trainer .group_tag .group_tag_row{
        align-items:center;
        display:flex;
        flex-direction:column
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_checkbox{
        display:block
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_checkbox,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_input label{
        margin:5px 0
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_button{
        display:flex
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_button .button_submit{
        /*transform:none;*/
        width:149px
    }
}

@media only screen and (max-width:410px) {
    .container_modal_query_trainer #modal_query_trainer:checked~.modal_content{
        padding: 10px 0;
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_input input,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_input select,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_input,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_input.form_query_trainer_text,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_input textarea {
        width: 100%;
    }
    .container_modal_query_trainer .group_tag .group_tag_row {
        width: 90%;
        margin: auto;
    }
}
</style>
<div id="feedback" class="container_modal_query_trainer">
    <input type="checkbox" id="modal_query_trainer">
    <label for="modal_query_trainer" id="modal_background_trainer" style="z-index: 1001;"></label>
    <div class="modal_content"  style="z-index: 1002;">
        <div class="header_trainer">
            <div class="top_header_trainer">
                <h2>Вопрос тренеру</h2>
                <label for="modal_query_trainer" id="modal_close_query_trainer"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_query_trainer_ok_back" style="opacity: 0;" class="form_query_trainer_of_back"></div>
            <div class="content_form">
                <form action="{{ route('join_trainer') }}" method="post" id="form_modal_query_trainer">
                    @csrf
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input form_query_trainer_name">
                                <label for="form_query_trainer_name">Представьтесь</label>
                                <input type="text" id="form_query_trainer_name" name="form_query_trainer_name" class="" />
                                <div id="form_query_trainer_name_back_error" class="error">Необходимо заполнить «Представьтесь».</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_query_trainer_club">Выберите клуб</label>
                                <select type="text" id="form_query_trainer_club" name="form_query_trainer_club">
                                    <option selected value="{{ $params['select_club']->id }}#{{ $params['select_club']->name }}">{{ $params['select_club']->name }}</option>
                                    @foreach($params['clubs'] as $club)
                                        <option value="{{ $club->id }}#{{ $club->name }}">{{ $club->name }}</option>
                                    @endforeach
                                </select>
                                <div id="form_query_trainer_phone_club_error" class="error">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_query_trainer_phone">Телефон</label>
                                <input type="tel" id="form_query_trainer_phone" name="form_query_trainer_phone" placeholder="+7 (___)___- ____" />
                                <div id="form_query_trainer_phone_back_error" class="error">Необходимо заполнить Телефон</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_query_trainer_email">Email</label>
                                <input type="email" id="form_query_trainer_email" name="form_query_trainer_email" />
                                <div id="form_query_trainer_email_back_error" class="error">Необходимо заполнить «Email».</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input form_query_trainer_text">
                                <label for="form_query_trainer_text">Сообщение</label>
                                <textarea name="form_query_trainer_text" id="form_query_trainer_text" cols="30" rows="10"></textarea>
                                <div id="form_query_trainer_text_back_error" class="error">Необходимо написать сообщение</div>
                            </div>
                        </div>
                        <div class="group_tag_row group_captcha">
                            <div id="form_query_trainer_captcha"></div>
                            <div id="form_query_trainer_captcha_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <input type="checkbox" id="form_query_trainer_agree" name="form_query_trainer_agree" value="1" aria-invalid="true">
                                <span>Я согласен (-а) на обработку</span>
                                <label for="modal_policy" style="color:red">персональных данных</label>
                            </div>
                        </div>
                        <div id="form_query_trainer_agree_back_error" class="error">Необходимо согласиться на обработку персональных данных</div>
                        <div class="group_tag_row">
                            <div class="group_tag_button">
                                <button id="form_query_trainer_submit_button" class="button_submit" type="submit"><span>Отправить</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(function($){ $("#form_query_trainer_phone").mask("+7(999) 999-9999"); });

    var trainer_modal_form = function() {
        return window.grecaptcha.render('form_query_trainer_captcha', {
            'sitekey': '6LclVH8UAAAAAD65E-FQC9fUdoijUQ--fdQk6k2I',
            'theme': 'light',
            'callback': 'recaptchaCallback_trainer',
            'expired-callback': 'recaptchaExpiredCallback_trainer',
            'error-callback': 'recaptchaErrorCallback_trainer'
        });
    };

    var recaptchaCallback_trainer = function(){ document.getElementById('form_query_trainer_submit_button').removeAttribute("disabled"); };
    var recaptchaExpiredCallback_trainer = function(){ document.getElementById('form_query_trainer_submit_button').setAttribute("disabled", 'true'); };
    var recaptchaErrorCallback_trainer = function(){ document.getElementById('form_query_trainer_submit_button').setAttribute("disabled", 'true'); };

    function clearFormQueryTrainer(event) {
        document.getElementById('form_query_trainer_text').value = '';
        document.getElementById('form_query_trainer_name').value = null;
        document.getElementById('form_query_trainer_phone').value = null;
        document.getElementById('form_query_trainer_email').value = null;
        document.getElementById('form_query_trainer_agree').checked = false;
        document.getElementById('form_query_trainer_submit_button').removeAttribute("disabled");
        var form_query_trainer_ok_back = document.getElementById('form_query_trainer_ok_back');
        form_query_trainer_ok_back.innerText = null;
        form_query_trainer_ok_back.style.opacity = 0;
        document.getElementById('form_query_trainer_name_back_error').style.opacity = 0;
        document.getElementById('form_query_trainer_phone_back_error').style.opacity = 0;
        document.getElementById('form_query_trainer_email_back_error').style.opacity = 0;
        document.getElementById('form_query_trainer_agree_back_error').style.opacity = 0;
        document.getElementById('form_query_trainer_text_back_error').style.opacity = 0;
    }

    document.getElementById('modal_background_trainer').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        clearFormQueryTrainer();
    });

    document.getElementById('modal_close_query_trainer').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById(this.getAttribute('for')).checked = false;
        clearFormQueryTrainer(event);
    });

    document.getElementById('form_modal_query_trainer').addEventListener('submit', function(event){
        event.preventDefault();
        var data = new FormData(this);
        // var form_sign_up_captcha_back_error = document.getElementById('form_sign_up_captcha_back_error');
        // form_sign_up_captcha_back_error.style.opacity = 0;
        var form_query_trainer_name_back_error = document.getElementById('form_query_trainer_name_back_error');
        form_query_trainer_name_back_error.style.opacity = 0;
        var form_query_trainer_phone_back_error = document.getElementById('form_query_trainer_phone_back_error');
        form_query_trainer_phone_back_error.style.document = 0;
        var form_query_trainer_email_back_error = document.getElementById('form_query_trainer_email_back_error');
        form_query_trainer_email_back_error.style.opacity = 0;
        var form_query_trainer_agree_back_error = document.getElementById('form_query_trainer_agree_back_error');
        form_query_trainer_agree_back_error.style.opacity = 0;
        var form_query_trainer_text_back_error = document.getElementById('form_query_trainer_text_back_error');
        form_query_trainer_text_back_error.style.opacity = 0;

        var form_query_trainer_name_error = +!(data.has('form_query_trainer_name') && !!data.get('form_query_trainer_name'));
        var form_query_trainer_phone_error = +!(data.has('form_query_trainer_phone') && !!data.get('form_query_trainer_phone'));
        var form_query_trainer_email_error = +!(data.has('form_query_trainer_email') && !!data.get('form_query_trainer_email'));
        var form_query_trainer_agree_error = +!(data.has('form_query_trainer_agree') || !!data.get('form_query_trainer_agree'));
        var form_query_trainer_text_error = +!(data.has('form_query_trainer_text') && !!data.get('form_query_trainer_text'));

        document.getElementById('form_query_trainer_name_back_error').style.opacity = form_query_trainer_name_error;
        document.getElementById('form_query_trainer_phone_back_error').style.opacity = form_query_trainer_phone_error;
        document.getElementById('form_query_trainer_email_back_error').style.opacity = form_query_trainer_email_error;
        document.getElementById('form_query_trainer_agree_back_error').style.opacity = form_query_trainer_agree_error;
        document.getElementById('form_query_trainer_text_back_error').style.opacity = form_query_trainer_text_error;

        if(!(form_query_trainer_name_error + form_query_trainer_phone_error + form_query_trainer_email_error + form_query_trainer_agree_error + form_query_trainer_text_error)){
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

                    console.log(objRezult);

                    for(var i in objRezult) {
                        if ('error' == i) {
                            for (var j in objRezult[i]) {
                                switch (j) {
                                    case 'g-recaptcha-response':
                                        form_query_trainer_captcha_back_error.innerText = objRezult[i][j][0];
                                        form_query_trainer_captcha_back_error.style.opacity = 1;
                                        break;
                                    case 'form_query_trainer_name':
                                        form_query_trainer_name_back_error.innerText = objRezult[i][j][0];
                                        form_query_trainer_name_back_error.style.opacity = 1;
                                        break;
                                    case 'form_query_trainer_phone':
                                        form_query_trainer_phone_back_error.innerText = objRezult[i][j][0];
                                        form_query_trainer_phone_back_error.style.opacity = 1;
                                        break;
                                    case 'form_query_trainer_email':
                                        form_query_trainer_email_back_error.innerText = objRezult[i][j][0];
                                        form_query_trainer_email_back_error.style.opacity = 1;
                                        break;
                                    case 'form_query_trainer_club':
                                        form_query_trainer_phone_club_error.innerText = objRezult[i][j][0];
                                        form_query_trainer_phone_club_error.style.opacity = 1;
                                        break;
                                    case 'form_query_trainer_agree':
                                        form_query_trainer_agree_back_error.innerText = objRezult[i][j][0];
                                        form_query_trainer_agree_back_error.style.opacity = 1;
                                        break;
                                    case 'form_query_trainer_text':
                                        form_query_trainer_text_back_error.innerText = objRezult[i][j][0];
                                        form_query_trainer_text_back_error.style.opacity = 1;
                                        break;
                                    default:
                                        break;
                                }
                            }
                        }
                        if ('ok' == i) {
                            var form_query_trainer_ok_back = document.getElementById('form_query_trainer_ok_back');
                            form_query_trainer_ok_back.innerText = objRezult[i];
                            form_query_trainer_ok_back.style.opacity = 1;
                            console.log(objRezult);
                        }
                    }
                    //grecaptcha.reset(sign_up_modal_form);
                    document.getElementById('form_query_trainer_submit_button').setAttribute("disabled", 'true');
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