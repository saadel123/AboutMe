<x-frontend.layout.app>

    <!-- Intro -->
    <div class="">
        <x-frontend.layout.aside />
    </div>

    <!-- Article -->
    <div
        class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <figure class="aspect-video overflow-hidden rounded-lg">
            <img
                src="{{ asset('storage/' . $blog->image) }}"
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
                {{ \Carbon\Carbon::parse($blog->date)->locale('fr')->translatedFormat('d F Y') }}
            </li>
            <li
                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                1.5k Views
            </li>
        </ul>

        <article
            class="prose mt-6 dark:prose-invert xl:prose-lg prose-headings:font-medium prose-blockquote:border-primary lg:mt-10">
            <h2 class="">{{ $blog->title[app()->getLocale()] ?? '' }}</h2>
            {!! $blog->content[app()->getLocale()] ?? '' !!}
        </article>
    </div>

</x-frontend.layout.app>