<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link" href="/admin/home">
            <i class="bi bi-grid"></i>
            <span>Home</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link  <?php echo e(Str::startsWith(request()->url(), route('educations.index')) ? '' : 'collapsed'); ?>" href="<?php echo e(route('educations.index')); ?>">
            <i class="ri-account-box-fill"></i><span>Educations</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  <?php echo e(Str::startsWith(request()->url(), route('experiences.index')) ? '' : 'collapsed'); ?>" href="<?php echo e(route('experiences.index')); ?>">
            <i class="ri-account-box-fill"></i><span>Experiences</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  <?php echo e(Str::startsWith(request()->url(), route('skills.index')) ? '' : 'collapsed'); ?>" href="<?php echo e(route('skills.index')); ?>">
            <i class="ri-account-box-fill"></i><span>Skills</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  <?php echo e(Str::startsWith(request()->url(), route('services.index')) ? '' : 'collapsed'); ?>" href="<?php echo e(route('services.index')); ?>">
            <i class="ri-account-box-fill"></i><span>Services</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  <?php echo e(Str::startsWith(request()->url(), route('projects.index')) ? '' : 'collapsed'); ?>" href="<?php echo e(route('projects.index')); ?>">
            <i class="ri-account-box-fill"></i><span>Projects</span>
        </a>
    </li>


</ul>
<?php /**PATH C:\xampp\htdocs\portfolio\resources\views/admin/layouts/aside.blade.php ENDPATH**/ ?>