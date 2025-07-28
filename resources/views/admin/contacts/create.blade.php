<x-admin.layout.app title="Add New Message">
    <x-admin.layout.page-title title="Contacts" :backRoute="route('admin.contacts.index')" :createRoute="route('admin.contacts.create')" createLabel="Ajouter" :indexRoute="route('admin.contacts.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.contacts._form')
            </div>
        </div>
    </section>
</x-admin.layout.app>