<x-admin.ui.form-card :title="isset($blog) ? 'Modifier un blog' : 'Ajouter un blog'" :action="isset($blog) ? route('admin.blogs.update', $blog) : route('admin.blogs.store')" :method="isset($blog) ? 'PUT' : 'POST'" enctype="multipart/form-data"
    :show-reset="!isset($blog)" submit-label="{{ isset($blog) ? 'Mettre à jour' : 'Créer' }}">
    <div class="row">
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.text id="title_{{ $lang }}" name="title[{{ $lang }}]"
                label="Titre ({{ strtoupper($lang) }})" placeholder="Saisir le titre en {{ strtoupper($lang) }}"
                :value="$blog->title[$lang] ?? ''" :required="$lang === 'fr'" />
        </div>
        @endforeach
        @foreach (config('languages.available') as $lang)
        <div class="col-md-4">
            <x-admin.ui.inputs.tinymce id="content_{{ $lang }}" name="content[{{ $lang }}]"
                label="Contenu ({{ strtoupper($lang) }})" placeholder="Saisir le contenu en {{ strtoupper($lang) }}"
                :value="$blog->content[$lang] ?? ''" :required="$lang === 'fr'" />
        </div>
        @endforeach
    </div>


    <div class="row">
        {{-- Image principale --}}
        <div class="col-12 mb-4">
             <x-admin.ui.inputs.image-upload 
                :value="isset($blog) ? ($blog->image ?? null) : null" 
                :deleteUrl="isset($blog) ? route('admin.blogs.removeImage', $blog) : null" 
            />
        </div>

        {{-- Fichiers --}}
        <div class="col-12">
            <x-admin.ui.inputs.file-multiple label="Fichiers (images, vidéos, PDF)" :existingFiles="$blog->resources ?? []" />
        </div>
    </div>
    <div class="row">
        {{-- Date --}}
        <div class="col-md-6">
            <x-admin.ui.inputs.text id="date" name="date" label="Date de publication" type="date"
                :value="$blog->date ?? ''" required />
        </div>
    </div>
</x-admin.ui.form-card>