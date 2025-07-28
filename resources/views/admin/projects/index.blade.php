<x-admin.layout.app title="List of Articles">
    <x-admin.layout.page-title title="projects" :createRoute="route('admin.projects.create')" create-label="Ajouter" />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'Id', 'key' => 'id'],
                ['label' => 'Titre (FR)', 'key' => 'title_fr'],
                ['label' => 'Date', 'key' => 'date'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.projects.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
