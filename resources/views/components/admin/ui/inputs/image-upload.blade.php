@props([
'id' => 'image',
'name' => 'image',
'label' => 'Image principale',
'value' => null, // pass $blog->image
'deleteUrl' => null, // pass route
'DeleteId' => null,
])

<div class="mb-4">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="file" id="{{ $id }}" name="{{ $name }}" accept="image/*" class="form-control">

    @error($name)
    <span class="text-danger d-block">{{ $message }}</span>
    @enderror

    @if ($value)
    <div class="mt-2 position-relative d-inline-block">
        <img src="{{ asset('storage/' . $value) }}" alt="Image principale"
            style="max-height: 200px; border-radius: .25rem;width: 100%;">
        <div class="position-absolute top-0 end-0 p-2 bg-white rounded-bottom-start" style="opacity: 0.9;">
            <button type="button" onclick="deleteMainImage('{{ $deleteUrl }}', this)"
                class="btn btn-sm btn-link text-danger p-0 m-0" title="Supprimer l'image principale">
                <i class="bi bi-x-circle-fill fs-5"></i>
            </button>
        </div>
    </div>
    @endif
</div>

@push('scripts')
<script>
    // Reusable toast function
    function showToast(icon, title, isSuccess = true) {
        const config = {
            toast: true,
            position: 'top-end',
            icon: icon,
            title: title,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        };

        if (isSuccess) {
            Object.assign(config, {
                iconColor: '#dc3545',
                background: '#f8d7da',
                color: '#721c24'
            });
        } else {
            Object.assign(config, {
                iconColor: '#dc3545',
                background: '#f8d7da',
                color: '#721c24'
            });
        }

        Swal.fire(config);
    }

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

    // Specific delete functions
    function deleteMainImage(deleteUrl, button) {

        handleDelete(deleteUrl, button, (data) => {
            button.closest('.position-relative').remove();
        });
    }

    // function deleteResource(id, button) {
    //     const url = "{{ route('admin.resources.destroy', ':id') }}".replace(':id', id);

    //     handleDelete(url, button, (data) => {
    //         const resourceItem = document.querySelector(`.resource-item[data-id="${id}"]`);
    //         if (resourceItem) resourceItem.remove();
    //     });
    // }
</script>
@endpush