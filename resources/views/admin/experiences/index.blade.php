<x-admin.layout.app title="Liste des Expériences">
    <x-admin.layout.page-title 
        title="Expériences" 
        :createRoute="route('admin.experiences.create')" 
        create-label="Ajouter" 
    />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'Id', 'key' => 'id'],
                ['label' => 'Titre (FR)', 'key' => 'title_fr'],
                ['label' => 'Lieu (FR)', 'key' => 'lieu_fr'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.experiences.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
