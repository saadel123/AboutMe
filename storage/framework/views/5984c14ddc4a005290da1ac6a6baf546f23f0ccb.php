<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr" required
        value="<?php echo e(old('title_fr', $experience->title_fr ?? '')); ?>">
</div>
<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en" required
        value="<?php echo e(old('title_en', $experience->title_en ?? '')); ?>">
</div>
<div class="col-12">
    <label for="lieu" class="form-label">lieu</label>
    <input type="text" name="lieu" class="form-control" id="lieu" 
        value="<?php echo e(old('lieu', $experience->lieu ?? '')); ?>">
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description</label>
    <textarea name="description_fr" class="form-control" id="description_fr" required >  <?php echo e(old('description_fr', $experience->description_fr ?? '')); ?></textarea>
</div>
<div class="col-12">
    <label for="description_en" class="form-label">Description En</label>
    <textarea name="description_en" class="form-control" id="description_en" required >  <?php echo e(old('description_en', $experience->description_en ?? '')); ?></textarea>
</div>
<div class="col-12">
    <label for="datedebut" class="form-label">Date debut</label>
    <input type="date" name="datedebut" class="form-control" id="datedebut" 
        value="<?php echo e(old('datedebut', $experience->datedebut ?? '')); ?>">
</div>
<div class="col-12">
    <label for="datefin" class="form-label">Date Fin</label>
    <input type="date" name="datefin" class="form-control" id="datefin" 
        value="<?php echo e(old('datefin', $experience->datefin ?? '')); ?>">
</div>

<?php /**PATH C:\xampp\htdocs\portfolio\resources\views/admin/layouts/forms/experiences.blade.php ENDPATH**/ ?>