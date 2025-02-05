<div class="col-12">
    <label for="title_fr" class="form-label">Titre (FR)</label>
    <input type="text" name="title_fr" class="form-control @error('title_fr') is-invalid @enderror" id="title_fr" required
           value="{{ old('title_fr', $certificate->title_fr ?? '') }}">
    @error('title_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="title_en" class="form-label">Titre (EN)</label>
    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" id="title_en" required
           value="{{ old('title_en', $certificate->title_en ?? '') }}">
    @error('title_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="title_de" class="form-label">Titre (DE)</label>
    <input type="text" name="title_de" class="form-control @error('title_de') is-invalid @enderror" id="title_de" required
           value="{{ old('title_de', $certificate->title_de ?? '') }}">
    @error('title_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description (FR)</label>
    <textarea name="description_fr" class="form-control @error('description_fr') is-invalid @enderror" id="description_fr" rows="5">{{ old('description_fr', $certificate->description_fr ?? '') }}</textarea>
    @error('description_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="description_en" class="form-label">Description (EN)</label>
    <textarea name="description_en" class="form-control @error('description_en') is-invalid @enderror" id="description_en" rows="5">{{ old('description_en', $certificate->description_en ?? '') }}</textarea>
    @error('description_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="description_de" class="form-label">Description (DE)</label>
    <textarea name="description_de" class="form-control @error('description_de') is-invalid @enderror" id="description_de" rows="5">{{ old('description_de', $certificate->description_de ?? '') }}</textarea>
    @error('description_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="link" class="form-label">Lien</label>
    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" id="link"
           value="{{ old('link', $certificate->link ?? '') }}">
    @error('link')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" required>
    @error('image')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
