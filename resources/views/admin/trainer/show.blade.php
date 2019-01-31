<style>
    .images-name_page{
        display: inline-block;
    }
    .trainer-tr_click__select {
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
    <h2 class="images-name_page">Тренеры</h2>
    <table id="trainer-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Фото</th>
            <th>ФИО</th>
            <th>Код</th>
            <th>Статус</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['trainers'] as $trainer)
            <tr>
                <td>{{$trainer->id}}</td>
                <td>
                    <img class="images-page_img_show img-thumbnail" src="{{$trainer->picture}}" style="width: 100px;" id="cModal_{{$trainer->id}}" title="Нажмите на изображение чтобы увеличить">
                    <div class="modal fade" id="imgModal_{{$trainer->id}}"><div class="modal-dialog modal-lg"><div class="modal-content"><img src="{{$trainer->picture}}"></div></div></div>
                    <script>$("#cModal_{{$trainer->id}}").click(function(){$("#imgModal_{{$trainer->id}}").modal();});</script>
                </td>
                <td>{{$trainer->name}}</td>
                <td>{{$trainer->code}}</td>
                <td>
                    @include('include.input.checkbox', [
                        'id' => $trainer->id,
                        'class' => 'cb_trainer',
                        'name' => 'active',
                        'checked' => $trainer->active,
                        'disabled' => 0,
                        'style' => 'margin-top: -16px; margin-left: 16px;'])
                </td>
                <td>{{$trainer->created_at}}</td>
                <td>{{$trainer->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="trainer-page_b_create" class="btn" title="Добавить тренера">Добавить</button>
    <button type="button" id="trainer-page_b_edit" class="btn" title="Изменить тренера">Изменить</button>
    <form action="" method="POST" id="trainer-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="trainer-page_b_delete" class="btn" title="Удалить тренера">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelectorAll('.cb_trainer').forEach(function(element){
            document.getElementById('label_active_' + element.dataset.id).addEventListener('click', function(event){
                event.preventDefault();
                var cb = document.getElementById(this.getAttribute('for'));
                var path = '/cb/trainers/active/';
                path += (!cb.checked ? '1/' : '0/');
                path += cb.dataset.id;
                // console.log(path);
                FTAdmin.AjaxCheckBox('POST', path , '{!! csrf_token() !!}', cb, true);
                event.preventDefault();
            });
        });
        document.querySelector('#trainer-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '{{route('trainer.create')}}', '', FTAdmin.res.content.el);
        });
        document.querySelector('#trainer-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.trainer) FTAdmin.AjaxSend('GET', '/admin/trainer/' + FTAdmin.select_table.trainer + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#trainer-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.trainer){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/trainer/' + FTAdmin.select_table.trainer, data, FTAdmin.res.content.el);
                FTAdmin.select_table.trainer = 0;
            }
            event.preventDefault();
            return false;
        });
        document.querySelector('#trainer-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.trainer = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.trainer) FTAdmin.AjaxSend('GET', '/admin/trainer/' + FTAdmin.select_table.trainer + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#trainer-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.trainer = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#trainer-page_t_index', 'trainer');
            }
        });
        FTAdmin.TableTrClearSelect('#trainer-page_t_index', 'trainer');
    })();
</script>
