<div class="form-group select-gr_bl">
    <label for="{{$name}}">{{$slot}}</label>
    <select class="form-control" id="{{$name}}" name="{{$name}}">
        @isset($text)
            <option {{ 0 == $select ? 'selected' : ''}} value="0">{{ $text }}</option>
        @endisset
        @foreach($list as $item)
            <option {{$select == $item['id'] ? 'selected' : ''}} value="{{$item['id']}}">{{ $item['name'] }}</option>
        @endforeach
    </select>
</div>

