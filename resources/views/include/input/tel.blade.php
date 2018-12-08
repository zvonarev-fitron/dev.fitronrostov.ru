<div class="form-group">
    <label for="{{$name}}">{{$slot}}</label>
    <input type="tel" class="form-control" name="{{$name}}" id="{{$name}}"
           @isset($value)
           value="{{$value}}"
           @endisset
           @isset($disabled)
           {{($disabled ? 'disabled' : '')}}
           @endisset
           @isset($style)
           style="{{$style}}"
            @endisset
           {{--pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"--}}
    >
</div>