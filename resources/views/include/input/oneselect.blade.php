<div class="form-group select-gr_bl my_form_group_select">
    @isset($slot)
    <label for="{{ $name }}">{{ $slot }}</label>
    @endisset
    <select class="form-control" id="{{ $name }}" name="{{ $name }}">
        @isset($text)
            <option {{ 0 == $select ? 'selected' : ''}} value="0">{{ $text }}</option>
        @endisset
        @foreach($list as $item)
            <option {{$select == $item['id'] ? 'selected' : ''}} value="{{$item['id']}}">{{ $item['name'] }}</option>
        @endforeach
    </select>
</div>

