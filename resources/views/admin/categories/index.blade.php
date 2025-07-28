<x-admin.layout.app title="List of Categories">
    <x-admin.layout.page-title title="Categories" :createRoute="route('admin.categories.create')" create-label="Ajouter" />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'Id', 'key' => 'id'],
                ['label' => 'Titre (FR)', 'key' => 'title_fr'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.categories.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
