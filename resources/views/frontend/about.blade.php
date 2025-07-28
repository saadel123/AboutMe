<x-frontend.layout.app>
    <!-- Intro -->
    <div class="">
        <x-frontend.layout.aside />
    </div>

    <!-- about -->
    <div
        class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div
            class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
            <div class="">
                <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                    {{ $settings->get('name') }}
                </h2>
                <p class="mt-2 text-muted dark:text-light/70">
                    {!! $settings->get('about_' . app()->getLocale()) ?? '' !!}
                </p>
            </div>
            <div
                class="flex items-center justify-center gap-2 whitespace-nowrap rounded-lg bg-light px-4 py-2 text-center text-base font-medium leading-none text-primary dark:bg-dark-2 lg:text-lg">
                <span class="relative flex h-2 w-2 shrink-0">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75 dark:bg-light"></span>
                    <span
                        class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span>
                </span>
                <span>Available For Hire</span>
            </div>
        </div>

        <div
            class="mt-8 flex flex-wrap justify-between gap-6 lg:mt-12 lg:gap-10">
            <div class="flex flex-wrap items-start gap-6 lg:gap-10">
                <div class="">
                    <h2
                        class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                        <span>{{ $settings->get('number_year_of_experience') }}</span>+
                    </h2>
                    <p class="mt-2 text-muted">Year of Experience</p>
                </div>
                <div class="">
                    <h2
                        class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                        <span>{{ $settings->get('number_of_projects_completed') }}</span>+
                    </h2>
                    <p class="mt-2 text-muted">Project Completed</p>
                </div>
                <div class="">
                    <h2
                        class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                        <span>{{ $settings->get('number_of_clients') }}</span>+
                    </h2>
                    <p class="mt-2 text-muted">Client</p>
                </div>
            </div>


        </div>
        <div class="rounded-2xl bg-white p-6  dark:bg-black dark:shadow-dark">
            <h3 class="text-2xl font-semibold dark:text-light">
                My Expert Area
            </h3>
            <div class="mt-6 grid grid-cols-2 gap-4 md:grid-cols-4">
                @foreach ($skills as $skill)
                <div class="text-center">
                    <div class="grid place-content-center rounded-lg bg-light p-5 dark:bg-dark-2">
                        <img src="{{('storage/' . $skill->icon)}}" alt="" class="h-8 w-8" />
                    </div>
                    <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                        {{$skill->title[app()->getLocale()]}}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
</x-frontend.layout.app>