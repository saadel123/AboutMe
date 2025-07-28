<x-frontend.layout.app>

    <!-- Intro -->
    <div class="">
        <x-frontend.layout.aside />
    </div>

    <!-- Article -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <figure class="aspect-video overflow-hidden rounded-lg">
            <img
                src="{{ asset('storage/' . $project->image) }}"
                alt=""
                class="h-full w-full object-cover" />
        </figure>

        <ul class="mt-4 flex flex-wrap items-center gap-4 md:gap-6">
            <li
                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                15 min read
            </li>
            <li
                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                {{ \Carbon\Carbon::parse($project->created_at)->locale('fr')->translatedFormat('d F Y') }}
            </li>
            <li
                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                1.5k Views
            </li>
        </ul>

        <article
            class="prose mt-6 dark:prose-invert xl:prose-lg prose-headings:font-medium prose-blockquote:border-primary lg:mt-10">
            <h2 class="">{{$project->title[app()->getLocale()] ?? ''}}</h2>
            {!! $project->description[app()->getLocale()] ?? '' !!}
        </article>

        <div class="mt-10 flex flex-wrap justify-between gap-4">
            <div class="flex flex-wrap items-center gap-5">
                <h6 class="text-lg font-medium text-dark dark:text-light">
                    Tags:
                </h6>

                <div class="flex flex-wrap gap-2">
                    @foreach ($project->categories as $category)
                        <a
                            href="#"
                            class="inline-flex items-center justify-center gap-2 rounded border border-light bg-white px-2 py-1 text-center text-xs font-medium leading-none text-dark transition hover:bg-primary hover:text-white dark:border-dark dark:bg-dark-2 dark:text-light/70 dark:hover:bg-primary dark:hover:text-white">
                            {{ $category->title[app()->getLocale()] }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-5">
                <h6 class="text-lg font-medium text-dark dark:text-light">
                    Share:
                </h6>

                <div class="flex flex-wrap items-center gap-2">
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-6 w-6">
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10Z" />
                        </svg>
                    </a>
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-6 w-6">
                            <path
                                d="M13.37 2.094A10.003 10.003 0 0 0 8.002 21.17a7.757 7.757 0 0 1 .163-2.293c.185-.839 1.296-5.463 1.296-5.463a3.74 3.74 0 0 1-.324-1.577c0-1.485.857-2.593 1.923-2.593a1.334 1.334 0 0 1 1.342 1.508c0 .9-.578 2.262-.88 3.54a1.544 1.544 0 0 0 1.575 1.923c1.898 0 3.17-2.431 3.17-5.301 0-2.2-1.457-3.848-4.143-3.848a4.746 4.746 0 0 0-4.93 4.794 2.96 2.96 0 0 0 .648 1.97.48.48 0 0 1 .162.554c-.046.184-.162.623-.208.784a.354.354 0 0 1-.51.254c-1.384-.554-2.036-2.077-2.036-3.816 0-2.847 2.384-6.255 7.154-6.255 3.796 0 6.32 2.777 6.32 5.747 0 3.909-2.177 6.848-5.394 6.848a2.862 2.862 0 0 1-2.454-1.246s-.578 2.316-.692 2.754a8.026 8.026 0 0 1-1.019 2.131c.923.28 1.882.42 2.846.416a9.99 9.99 0 0 0 9.996-10.003 10.002 10.002 0 0 0-8.635-9.903l-.002-.001Z" />
                        </svg>
                    </a>
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-6 w-6">
                            <path
                                d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10Z" />
                        </svg>
                    </a>
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-6 w-6">
                            <path
                                d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022ZM10 15.5l6-3.5-6-3.5v7Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-10 lg:mt-14">
            <h3
                class="text-2xl font-semibold leading-tight text-dark dark:text-light lg:text-3xl lg:leading-tight">
                Related Projects
            </h3>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2 lg:mt-8">
                @foreach ($relatedProjects as $relatedProjects)
                <div class="">
                    <div class="relative">
                        <a
                            href="article.html"
                            class="group block aspect-6/4 overflow-hidden rounded-lg">
                            <img
                                src="{{ asset('storage/' . $relatedProjects->image) }}"
                                alt=""
                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" />
                        </a>

                        <!-- Tags -->
                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                            <a
                                href="#"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                @foreach ($relatedProjects->categories as $category)
                                {{ $category->title[app()->getLocale()] }}
                                @endforeach
                            </a>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-xl font-medium xl:text-2xl">
                            <a
                                href="article.html"
                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                {{ $relatedProjects->title[app()->getLocale()] }}
                            </a>
                        </h2>

                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                            <li
                                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                15 min read
                            </li>
                            <li
                                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                {{ \Carbon\Carbon::parse($relatedProjects->created_at)->locale('fr')->translatedFormat('d F Y') }}
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-frontend.layout.app>