<form id="user-page_f_edit" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    <div class="user_main_roles_edit">
        @csrf
        @method('PUT')
        <div class="user_main_roles_edit_left">
            <h2>Акции</h2>
            @include('include.input.text', ['name' => 'id', 'slot' => 'Id', 'value' => $params['special']->id, 'disabled' => true])
            @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $params['special']->name])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name'])
            @include('include.input.text', ['name' => 'description', 'slot' => 'Описание', 'value' => $params['special']->description])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'description'])
            @include('include.input.number', ['name' => 'price_1', 'slot' => 'Цена 1', 'style' => 'width:150px;height:40px;margin-right:30px;', 'min' => '1', 'value' => $params['special']->price_1])
            @include('include.input.number', ['name' => 'price_2', 'slot' => 'Цена 2', 'style' => 'width:150px;height:40px;margin-right:30px;', 'min' => '1', 'value' => $params['special']->price_2])
            @include('include.input.oneselect',['name' => 'type_card_id', 'slot' => 'Тип карты', 'select' => $params['special']->id, 'list' => $params['type_card']])
            @include('include.input.date', ['slot' => 'Начало активности', 'name' => 'start_active', 'value' => explode(' ', $params['special']->start_active)[0]])
            @include('include.input.date', ['slot' => 'Конец активности', 'name' => 'end_active', 'value' => explode(' ', $params['special']->end_active)[0]])
            <div class="form-group">
                @include('include.input.checkbox', ['id' => 'rassrochka', 'name' => 'rassrochka', 'slot' => 'Рассрочка', 'checked' => $params['special']->rassrochka])
            </div>
            <div class="form-group">
                @include('include.input.checkbox', ['id' => 'active', 'name' => 'active', 'slot' => 'Статус', 'checked' => $params['special']->active])
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Сохранить</button>
                <button id="user-page_b_canchel" class="btn btn-default">Отменить</button>
            </div>
        </div>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#user-page_f_edit').addEventListener('submit', function(event){
            event.preventDefault();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '{{ route('special.update', ['special' => $params['special']->id]) }}', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#user-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '{{ route('special.index') }}', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>
