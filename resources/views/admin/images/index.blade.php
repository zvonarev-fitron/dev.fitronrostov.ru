<style>
    .images-name_page{
        display: inline-block;
    }
    .image-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="images-name_page">Изображения</h2>
    <table id="images-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Изображение</th>
            <th>Ссылка</th>
            <th>Заголовок</th>
            <th>Текст</th>
            <th>Статус</th>
            <th>Сортировка</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['images'] as $image)
            <tr>
                <td>{{$image->id}}</td>
                <td><img src="{{$image->image}}" style="width: 50px; hight: 50px;"></td>
                <td>{{$image->url}}</td>
                <td>{{$image->title}}</td>
                <td>{{$image->text}}</td>
                <td>{{$image->active}}</td>
                <td>{{$image->sort}}</td>
                <td>{{$image->created_at}}</td>
                <td>{{$image->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="image-page_b_create" class="btn" title="Добавить клуб">Добавить</button>
    <button type="button" id="image-page_b_edit" class="btn" title="Изменить клуб">Изменить</button>
    <form action="" method="POST" id="image-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="image-page_b_delete" class="btn" title="Удалить клуб">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#image-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/images/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#image-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.image) FTAdmin.AjaxSend('GET', '/admin/images/' + FTAdmin.select_table.image + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#image-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.image){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/images/' + FTAdmin.select_table.image, data, FTAdmin.res.content.el);
                FTAdmin.select_table.image = 0;
            }
            event.preventDefault();
            return false;
        });
        document.querySelector('#images-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.image = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.image) FTAdmin.AjaxSend('GET', '/admin/images/' + FTAdmin.select_table.image + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#images-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.image = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#images-page_t_index', 'image');
            }
        });
        FTAdmin.TableTrClearSelect('#images-page_t_index', 'image');
    })();
</script>
