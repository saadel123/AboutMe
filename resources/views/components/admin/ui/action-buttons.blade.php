@props([
    'editRoute' => null,
    'deleteRoute' => null,
    'showRoute' => null,
    'deleteTitle' => 'Supprimer',
    'editTitle' => 'Modifier',
    'showTitle' => 'Voir',
])

<div class="action-buttons d-flex gap-2">
    @if ($showRoute)
        <a href="{{ $showRoute }}" class="btn btn-sm btn-info" title="{{ $showTitle }}">
            <i class="bi bi-eye"></i>
        </a>
    @endif

    @if ($editRoute)
        <a href="{{ $editRoute }}" class="btn btn-sm btn-warning" title="{{ $editTitle }}">
            <i class="bi bi-pencil"></i>
        </a>
    @endif

    @if ($deleteRoute)
        <button class="btn btn-sm btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal"
            data-url="{{ $deleteRoute }}" title="{{ $deleteTitle }}">
            <i class="bi bi-trash"></i>
        </button>
    @endif
</div>
