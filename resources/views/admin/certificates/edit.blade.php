<x-admin.layout.app title="Update Article">
    <x-admin.layout.page-title title="certificatess" :backRoute="route('admin.certificates.index')" :createRoute="route('admin.certificates.index')" create-label="Ajouter" :indexRoute="route('admin.certificates.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.certificates._form', ['certificate' => $certificate])
            </div>
        </div>
    </section>
</x-admin.layout.app>
