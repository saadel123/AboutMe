<x-admin.ui.form-card :title="isset($project) ? 'Modifier un project' : 'Ajouter un project'"
    :action="isset($project) ? route('admin.projects.update', $project) : route('admin.projects.store')"
    :method="isset($project) ? 'PUT' : 'POST'" 
    enctype="multipart/form-data"
    :show-reset="!isset($project)"
    submit-label="{{ isset($project) ? 'Mettre à jour' : 'Créer' }}">

    <div class="row">
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="title_{{ $lang }}"
                name="title[{{ $lang }}]"
                label="Titre ({{ strtoupper($lang) }})"
                placeholder="Saisir le titre en {{ strtoupper($lang) }}"
                :value="$project->title[$lang] ?? ''" />
        </div>
        @endforeach
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.tinymce
                id="description_{{ $lang }}"
                name="description[{{ $lang }}]"
                label="Description ({{ strtoupper($lang) }})"
                placeholder="Saisir la description en {{ strtoupper($lang) }}"
                :value="$project->description[$lang] ?? ''" />
        </div>
        @endforeach
    </div>

    <div class="row">

        {{-- Link --}}
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="link"
                name="link"
                label="Lien du projet"
                placeholder="https://example.com"
                :value="$project->link ?? ''" />
        </div>

        {{-- GitHub Link --}}
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="github_link"
                name="github_link"
                label="Lien GitHub"
                placeholder="https://github.com/..."
                :value="$project->github_link ?? ''" />
        </div>

        {{-- Video Link --}}
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="video"
                name="video"
                label="Lien vidéo"
                placeholder="https://youtube.com/..."
                :value="$project->video ?? ''" />
        </div>
        {{-- Categories --}}
        <div class="col-md-12">
            <x-admin.ui.inputs.select
                id="categories"
                name="categories[]"
                label="Catégories"
                :options="$categories->mapWithKeys(fn($c) => [$c->id => $c->title['fr'] ?? ''])->toArray()"
                :selected="isset($project) ? $project->categories->pluck('id')->toArray() : []"
                multiple="true"
                placeholder="Sélectionner ou ajouter des catégories"
                class="select2" />
        </div>
    </div>

    <div class="row">
        {{-- Image principale --}}
        <div class="col-12 mb-4">
            <x-admin.ui.inputs.image-upload
                :value="isset($project) ? ($project->image ?? null) : null"
                :deleteUrl="isset($project) ? route('admin.projects.removeImage', $project) : null" />
        </div>

        {{-- Fichiers --}}
        <div class="col-12">
            <x-admin.ui.inputs.file-multiple label="Fichiers (images, vidéos, PDF)" :existingFiles="$project->resources  ?? []" />
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#categories').select2({
                placeholder: 'Sélectionner ou ajouter des catégories',
                tags: true,
                tokenSeparators: [',', ' '],
                width: '100%'
            });
        });
    </script>

    @endpush
</x-admin.ui.form-card>