<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control @error('title_fr') is-invalid @enderror" id="title_fr"
        value="{{ old('title_fr', $education->title_fr ?? '') }}">
    @error('title_fr')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" id="title_en"
        value="{{ old('title_en', $education->title_en ?? '') }}">
    @error('title_en')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="title_de" class="form-label">Titre De</label>
    <input type="text" name="title_de" class="form-control @error('title_de') is-invalid @enderror" id="title_de"
        value="{{ old('title_de', $education->title_de ?? '') }}">
    @error('title_de')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="lieu" class="form-label">Lieu</label>
    <input type="text" name="lieu" class="form-control @error('lieu') is-invalid @enderror" id="lieu"
        value="{{ old('lieu', $education->lieu ?? '') }}">
    @error('lieu')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="datedebut" class="form-label">Date Début</label>
    <input type="date" name="datedebut" class="form-control @error('datedebut') is-invalid @enderror" id="datedebut"
        value="{{ old('datedebut', $education->datedebut ?? '') }}">
    @error('datedebut')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="col-12">
    <label for="datefin" class="form-label">Date Fin</label>
    <input type="date" name="datefin" class="form-control @error('datefin') is-invalid @enderror" id="datefin"
        value="{{ old('datefin', $education->datefin ?? '') }}">
    @error('datefin')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>
