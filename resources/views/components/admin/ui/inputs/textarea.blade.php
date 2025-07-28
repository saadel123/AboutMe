@props(['id', 'name', 'label' => '', 'value' => '', 'placeholder' => '', 'rows' => 4, 'required' => false])

<div class="mb-4 col-12">
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    <textarea id="{{ $id }}" name="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}"
        class="form-control @error($name) is-invalid @enderror" {{ $required ? 'required' : '' }}>{{ old($name, $value) }}</textarea>

    @error($name)
        <span class="error invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
