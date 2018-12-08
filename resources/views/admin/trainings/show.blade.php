<style>
    .trainings-name_page{
        display: inline-block;
    }
    .trainings-tr_click__select {
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
    <h2 class="trainings-name_page">{{$params['category']->name}}</h2>
    <table id="trainings-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Изображение</th>
            <th>Сортировка</th>
            <th>Статус</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['trainings'] as $training)
            <tr>
                <td>{{$training->id}}</td>
                <td>{{$training->name}}</td>
                <td>
                @if($training->image)
                    <img class="trainings-page_img_show img-thumbnail" src="{{$training->image}}" style="width: 100px;" id="cModal_{{$training->id}}" title="Нажмите на изображение чтобы увеличить">
                    <div class="modal fade" id="imgModal_{{$training->id}}"><div class="modal-dialog modal-lg"><div class="modal-content"><img src="{{$training->image}}"></div></div></div>
                    <script>$("#cModal_{{$training->id}}").click(function(event){event.stopPropagation();$("#imgModal_{{$training->id}}").modal();});</script>
                @endif
                </td>
                <td style="text-align: center">{{$training->sort}}</td>
                <td>
                    <div class="custom-control custom-checkbox images-page_div_active">
                        <input type="checkbox" class="custom-control-input" id="trainings-page_checkbox_active_{{$training->id}}" <?=($training->active ? 'checked' : '');?> disabled>
                        <label class="custom-control-label" for="images-page_checkbox_active_{{$training->id}}"></label>
                    </div>
                </td>
                <td>{{$training->created_at}}</td>
                <td>{{$training->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="training-page_b_create" class="btn" title="Добавить тренеровку">Добавить</button>
    <button type="button" id="training-page_b_edit" class="btn" title="Изменить тренеровку">Изменить</button>
    <form action="" method="POST" id="training-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="training-page_b_delete" class="btn" title="Удалить тренеровку">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#training-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/trainings/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#training-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.training) FTAdmin.AjaxSend('GET', '/admin/trainings/' + FTAdmin.select_table.training + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#training-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.training){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/trainings/' + FTAdmin.select_table.training, data, FTAdmin.res.content.el);
                FTAdmin.select_table.training = 0;
            }
            return false;
        });
        document.querySelector('#trainings-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.training = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.training) FTAdmin.AjaxSend('GET', '/admin/trainings/' + FTAdmin.select_table.training + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#trainings-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName){
                FTAdmin.select_table.training = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#trainings-page_t_index', 'training');
            }
        });
        FTAdmin.TableTrClearSelect('#trainings-page_t_index', 'training');
    })();
</script>