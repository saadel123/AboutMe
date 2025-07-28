<x-admin.ui.form-card 
    :title="isset($service) ? 'Modifier un service' : 'Ajouter un service'"
    :action="isset($service) ? route('admin.services.update', $service) : route('admin.services.store')" 
    :method="isset($service) ? 'PUT' : 'POST'" 
    enctype="multipart/form-data"
    :show-reset="!isset($service)"
    submit-label="{{ isset($service) ? 'Mettre à jour' : 'Créer' }}"
>

    <div class="row">
        @foreach (config('languages.available') as $lang)
            <div class="col-md-4">
                <x-admin.ui.inputs.text 
                    id="title_{{ $lang }}" 
                    name="title[{{ $lang }}]"
                    label="Titre ({{ strtoupper($lang) }})" 
                    placeholder="Saisir le titre en {{ strtoupper($lang) }}"
                    :value="$service->title[$lang] ?? ''" 
                    :required="$lang === 'fr'" />
            </div>
        @endforeach
        @foreach (config('languages.available') as $lang)
            <div class="col-md-4">
                <x-admin.ui.inputs.tinymce 
                    id="description_{{ $lang }}" 
                    name="description[{{ $lang }}]"
                    label="Description ({{ strtoupper($lang) }})" 
                    placeholder="Saisir la description en {{ strtoupper($lang) }}"
                    :value="$service->description[$lang] ?? ''" 
                     />
            </div>
        @endforeach

        {{-- Image --}}
        <div class="col-12 mb-4">
            <x-admin.ui.inputs.image-upload
                :value="isset($service) ? ($service->image ?? null) : null"
                :deleteUrl="isset($service) ? route('admin.services.removeImage', $service) : null" />
        </div>
    </div>

</x-admin.ui.form-card>
