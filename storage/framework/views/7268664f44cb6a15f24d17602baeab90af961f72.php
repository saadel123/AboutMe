<div class="col-12">
    <label for="title_fr" class="form-label">Titre</label>
    <input type="text" name="title_fr" class="form-control" id="title_fr" required
        value="<?php echo e(old('title_fr', $service->title_fr ?? '')); ?>">
</div>
<div class="col-12">
    <label for="title_en" class="form-label">Titre En</label>
    <input type="text" name="title_en" class="form-control" id="title_en" required
        value="<?php echo e(old('title_en', $service->title_en ?? '')); ?>">
</div>

<div class="col-12">
    <label for="description_fr" class="form-label">Description</label>
    <textarea name="description_fr" class="form-control" id="description_fr" required >  <?php echo e(old('description_fr', $service->description_fr ?? '')); ?></textarea>
</div>
<div class="col-12">
    <label for="description_en" class="form-label">Description En</label>
    <textarea name="description_en" class="form-control" id="description_en" required >  <?php echo e(old('description_en', $service->description_en ?? '')); ?></textarea>
</div>
<div class="col-12">
    <label for="icon" class="form-label">icon</label>
    <input type="file" name="icon" class="form-control" id="icon" >
</div>


<?php /**PATH C:\xampp\htdocs\portfolio\resources\views/admin/layouts/forms/services.blade.php ENDPATH**/ ?>