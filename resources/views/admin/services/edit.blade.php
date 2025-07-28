<x-admin.layout.app title="Update Article">
    <x-admin.layout.page-title title="services" :backRoute="route('admin.services.index')" :createRoute="route('admin.services.create')" create-label="Ajouter" :indexRoute="route('admin.services.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.services._form', ['service' => $service])
            </div>
        </div>
    </section>
</x-admin.layout.app>
