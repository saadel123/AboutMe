<x-admin.ui.form-card
    :title="isset($slide) ? 'Modifier un slide' : 'Ajouter un slide'"
    :action="isset($slide) ? route('admin.slides.update', $slide) : route('admin.slides.store')"
    :method="isset($slide) ? 'PUT' : 'POST'"
    :show-reset="!isset($slide)"
    submit-label="{{ isset($slide) ? 'Mettre à jour' : 'Créer' }}"
    enctype="multipart/form-data">

    <div class="row">
        {{-- Titles --}}
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="title_{{ $lang }}"
                name="title[{{ $lang }}]"
                label="Titre ({{ strtoupper($lang) }})"
                placeholder="Saisir le titre en {{ strtoupper($lang) }}"
                :value="$slide->title[$lang] ?? ''" />
        </div>
        @endforeach

        {{-- Descriptions --}}
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="description_{{ $lang }}"
                name="description[{{ $lang }}]"
                label="Description ({{ strtoupper($lang) }})"
                placeholder="Saisir la description en {{ strtoupper($lang) }}"
                :value="$slide->description[$lang] ?? ''" />
        </div>
        @endforeach

        {{-- Files per language --}}
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.file-multiple-lang
                :lang="$lang"
                id="file_{{ $lang }}"
                id_in_table="{{$slide->id}}"
                name="file[{{ $lang }}]"
                url_delete="/admin/slides/delete-file"
                label="Fichiers ({{ strtoupper($lang) }})"
                :existingFiles="isset($slide->file[$lang]) ? (array) $slide->file[$lang] : []"
                accept="image/*,video/*,application/pdf"
                :required="false" />
        </div>
        @endforeach


        {{-- Image upload --}}
        <div class="col-md-6">
            <x-admin.ui.inputs.image-upload
                :value="isset($slide) ? ($slide->image ?? null) : null"
                :deleteUrl="isset($slide) ? route('admin.slides.removeImage', $slide) : null" />
        </div>

        {{-- Background --}}
        <div class="col-md-6">
            <x-admin.ui.inputs.image-upload
                id="background"
                name="background"
                label="Image de fond"
                placeholder="Télécharger une image de fond"
                :value="isset($slide) ? ($slide->background ?? null) : null"
                :deleteUrl="isset($slide) ? route('admin.slides.destroyBackground', $slide) : null" />
        </div>

        {{-- Order --}}
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="order"
                name="order"
                label="Ordre"
                placeholder="Ex: 1"
                :value="$slide->order ?? ''" />
        </div>

        {{-- Active status --}}
        <div class="col-md-4">
            <x-admin.ui.inputs.checkbox
                id="is_active"
                name="is_active"
                label="Actif"
                :value="1"
                :checked="isset($slide) ? $slide->is_active : true" />
        </div>

    </div>
</x-admin.ui.form-card>