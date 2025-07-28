@props(['id', 'name', 'label' => null, 'checked' => false, 'required' => false])

<div class="form-check mb-4">
    <input class="form-check-input @error($name) is-invalid @enderror" type="radio" id="{{ $id }}" name="{{ $name }}" {{ $checked ? 'checked' : '' }} {{ $required ? 'required' : '' }}>
    @if ($label)
        <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
    @endif
    @error($name)
        <span class="error invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
