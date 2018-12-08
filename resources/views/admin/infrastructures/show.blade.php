<style>
    .infrastructures-name_page{
        display: inline-block;
    }
    .infrastructures-tr_click__select {
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
    <h2 class="infrastructures-name_page">{{$params['club']->name}}</h2>
    <table id="infrastructures-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Изображение</th>
            <th>Сортировка</th>
            <th>Статус</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['infrastructures'] as $infrastructure)
            <tr>
                <td>{{$infrastructure->id}}</td>
                <td>
                    @if($infrastructure->image)
                        <img class="trainings-page_img_show img-thumbnail" src="{{$infrastructure->image}}" style="width: 100px;" id="cModal_{{$infrastructure->id}}" title="Нажмите на изображение чтобы увеличить">
                        <div class="modal fade" id="imgModal_{{$infrastructure->id}}"><div class="modal-dialog modal-lg"><div class="modal-content"><img src="{{$infrastructure->image}}"></div></div></div>
                        <script>$("#cModal_{{$infrastructure->id}}").click(function(event){event.stopPropagation();$("#imgModal_{{$infrastructure->id}}").modal();});</script>
                    @endif
                </td>
                <td style="text-align: center">{{$infrastructure->sort}}</td>
                <td>
                    <div class="custom-control custom-checkbox images-page_div_active">
                        <input type="checkbox" class="custom-control-input" id="trainings-page_checkbox_active_{{$infrastructure->id}}" {{($infrastructure->active ? 'checked' : '')}} disabled>
                        <label class="custom-control-label" for="images-page_checkbox_active_{{$infrastructure->id}}"></label>
                    </div>
                </td>
                <td>{{$infrastructure->created_at}}</td>
                <td>{{$infrastructure->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="infrastructure-page_b_create" class="btn" title="Добавить структуру">Добавить</button>
    <button type="button" id="infrastructure-page_b_edit" class="btn" title="Изменить структуру">Изменить</button>
    <form action="" method="POST" id="infrastructure-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="infrastructure-page_b_delete" class="btn" title="Удалить структуру">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#infrastructure-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/infrastructures/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#infrastructure-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.infrastructure) FTAdmin.AjaxSend('GET', '/admin/infrastructures/' + FTAdmin.select_table.infrastructure + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#infrastructure-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.infrastructure){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/infrastructures/' + FTAdmin.select_table.infrastructure, data, FTAdmin.res.content.el);
                FTAdmin.select_table.infrastructure_club = 0;
            }
            return false;
        });
        document.querySelector('#infrastructures-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.infrastructure = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.infrastructure) FTAdmin.AjaxSend('GET', '/admin/infrastructures/' + FTAdmin.select_table.infrastructure + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#infrastructures-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName){
                FTAdmin.select_table.infrastructure = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#infrastructures-page_t_index', 'infrastructure');
            }
        });
        FTAdmin.TableTrClearSelect('#infrastructures-page_t_index', 'infrastructure');
        FTAdmin.select_table.infrastructure = 0;
    })();
</script>