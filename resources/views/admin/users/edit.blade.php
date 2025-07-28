<x-admin.layout.app title="Edit User Information">
    <x-admin.layout.page-title title="Utilisateurs" :backRoute="route('admin.users.index')" :createRoute="route('admin.users.create')" create-label="Modifier"
        :index-route="route('admin.users.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.users._form', ['user' => $user])
            </div>
        </div>
    </section>
</x-admin.layout.app>
