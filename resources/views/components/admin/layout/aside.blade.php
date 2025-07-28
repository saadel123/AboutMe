<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.dashboard')) ? '' : 'collapsed' }}"
                href="{{ route('admin.dashboard') }}">
                <i class="bi bi-house-door-fill"></i>
                <span>Home</span>
            </a>
        </li>
        {{-- Settings --}}
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.settings.index') ? '' : 'collapsed' }}"
                href="{{ route('admin.settings.index') }}">
                <i class="bi bi-gear-fill"></i><span>Settings</span>
            </a>
        </li>
        {{-- Users --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.users.index')) ? '' : 'collapsed' }}"
                data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-account-box-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.users.index')) ? 'show' : '' }}"
                data-bs-parent="#users-nav">
                <li>
                    <a href="{{ route('admin.users.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.users.index')) ? 'active' : '' }}">
                        <i class="bi bi-people-fill"></i><span>Liste Users</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Slides --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.slides.index')) ? '' : 'collapsed' }}"
                data-bs-target="#slides-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-slideshow-fill"></i><span>Slides</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="slides-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.slides.index')) ? 'show' : '' }}"
                data-bs-parent="#slides-nav">
                <li>
                    <a href="{{ route('admin.slides.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.slides.index')) ? 'active' : '' }}">
                        <i class="bi-list-ul"></i><span>Liste Slides</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Blog --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.blogs.index')) ? '' : 'collapsed' }}"
                data-bs-target="#blogs-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blogs-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.blogs.index')) ? 'show' : '' }}"
                data-bs-parent="#blogs-nav">
                <li>
                    <a href="{{ route('admin.blogs.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.blogs.index')) ? 'active' : '' }}">
                        <i class="bi bi-file-earmark-text-fill"></i><span>Liste Blog</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Projects --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.projects.index')) || Str::startsWith(request()->url(), route('admin.categories.index')) ? '' : 'collapsed' }}"
                data-bs-target="#projects-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-kanban-fill"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="projects-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.projects.index')) ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.projects.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.projects.index')) ? 'active' : '' }}">
                        <i class="bi bi-folder-fill"></i><span>Liste Projects</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.categories.index')) ? 'active' : '' }}">
                        <i class="bi bi-tags-fill"></i><span>Categories</span>
                    </a>
                </li>
            </ul>
        </li>


        {{-- Education --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.educations.index')) ? '' : 'collapsed' }}"
                data-bs-target="#educations-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-mortarboard-fill"></i><span>Education</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="educations-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.educations.index')) ? 'show' : '' }}"
                data-bs-parent="#educations-nav">
                <li>
                    <a href="{{ route('admin.educations.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.educations.index')) ? 'active' : '' }}">
                        <i class="bi bi-journal-bookmark-fill"></i><span>Liste Education</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Experience --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.experiences.index')) ? '' : 'collapsed' }}"
                data-bs-target="#experiences-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-briefcase-fill"></i><span>Experience</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="experiences-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.experiences.index')) ? 'show' : '' }}"
                data-bs-parent="#experiences-nav">
                <li>
                    <a href="{{ route('admin.experiences.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.experiences.index')) ? 'active' : '' }}">
                        <i class="bi bi-calendar-check-fill"></i><span>Liste Experience</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Skills --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.skills.index')) ? '' : 'collapsed' }}"
                data-bs-target="#skills-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart-fill"></i><span>Skills</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="skills-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.skills.index')) ? 'show' : '' }}"
                data-bs-parent="#skills-nav">
                <li>
                    <a href="{{ route('admin.skills.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.skills.index')) ? 'active' : '' }}">
                        <i class="bi bi-lightning-fill"></i><span>Liste Skills</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Services --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.services.index')) ? '' : 'collapsed' }}"
                data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-tools"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="services-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.services.index')) ? 'show' : '' }}"
                data-bs-parent="#services-nav">
                <li>
                    <a href="{{ route('admin.services.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.services.index')) ? 'active' : '' }}">
                        <i class="bi bi-list-check"></i><span>Liste Services</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Certificates --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.certificates.index')) ? '' : 'collapsed' }}"
                data-bs-target="#certificates-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-award-fill"></i><span>Certificates</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="certificates-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.certificates.index')) ? 'show' : '' }}"
                data-bs-parent="#certificates-nav">
                <li>
                    <a href="{{ route('admin.certificates.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.certificates.index')) ? 'active' : '' }}">
                        <i class="bi bi-trophy-fill"></i><span>Liste Certificates</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Contacts --}}
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.contacts.index')) ? '' : 'collapsed' }}"
                data-bs-target="#contacts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-envelope-fill"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contacts-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.contacts.index')) ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.contacts.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.contacts.index')) ? 'active' : '' }}">
                        <i class="bi bi-inbox-fill"></i><span>Liste Contacts</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</aside>