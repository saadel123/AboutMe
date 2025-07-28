@props(['title' => null])

<!-- ======= Header ======= -->
{{-- Only show header and sidebar if not on auth pages --}}
@php
    $authRoutes = ['login', 'register', 'password.request', 'password.reset'];
@endphp

@unless (in_array(Route::currentRouteName(), $authRoutes))
    <header id="header" class="header fixed-top d-flex align-items-center">
        @include('admin.layouts.header')
    </header>

    <aside id="sidebar" class="sidebar">
        @include('admin.layouts.aside')
    </aside>
@endunless

<main id="main" class="main">
    {{ $slot }}

    @unless (in_array(Route::currentRouteName(), $authRoutes))
        <x-admin.ui.delete-modal />
    @endunless
</main>
