<style>
    .container_modal_guest_visit label{
        cursor:pointer;
        transition:all .25s
    }
    .container_modal_guest_visit #modal_background,
    .container_modal_guest_visit .modal_content{
        cursor:pointer;
        height:0;
        opacity:0;
        overflow:hidden;
        visibility:hidden;
        width:0
    }
    .container_modal_guest_visit #modal_background{
        transition:height .25s
    }
    .container_modal_guest_visit .modal_content{
        transform:scale(0);
        transition:transform .5s
    }
    .container_modal_guest_visit #modal_guest_visit{
        display:none
    }
    .container_modal_guest_visit #modal_guest_visit:checked~#modal_background{
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
        font-size:12px
    }
    .container_modal_guest_visit .group_tag .group_tag_row{
        display:flex;
        justify-content:space-around
    }
    .container_modal_guest_visit .group_tag .group_tag_row .group_tag_checkbox{
        align-self:center;
        display:flex;
        margin:25px 0
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
            top:1%;
            bottom:1%;
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
    <label for="modal_guest_visit" id="modal_background" style="z-index: 899;"></label>
    <div class="modal_content"  style="z-index: 900;">
        <div class="header_guestvisit">
            <div class="top_header_guestvisit">
                <h2>Получить бесплатный гостевой визит</h2>
                <label for="modal_guest_visit" id="modal_close_guest_visit"><i class="fas fa-times"></i></label>
            </div>
            <div class="content_form">
                <form action="aaa">
                    <div class="group_tag">
                        <div class="group_tag_row">
                            <div class="group_tag_input form_guest_visit_name">
                                <label for="form_guest_visit_name">Представьтесь</label>
                                <input type="text" id="form_guest_visit_name" name="form_guest_visit_name" class="" />
                                <div class="error" style="display:none;">Необходимо заполнить «Представьтесь».</div>
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
                                <div class="error" style="display:none;">Необходимо заполнить Телефон</div>
                            </div>
                            <div class="group_tag_input">
                                <label for="form_guest_visit_email">Email</label>
                                <input type="email" id="form_guest_visit_email" name="form_guest_visit_email" />
                                <div class="error" style="display:none;">Необходимо заполнить «Email».</div>
                            </div>
                        </div>

                        {{--<div class="group_tag_row">--}}
                            {{--<div class="group_tag_input form_guest_visit_text">--}}
                                {{--<label for="form_guest_visit_text">Сообщение</label>--}}
                                {{--<textarea name="form_guest_visit_text" id="form_guest_visit_text" cols="30" rows="10"></textarea>--}}
                                {{--<div class="error" style="display:none;">Необходимо выбрать клуб</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="group_tag_row">
                            <div class="group_tag_checkbox">
                                <input type="checkbox" name="ContactForm[agree]" value="1" aria-invalid="true">
                                <span>Я согласен (-а) на обработку</span>
                                <label for="modal_policy" style="color:red">персональных данных</label>
                                {{--<a href="#" target="_blank" data-privacy-policy="">персональных данных</a>--}}
                                <div class="error" style="display: none;">Необходимо согласиться на обработку персональных данных</div>
                            </div>
                        </div>
                        <div class="group_tag_row">
                            <div class="group_tag_button">
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
    jQuery(function($){ $("#form_guest_visit_phone").mask("+7(999) 999-9999"); });
</script>
