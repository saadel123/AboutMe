<div class="col-12">
    <label for="language" class="form-label">language</label>
    <input type="text" name="language" class="form-control @error('language') is-invalid @enderror" id="language"
        value="{{ old('language', $skill->language ?? '') }}">
    @error('language')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="percent" class="form-label">percent</label>
    <input type="text" name="percent" class="form-control @error('percent') is-invalid @enderror" id="percent"
        value="{{ old('percent', $skill->percent ?? '') }}">
    @error('percent')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>
