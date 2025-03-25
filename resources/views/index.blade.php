@extends('layouts.master')
@section('stylesheet')
    <style>
        .portfolio-img {
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            background-color: rgb(225 226 228);
            height: 285px;
        }

        .error-message {
            display: none !important;
        }
    </style>
@endsection
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{ $about->fullname }}</h1>
            <p><span class="typed" data-typed-items="{!! $about->{'headline_' . $locale} !!}"></span></p>
            <div class="social-links">
                {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                <a href="https://github.com/saadel123" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/saad-elghanemy/" target="_blank" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
                <a href="https://www.xing.com/profile/Saad_Elghanemy" target="_blank" class="xing"><i
                        class="bx bxl-xing"></i></a>
            </div>
            <div class="scroll-down mt-4" data-aos="fade-up" data-aos-delay="500" data-aos-anchor="#hero">
                <a href="#about" class="scroll-link" aria-label="Navigate to About section">
                    <i class="bx bxs-chevron-down bx-tada-hover fs-2"></i>
                </a>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    @if (!empty($about->{'description_' . $locale}))
                        <h2>{!! __('home.about.title') !!}</h2>
                        <p style="white-space: break-spaces;">{!! $about->{'description_' . $locale} !!}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-10 m-auto pt-4 pt-lg-0 content">
                        @if (!empty($about->{'title_' . $locale}))
                            <h3 class="mb-3">{!! $about->{'title_' . $locale} !!}</h3>
                        @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    @if (!empty($about->{'experince_' . $locale}))
                                        <li>
                                            <i class="bi bi-chevron-right"></i>
                                            <strong>{!! __('home.about.experience') !!}:</strong>
                                            <span>{!! $about->{'experince_' . $locale} !!}</span>
                                        </li>
                                    @endif
                                    @if (!empty($about->{'diploma_' . $locale}))
                                        <li>
                                            <i class="bi bi-chevron-right"></i>
                                            <strong>{!! __('home.about.dpl') !!}:</strong>
                                            <span>{!! $about->{'diploma_' . $locale} !!}</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    @if (!empty($about->age))
                                        <li>
                                            <i class="bi bi-chevron-right"></i>
                                            <strong>{!! __('home.about.age') !!} :</strong>
                                            <span>{{ $about->age }} {!! __('home.about.year') !!}</span>
                                        </li>
                                    @endif
                                    @if (!empty($about->{'location_' . $locale}))
                                        <li>
                                            <i class="bi bi-chevron-right"></i>
                                            <strong>{!! __('home.about.vle') !!} :</strong>
                                            <span>{!! $about->{'location_' . $locale} !!}</span>
                                        </li>
                                    @endif
                                    @if (!empty($about->email))
                                        <li>
                                            <i class="bi bi-chevron-right"></i>
                                            <strong>{!! __('home.Contact.email') !!} :</strong>
                                            <span>{{ $about->email }}</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{!! __('home.skills') !!}</h2>
                </div>
                <div class="row skills-content">
                    @foreach ($skills as $skill)
                        <div class="col-lg-6">
                            <div class="progress">
                                <span class="skill">{{ $skill->language }} <i
                                        class="val">{{ $skill->percent }}</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percent }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{!! __('home.resume.title') !!}</h2>
                    <p>{!! $about->{'title_' . $locale} !!}</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">{!! __('home.resume.expprof') !!}</h3>
                        <p>
                            <{!! __('home.about.address') !!} </em>
                        </p>
                        @foreach ($experiences as $experience)
                            <div class="resume-item">
                                <h4>{{ $experience->{'title_' . $locale} }}</h4>
                                <h5>{{ $experience->datedebut }} - {{ $experience->datefin ?? __('home.about.date') }}
                                </h5>
                                {{-- <p><em>{{ $experience->lieu }}</em></p> --}}
                                {!! $experience->{'description_' . $locale} !!}
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">{!! __('home.resume.education') !!}</h3>
                        @foreach ($educations as $education)
                            <div class="resume-item">
                                <h4>{{ $education->{'title_' . $locale} }}</h4>
                                <h5>{{ $education->datedebut }} - {{ $education->datefin }}</h5>
                                {{-- <p><em>{{ $education->lieu }}</em></p> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>{!! __('home.portfolio.title') !!}</h2>
                <p>{!! $about->{'portfolio_description_' . $locale} !!}</p>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">{!! __('home.portfolio.filters.title') !!}</li>
                        @foreach ($categories as $category)
                            @if ($category->projects->count() > 0)
                            <li data-filter=".{{ $category->name }}">{{ $category->name }}</li>
                            @endif
                        @endforeach
                    </ul><!-- End Portfolio Filters -->
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="100">
                        @foreach ($projects as $project)
                            <div
                                class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $project->categories->pluck('name')->implode(' ') }}">
                                <a href="{{ route('single.project', $project->id) }}" title="More Details"
                                    class="details-link">
                                    <img src="{{ asset('storage/' . $project->image) }}"
                                        class="img-fluid portfolio-wrap portfolio-img lazyload"
                                        alt="{{ $project->{'title_' . $locale} }}">
                                </a>
                                <div class="portfolio-info">
                                    <p>{{ $project->{'title_' . $locale} }}</p>
                                    <a href="{{ asset('storage/' . $project->image) }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                                        <i class="bi bi-zoom-in"></i>
                                    </a>
                                    <a href="{{ route('single.project', $project->id) }}" title="More Details"
                                        class="details-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->
                </div>
        </section>
        <section id="certificates" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>{!! __('home.certificates.title') !!}</h2>
                <p>{!! $about->{'certificate_description_' . $locale} !!}</p>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="100">
                        @foreach ($certificates as $certificate)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                                <a href="{{ 'storage/' . $certificate->image }}" data-gallery="certificate-gallery-app"
                                    class="glightbox preview-link">
                                    <img src="{{ 'storage/' . $certificate->image }}"
                                        class="img-fluid portfolio-wrap portfolio-img bg-certificate lazyload"
                                        alt="">
                                </a>
                                <div class="portfolio-info">
                                    <p>{{ $certificate->{'title_' . $locale} }}</p>
                                    @if (!empty($certificate->link))
                                        <a href="{{ $certificate->link }}" target="_blank" title="More Details"
                                            class="details-link">
                                            <i class="bi bi-link-45deg"></i>
                                        </a>
                                    @endif
                                </div>
                            </div><!-- End Certificate Item -->
                        @endforeach
                    </div><!-- End Certificates Container -->
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>{!! __('home.Contact.location') !!} :</h4>
                                <p>{!! $about->{'location_' . $locale} !!}</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>{!! __('home.Contact.email') !!} :</h4>
                                <p> {{ $about->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form id="contact-form" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{!! __('home.Contact.name') !!}" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{!! __('home.Contact.email') !!}" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="{!! __('home.Contact.sub') !!}" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="{!! __('home.Contact.message') !!}" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">{!! __('home.Contact.loading') !!}</div>
                                <div class="error-message"></div>
                                <div class="sent-message">{!! __('home.Contact.msg_success') !!}</div>
                            </div>
                            {{-- <button type="submit" id="submit-btn">{!! __('home.Contact.btn') !!}</button> --}}
                            <div class="text-center"><button type="submit"
                                    id="submit-btn">{!! __('home.Contact.btn') !!}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
