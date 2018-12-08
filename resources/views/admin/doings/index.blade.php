<style>
    .doing-page-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2>Перечень страниц</h2>
    <table id="doings-page_t_index" class="table table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Дата</th>
            <th scope="col">Наименование</th>
            <th scope="col">Статус</th>
            <th scope="col">Сортировка</th>
            <th scope="col">Создан</th>
            <th scope="col">Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['doings'] as $doing)
            <tr>
                <th scope="row">{{$doing->id}}</th>
                <td>{{(new \DateTime($doing->start_date))->format('d.m.Y')}} - {{(new \DateTime($doing->end_date))->format('d.m.Y')}}</td>
                <td>{{$doing->name}}</td>
                <td>@include('include.input.checkbox', ['id' => $doing->id, 'name' => 'active', 'checked' => $doing->active, 'disabled' => 1, 'style' => 'margin-top: -16px; margin-left: 16px;'])</td>
                <td>{{$doing->sort}}</td>
                <td>{{$doing->created_at}}</td>
                <td>{{$doing->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="doings-page_b_create" class="btn" title="Добавить событие">Добавить</button>
    <button type="button" id="doings-page_b_edit" class="btn" title="Изменить событие">Изменить</button>
    <form action="" method="POST" id="doings-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn" title="Удалить событие">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#doings-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/doings/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#doings-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.doing) FTAdmin.AjaxSend('GET', '/admin/doings/' + FTAdmin.select_table.doing + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#doings-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.doing){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/doings/' + FTAdmin.select_table.doing, data, FTAdmin.res.content.el);
                FTAdmin.select_table.doing = 0;
            }
            return false;
        });
        document.querySelector('#doings-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.doing = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.doing) FTAdmin.AjaxSend('GET', '/admin/doings/' + FTAdmin.select_table.doing + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#doings-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.select_table.doing = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);

            console.log(FTAdmin.select_table.doing);

            FTAdmin.TableTrClearSelect('#doings-page_t_index', 'doing');
        });
        FTAdmin.TableTrClearSelect('#doings-page_t_index', 'doing');
    })();
</script>