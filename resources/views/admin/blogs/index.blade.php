<x-admin.layout.app title="List of Articles">
    <x-admin.layout.page-title title="Blogs" :createRoute="route('admin.blogs.create')" create-label="Ajouter" />

    <x-admin.layout.card-wrapper>
        @php
            $headers = [
                ['label' => 'Id', 'key' => 'id'],
                ['label' => 'Titre (FR)', 'key' => 'title_fr'],
                ['label' => 'Slug', 'key' => 'slug'],
                ['label' => 'Date', 'key' => 'date'],
                ['label' => 'Actions', 'key' => 'actions', 'align' => 'text-end'],
            ];
        @endphp

        <x-admin.ui.datatable :headers="$headers" :ajaxUrl="route('admin.blogs.index')" />
    </x-admin.layout.card-wrapper>
</x-admin.layout.app>
