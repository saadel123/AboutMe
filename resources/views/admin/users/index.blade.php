<x-admin.layout.app title="User Management">
    <x-admin.layout.page-title title="Utilisateurs" :createRoute="route('admin.users.create')" create-label="Ajouter" />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'ID', 'key' => 'id'],
                ['label' => 'Nom', 'key' => 'name'],
                ['label' => 'Email', 'key' => 'email'],
                ['label' => 'Date', 'key' => 'created_at'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" ajax-url="{{ route('admin.users.index') }}" />

    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
