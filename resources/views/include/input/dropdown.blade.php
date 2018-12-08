<div class="dropdown">
    <label for="{{$id}}">
        @isset($slot)
            {{$slot}}
        @endisset
    </label>
    <button type="button" class="btn admin-btn_dp dropdown-toggle" data-toggle="dropdown" id="{{$id}}" data-id="{{$data_id}}">{{$text}}</button>
    <ul class="dropdown-menu" id="myList_{{$id}}">
        <input class="form-control" id="myInput_{{$id}}" type="text" placeholder="Поиск.." {{isset($search) && 0 == $search ? 'style=display:none;' : ''}}>
        @foreach($list as $tr)
            @if('c' == $tr[0])
                <li class="dropdown-divider"></li>
                <li class="dropdown-header">{{$tr[2]}}</li>
            @else
                <li class="dropdown-item" data-id="{{$tr[1]}}">{{$tr[2]}}</li>
            @endif
        @endforeach
    </ul>
</div>
<script>
    $(document).ready(function(){
        $("#myInput_{{$id}}").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList_{{$id}} li.dropdown-item").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    document.querySelector('#myList_{{$id}}').addEventListener('click', function(event){
//        event.stopPropagation();
        var button = document.querySelector('#{{$id}}');
        button.dataset.id = event.target.dataset.id;
        button.innerText = event.target.innerText;
    });
</script>