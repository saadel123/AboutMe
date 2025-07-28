<x-frontend.layout.app>
    <!-- Services -->
    <div class="">
        <x-frontend.layout.aside />
    </div>
    <div
        class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div
            class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
            <div class="">
                <h2
                    class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                    Services I <span class="text-primary">Offered</span>
                </h2>
                <p
                    class="mt-4 text-lg text-muted dark:text-light/70 lg:mt-6 lg:text-2xl">
                    Transforming Ideas into Innovative Reality, Elevate Your Vision
                    with Our Expert
                    <span class="font-semibold text-dark dark:text-white">
                        Product Design and Development
                    </span>
                    Services!
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

        <!-- Service cards -->
        <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4 lg:mt-14">
            @foreach ($services as $service)
            <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                    <img src="{{('storage/' . $service->image)}}" alt="" class="h-20 w-20" />
                </div>
                <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                    {{ $service->title[app()->getLocale()] }}
                </p>
            </div>
            @endforeach
        </div>

        <!-- image -->
        <div
            class="mt-10 aspect-video overflow-hidden rounded-lg bg-light dark:bg-dark-2 lg:mt-14">
            <img
                src="{{asset('frontend/img/blog-img-1.jpg')}}"
                alt=""
                class="h-full w-full rounded-lg object-cover" />
        </div>
    </div>
</x-frontend.layout.app>