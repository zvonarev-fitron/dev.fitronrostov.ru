<div class="form-group">
    <label for="{{$name}}">{{$slot}}</label>
    <input type="date" name="{{$name}}" class="form-control" id="{{$name}}"
        @isset($style)
            style="{{$style}}"
        @endisset
        @isset($value)
            value="{{$value}}"
        @endisset
        @isset($disabled)
            {{($disabled ? 'disabled' : '')}}
        @endisset
    >
</div>