@props(['id', 'label', 'name', 'value' => '', 'maxlength' => null])
<div class="field">
    <label for="{{ $id }}">{{ $label }}</label>
    <textarea id="{{ $id }}" name="{{ $name }}" @if($maxlength) maxlength="{{ $maxlength }}" @endif {{ $attributes }}>{{ $value }}</textarea>
</div>
