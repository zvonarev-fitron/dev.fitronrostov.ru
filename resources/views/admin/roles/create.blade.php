<form id="role-page_f_store" action="{{route('roles.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @include('include.input.text', ['name' => 'title', 'slot' => 'Код', 'value' => $old->title ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'title'])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $old->name ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name'])
    {{--<div class="form-group">--}}
        {{--@include('include.input.checkbox', ['id' => 'new_role', 'name' => 'active', 'slot' => 'Статус', 'checked' => $old->active ?? false])--}}
    {{--</div>--}}
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="role-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#role-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            event.stopPropagation();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el, true);
            return false;
        });
        document.querySelector('#role-page_b_canchel').addEventListener('click', function(event){
            event.stopPropagation();
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '{{route('roles.index')}}', '', FTAdmin.res.content.el);
            return false;
        });
    })();
</script>