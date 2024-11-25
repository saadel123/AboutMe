@extends('layouts.master')
@section('content')
    <style>
        #portfolio-details .cont-image {
            background-color: unset;
            margin-right: unset;
            align-content: center;
            /* flex-wrap: wrap; */
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
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            <h2><a href="{{ $project->link }}"
                                    target="_blanck">{{ $project->{'title_' . app()->getLocale()} }}</a></h2>
                            <p>
                                {!! $project->{'description_' . app()->getLocale()} !!}
                            </p>
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
                @if ($project->video)
                    <div class="row d-flex justify-content-center" data-aos="fade-up" style="margin-top:60px;">
                        <div class="col-md-10 d-flex justify-content-center">
                            <video src="{{ asset('storage/' . $project->video) }}" controls
                                style="max-height: 450px;"></video>
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
