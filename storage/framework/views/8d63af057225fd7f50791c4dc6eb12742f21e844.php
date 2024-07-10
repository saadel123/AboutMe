<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr" 
        value="<?php echo e(old('title_fr', $service->title_fr ?? '')); ?>">
</div>
<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en" 
        value="<?php echo e(old('title_en', $service->title_en ?? '')); ?>">
</div>
<div class="col-12">
    <label for="title_de" class="form-label">Titre de</label>
    <input type="text" name="title_de" class="form-control" id="title_de" 
        value="<?php echo e(old('title_de', $service->title_de ?? '')); ?>">
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description</label>
    <textarea name="description_fr" class="form-control" id="description_fr"  >  <?php echo e(old('description_fr', $service->description_fr ?? '')); ?></textarea>
</div>
<div class="col-12">
    <label for="description_en" class="form-label">Description En</label>
    <textarea name="description_en" class="form-control" id="description_en"  >  <?php echo e(old('description_en', $service->description_en ?? '')); ?></textarea>
</div>
<div class="col-12">
    <label for="description_de" class="form-label">Description de</label>
    <textarea name="description_de" class="form-control" id="description_de"  >  <?php echo e(old('description_de', $service->description_de ?? '')); ?></textarea>
</div>
<div class="col-12">
    <label for="icon" class="form-label">icon</label>
    <input type="file" name="icon" class="form-control" id="icon" >
</div>


<?php /**PATH C:\xampp\htdocs\portfolio_v2\resources\views/admin/layouts/forms/services.blade.php ENDPATH**/ ?>