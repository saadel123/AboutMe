<x-frontend.layout.app>
    <!-- Intro -->
    <div class="">
        <x-frontend.layout.aside />
    </div>

    <!-- Projects by category -->
    <div x-data="{ activeTab: 'all', initialLoad: true }" class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div>
            <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">
                Check Out My Latest <span class="text-primary">Projects</span>
            </h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70">
                I'm here to help if you're searching for a UI/UX Design to bring your idea to life or a design partner to help take your business to the next level.
            </p>
        </div>

        <!-- Category Tabs - Improved Style -->
        <div class="mt-6 border-b border-gray-200 dark:border-gray-700">
            <nav class="-mb-px flex space-x-1 overflow-x-auto rounded-lg bg-gray-100 p-1 dark:bg-dark-2">
                <button @click="activeTab = 'all'; initialLoad = false"
                    :class="activeTab === 'all' ? 'bg-white text-primary shadow dark:bg-black' : 'text-muted hover:text-dark dark:hover:text-light'"
                    class="whitespace-nowrap rounded-md px-4 py-2 text-sm font-medium transition">
                    All Projects
                </button>
                @foreach ($categories as $category)
                    <button @click="activeTab = '{{ $category->id }}'; initialLoad = false"
                        :class="activeTab === '{{ $category->id }}' ? 'bg-white text-primary shadow dark:bg-black' : 'text-muted hover:text-dark dark:hover:text-light'"
                        class="whitespace-nowrap rounded-md px-4 py-2 text-sm font-medium transition">
                        {{ $category->title[app()->getLocale()] }}
                    </button>
                @endforeach
            </nav>
        </div>

        <!-- Projects per Category -->
        <div class="mt-6 space-y-6">
            <!-- All Projects Tab -->
            <div x-show="activeTab === 'all'" x-transition>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    @foreach($allProjects as $project)
                        <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2">
                            <!-- Project content same as featured projects -->
                            <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title[app()->getLocale()] }}"
                                    class="h-full w-full rounded-t-lg object-cover object-top transition duration-300 group-hover:scale-105" />
                                <a href="{{ asset('storage/' . $project->image) }}" data-gall="project-gallery"
                                    class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" 
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                                        <path d="M10 4.167v11.666M4.167 10h11.666" />
                                    </svg>
                                </a>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-medium">
                                    <a href="{{ route('frontend.projects.show', $project->slug) }}"
                                        class="text-dark transition hover:text-primary dark:text-light/80 dark:hover:text-primary">
                                        {{ $project->title[app()->getLocale()] }}
                                    </a>
                                </h3>
                                <p class="text-sm text-muted">
                                    @foreach ($project->categories as $projCategory)
                                        {{ $projCategory->title[app()->getLocale()] }}@if(!$loop->last), @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Category Tabs -->
            @foreach ($categories as $category)
                <div x-show="activeTab === '{{ $category->id }}'" x-transition>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        @forelse ($category->projects as $project)
                            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2">
                                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title[app()->getLocale()] }}"
                                        class="h-full w-full rounded-t-lg object-cover object-top transition duration-300 group-hover:scale-105" />
                                    <a href="{{ asset('storage/' . $project->image) }}" data-gall="category-gallery-{{ $category->id }}"
                                        class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" 
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex flex-wrap items-start justify-between py-4 p-4">
                                    <div>
                                        <h3 class="text-lg font-medium">
                                            <a href="{{ route('frontend.projects.show', $project->slug) }}"
                                                class="text-dark transition hover:text-primary dark:text-light/80 dark:hover:text-primary">
                                                {{ $project->title[app()->getLocale()] }}
                                            </a>
                                        </h3>
                                        <p class="text-sm text-muted">
                                            @foreach ($project->categories as $projCategory)
                                                {{ $projCategory->title[app()->getLocale()] }}@if(!$loop->last), @endif
                                            @endforeach
                                        </p>
                                    </div>
                                    @if($project->link)
                                        <a href="{{ $project->link }}" target="_blank"
                                            class="inline-flex items-center justify-center gap-1 rounded bg-white px-3 py-2 text-sm text-dark transition hover:text-primary dark:bg-black dark:text-light/70 dark:hover:text-primary">
                                            <span>Visit Site</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 shrink-0">
                                                <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-muted dark:text-light/70">No projects found in this category.</p>
                        @endforelse
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Contact -->
        <div class="mt-10 lg:mt-14">
            <div class="group flex gap-6 overflow-hidden rounded-lg bg-light p-6 dark:bg-dark-2">
                <div class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                    <a href="contact.html"
                        class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                        Let's 👋 Work Together
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layout.app>