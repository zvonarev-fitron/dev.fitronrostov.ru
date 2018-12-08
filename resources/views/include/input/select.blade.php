<div class="form-group select-gr_bl">
    <label for="{{$name}}">{{$slot}}</label>
    <select id="{{$name}}" name="{{$name}}[]" multiple="multiple">
        @foreach($list as $item)
            <option {{'s' == $item[0] ? 'selected' : ''}} value="{{$item[1]}}">{{$item[2]}}</option>
        @endforeach
    </select>
</div>
<script> $('#{{$name}}').multiselect({nonSelectedText: '{{$text}}', numberDisplayed: 10});</script>
