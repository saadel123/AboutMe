@extends('layouts.master')
@section('meta')
    <meta name="robots" content="noindex">
@endsection
@section('content')
    <style>
        #portfolio-details .cont-image {
            background-color: unset;
            margin-right: unset;
            align-content: center;
            /* flex-wrap: wrap; */
        }

        @media only screen and (min-width: 800px) {
            .portfolio-details-slider {
                width: 80%;
            }

        }


        /* Add this to your main CSS file */
        .project-content h3 {
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            font-weight: 600;
        }

        .project-content ul {
            list-style: none;
            padding-left: 1.5rem;
        }

        .project-content ul li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .project-content ul li::before {
            content: "▹";
            position: absolute;
            left: 0;
            color: #3498db;
        }

        .project-content p {
            line-height: 1.8;
            color: #4a5568;
            margin-bottom: 1.5rem;
        }

        .shadow-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .shadow-hover {
            transform: translateY(-5px);
            box-shadow: 0px 0 30px rgba(69, 80, 91, 0.08)
        }

        .hover-primary:hover {
            color: #3498db !important;
        }

        .video-wrapper {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
        }

        .portfolio-info {
            padding: 1.5rem;
            position: sticky;
            top: 20px;
        }
    </style>
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
                        <div class="portfolio-description card shadow-hover border-0 p-4">
                            <div class="card-body">
                                <h2 class="mb-4"><a href="{{ $project->link }}" target="_blank"
                                        class="text-decoration-none text-dark hover-primary">
                                        {{ $project->{'title_' . app()->getLocale()} }}
                                    </a></h2>
                                <div class="project-content">
                                    {!! $project->{'description_' . app()->getLocale()} !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info text-break">
                            <h3>{!! __('home.project.project_info') !!} </h3>
                            <ul>
                                <li><strong>{!! __('home.project.category') !!} </strong> {{ $project->categorie }}</li>
                                {{-- <li><strong>Client</strong> </li> --}}
                                {{-- <li><strong>Project date</strong> 01 June, 2024</li> --}}
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
                @if ($images->count() > 0)
                    <div class="row justify-content-center">
                        <div class="col-12" data-aos="fade-up">
                            <h3>{!! __('home.single-project.images') !!}</h3>
                            <div class="row  mt-4">
                                <div class="col-lg-3  cont-image col-md-6 mt-4">
                                    <a href="{{ asset('storage/' . $project->image) }}" data-gallery="portfolio-gallery"
                                        class="glightbox cont-img">
                                        <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                @foreach ($images as $item)
                                    <div class="col-lg-3  cont-image col-md-6 mt-4">
                                        <a href="{{ asset('storage/' . $item->url) }}" data-gallery="portfolio-gallery"
                                            class="glightbox cont-img">
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
                    <div class="row mt-4 justify-content-center" data-aos="fade-up">
                        <div class="col-10">
                            <h3>{!! __('home.single-project.images_code') !!}</h3>
                            <div class="row  mt-4">
                                @foreach ($images_code as $item)
                                    <div class="col-lg-3  cont-image col-md-6 mt-4">
                                        <a href="{{ asset('storage/' . $item->url_code) }}"
                                            data-gallery="portfolio-gallery-code" class="glightbox cont-img">
                                            <img src="{{ asset('storage/' . $item->url_code) }}" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <!-- Video Section -->
                @if ($project->video)
                    <div class="row mt-5">
                        <div class="col-12" data-aos="fade-up">
                            <div class="video-wrapper">
                                <video src="{{ asset('storage/' . $project->video) }}" controls class="w-100"></video>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

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
