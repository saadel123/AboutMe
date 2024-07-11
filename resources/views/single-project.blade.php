@extends('layouts.master')
@section('content')
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3><a href="{{ $project->link }}"
                                target="_blanck">{{ $project->{'title_' . app()->getLocale()} }}</a></h3>
                        <ul>
                            <li>{!! __('home.devweb') !!}</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        {{ $project->{'description_' . app()->getLocale()} }}
                    </div>
                </div>
            </div>
            @if ($images->count() > 0)
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h3>{!! __('home.single-project.images') !!}</h3>
                        <div class="row  mt-4">
                            @foreach ($images as $item)
                                <div class="col-lg-4  cont-image col-md-6 mt-4">
                                    <a href="{{ asset('storage/' . $item->url ) }}"
                                        data-gallery="portfolio-gallery" class="glightbox cont-img">
                                        <img src="{{ asset('storage/' . $item->url) }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if ($images_code->count() > 0)
                <div class="row mt-4 justify-content-center">
                    <div class="col-10">
                        <h3>{!! __('home.single-project.images_code') !!}</h3>
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
            @if ($project->video)
            <div class="row d-flex justify-content-center" style="margin-top:60px">
                <div class="col-md-10 d-flex justify-content-center">
                    <video src="{{ asset('storage/' . $project->video) }}" controls style="max-height: 450px;"></video>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection