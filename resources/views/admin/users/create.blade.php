<x-admin.layout.app title="Add New User">
    <x-admin.layout.page-title title="Utilisateurs" :backRoute="route('admin.users.index')" :createRoute="route('admin.users.create')" create-label="Ajouter"
        :indexRoute="route('admin.users.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.users._form')
            </div>
        </div>
    </section>
</x-admin.layout.app>
