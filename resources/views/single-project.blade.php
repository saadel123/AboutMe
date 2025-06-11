@extends('layouts.master')
@section('meta')
    <meta name="robots" content="noindex">
@endsection
@section('stylesheet')
    <link href="{{ asset('assets1/css/custom.css') }}" rel="stylesheet">
@endsection
@section('content')
    <main class="main">
        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">
            <div class="container" data-aos="fade-up">
                <div class="portfolio-details-slider swiper init-swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="">
                        </div>
                        @if ($images->count() > 0)
                            @foreach ($images as $item)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $item->url) }}" class="img-fluid" alt="">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="row justify-content-between gy-4 mt-4 mb-3">
                    <div class="col-lg-9" data-aos="fade-up">
                        <div class="portfolio-description card border-0 p-4">
                            <div class="card-body">
                                <h1 class="mb-4"><a href="{{ $project->link }}" target="_blank"
                                        class="text-decoration-none">
                                        {{ $project->{'title_' . app()->getLocale()} }}
                                    </a></h1>
                                <div class="project-content">
                                    {!! $project->{'description_' . app()->getLocale()} !!}
                                </div>
                            </div>
                            @if ($images->count() > 0)
                                <div class="row container mt-2 justify-content-center">
                                    <div class="col-12">
                                        <h3 class="">{!! __('home.single-project.images') !!}</h3>
                                        <div class="row  mt-4">
                                            <div class="col-lg-4  cont-image col-md-6 mt-4">
                                                <a href="{{ asset('storage/' . $project->image) }}"
                                                    data-gallery="portfolio-gallery" class="glightbox cont-img">
                                                    <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid"
                                                        alt="">
                                                </a>
                                            </div>
                                            @foreach ($images as $item)
                                                <div class="col-lg-4  cont-image col-md-6 mt-4">
                                                    <a href="{{ asset('storage/' . $item->url) }}"
                                                        data-gallery="portfolio-gallery" class="glightbox cont-img">
                                                        <img src="{{ asset('storage/' . $item->url) }}" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($images_code->count() > 0)
                                <div class="row container mt-2 justify-content-center">
                                    <div class="col-12">
                                        <h3 class="">{!! __('home.single-project.images_code') !!}</h3>
                                        <div class="row  mt-4">
                                            @foreach ($images_code as $item)
                                                <div class="col-lg-4  cont-image col-md-6 mt-4">
                                                    <a href="{{ asset('storage/' . $item->url_code) }}"
                                                        data-gallery="portfolio-gallery-code" class="glightbox cont-img">
                                                        <img src="{{ asset('storage/' . $item->url_code) }}"
                                                            class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- Video Section -->
                            @if ($project->video)
                                <div class="row container mt-2 justify-content-center">
                                    <h3 class="">{!! __('home.single-project.video') !!}</h3>
                                    <div class="col-12">
                                        <div class="video-wrapper">
                                            <video src="{{ asset('storage/' . $project->video) }}" controls
                                                class="w-100"></video>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info text-break">
                            <h3>{!! __('home.project.project_info') !!} </h3>
                            <ul>
                                @if ($project->categories->isNotEmpty())
                                    <li>
                                        <strong>{!! __('home.project.category') !!}</strong>
                                        @foreach ($project->categories as $category)
                                            {{ $category->name }}{{ !$loop->last ? ', ' : '' }}
                                        @endforeach
                                    </li>
                                @endif
                                @if (!empty($project->github_link))
                                    <li><strong>{!! __('home.project.github_url') !!} </strong> <a href="{{ $project->github_link }}"
                                            target="_blank">{{ $project->github_link }}</a></li>
                                @endif
                                @if (!empty($project->link))
                                    <li><strong>{!! __('home.project.project_url') !!} </strong> <a href="{{ $project->link }}"
                                            target="_blank">{{ $project->link }}</a></li>
                                    <li><a href="{{ $project->link }}" target="_blank"
                                            class="btn-visit align-self-start">{!! __('home.project.website') !!} </a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if (isset($relatedprojects) && $relatedprojects->count() > 0)
                <div class="container mt-5 related-projects" data-aos="fade-up">
                    <div class="row">
                        <h2 class="text-center mb-5">{!! __('home.single-project.related_project') !!}</h2>
                        @foreach ($relatedprojects as $project)
                            <div
                                class="col-lg-4 col-md-6 mb-4 portfolio-item isotope-item {{ $project->categories->pluck('name')->implode(' ') }}">
                                <div class="related-project-card">
                                    <a href="{{ route('single.project', $project->id) }}" title="More Details"
                                        class="details-link">
                                        <div class="related-project-img-wrapper">
                                            <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid lazyload"
                                                alt="{{ $project->{'title_' . app()->getLocale()} }}" loading="lazy">
                                        </div>
                                    </a>
                                    <div class="related-project-info">
                                        <h4 class="related-project-title">{{ $project->{'title_' . app()->getLocale()} }}
                                        </h4>
                                        <div class="related-project-links">
                                            <a href="{{ asset('storage/' . $project->image) }}"
                                                data-gallery="related-gallery" class="glightbox preview-link"
                                                title="Zoom">
                                                <i class="bi bi-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('single.project', $project->id) }}" class="details-link"
                                                title="View Details">
                                                <i class="bi bi-link-45deg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div>
                </div>
            @endif
        </section><!-- /Portfolio Details Section -->
        <script type="application/json" class="swiper-config">
        {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            "slidesPerView": "auto",
            "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
            },
            "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
            }
        }
    </script>
    </main>
@endsection
