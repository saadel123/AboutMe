<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link" href="/admin/home">
            <i class="bi bi-grid"></i>
            <span>Home</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('educations.index')) ? '' : 'collapsed' }}" href="{{ route('educations.index') }}">
            <i class="ri-account-box-fill"></i><span>Educations</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('experiences.index')) ? '' : 'collapsed' }}" href="{{ route('experiences.index') }}">
            <i class="ri-account-box-fill"></i><span>Experiences</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('skills.index')) ? '' : 'collapsed' }}" href="{{ route('skills.index') }}">
            <i class="ri-account-box-fill"></i><span>Skills</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('services.index')) ? '' : 'collapsed' }}" href="{{ route('services.index') }}">
            <i class="ri-account-box-fill"></i><span>Services</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('projects.index')) ? '' : 'collapsed' }}" href="{{ route('projects.index') }}">
            <i class="ri-account-box-fill"></i><span>Projects</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('certificates.index')) ? '' : 'collapsed' }}" href="{{ route('certificates.index') }}">
            <i class="ri-account-box-fill"></i><span>certificates   </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('contacts.index')) ? '' : 'collapsed' }}" href="{{ route('contacts.index') }}">
            <i class="ri-account-box-fill"></i><span>Contacts</span>
        </a>
    </li>


</ul>