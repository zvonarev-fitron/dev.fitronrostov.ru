<style>
.container_modal_query_trainer label{
    cursor:pointer;
    transition:all .25s
}
.container_modal_query_trainer #modal_background,
.container_modal_query_trainer .modal_content{
    cursor:pointer;
    height:0;
    opacity:0;
    overflow:hidden;
    visibility:hidden;
    width:0
}
.container_modal_query_trainer #modal_background{
    transition:height .25s
}
.container_modal_query_trainer .modal_content{
    transform:scale(0);
    transition:transform .5s
}
.container_modal_query_trainer #modal_query_trainer{
    display:none
}
.container_modal_query_trainer #modal_query_trainer:checked~#modal_background{
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
.container_modal_query_trainer .modal_content .header .top_header{
    margin-bottom:25px
}
.container_modal_query_trainer .modal_content .header .top_header h2{
    margin:0;
    text-align:center
}
.container_modal_query_trainer .group_tag{
    text-align:center
}
.container_modal_query_trainer .group_tag .error{
    color:#f03;
    font-size:12px
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
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input input#form_query_trainer_name{
    width:98%
}
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
.container_modal_query_trainer .group_tag .group_tag_row .group_tag_input.form_query_trainer_name,
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
.container_modal_query_trainer .group_tag .button_file{
    background:#fff;
    border:1px solid #f03;
    cursor:pointer;
    display:inline-block;
    padding:10px;
    text-align:center;
    transform:skew(-24deg);
    width:180px
}
.container_modal_query_trainer .group_tag .button_file span{
    color:#f03;
    display:block;
    transform:skew(24deg)
}
@media only screen and (max-width:700px){
    .container_modal_query_trainer #modal_query_trainer:checked~.modal_content{
        width:300px
    }
    .container_modal_query_trainer .group_tag .group_tag_row{
        align-items:flex-start;
        display:flex;
        flex-direction:column
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_checkbox{
        display:block
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_msg{
        margin:5px
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_checkbox,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_input label{
        margin:5px 0
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_button{
        display:flex
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_button .button_file,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_button .button_submit{
        transform:none;
        width:149px
    }
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_button .button_file span,
    .container_modal_query_trainer .group_tag .group_tag_row .group_tag_button .button_submit span{
        transform:none;
    }
}
</style>
<div id="feedback" class="container_modal_query_trainer">
    <input type="checkbox" id="modal_query_trainer">
    <label for="modal_query_trainer" id="modal_background" style="z-index: 999;"></label>
    <div class="modal_content"  style="z-index: 1000;">
        <div class="header">
            <div class="top_header">
                <h2>Хочу у Вас работать!</h2>
                <label for="modal_query_trainer" id="modal_close_query_trainer"><i class="fas fa-times"></i></label>
            </div>
            <div class="content_form">
                <form action="aaa">
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input form_query_trainer_name">
                                <label for="form_query_trainer_name">Представтесь</label>
                                <input type="text" id="form_query_trainer_name" name="form_query_trainer_name" class="" />
                                <div class="error" style="display:none;">Необходимо заполнить «Представьтесь».</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input">
                                <label for="form_query_trainer_phone">Телефон</label>
                                <input type="tel" id="form_query_trainer_phone" name="form_query_trainer_phone" placeholder="+7 (___)___- ____" />
                                <div class="error" style="display:none;">Необходимо заполнить Телефон</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_query_trainer_email">Email</label>
                                <input type="email" id="form_query_trainer_email" name="form_query_trainer_email" />
                                <div class="error" style="display:none;">Необходимо заполнить «Email».</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_input form_query_trainer_text">
                                <label for="form_query_trainer_text">Сообщение</label>
                                <textarea name="form_query_trainer_text" id="form_query_trainer_text" cols="30" rows="10"></textarea>
                                <div class="error" style="display:none;">Необходимо выбрать клуб</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <input type="checkbox" name="ContactForm[agree]" value="1" aria-invalid="true"><span>Я согласен (-а) на обработку</span><a href="#" target="_blank" data-privacy-policy="">персональных данных</a>
                                <div class="error" style="display: none;">Необходимо согласиться на обработку персональных данных</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_msg">
                                <div>Максимальный размер загружаемого файла - 4Мб</div>
                                <div>Форматы: jpg, doc, docx, pdf, txt, odt, pages</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_button">
                                <input type="file" id="form_query_trainer_file" style="display: none;">
                                <button type="button" class="button_file" onClick="document.getElementById('form_query_trainer_file').click();"><span>Прикрепить файл</span></button>
                                <button class="button_submit" type="submit"><span>Отправить</span></button>
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
</script>