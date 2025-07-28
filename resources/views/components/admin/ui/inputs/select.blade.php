@props([
    'id',
    'name',
    'label' => null,
    'options' => [],
    'selected' => '',
    'required' => false,
    'placeholder' => '',
    'class' => '',
    'multiple' => false,
])

<div class="mb-4 col-md-12">
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    <select
        id="{{ $id }}"
        name="{{ $name }}"
        class="form-select {{ $class }} @error($name) is-invalid @enderror"
        {{ $required ? 'required' : '' }}
        @if($multiple) multiple @endif
    >
        @if ($placeholder && !$multiple)
            <option value="">{{ $placeholder }}</option>
        @endif

        @foreach ($options as $optionValue => $optionLabel)
            @if ($multiple)
                <option value="{{ $optionValue }}" {{ collect(old($name, $selected))->contains($optionValue) ? 'selected' : '' }}>
                    {{ $optionLabel }}
                </option>
            @else
                <option value="{{ $optionValue }}" {{ old($name, $selected) == $optionValue ? 'selected' : '' }}>
                    {{ $optionLabel }}
                </option>
            @endif
        @endforeach
    </select>

    @error($name)
        <span class="error invalid-feedback d-block">{{ $message }}</span>
    @enderror
</div>
