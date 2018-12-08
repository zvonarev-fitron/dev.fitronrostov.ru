<style>
    #pages-page_t_index {
        font-size: 14px;
    }
.page-tr_click__select {
    background-color: rgba(0,0,0,.075);
}
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2>Перечень страниц</h2>
    <table id="pages-page_t_index" class="table table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Код</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Наименование</th>
            <th scope="col">Меню</th>
            <th scope="col">Ссылка</th>
            <th scope="col">Статус</th>
            <th scope="col">Сортировка</th>
            <th scope="col">Создан</th>
            <th scope="col">Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['pages'] as $page)
        <tr>
            <th scope="row">{{$page->id}}</th>
            <td>{{$page->code}}</td>
            <td>{{$page->title}}</td>
            <td>{{$page->name}}</td>
            <td>{{$page->menu}}</td>
            <td>{{$page->trek}}</td>
            <td>@include('include.input.checkbox', ['id' => $page->id, 'name' => 'active', 'checked' => $page->active, 'disabled' => 1, 'style' => 'margin-top: -16px; margin-left: 16px;'])</td>
            <td>{{$page->sort}}</td>
            <td>{{$page->created_at}}</td>
            <td>{{$page->updated_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="page-page_b_create" class="btn" title="Добавить страницу">Добавить</button>
    <button type="button" id="page-page_b_edit" class="btn" title="Изменить страницу">Изменить</button>
    <form action="" method="POST" id="page-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn" title="Удалить страницу">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#page-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/pages/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#page-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.page) FTAdmin.AjaxSend('GET', '/admin/pages/' + FTAdmin.select_table.page + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#page-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.page){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/pages/' + FTAdmin.select_table.page, data, FTAdmin.res.content.el);
                FTAdmin.select_table.page = 0;
            }
            event.preventDefault();
            return false;
        });
        document.querySelector('#pages-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.page = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.page) FTAdmin.AjaxSend('GET', '/admin/pages/' + FTAdmin.select_table.page + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#pages-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.select_table.page = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            FTAdmin.TableTrClearSelect('#pages-page_t_index', 'page');
        });
        FTAdmin.TableTrClearSelect('#pages-page_t_index', 'page');
    })();
</script>