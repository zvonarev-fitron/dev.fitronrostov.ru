@if($errors->has($slot))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Ошибка!</strong>{{$errors->first($slot)}}
</div>
@endif