<x-frontend.layout.app>

    <!-- Intro -->
    <div class="">
        <x-frontend.layout.aside />
    </div>

    <!-- Blog -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div class="">
            <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">
                My Recent Articles and Publications
            </h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70">
                I'm here to help if you're searching for a UI/UX Design to
                bring your idea to life or a design partner to help take your
                business to the next level.
            </p>
        </div>

        <!-- Search Form -->
        <div class="mt-8">
            <form action="{{ route('frontend.blogs') }}" method="GET" class="flex flex-col gap-3 md:flex-row">
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Search articles..."
                    class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2 text-dark focus:border-primary focus:ring focus:ring-primary/20 dark:bg-black dark:text-light dark:focus:border-primary">
                <button type="submit"
                    class="rounded-lg bg-primary px-6 py-2 text-white hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary/50">
                    Search
                </button>
            </form>
        </div>

        <!-- Blog List -->
        <div class="mt-10 lg:mt-14">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2">
                @forelse ($blogs as $blog)
                <div class="">
                    <div class="relative">
                        <a href="{{ route('frontend.blogs.show', $blog->slug) }}"
                            class="group block aspect-6/4 overflow-hidden rounded-lg">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt=""
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" />
                        </a>

                        <!-- Tags -->
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                            <a href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                Development
                            </a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl">
                            <a href="{{ route('frontend.blogs.show', $blog->slug) }}"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                {{ $blog->title[app()->getLocale()] }}
                            </a>
                        </h2>

                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li
                                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read
                            </li>
                            <li
                                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                {{ \Carbon\Carbon::parse($blog->date)->locale('fr')->translatedFormat('d F Y') }}
                            </li>
                        </ul>
                    </div>
                </div>
                @empty
                <div class="col-span-full">
                    <p class="text-center text-muted dark:text-light/70">No articles found.</p>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                {{ $blogs->links('pagination::bootstrap-5') }}
            </div>
            <!-- End Pagination -->
        </div>
    </div>

</x-frontend.layout.app>
