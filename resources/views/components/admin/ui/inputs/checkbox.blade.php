@props(['id', 'name', 'label' => '', 'value' => 1, 'checked' => false])

<div class="form-check mb-3">
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox"
        class="form-check-input @error($name) is-invalid @enderror"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        {{ old($name, $checked) ? 'checked' : '' }}>
    <label class="form-check-label" for="{{ $id }}">
        {{ $label }}
    </label>

    @error($name)
    <span class="invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>