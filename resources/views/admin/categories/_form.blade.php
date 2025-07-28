<x-admin.ui.form-card :title="isset($category) ? 'Modifier une category' : 'Ajouter une category'"
    :action="isset($category) ? route('admin.categories.update', $category) : route('admin.categories.store')"
    :method="isset($category) ? 'PUT' : 'POST'"
    enctype="multipart/form-data"
    :show-reset="!isset($category)"
    submit-label="{{ isset($category) ? 'Mettre à jour' : 'Créer' }}">

    <div class="row">
        @foreach (config('languages.available') as $lang)
            <div class="col-md-4">
                <x-admin.ui.inputs.text 
                    id="title_{{ $lang }}" 
                    name="title[{{ $lang }}]"
                    label="Titre ({{ strtoupper($lang) }})" 
                    placeholder="Saisir le titre en {{ strtoupper($lang) }}"
                    :value="$category->title[$lang] ?? ''" />
            </div>
        @endforeach
        @foreach (config('languages.available') as $lang)
            <div class="col-md-4">
                <x-admin.ui.inputs.text 
                    id="description_{{ $lang }}" 
                    name="description[{{ $lang }}]"
                    label="Description ({{ strtoupper($lang) }})" 
                    placeholder="Saisir la description en {{ strtoupper($lang) }}"
                    :value="$category->description[$lang] ?? ''" />
            </div>
        @endforeach
    </div>
</x-admin.ui.form-card>
