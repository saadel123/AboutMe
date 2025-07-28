<x-admin.layout.app title="Liste des Compétences">
    <x-admin.layout.page-title 
        title="Compétences" 
        :createRoute="route('admin.skills.create')" 
        create-label="Ajouter" 
    />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'Id', 'key' => 'id'],
                ['label' => 'Titre (FR)', 'key' => 'title_fr'],
                ['label' => 'Pourcentage (FR)', 'key' => 'percent_fr'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.skills.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
