@props(['id', 'name', 'label' => '', 'value' => '', 'placeholder' => '', 'required' => false])

@php
    // Convert name like "content[fr]" to "content.fr" for @error directive
    $errorKey = str_replace(['[', ']'], ['.', ''], $name);
@endphp

<div class="col-12 mb-4">
    <div class="card">
        <div class="card-body">
            @if ($label)
                <h5 class="card-title">{{ $label }}</h5>
            @endif

            <textarea id="{{ $id }}" name="{{ $name }}"
                class="tinymce-editor form-control @error($errorKey) is-invalid @enderror" placeholder="{{ $placeholder }}">{!! old($name, $value) !!}</textarea>

            @error($errorKey)
                <span class="text-danger d-block">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
