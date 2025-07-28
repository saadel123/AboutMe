<x-admin.layout.app title="Update Article">
    <x-admin.layout.page-title title="slides" :backRoute="route('admin.slides.index')" :createRoute="route('admin.slides.create')" create-label="Ajouter" :indexRoute="route('admin.slides.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.slides._form', ['slide' => $slide])
            </div>
        </div>
    </section>
</x-admin.layout.app>
