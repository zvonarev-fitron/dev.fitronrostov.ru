<form id="rooms-page_f_store" action="{{route('rooms.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="clubs_id" value="0" id="rooms-page_clubs_id">
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование'])
    {{--@include('include.input.checkbox', ['name' => 'active', 'slot' => 'Статус'])--}}
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="rooms-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#rooms-page_f_store').addEventListener('submit', function(event){
            document.querySelector('#rooms-page_clubs_id').value = FTAdmin.select_table.room_club;
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#rooms-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/rooms/' + FTAdmin.select_table.room_club + '/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>