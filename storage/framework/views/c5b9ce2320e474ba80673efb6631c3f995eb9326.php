<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr" required
        value="<?php echo e(old('title_fr', $education->title_fr ?? '')); ?>">
</div>
<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en" required
        value="<?php echo e(old('title_en', $education->title_en ?? '')); ?>">
</div>
<div class="col-12">
    <label for="lieu" class="form-label">Lieu</label>
    <input type="text" name="lieu" class="form-control" id="lieu" 
        value="<?php echo e(old('lieu', $education->lieu ?? '')); ?>">
</div>
<div class="col-12">
    <label for="datedebut" class="form-label">Date debut</label>
    <input type="date" name="datedebut" class="form-control" id="datedebut" 
        value="<?php echo e(old('datedebut', $education->datedebut ?? '')); ?>">
</div>
<div class="col-12">
    <label for="datefin" class="form-label">Date Fin</label>
    <input type="date" name="datefin" class="form-control" id="datefin" 
        value="<?php echo e(old('datefin', $education->datefin ?? '')); ?>">
</div>

<?php /**PATH C:\xampp\htdocs\portfolio2024\resources\views/admin/layouts/forms/educations.blade.php ENDPATH**/ ?>