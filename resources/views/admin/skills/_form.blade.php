<x-admin.ui.form-card
    :title="isset($skill) ? 'Modifier une compétence' : 'Ajouter une compétence'"
    :action="isset($skill) ? route('admin.skills.update', $skill) : route('admin.skills.store')"
    :method="isset($skill) ? 'PUT' : 'POST'"
    enctype="multipart/form-data"
    :show-reset="!isset($skill)"
    submit-label="{{ isset($skill) ? 'Mettre à jour' : 'Créer' }}">

    <div class="row">
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="title_{{ $lang }}"
                name="title[{{ $lang }}]"
                label="Titre ({{ strtoupper($lang) }})"
                placeholder="Saisir le titre en {{ strtoupper($lang) }}"
                :value="$skill->title[$lang] ?? ''"
                :required="$lang === 'fr'" />
        </div>
        @endforeach
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="percent_{{ $lang }}"
                name="percent[{{ $lang }}]"
                label="Pourcentage ({{ strtoupper($lang) }})"
                placeholder="Ex: 85"
                :value="$skill->percent[$lang] ?? ''" />
        </div>
        @endforeach
        {{-- icon --}}
        <div class="col-12 mb-4">
            <x-admin.ui.inputs.image-upload
                id="icon"
                name="icon"
                label="Icône"
                placeholder="Télécharger une icône"
                :value="isset($skill) ? ($skill->icon ?? null) : null"
                :deleteUrl="isset($skill) ? route('admin.skills.removeImage', $skill) : null" />
        </div>
    </div>

</x-admin.ui.form-card>