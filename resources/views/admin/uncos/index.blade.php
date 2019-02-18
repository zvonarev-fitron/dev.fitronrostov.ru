<style>
    .uncos-name_page{
        display: inline-block;
    }
    .uncos-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="uncos-name_page">Новости</h2>
    <table id="uncos-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Код</th>
            <th>Дата</th>
            <th>Статус</th>
            <th>Сортировка</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['news'] as $new)
            <tr>
                <td>{{$new->id}}</td>
                <td>{{$new->title}}</td>
                <td>{{$new->code}}</td>
                <td>{{(new \DateTime($new->date))->format('d.m.Y')}}</td>
                <td>@include('include.input.checkbox', ['id' => $new->id, 'class' => 'cb_new', 'name' => 'active', 'checked' => $new->active, 'disabled' => 0, 'style' => 'margin-top: -16px; margin-left: 16px;'])</td>
                <td>{{$new->sort}}</td>
                <td>{{$new->created_at}}</td>
                <td>{{$new->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="uncos-page_b_create" class="btn" title="Добавить новость">Добавить</button>
    <button type="button" id="uncos-page_b_edit" class="btn" title="Изменить новость">Изменить</button>
    <form action="" method="POST" id="uncos-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="uncos-page_b_delete" class="btn" title="Удалить новость">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelectorAll('.cb_new').forEach(function(element){
            document.getElementById('label_active_' + element.dataset.id).addEventListener('click', function(event){
                event.preventDefault();
                var cb = document.getElementById(this.getAttribute('for'));
                var path = '/cb/news/active/';
                path += (!cb.checked ? '1/' : '0/');
                path += cb.dataset.id;
                // console.log(path);
                FTAdmin.AjaxCheckBox('POST', path , '{!! csrf_token() !!}', cb, true);
                event.preventDefault();
            });
        });
        document.querySelector('#uncos-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/uncos/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#uncos-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.uncos) FTAdmin.AjaxSend('GET', '/admin/uncos/' + FTAdmin.select_table.uncos + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#uncos-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.uncos){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/uncos/' + FTAdmin.select_table.uncos, data, FTAdmin.res.content.el);
                FTAdmin.select_table.uncos = 0;
            }
            return false;
        });
        document.querySelector('#uncos-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.uncos = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.uncos) FTAdmin.AjaxSend('GET', '/admin/uncos/' + FTAdmin.select_table.uncos + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#uncos-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.uncos = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#uncos-page_t_index', 'uncos');
            }
        });
        FTAdmin.TableTrClearSelect('#uncos-page_t_index', 'uncos');
    })();
</script>
