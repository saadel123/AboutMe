<x-frontend.layout.app title="About Me">
  <!-- Intro -->
<x-frontend.layout.aside />

  <div class="grid grid-cols-1 gap-4 lg:gap-6">
    <!-- Work Experience -->
    <div class="group rounded-2xl bg-white px-6 pt-0 shadow dark:bg-black dark:shadow-dark">
      <h3 class="relative z-10 bg-white pb-2 pt-6 text-2xl font-semibold dark:bg-black dark:text-light">
        Work Experience
      </h3>

      <div
        class="max-h-[200px] space-y-4 overflow-hidden pb-6 pt-4 [&::-webkit-scrollbar-thumb]:bg-gray-400 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:w-0">
        <!-- <div class="animate-scrollY space-y-4 group-hover:[animation-play-state:paused]"> -->
        <div class="space-y-4">
          @foreach ($experiences as $experience)
          <div class="flex flex-col gap-1 md:flex-row md:gap-10">
            <p class="mt-1 text-sm font-medium text-muted dark:text-light/70">
              {{ \Carbon\Carbon::parse($experience->start_date)->format('Y') }} - {{ \Carbon\Carbon::parse($experience->end_date)->format('Y') }}
            </p>
            <div class="flex items-center gap-3">
              <!-- <div class="grid h-8 w-8 shrink-0 place-content-center rounded-lg bg-light dark:bg-dark-2">
                <img src="{{('frontend/img/google.svg')}}" alt="" class="h-5 w-5" />
              </div> -->
              <div class="">
                <h6 class="text-base font-semibold text-dark dark:text-light/70">
                  {{$experience->title[app()->getLocale()]}}
                </h6>
                </h6>
                <p class="text-sm">{!! Str::limit($experience->position[app()->getLocale()], 30) !!}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Expertise -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
      <h3 class="text-2xl font-semibold dark:text-light">
        My Expert Area
      </h3>
      <div class="mt-6 grid grid-cols-2 gap-4 md:grid-cols-3">
        @foreach ($skills as $skill)
        <div class="text-center">
          <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
            <img src="{{('storage/' . $skill->icon)}}" alt="" class="h-8 w-8" />
          </div>
          <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
            {{$skill->title[app()->getLocale()]}}
          </p>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Projects -->
  <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
    <div class="flex flex-wrap items-center justify-between gap-2">
      <h3 class="text-2xl font-semibold dark:text-light">
        Recent Projects
      </h3>
      <a href="/projects"
        class="inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
        <span>All Projects</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
          <path d="M4.167 10h11.666m-4.999 5 5-5m-5-5 5 5" />
        </svg>
      </a>
    </div>
    <div class="mt-6 space-y-6">
      @foreach ($projects as $project)
      <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0">
        <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
          <img src="{{('storage/' . $project->image)}}" alt=""
            class="h-full w-full rounded-t-lg object-cover object-top transition" />

          <a href="/projects/{{ $project->slug }}" data-gall="project-gallry-1"
            class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
              <path d="M10 4.167v11.666M4.167 10h11.666" />
            </svg>
          </a>
        </div>

        <div class="absolute inset-x-0 bottom-0 flex flex-wrap gap-2 bg-gradient-to-t from-black/20 p-4">
          @foreach ($project->categories as $category)
          <span class="rounded bg-white px-2 py-1 text-xs font-medium text-primary shadow">
            {{ $category->title[app()->getLocale()] }}
          </span>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Services -->
  <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2">
    <div class="flex flex-wrap items-center justify-between gap-2">
      <h3 class="text-2xl font-semibold dark:text-light">
        Services I Offered
      </h3>
      <a href="/services"
        class="inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
        <span>See All Services</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
          <path d="M4.167 10h11.666m-4.999 5 5-5m-5-5 5 5" />
        </svg>
      </a>
    </div>

    <div class="mt-6 grid grid-cols-2 gap-6 md:grid-cols-4">
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
  </div>

  <!-- Contact -->
  <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
    <marquee behavior="scroll" direction="left"
      class="overflow-hidden text-nowrap rounded-lg bg-light p-3 text-lg font-medium text-muted dark:bg-dark-2">
      Available For Hire 🚀 Crafting Digital Experiences 🎨 Available For
      Hire 🚀 Crafting Digital Experiences 🎨
    </marquee>

    <h2 class="mt-4 text-[40px] font-semibold leading-snug text-dark dark:text-light">
      Let's👋 <br />
      Work Together
    </h2>

    <a href="contact"
      class="mt-6 inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
      <span>Contact</span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
        <path d="M17.5 11.667v-5h-5" />
        <path d="m17.5 6.667-7.5 7.5-7.5-7.5" />
      </svg>
    </a>
  </div>
</x-frontend.layout.app>