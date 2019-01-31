<style>
    .images-name_page{
        display: inline-block;
    }
    .image-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
    .images-page_img_show {
        width: 100px;
    }
    .images-page_div_active {
        margin-top: -6px;
        margin-left: 16px;
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
            <th>С</th>
            <th>По</th>
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
                <td>
                    <img class="images-page_img_show img-thumbnail" src="{{$image->image}}" style="width: 100px;" id="cModal_{{$image->id}}" title="Нажмите на изображение чтобы увеличить">
                    <div class="modal fade" id="imgModal_{{$image->id}}"><div class="modal-dialog modal-lg"><div class="modal-content"><img src="{{$image->image}}"></div></div></div>
                    <script>$("#cModal_{{$image->id}}").click(function(){$("#imgModal_{{$image->id}}").modal();});</script>
                </td>
                <td>{{$image->url}}</td>
                <td>{{$image->title}}</td>
                <td>{{$image->text}}</td>
                <td>{{$image->start_time}}</td>
                <td>{{$image->end_time}}</td>
                <td>
                    @include('include.input.checkbox', [
                        'id' => $image->id,
                        'class' =>
                        'cb_images',
                        'name' => 'active',
                        'checked' => $image->active,
                        'disabled' => 0,
                        'style' => 'margin-top: -16px; margin-left: 16px;'])
                </td>
                <td style="text-align: center">{{$image->sort}}</td>
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
        document.querySelectorAll('.cb_images').forEach(function(element){
            document.getElementById('label_active_' + element.dataset.id).addEventListener('click', function(event){
                event.preventDefault();
                var cb = document.getElementById(this.getAttribute('for'));
                var path = '/cb/images/active/';
                path += (!cb.checked ? '1/' : '0/');
                path += cb.dataset.id;
                // console.log(path);
                FTAdmin.AjaxCheckBox('POST', path , '{!! csrf_token() !!}', cb, true);
                event.preventDefault();
            });
        });
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
