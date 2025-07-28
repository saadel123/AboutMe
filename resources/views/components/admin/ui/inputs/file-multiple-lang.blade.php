@props([
'id' => '',
'name' => '',
'label' => '',
'lang' => '',
'id_in_table' => '',
'accept' => 'image/*,video/*,application/pdf',
'required' => false,
'existingFiles' => [],
'url_delete' => '',
])

<div class="mb-4">
    <label for="{{ $id }}" class="form-label fw-bold">{{ $label }}</label>

    <input type="file" id="{{ $id }}" name="{{ $name }}" class="form-control"
        accept="{{ $accept }}" {{ $required ? 'required' : '' }}>

    @if (!empty($existingFiles))
    <div class="mt-3">
        @foreach ($existingFiles as $key => $file)
        <div class="d-flex justify-content-between align-items-center mb-2 p-2 rounded bg-light shadow-sm">
            <div class="d-flex align-items-center flex-column m-auto">
                @php
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                $isPdf = strtolower($ext) === 'pdf';
                $baseName = basename($file);
                $displayName = strlen($baseName) > 20 ? substr($baseName, 0, 20) . '...' : $baseName;
                @endphp

                @if ($isPdf)
                <i style="font-size: 60px;" class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>
                @else
                <i style="font-size: 60px;" class="bi bi-file-earmark-fill text-primary me-2"></i>
                @endif

                <a href="{{ asset('storage/'.$file) }}" target="_blank" class="text-decoration-none">
                    {{ $displayName }}
                </a>
            </div>
            @if($url_delete)
            <button type="button" class="btn btn-danger btn-sm delete-file"
                data-file-path="{{ $file }}"
                data-lang="{{ $lang }}"
                data-input-name="{{ $name }}">
                <i class="bi bi-trash"></i>
            </button>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror

    @php
    $baseNameInput = str_replace('[]', '', $name);
    @endphp

    @if ($errors->has($baseNameInput . '.*'))
    @foreach ($errors->get($baseNameInput . '.*') as $error)
    <span class="text-danger text-left d-block">{{ $error[0] }}</span>
    @endforeach
    @endif
</div>
@push('scripts')
@if($url_delete)
<script>
    // Use a flag to ensure initialization happens only once
    if (!window.slideFileDeleteInitialized) {
        window.slideFileDeleteInitialized = true;

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-file').forEach(button => {
                button.addEventListener('click', function() {
                    const filePath = this.getAttribute('data-file-path');
                    const lang = this.getAttribute('data-lang');
                    const inputName = this.getAttribute('data-input-name');

                    if (confirm('Are you sure you want to delete this file?')) {
                        fetch('{{ url( $url_delete) }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    file_path: filePath,
                                    lang: lang,
                                    id_in_table: '{{ $id_in_table ?? 0 }}'
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    this.parentElement.remove();
                                    const container = this.closest('.mt-3');
                                    if (container && container.querySelectorAll('.delete-file').length === 0) {
                                        container.remove();
                                    }
                                } else {
                                    alert('Error deleting file: ' + data.message);
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('An error occurred while deleting the file');
                            });
                    }
                });
            });
        });
    }
</script>
@endif
@endpush