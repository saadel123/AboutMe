<x-admin.layout.app title="Update Article">
    <x-admin.layout.page-title title="educations" :backRoute="route('admin.educations.index')" :createRoute="route('admin.educations.create')" create-label="Ajouter" :indexRoute="route('admin.educations.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.educations._form', ['education' => $education])
            </div>
        </div>
    </section>
</x-admin.layout.app>
