<div class="col-4">
    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" name="fullname" class="form-control" id="fullname"
        value="{{ old('fullname', $about->fullname ?? '') }}">
</div>

<div class="col-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email"
        value="{{ old('email', $about->email ?? '') }}">
</div>

<div class="col-4">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" class="form-control" id="age"
        value="{{ old('age', $about->age ?? '') }}">
</div>
<div class="col-4">
    <label for="location_fr" class="form-label">Location FR</label>
    <input type="text" name="location_fr" class="form-control" id="location_fr"
        value="{{ old('location_fr', $about->location_fr ?? '') }}">
</div>
<div class="col-4">
    <label for="location_en" class="form-label">Location EN</label>
    <input type="text" name="location_en" class="form-control" id="location_en"
        value="{{ old('location_en', $about->location_en ?? '') }}">
</div>
<div class="col-4">
    <label for="location_de" class="form-label">Location DE</label>
    <input type="text" name="location_de" class="form-control" id="location_de"
        value="{{ old('location_de', $about->location_de ?? '') }}">
</div>
<div class="col-4">
    <label for="title_fr" class="form-label">Title FR</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr"
        value="{{ old('title_fr', $about->title_fr ?? '') }}">
</div>
<div class="col-4">
    <label for="title_en" class="form-label">Title EN</label>
    <input type="text" name="title_en" class="form-control" id="title_en"
        value="{{ old('title_en', $about->title_en ?? '') }}">
</div>
<div class="col-4">
    <label for="title_de" class="form-label">Title DE</label>
    <input type="text" name="title_de" class="form-control" id="title_de"
        value="{{ old('title_de', $about->title_de ?? '') }}">
</div>
<div class="col-12">
    <label for="description_fr" class="form-label">Description FR</label>
    <textarea name="description_fr" class="form-control" id="description_fr" rows="9">{{ old('description_fr', $about->description_fr ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_en" class="form-label">Description EN</label>
    <textarea name="description_en" class="form-control" id="description_en" rows="9">{{ old('description_en', $about->description_en ?? '') }}</textarea>
</div>
<div class="col-12">
    <label for="description_de" class="form-label">Description DE</label>
    <textarea name="description_de" class="form-control" id="description_de" rows="9">{{ old('description_de', $about->description_de ?? '') }}</textarea>
</div>
<div class="col-4">
    <label for="diploma_fr" class="form-label">Diploma FR</label>
    <textarea name="diploma_fr" class="form-control" id="diploma_fr">{{ old('diploma_fr', $about->diploma_fr ?? '') }}</textarea>
</div>
<div class="col-4">
    <label for="diploma_en" class="form-label">Diploma EN</label>
    <textarea name="diploma_en" class="form-control" id="diploma_en">{{ old('diploma_en', $about->diploma_en ?? '') }}</textarea>
</div>
<div class="col-4">
    <label for="diploma_de" class="form-label">Diploma DE</label>
    <textarea name="diploma_de" class="form-control" id="diploma_de">{{ old('diploma_de', $about->diploma_de ?? '') }}</textarea>
</div>

<div class="col-4">
    <label for="experince_fr" class="form-label">Experience FR</label>
    <textarea name="experince_fr" class="form-control" id="experince_fr">{{ old('experince_fr', $about->experince_fr ?? '') }}</textarea>
</div>
<div class="col-4">
    <label for="experince_en" class="form-label">Experience EN</label>
    <textarea name="experince_en" class="form-control" id="experince_en">{{ old('experince_en', $about->experince_en ?? '') }}</textarea>
</div>
<div class="col-4">
    <label for="experince_de" class="form-label">Experience DE</label>
    <textarea name="experince_de" class="form-control" id="experince_de">{{ old('experince_de', $about->experince_de ?? '') }}</textarea>
</div>

<div class="col-12">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="phone"
        value="{{ old('phone', $about->phone ?? '') }}">
</div>


