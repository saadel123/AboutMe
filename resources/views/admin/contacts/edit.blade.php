<x-admin.layout.app title="Edit Message">
    <x-admin.layout.page-title title="Contacts" :createRoute="route('admin.contacts.create')" :backRoute="route('admin.contacts.index')" :indexRoute="route('admin.contacts.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.contacts._form', ['contact' => $contact])
            </div>
        </div>
    </section>
</x-admin.layout.app>
