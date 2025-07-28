@props(['project' => null])
<div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
    <template x-for="project in projects.filter(p => activeTab === 'all' || p.categories.includes(parseInt(activeTab)))" :key="project.id">
        <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0 xl:p-10 xl:pb-0">
            <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                <img :src="project.image" alt=""
                    class="h-full w-full rounded-t-lg object-cover object-top transition" />

                <a :href="project.image" data-gall="project-gallry-1"
                    class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition opacity-0 group-hover:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        class="h-6 w-6">
                        <path d="M10 4.167v11.666M4.167 10h11.666" />
                    </svg>
                </a>
            </div>

            <div class="flex flex-wrap items-start justify-between py-4 md:p-6">
                <div>
                    <h3 class="text-lg font-medium md:text-xl lg:text-2xl">
                        <a :href="`/projects/${project.slug}`"
                            class="border-b border-transparent text-dark transition hover:border-b-primary hover:text-primary dark:text-light/80 dark:hover:text-primary"
                            x-text="project.title"></a>
                    </h3>
                    <p class="text-sm text-muted lg:text-base" x-text="project.categories_names.join(', ')"></p>
                </div>

                <template x-if="project.link">
                    <a :href="project.link" target="_blank"
                        class="inline-flex items-center justify-center gap-1 rounded bg-white px-3 py-2 text-sm text-dark transition hover:text-primary dark:bg-black dark:text-light/70 dark:hover:text-primary">
                        <span>Visit Site</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 shrink-0">
                            <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                        </svg>
                    </a>
                </template>
            </div>
        </div>
    </template>
</div>