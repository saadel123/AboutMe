<x-admin.layout.app title="Admin Dashboard">
    <div class="pagetitle">
        <h1>Home</h1>
        <nav style="display: flex; justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <x-admin.ui.counter-card
                        title="Educations"
                        :count="$educationCount"
                        icon="bi-mortarboard"
                        :route="route('admin.educations.index')" />

                    <x-admin.ui.counter-card
                        title="Experiences"
                        :count="$experienceCount"
                        icon="bi-briefcase"
                        :route="route('admin.experiences.index')" />

                    <x-admin.ui.counter-card
                        title="Skills"
                        :count="$skillCount"
                        icon="bi-lightbulb"
                        :route="route('admin.skills.index')" />

                    <x-admin.ui.counter-card
                        title="Services"
                        :count="$serviceCount"
                        icon="bi-gear"
                        :route="route('admin.services.index')" />

                    <x-admin.ui.counter-card
                        title="Projects"
                        :count="$projectCount"
                        icon="bi-kanban"
                        :route="route('admin.projects.index')" />

                    <x-admin.ui.counter-card
                        title="Certificates"
                        :count="$certificateCount"
                        icon="bi-award"
                        :route="route('admin.certificates.index')" />

                    <x-admin.ui.counter-card
                        title="Categories"
                        :count="$categoryCount"
                        icon="bi-tags"
                        :route="route('admin.categories.index')" />

                    <x-admin.ui.counter-card
                        title="Messages"
                        :count="$contactCount"
                        icon="bi-phone"
                        :route="route('admin.contacts.index')" />
                </div>
            </div>
        </div>
    </section>
</x-admin.layout.app>