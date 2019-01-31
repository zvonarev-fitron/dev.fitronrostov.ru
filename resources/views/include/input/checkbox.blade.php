<div class="custom-control custom-checkbox"
     @isset($style)
        style="{{$style}}"
     @endisset
>
    <input type="checkbox" name="{{ $name }}" data-id="{{ $id }}"
        @isset($pid)
            id="checkbox_{{ $pid . '_' . $id }}"
        @else
            id="checkbox_active_{{ $id }}"
        @endisset
        @isset($class)
            class="{{ 'custom-control-input ' . $class }}"
        @else
            class="{{ 'custom-control-input' }}"
        @endisset
        @isset($checked)
            {{($checked ? 'checked' : '')}}
        @endisset
        @isset($disabled)
            {{($disabled ? 'disabled' : '')}}
        @endisset
    >
    <label class="custom-control-label"
        @isset($pid)
            for="checkbox_{{ $pid . '_' . $id }}"
        @else
            for="checkbox_active_{{ $id }}"
        @endisset
        @isset($pid)
            id="label_{{ $pid . '_' . $id }}"
        @else
            id="label_active_{{ $id }}"
        @endisset
>
        @isset($slot)
            {{$slot}}
        @endisset
    </label>
</div>
