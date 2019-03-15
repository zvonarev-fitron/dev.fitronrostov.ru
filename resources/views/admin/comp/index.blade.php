<style>
    .comps-name_page{
        display: inline-block;
    }
    .comp-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="comps-name_page">Предприятия</h2>
    <table id="comps-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Имя</th>
            <th>Наименование</th>
            <th>Юрид Адрес</th>
            <th>Факт Адрес</th>
            <th>Инн</th>
            <th>ОГРН</th>
            <th>ОКПО</th>
            <th>Банк</th>
            <th>р.сч</th>
            <th>к.сч</th>
            <th>БИК</th>
            <th>Б ИНН</th>
            <th>КПП</th>
            <th>Телефон</th>
            <th>Факс</th>
            <th>Email</th>
            <th>Режим работы</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['comps'] as $comp)
            <tr>
                <td>{{$comp->id}}</td>
                <td>{{$comp->name}}</td>
                <td>{{$comp->name_full}}</td>
                <td>{{$comp->legal_addr}}</td>
                <td>{{$comp->fact_addr}}</td>
                <td>{{$comp->inn}}</td>
                <td>{{$comp->ogrnip}}</td>
                <td>{{$comp->okpo}}</td>
                <td>{{$comp->name_bank}}</td>
                <td>{{$comp->r_schet}}</td>
                <td>{{$comp->k_schet}}</td>
                <td>{{$comp->bik}}</td>
                <td>{{$comp->b_inn}}</td>
                <td>{{$comp->kpp}}</td>
                <td>{{$comp->phone}}</td>
                <td>{{$comp->fax}}</td>
                <td>{{$comp->email}}</td>
                <td>{{$comp->work}}</td>
                <td>{{$comp->created_at}}</td>
                <td>{{$comp->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="comp-page_b_create" class="btn" title="Добавить предприятие">Добавить</button>
    <button type="button" id="comp-page_b_edit" class="btn" title="Изменить предприятие">Изменить</button>
    <form action="" method="POST" id="comp-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="comp-page_b_delete" class="btn" title="Удалить предприятие">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#comp-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/comps/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#comp-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.comp) FTAdmin.AjaxSend('GET', '/admin/comps/' + FTAdmin.select_table.comp + '/edit/', '', FTAdmin.res.content.el);
        });

        document.querySelector('#comp-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.comp){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/comps/' + FTAdmin.select_table.comp, data, FTAdmin.res.content.el);
                FTAdmin.select_table.comp = 0;
            }
            event.preventDefault();
            return false;
        });
        document.querySelector('#comps-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.comp = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.comp) FTAdmin.AjaxSend('GET', '/admin/comps/' + FTAdmin.select_table.comp + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#comps-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.comp = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#comps-page_t_index', 'comp');
            }
        });
        FTAdmin.TableTrClearSelect('#comps-page_t_index', 'comp');
    })();
</script>

