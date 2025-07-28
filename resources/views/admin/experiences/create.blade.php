<x-admin.layout.app title="Create New Article">
    <x-admin.layout.page-title title="experiences" :backRoute="route('admin.experiences.index')" :createRoute="route('admin.experiences.create')" create-label="Ajouter" :indexRoute="route('admin.experiences.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.experiences._form')
            </div>
        </div>
    </section>
</x-admin.layout.app>