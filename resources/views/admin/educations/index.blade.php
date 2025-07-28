<x-admin.layout.app title="Liste des Éducations">
    <x-admin.layout.page-title 
        title="Éducations" 
        :createRoute="route('admin.educations.create')" 
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

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.educations.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
