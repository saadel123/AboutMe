<x-admin.layout.app title="Contact Messages">
    <x-admin.layout.page-title title="Contacts" :createRoute="route('admin.contacts.create')" create-label="Ajouter" />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'Id', 'key' => 'id'],
                ['label' => 'Nom', 'key' => 'name'],
                ['label' => 'Email', 'key' => 'email'],
                ['label' => 'Objet', 'key' => 'object'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.contacts.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
