<style>
    .sliders-name_page{
        display: inline-block;
    }
    .slider-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="sliders-name_page">Слайдеры</h2>
    <table id="sliders-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Код</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['sliders'] as $slider)
            <tr>
                <td>{{$slider->id}}</td>
                <td>{{$slider->name}}</td>
                <td>{{$slider->code}}</td>
                <td>{{$slider->created_at}}</td>
                <td>{{$slider->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="slider-page_b_create" class="btn" title="Добавить слайдер">Добавить</button>
    <button type="button" id="slider-page_b_edit" class="btn" title="Изменить слайдер">Изменить</button>
    <form action="" method="POST" id="slider-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="slider-page_b_delete" class="btn" title="Удалить слайдер">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#slider-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/sliders/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#slider-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.sliders) FTAdmin.AjaxSend('GET', '/admin/sliders/' + FTAdmin.select_table.sliders + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#slider-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.sliders){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/sliders/' + FTAdmin.select_table.sliders, data, FTAdmin.res.content.el);
                FTAdmin.select_table.sliders = 0;
            }
            event.preventDefault();
            return false;
        });
        document.querySelector('#sliders-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.sliders = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.sliders) FTAdmin.AjaxSend('GET', '/admin/sliders/' + FTAdmin.select_table.sliders + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#sliders-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.sliders = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#sliders-page_t_index', 'sliders');
            }
        });
        FTAdmin.TableTrClearSelect('#sliders-page_t_index', 'sliders');
    })();
</script>