@props([
'id' => 'files',
'name' => 'files[]',
'label' => 'Fichiers',
'accept' => 'image/*,video/*,application/pdf',
'required' => false,
'existingFiles' => [],
])

<div class="mb-4">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="file" id="{{ $id }}" name="{{ $name }}" class="form-control" multiple
        accept="{{ $accept }}" {{ $required ? 'required' : '' }}>

    {{-- Laravel supports nested file errors like files.0, files.1, etc --}}
    @if ($errors->has(str_replace('[]', '', $name) . '.*'))
    @foreach ($errors->get(str_replace('[]', '', $name) . '.*') as $error)
    <span class="text-danger text-left d-block">{{ $error[0] }}</span>
    @endforeach
    @endif
</div>

{{-- Resources Preview --}}
@if (!empty($existingFiles))
<div class="row" id="resources-container">
    @foreach ($existingFiles as $resource)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4 resource-item" data-id="{{ $resource->id }}">
        <div class="card h-100 border-0">
            <div class="position-relative">
                @if (Str::startsWith($resource->mime_type, 'image/'))
                <img class="card-img-top img-fluid"
                    src="{{ asset('storage/' . $resource->file_path) }}" alt="Image">
                @elseif (Str::startsWith($resource->mime_type, 'video/'))
                <video controls class="w-100" style="height: 200px; object-fit: cover;">
                    <source src="{{ asset('storage/' . $resource->file_path) }}"
                        type="{{ $resource->mime_type }}">
                </video>
                @elseif ($resource->mime_type === 'application/pdf')
                <div class="d-flex align-items-center justify-content-center"
                    style="height: 200px; background: #f0f0f0;">
                    <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank"
                        class="text-decoration-none">
                        <i class="bi bi-file-earmark-pdf-fill text-danger fs-1"></i><br>Voir PDF
                    </a>
                </div>
                @endif

                <div class="position-absolute top-0 end-0 p-2 bg-white rounded-bottom-start"
                    style="opacity: 0.9;">
                    <button type="button" onclick="deleteResource('{{ $resource->id }}', this)"
                        class="btn btn-sm btn-link text-danger p-0 m-0" title="Supprimer">
                        <i class="bi bi-x-circle-fill fs-5"></i>
                    </button>
                </div>
            </div>
            <div class="card-body text-center p-2">
                <small class="text-muted">{{ strtoupper($resource->file_type) }}</small>
                @if ($resource->is_main)
                <div class="badge bg-primary mt-1">Principal</div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@push('scripts')
<script>
    // Reusable delete handler
    async function handleDelete(url, button, successCallback) {
        if (!confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) return;

        const originalHtml = button.innerHTML;
        button.innerHTML = '<i class="bi bi-arrow-clockwise fs-5"></i>';
        button.disabled = true;

        try {
            const response = await fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });

            if (!response.ok) throw new Error('Erreur réseau');

            const data = await response.json();

            if (!data.success) throw new Error(data.message || 'Erreur lors de la suppression');

            if (typeof successCallback === 'function') {
                successCallback(data);
            }

            showToast('success', data.message || 'Supprimé avec succès');
        } catch (error) {
            console.error(error);
            showToast('error', error.message, false);
        } finally {
            button.disabled = false;
            button.innerHTML = originalHtml;
        }
    }

    function deleteResource(id, button) {
        const url = "{{ route('admin.resources.destroy', ':id') }}".replace(':id', id);

        handleDelete(url, button, (data) => {
            const resourceItem = document.querySelector(`.resource-item[data-id="${id}"]`);
            if (resourceItem) resourceItem.remove();
        });
    }
</script>
@endpush