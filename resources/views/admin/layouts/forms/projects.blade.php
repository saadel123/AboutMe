@section('stylesheet')
@endsection
<div class="col-4">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr"
        value="{{ old('title_fr', $project->title_fr ?? '') }}">
    @error('title_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en"
        value="{{ old('title_en', $project->title_en ?? '') }}">
    @error('title_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="title_de" class="form-label">Titre de</label>
    <input type="text" name="title_de" class="form-control" id="title_de"
        value="{{ old('title_de', $project->title_de ?? '') }}">
    @error('title_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Description (FR)</h5>
            <textarea class="tinymce-editor" name="description_fr">{!! old('description_fr', $project->description_fr ?? '') !!}</textarea>
            @error('description_fr')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="col-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Description (EN)</h5>
            <textarea class="tinymce-editor" name="description_en">{!! old('description_en', $project->description_en ?? '') !!}</textarea>
            @error('description_en')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="col-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Description (DE)</h5>
            <textarea class="tinymce-editor" name="description_de">{!! old('description_de', $project->description_de ?? '') !!}</textarea>
            @error('description_de')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="col-4">
    <label for="link" class="form-label">Categories</label>
    <select id="categories" name="categories[]" class="form-control select2" multiple="multiple">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (in_array($category->id, old('categories', isset($project) ? $project->categories->pluck('id')->toArray() : []))) selected @endif>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="col-4">
    <label for="link" class="form-label">Website Link</label>
    <input type="text" name="link" class="form-control" id="link"
        value="{{ old('link', $project->link ?? '') }}">
    @error('link')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="github_link" class="form-label">Github link</label>
    <input type="text" name="github_link" class="form-control" id="github_link"
        value="{{ old('github_link', $project->github_link ?? '') }}">
    @error('github_link')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="image" class="form-label">Image Principale</label>
    <input type="file" name="image" class="form-control" id="image">
    @error('image')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="video" class="form-label">Video</label>
    <input type="file" name="video" class="form-control" id="video">
    @error('video')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="images" class="form-label">Images</label>
    <input type="file" multiple name="images[]" class="form-control" id="images">
    @error('images')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <div class="upload-image mb-16 d-flex flex-wrap mt-4">
        @if (isset($project) && $project->images->count() > 0)
            @foreach ($project->images as $image)
                <div class="item m-2">
                    <div style="display: flex;justify-content: flex-start;">
                        <a href="{{ route('image.destroy', $image->id) }}"
                            onclick="if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {window.location.href = url;} return false"
                            style="color:red" class="bi bi-x-circle-fill"></a>
                    </div>
                    <img src="{{ asset('storage/' . $image->url) }}" style="max-height: 100px;"
                        alt="{{ $image->url }}">
                </div>
            @endforeach
        @endif
    </div>
</div>

<div class="col-12">
    <label for="images_code" class="form-label">Images Code</label>
    <input type="file" multiple name="images_code[]" class="form-control" id="images_code">
    @error('images_code')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#categories').select2({
                tags: true,
                placeholder: 'Select or add categories',
                tokenSeparators: [',', ' '],
                width: '100%'
            });
        });
    </script>
@endsection
