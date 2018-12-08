<style>
    .images-name_page{
        display: inline-block;
    }
    .user-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
    .images-page_img_show {
        width: 100px;
    }
    .images-page_div_active {
        margin-top: -16px;
        margin-left: 16px;
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="images-name_page">Акции</h2>
    <table id="roles-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Цена 1</th>
            <th>Цена 2</th>
            <th>Тип карты</th>
            <th>Начало показа</th>
            <th>Конец показа</th>
            <th>Рассрочка</th>
            <th>Статус</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['special'] as $special)
            <tr>
                <td>{{ $special->id }}</td>
                <td>{{ $special->name }}</td>
                <td>{{ $special->description }}</td>
                <td>{{ $special->price_1 }}</td>
                <td>{{ $special->price_2 }}</td>
                <td>{{ $params['type_card']->where('id', $special->type_card_id)->first()->name }}</td>
                <td>{{ explode(' ', $special->start_active)[0] }}</td>
                <td>{{ explode(' ', $special->end_active)[0] }}</td>
                <td>
                    <div class="custom-control custom-checkbox images-page_div_active">
                        <input type="checkbox" class="custom-control-input" id="images-page_checkbox_rassrochka_{{$special->id}}" {{$special->rassrochka ? 'checked' : ''}} disabled>
                        <label class="custom-control-label" for="images-page_checkbox_rassrochka_{{$special->id}}"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox images-page_div_active">
                        <input type="checkbox" class="custom-control-input" id="images-page_checkbox_active_{{$special->id}}" {{$special->active ? 'checked' : ''}} disabled>
                        <label class="custom-control-label" for="images-page_checkbox_active_{{$special->id}}"></label>
                    </div>
                </td>
                <td>{{$special->created_at}}</td>
                <td>{{$special->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="special-page_b_create" class="btn" title="Добавить акцию">Добавить</button>
    <button type="button" id="role-page_b_edit" class="btn" title="Изменить акцию">Изменить</button>
    <form action="" method="POST" id="role-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="role-page_b_delete" class="btn" title="Удалить акцию">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#roles-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.role = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#roles-page_t_index', 'role');
            }
        });
        FTAdmin.TableTrClearSelect('#roles-page_t_index', 'role');

        document.querySelector('#special-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '{{route('special.create')}}', '', FTAdmin.res.content.el);
        });
        document.querySelector('#roles-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.role = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.role) FTAdmin.AjaxSend('GET', '/admin/special/' + FTAdmin.select_table.role + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#role-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.role) FTAdmin.AjaxSend('GET', '/admin/special/' + FTAdmin.select_table.role + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#role-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.role){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/special/' + FTAdmin.select_table.role, data, FTAdmin.res.content.el);
                FTAdmin.select_table.role = 0;
            }
            return false;
        });
    })();
</script>
