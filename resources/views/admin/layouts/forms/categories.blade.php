<div class="col-12">
    <label for="name" class="form-label">name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
        value="{{ old('name', $category->name ?? '') }}">
    @error('name')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>
<div class="col-12">
    <label for="description" class="form-label">description</label>
    <input type="text" name="description" class="form-control @error('name') is-invalid @enderror" id="description"
        value="{{ old('description', $category->description ?? '') }}">
    @error('description')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>
