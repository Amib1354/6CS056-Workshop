@props(['id', 'label', 'name', 'value' => '', 'type' => 'text', 'required' => false, 'maxlength' => null, 'min' => null, 'max' => null, 'step' => null, 'autocomplete' => null])
<div class="field">
    <label for="{{ $id }}">{{ $label }}</label>
    <input id="{{ $id }}" name="{{ $name }}" type="{{ $type }}" value="{{ $value }}" @if($maxlength) maxlength="{{ $maxlength }}" @endif @if($min !== null) min="{{ $min }}" @endif @if($max !== null) max="{{ $max }}" @endif @if($step !== null) step="{{ $step }}" @endif @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif @required($required) {{ $attributes }}>
</div>
