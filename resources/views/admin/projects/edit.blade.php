<x-admin.layout.app title="Update Article">
    <x-admin.layout.page-title title="projects" :backRoute="route('admin.projects.index')" :createRoute="route('admin.projects.create')" create-label="Ajouter" :indexRoute="route('admin.projects.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.projects._form', ['project' => $project])
            </div>
        </div>
    </section>
</x-admin.layout.app>
