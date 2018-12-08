<style>
    .category-page_img_show {
        width: 100px;
    }
    .categories-name_page{
        display: inline-block;
    }
    .category-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="categories-name_page">Категории</h2>
    <table id="categories-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Изображение</th>
            <th>Сортировка</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['categories'] as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td><img src="{{$category->image}}" id="cModal_{{$category->id}}" class="category-page_img_show img-thumbnail" title="Нажмите на изображение чтобы увеличить">
                    <div class="modal fade" id="imgModal_{{$category->id}}"><div class="modal-dialog modal-lg"><div class="modal-content"><img src="{{$category->image}}"></div></div></div>
                    <script>$("#cModal_{{$category->id}}").click(function(){$("#imgModal_{{$category->id}}").modal();});</script>
                </td>
                <td>{{$category->sort}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="category-page_b_create" class="btn" title="Добавить категорию">Добавить</button>
    <button type="button" id="category-page_b_edit" class="btn" title="Изменить категорию">Изменить</button>
    <form action="" method="POST" id="category-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="category-page_b_delete" class="btn" title="Удалить категорию">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#category-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/categories/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#category-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.category) FTAdmin.AjaxSend('GET', '/admin/categories/' + FTAdmin.select_table.category + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#category-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.category){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/categories/' + FTAdmin.select_table.category, data, FTAdmin.res.content.el);
                FTAdmin.select_table.category = 0;
            }
            return false;
        });
        document.querySelector('#categories-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.category = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.category) FTAdmin.AjaxSend('GET', '/admin/categories/' + FTAdmin.select_table.category + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#categories-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.category = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#categories-page_t_index', 'category');
            }
        });
        FTAdmin.TableTrClearSelect('#categories-page_t_index', 'category');
    })();
</script>