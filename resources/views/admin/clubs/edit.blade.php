<style>
    .price_content {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 10px;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .price_content .price_content_headr {
        margin-top: -32px;
        margin-bottom: 10px;
    }
    .price_content .price_content_headr span {
        font-size: 25px;
        background-color: white;
    }
    .price_content .pc_p {
        display: flex;
        align-items: flex-end;
    }
    .price_content .pc_p > div:first-child,
    .price_content .pc_p > div:last-child{
        flex: 1;
    }
    .price_club-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<form id="clubs-page_f_edit" action="{{ route('clubs.index') }}" method="POST" style="margin-left: 10px; margin-right: 10px;">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'id', 'slot' => 'Id', 'value' => $params['club']->id, 'disabled' => true])
    @include('include.input.text', ['name' => 'code', 'slot' => 'Код', 'value' => $params['club']->code])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $params['club']->name])
    @include('include.input.text', ['name' => 'address', 'slot' => 'Адрес', 'value' => $params['club']->address])
    @include('include.input.text', ['name' => 'phone', 'slot' => 'Телефон', 'value' => $params['club']->phone])
    @include('include.textarea.input', ['name' => 'iframe', 'slot' => 'Встроенная карта', 'value' => $params['club']->iframe])
    @include('include.input.text', ['name' => 'map_x', 'slot' => 'Координаты X', 'value' => $params['club']->map_x])
    @include('include.input.text', ['name' => 'map_y', 'slot' => 'Координаты Y', 'value' => $params['club']->map_y])
    @include('include.input.preview_file', ['name' => 'market_image', 'slot' => 'Изображение маркета', 'value' => $params['club']->market_image])
    @include('include.input.text', ['name' => 'small_map_url', 'slot' => 'Ссылка малой карты', 'value' => $params['club']->small_map_url])
    @include('include.input.preview_file', ['name' => 'small_map_image', 'slot' => 'Изображение малой карты', 'value' => $params['club']->small_map_image])

    <div class="price_content">
        <div class="price_content_headr">
            <span>Цены</span>
        </div>
        <table id="clubs_page-e-price" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
            <tr style="text-align: center">
                <th>id</th>
                <th>Наименование</th>
                <th>Цена</th>
                <th>Уровень</th>
                <th>Описание</th>
            </tr>
            @foreach($params['price_club'] as $prc)
                <tr>
                    <td style="text-align: center">{{ $prc['id'] }}</td>
                    <td>{{ $prc['name'] }}</td>
                    <td style="text-align: center">{{ $prc['price'] }}</td>
                    <td style="text-align: center">{{ $prc['level_ps'] }}</td>
                    <td>{{ $prc['ps'] }}</td>
                </tr>
            @endforeach
        </table>
        <div class="price_content_rule">
            <button type="button" id="club-page_e_price_create" class="btn" title="Добавить цену">Добавить</button>
            <button type="button" id="club-page_e_price_edit" class="btn" title="Изменить цену">Изменить</button>
            <button type="button" id="club-page_e_price_delete" class="btn" title="Удалить цену">Удалить</button>
        </div>
    </div>
    @include('include.input.oneselect', ['name' => 'companies_id', 'slot' => 'Предприятие', 'list' => $params['comps'], 'select' => $params['club']->companies_id])
    @include('include.input.text', ['name' => 'created_at', 'slot' => 'Создан', 'value' => $params['club']->created_at, 'disabled' => true])
    @include('include.input.text', ['name' => 'updated_at', 'slot' => 'Изменен', 'value' => $params['club']->updated_at, 'disabled' => true])
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="clubs-page_b_canchel" class="btn btn-default">Назад</button>
</form>

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
                <h2></h2>
                <label for="modal_new_price_club" id="modal_close_new_price_club"><i class="fas fa-times"></i></label>
            </div>
            <div id="form_new_price_club_ok_back" style="opacity: 0;" class="form_of_back"></div>
            <div class="content_form">
                <form action="{{ route('price_club_edit', $params['club']->id) }}" method="post" id="price_club_modal">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="0" id="price_club_id" name="price_club_id"/>
                    @include('include.input.text', ['name' => 'price_club_name', 'slot' => 'Наименование'])
                    @include('include.input.number', ['name' => 'price_club_price', 'slot' => 'Цена'])
                    @include('include.input.oneselect', ['name' => 'price_club_level', 'slot' => 'Уровень', 'list' => $params['list'], 'select' => '0'])
                    @include('include.input.text', ['name' => 'price_club_ps', 'slot' => 'Описание'])
                    <button id="price_club_save" class="btn btn-default">Сохранить</button>
                    <button id="price_club_back" class="btn btn-default">Отменить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    (function(){
        document.querySelector('#clubs_page-e-price').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.price_club = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            var ids_price_club = @json($params['ids_price_club']);
            if(0 < FTAdmin.select_table.price_club){
                document.querySelector('.top_header_new_price_club h2').innerText = 'Изменить цену';
                var objCheckbox = document.getElementById('modal_new_price_club');
                objCheckbox.checked = !objCheckbox.checked;
                document.getElementById('price_club_id').value = FTAdmin.select_table.price_club;
                document.getElementById('price_club_name').value = ids_price_club[FTAdmin.select_table.price_club].name;
                document.getElementById('price_club_price').value = ids_price_club[FTAdmin.select_table.price_club].price;
                document.getElementById('price_club_ps').value = ids_price_club[FTAdmin.select_table.price_club].ps;
                document.getElementById('price_club_level').value = ids_price_club[FTAdmin.select_table.price_club].level_ps;
            }
        });
        document.querySelector('#clubs_page-e-price').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.price_club = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#clubs_page-e-price', 'price_club');
            }
        });
        document.getElementById('club-page_e_price_create').addEventListener('click', function(event){
            document.querySelector('.top_header_new_price_club h2').innerText = 'Добавить новую цену';
            var objCheckbox = document.getElementById('modal_new_price_club');
            objCheckbox.checked = !objCheckbox.checked;
            document.getElementById('price_club_id').value = 0;
            document.getElementById('price_club_name').value = '';
            document.getElementById('price_club_price').value = '';
            document.getElementById('price_club_ps').value = '';
            document.getElementById('price_club_level').value = 0;
        });
        document.getElementById('club-page_e_price_edit').addEventListener('click', function(event){
            event.stopPropagation();
            var ids_price_club = @json($params['ids_price_club']);
            if(0 < FTAdmin.select_table.price_club){
                document.querySelector('.top_header_new_price_club h2').innerText = 'Изменить цену';
                var objCheckbox = document.getElementById('modal_new_price_club');
                objCheckbox.checked = !objCheckbox.checked;
                document.getElementById('price_club_id').value = FTAdmin.select_table.price_club;
                document.getElementById('price_club_name').value = ids_price_club[FTAdmin.select_table.price_club].name;
                document.getElementById('price_club_price').value = ids_price_club[FTAdmin.select_table.price_club].price;
                document.getElementById('price_club_ps').value = ids_price_club[FTAdmin.select_table.price_club].ps;
                document.getElementById('price_club_level').value = ids_price_club[FTAdmin.select_table.price_club].level_ps;
            }
        });
        document.getElementById('club-page_e_price_delete').addEventListener('click', function(event){
            event.stopPropagation();
            var form = document.getElementById('price_club_modal');
            var data = new FormData(form);
            data.set('_method', 'DELETE');
            if(0 < FTAdmin.select_table.price_club)
                FTAdmin.AjaxSend(form.getAttribute('method'), '/admin/price/club/'+ FTAdmin.select_table.club + '/' + FTAdmin.select_table.price_club + '/', data, FTAdmin.res.content.el);
        });
        document.getElementById('price_club_save').addEventListener('click', function(event){
            event.stopPropagation();
            event.preventDefault();
            var form = document.getElementById('price_club_modal');
            var data = new FormData(form);
            if(0 < FTAdmin.select_table.club) FTAdmin.AjaxSend(form.getAttribute('method'), '/admin/price/club/' + FTAdmin.select_table.club + '/edit/', data, FTAdmin.res.content.el);
        });
        document.getElementById('price_club_back').addEventListener('click', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.club) FTAdmin.AjaxSend('GET', '/admin/clubs/' + FTAdmin.select_table.club + '/edit/', '', FTAdmin.res.content.el);
        });

        FTAdmin.TableTrClearSelect('#clubs-page_e_price', 'price_club');
        document.querySelector('#clubs-page_f_edit').addEventListener('submit', function(event){
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/clubs/{{ $params['club']->id }}/', data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#clubs-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/clubs', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>



