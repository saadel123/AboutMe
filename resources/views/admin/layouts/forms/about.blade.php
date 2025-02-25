<div class="col-4">
    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" name="fullname" class="form-control" id="fullname" required
        value="{{ old('fullname', $about->fullname ?? '') }}">
    @error('fullname')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" required
        value="{{ old('email', $about->email ?? '') }}">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" class="form-control" id="age"
        value="{{ old('age', $about->age ?? '') }}">
    @error('age')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="phone" class="form-label">Phone Number </label>
    <input type="text" name="phone" class="form-control" id="phone"
        value="{{ old('phone', $about->phone ?? '') }}">
    @error('phone')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="headline_fr" class="form-label">Headline FR</label>
    <input type="text" name="headline_fr" class="form-control" id="headline_fr"
        value="{{ old('headline_fr', $about->headline_fr ?? '') }}">
    @error('headline_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="headline_en" class="form-label">Headline EN</label>
    <input type="text" name="headline_en" class="form-control" id="headline_en"
        value="{{ old('headline_en', $about->headline_en ?? '') }}">
    @error('headline_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="headline_de" class="form-label">Headline DE</label>
    <input type="text" name="headline_de" class="form-control" id="headline_de"
        value="{{ old('headline_de', $about->headline_de ?? '') }}">
    @error('headline_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="location_fr" class="form-label">Location FR</label>
    <input type="text" name="location_fr" class="form-control" id="location_fr"
        value="{{ old('location_fr', $about->location_fr ?? '') }}">
    @error('location_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="location_en" class="form-label">Location EN</label>
    <input type="text" name="location_en" class="form-control" id="location_en"
        value="{{ old('location_en', $about->location_en ?? '') }}">
    @error('location_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="location_de" class="form-label">Location DE</label>
    <input type="text" name="location_de" class="form-control" id="location_de"
        value="{{ old('location_de', $about->location_de ?? '') }}">
    @error('location_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="title_fr" class="form-label">Profession FR</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr"
        value="{{ old('title_fr', $about->title_fr ?? '') }}">
    @error('title_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="title_en" class="form-label">Profession EN</label>
    <input type="text" name="title_en" class="form-control" id="title_en"
        value="{{ old('title_en', $about->title_en ?? '') }}">
    @error('title_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="title_de" class="form-label">Profession DE</label>
    <input type="text" name="title_de" class="form-control" id="title_de"
        value="{{ old('title_de', $about->title_de ?? '') }}">
    @error('title_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="description_fr" class="form-label">Description FR</label>
    <textarea name="description_fr" class="tinymce-editor">{{ old('description_fr', $about->description_fr ?? '') }}</textarea>
    @error('description_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="description_en" class="form-label">Description EN</label>
    <textarea name="description_en" class="tinymce-editor">{{ old('description_en', $about->description_en ?? '') }}</textarea>
    @error('description_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="description_de" class="form-label">Description DE</label>
    <textarea name="description_de" class="tinymce-editor">{{ old('description_de', $about->description_de ?? '') }}</textarea>
    @error('description_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="col-4">
    <label for="diploma_fr" class="form-label">Diploma FR</label>
    <textarea name="diploma_fr" class="form-control" id="diploma_fr">{{ old('diploma_fr', $about->diploma_fr ?? '') }}</textarea>
    @error('diploma_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="diploma_en" class="form-label">Diploma EN</label>
    <textarea name="diploma_en" class="form-control" id="diploma_en">{{ old('diploma_en', $about->diploma_en ?? '') }}</textarea>
    @error('diploma_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="diploma_de" class="form-label">Diploma DE</label>
    <textarea name="diploma_de" class="form-control" id="diploma_de">{{ old('diploma_de', $about->diploma_de ?? '') }}</textarea>
    @error('diploma_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="experince_fr" class="form-label">Work experience FR</label>
    <textarea name="experince_fr" class="form-control" id="experince_fr">{{ old('experince_fr', $about->experince_fr ?? '') }}</textarea>
    @error('experince_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="experince_en" class="form-label">Work experience EN</label>
    <textarea name="experince_en" class="form-control" id="experince_en">{{ old('experince_en', $about->experince_en ?? '') }}</textarea>
    @error('experince_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="experince_de" class="form-label">Work experience DE</label>
    <textarea name="experince_de" class="form-control" id="experince_de">{{ old('experince_de', $about->experince_de ?? '') }}</textarea>
    @error('experince_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<h2 class="mt-4 mb-3 text-primary border-bottom pb-2">Home Page Section Descriptions</h2>

<div class="col-4">
    <label for="portfolio_description_fr" class="form-label">Portfolio Description FR</label>
    <textarea name="portfolio_description_fr" class="form-control" id="portfolio_description_fr">{{ old('portfolio_description_fr', $about->portfolio_description_fr ?? '') }}</textarea>
    @error('portfolio_description_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="portfolio_description_en" class="form-label">Portfolio Description EN</label>
    <textarea name="portfolio_description_en" class="form-control" id="portfolio_description_en">{{ old('portfolio_description_en', $about->portfolio_description_en ?? '') }}</textarea>
    @error('portfolio_description_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="portfolio_description_de" class="form-label">Portfolio Description DE</label>
    <textarea name="portfolio_description_de" class="form-control" id="portfolio_description_de">{{ old('portfolio_description_de', $about->portfolio_description_de ?? '') }}</textarea>
    @error('portfolio_description_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="certificate_description_fr" class="form-label">Certificate Description FR</label>
    <textarea name="certificate_description_fr" class="form-control" id="certificate_description_fr">{{ old('certificate_description_fr', $about->certificate_description_fr ?? '') }}</textarea>
    @error('certificate_description_fr')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="certificate_description_en" class="form-label">Certificate Description EN</label>
    <textarea name="certificate_description_en" class="form-control" id="certificate_description_en">{{ old('certificate_description_en', $about->certificate_description_en ?? '') }}</textarea>
    @error('certificate_description_en')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="certificate_description_de" class="form-label">Certificate Description DE</label>
    <textarea name="certificate_description_de" class="form-control" id="certificate_description_de">{{ old('certificate_description_de', $about->certificate_description_de ?? '') }}</textarea>
    @error('certificate_description_de')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
