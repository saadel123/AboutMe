<x-admin.layout.app title="Liste des Certificats">
    <x-admin.layout.page-title 
        title="Certificats" 
        :createRoute="route('admin.certificates.create')" 
        create-label="Ajouter" 
    />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'Id', 'key' => 'id'],
                ['label' => 'Titre (FR)', 'key' => 'title_fr'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.certificates.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
