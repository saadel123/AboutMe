<x-admin.ui.form-card
    :title="isset($education) ? 'Modifier une éducation' : 'Ajouter une éducation'"
    :action="isset($education) ? route('admin.educations.update', $education) : route('admin.educations.store')"
    :method="isset($education) ? 'PUT' : 'POST'"
    :show-reset="!isset($education)"
    enctype="multipart/form-data"
    submit-label="{{ isset($education) ? 'Mettre à jour' : 'Créer' }}">

    <div class="row">
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="title_{{ $lang }}"
                name="title[{{ $lang }}]"
                label="Titre ({{ strtoupper($lang) }})"
                placeholder="Saisir le titre en {{ strtoupper($lang) }}"
                :value="$education->title[$lang] ?? ''"
                :required="$lang === 'fr'" />
        </div>
        @endforeach
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text
                id="lieu_{{ $lang }}"
                name="lieu[{{ $lang }}]"
                label="Lieu ({{ strtoupper($lang) }})"
                placeholder="Saisir le lieu en {{ strtoupper($lang) }}"
                :value="$education->lieu[$lang] ?? ''"
                :required="$lang === 'fr'" />
        </div>
        @endforeach
    </div>

    <div class="row">
        {{-- Date début --}}
        <div class="col-md-6">
            <x-admin.ui.inputs.text
                id="start_date"
                name="start_date"
                label="Date de début"
                type="date"
                :value="$education->start_date ?? ''"
                required />
        </div>

        {{-- Date fin --}}
        <div class="col-md-6">
            <x-admin.ui.inputs.text
                id="end_date"
                name="end_date"
                label="Date de fin"
                type="date"
                :value="$education->end_date ?? ''" />
        </div>
    </div>

</x-admin.ui.form-card>