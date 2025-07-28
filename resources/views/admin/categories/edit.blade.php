<x-admin.layout.app title="Update Article">
    <x-admin.layout.page-title title="categories" :backRoute="route('admin.categories.index')" :createRoute="route('admin.categories.create')" create-label="Ajouter" :indexRoute="route('admin.categories.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.categories._form', ['category' => $category])
            </div>
        </div>
    </section>
</x-admin.layout.app>
