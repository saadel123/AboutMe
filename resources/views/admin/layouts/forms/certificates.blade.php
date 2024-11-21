<div class="col-12">
    <label for="title_fr" class="form-label">Titre (FR)</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr"
           value="{{ old('title_fr', $certificate->title_fr ?? '') }}">
</div>
<div class="col-12">
    <label for="title_en" class="form-label">Titre (EN)</label>
    <input type="text" name="title_en" class="form-control" id="title_en"
           value="{{ old('title_en', $certificate->title_en ?? '') }}">
</div>
<div class="col-12">
    <label for="title_de" class="form-label">Titre (DE)</label>
    <input type="text" name="title_de" class="form-control" id="title_de"
           value="{{ old('title_de', $certificate->title_de ?? '') }}">
</div>
<div class="col-12">
    <label for="description_fr" class="form-label">Description (FR)</label>
    <textarea name="description_fr" class="form-control" id="description_fr" rows="5">{{ old('description_fr', $certificate->description_fr ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_en" class="form-label">Description (EN)</label>
    <textarea name="description_en" class="form-control" id="description_en" rows="5">{{ old('description_en', $certificate->description_en ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_de" class="form-label">Description (DE)</label>
    <textarea name="description_de" class="form-control" id="description_de" rows="5">{{ old('description_de', $certificate->description_de ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="link" class="form-label">Lien</label>
    <input type="text" name="link" class="form-control" id="link"
           value="{{ old('link', $certificate->link ?? '') }}">
</div>
<div class="col-12">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="image">
</div>
