<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr"
        value="{{ old('title_fr', $service->title_fr ?? '') }}">
    @error('title_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en"
        value="{{ old('title_en', $service->title_en ?? '') }}">
    @error('title_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="title_de" class="form-label">Titre de</label>
    <input type="text" name="title_de" class="form-control" id="title_de"
        value="{{ old('title_de', $service->title_de ?? '') }}">
    @error('title_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description</label>
    <textarea name="description_fr" class="form-control" id="description_fr">{{ old('description_fr', $service->description_fr ?? '') }}</textarea>
    @error('description_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="description_en" class="form-label">Description En</label>
    <textarea name="description_en" class="form-control" id="description_en">{{ old('description_en', $service->description_en ?? '') }}</textarea>
    @error('description_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="description_de" class="form-label">Description de</label>
    <textarea name="description_de" class="form-control" id="description_de">{{ old('description_de', $service->description_de ?? '') }}</textarea>
    @error('description_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="icon" class="form-label">icon</label>
    <input type="file" name="icon" class="form-control" id="icon">
    @error('icon')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
