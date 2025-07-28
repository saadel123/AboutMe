<x-admin.layout.app title="Update Article">
    <x-admin.layout.page-title title="skills" :backRoute="route('admin.skills.index')" :createRoute="route('admin.skills.create')" create-label="Ajouter" :indexRoute="route('admin.skills.index')" />

    <section>
        <div class="row">
            <div class="col-md-12">
                @include('admin.skills._form', ['skill' => $skill])
            </div>
        </div>
    </section>
</x-admin.layout.app>
