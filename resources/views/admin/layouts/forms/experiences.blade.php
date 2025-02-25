<div class="col-4">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control @error('title_fr') is-invalid @enderror" id="title_fr" required
        value="{{ old('title_fr', $experience->title_fr ?? '') }}">
    @error('title_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" id="title_en" required
        value="{{ old('title_en', $experience->title_en ?? '') }}">
    @error('title_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="title_de" class="form-label">Titre de</label>
    <input type="text" name="title_de" class="form-control @error('title_de') is-invalid @enderror" id="title_de" required
        value="{{ old('title_de', $experience->title_de ?? '') }}">
    @error('title_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="description_fr" class="form-label">Description FR</label>
    <textarea name="description_fr" class="tinymce-editor @error('description_fr') is-invalid @enderror">{{ old('description_fr', $experience->description_fr ?? '') }}</textarea>
    @error('description_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="description_en" class="form-label">Description EN</label>
    <textarea name="description_en" class="tinymce-editor @error('description_en') is-invalid @enderror">{{ old('description_en', $experience->description_en ?? '') }}</textarea>
    @error('description_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="description_de" class="form-label">Description DE</label>
    <textarea name="description_de" class="tinymce-editor @error('description_de') is-invalid @enderror">{{ old('description_de', $experience->description_de ?? '') }}</textarea>
    @error('description_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="lieu" class="form-label">lieu</label>
    <input type="text" name="lieu" class="form-control @error('lieu') is-invalid @enderror" id="lieu"
        value="{{ old('lieu', $experience->lieu ?? '') }}">
    @error('lieu')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="datedebut" class="form-label">Date debut</label>
    <input type="date" name="datedebut" class="form-control @error('datedebut') is-invalid @enderror" id="datedebut" required
        value="{{ old('datedebut', $experience->datedebut ?? '') }}">
    @error('datedebut')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="datefin" class="form-label">Date Fin</label>
    <input type="date" name="datefin" class="form-control @error('datefin') is-invalid @enderror" id="datefin"
        value="{{ old('datefin', $experience->datefin ?? '') }}">
    @error('datefin')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
