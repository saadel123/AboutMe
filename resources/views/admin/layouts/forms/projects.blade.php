<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr"
        value="{{ old('title_fr', $project->title_fr ?? '') }}">
</div>
<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en"
        value="{{ old('title_en', $project->title_en ?? '') }}">
</div>
<div class="col-12">
    <label for="title_de" class="form-label">Titre de</label>
    <input type="text" name="title_de" class="form-control" id="title_de"
        value="{{ old('title_de', $project->title_de ?? '') }}">
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description</label>
    <textarea name="description_fr" class="form-control" id="description_fr" rows="8"  >  {{ old('description_fr', $project->description_fr ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_en" class="form-label">Description En</label>
    <textarea name="description_en" class="form-control" id="description_en" rows="8"  >  {{ old('description_en', $project->description_en ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_de" class="form-label">Description de</label>
    <textarea name="description_de" class="form-control" id="description_de" rows="8" >  {{ old('description_de', $project->description_de ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="link" class="form-label">Link</label>
    <input type="text" name="link" class="form-control" id="link"
        value="{{ old('link', $project->link ?? '') }}">
</div>
<div class="col-12">
    <label for="image" class="form-label">Image Principale</label>
    <input type="file" name="image" class="form-control" id="image" >
</div>
<div class="col-12">
    <label for="video" class="form-label">Video</label>
    <input type="file" name="video" class="form-control" id="video" >
</div>
<div class="col-12">
    <label for="images" class="form-label">Images</label>
    <input type="file" multiple name="images[]" class="form-control" id="images" >
</div>
<div class="col-12">
    <label for="images_code" class="form-label">Images Code</label>
    <input type="file" multiple name="images_code[]" class="form-control" id="images_code" >
</div>

