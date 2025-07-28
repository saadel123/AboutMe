@props([
    'title',
    'action',
    'method' => 'POST',
    'submitLabel' => 'Enregistrer',
    'enctype' => false,
    'showReset' => false,
])
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>

        <form action="{{ $action }}" method="POST" class="row g-3"
            @if ($enctype) enctype="{{ $enctype }}" @endif>
            @csrf
            @if (strtoupper($method) === 'PUT')
                @method('PUT')
            @endif

            {{ $slot }}

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">{{ $submitLabel }}</button>
                @if ($showReset)
                    <button type="reset" class="btn btn-secondary">Réinitialiser</button>
                @endif
            </div>
        </form>
    </div>
</div>
