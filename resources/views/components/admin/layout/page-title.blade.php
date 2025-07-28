@props(['title', 'createRoute' => null, 'createLabel' => 'Ajouter', 'backRoute' => null, 'indexRoute' => null])

<div class="pagetitle">
    <h1>{{ $title }}</h1>
    <nav style="display: flex; justify-content: space-between; align-items: center;">
        <!-- Bloc gauche : Breadcrumb -->
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/admin/home">Accueil</a></li>
                <li class="breadcrumb-item {{ $indexRoute ? '' : 'active' }}">
                    @if ($indexRoute)
                        <a href="{{ $indexRoute }}">{{ $title }}</a>
                    @else
                        {{ $title }}
                    @endif
                </li>
            </ol>
        </div>

        <!-- Bloc droit : Boutons -->
        <div class="d-flex gap-2">
            @if ($backRoute)
                <a href="{{ $backRoute }}" class="btn btn-outline-primary">Retour</a>
            @endif

            @if ($createRoute)
                <a href="{{ $createRoute }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> {{ $createLabel }}
                </a>
            @endif
        </div>
    </nav>
</div>
