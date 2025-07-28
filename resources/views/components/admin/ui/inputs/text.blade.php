@props(['id', 'name', 'label' => null, 'type' => 'text', 'value' => '', 'placeholder' => '', 'required' => false])

@php
    $errorKey = str_replace(['[', ']'], ['.', ''], $name);
@endphp

<div class="mb-4 col-md-12">
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    <input id="{{ $id }}" type="{{ $type }}" name="{{ $name }}"
        class="form-control @error($errorKey) is-invalid @enderror" value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}>

    @error($errorKey)
        <span class="error invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
