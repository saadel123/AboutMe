@props(['title' => ''])
<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Title -->
    <title>Jembutfolio - Tailwind Personal Portfolio Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/favicon.svg')}}" type="image/svg+xml" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/venobox.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    @stack('styles')
</head>

<body class="relative h-screen overflow-y-auto overflow-x-hidden bg-light text-dark dark:bg-dark-2 dark:text-light">
    <div class="mx-auto flex max-w-screen-2xl flex-col justify-between gap-4 p-4 lg:gap-6 lg:p-6">
        <x-frontend.layout.header />
        <x-frontend.layout.mobile-menu />
        <main class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
            {{ $slot }}
        </main>
        <x-frontend.layout.footer />
    </div>

    <div class="shapes">
        <div class="fixed -left-1/2 -top-1/2 -z-10 animate-spin-very-slow xl:-left-[20%] xl:-top-1/3">
            <img src="{{asset('frontend/img/gradient-1.png')}}" alt="" class="" />
        </div>

        <div class="fixed -right-[50%] top-[10%] -z-10 animate-spin-very-slow xl:-right-[15%] xl:top-[10%]">
            <img src="{{asset('frontend/img/gradient-2.png')}}" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed left-[10%] top-[20%] -z-10">
            <img src="{{asset('frontend/img/object-3d-1.png')}}" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed bottom-[20%] right-[10%] -z-10">
            <img src="{{asset('frontend/img/object-3d-2.png')}}" alt="" class="" />
        </div>
    </div>

    <script src="{{asset('frontend/js/preline.js')}}"></script>
    <script src="{{asset('frontend/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/venobox.min.js')}}"></script>
    <script src="{{asset('frontend/js/clipboard.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="https://unpkg.com/alpinejs@3.14.9/dist/cdn.min.js" defer></script>
    @stack('scripts')
</body>

</html>