@extends('layouts.master')
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Saad El Ghanemy</h1>
            <p><span class="typed" data-typed-items="{!! __('home.devweb') !!}"></span></p>
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
        </div>
    </section>
    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2> {!! __('home.about.title') !!}</h2>
                    <p style="white-space: break-spaces;">{!! __('home.about.description') !!}</p>
                </div>
                <div class="row">
                    <div class="col-lg-10 m-auto pt-4 pt-lg-0 content">
                        <h3>{!! __('home.about.dvweb') !!}</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.dte') !!} :</strong>
                                        <span>24</span></li> --}}
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.experience') !!}:</strong>
                                        <span>{!! __('home.about.experiences') !!}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.dpl') !!}:</strong>
                                        <span>{!! __('home.about.dpls') !!}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.age') !!} :</strong>
                                        <span>24 {!! __('home.about.year') !!}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.vle') !!} :</strong>
                                        <span>{!! __('home.about.address') !!}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.tele') !!} :</strong>
                                        <span>+212 60057-0107</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.Contact.email') !!} :</strong>
                                        <span>elghanemysaad@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p>
                            {!! __('home.about.description2') !!}
                        </p> --}}
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
                                <span class="skill">{{ $skill->langage }} <i
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
                    <p>{!! __('home.resume.description') !!}</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">{!! __('home.resume.expprof') !!}</h3>
                        <p><{!! __('home.about.address') !!} </em></p>
                        @foreach ($experiences as $experience)
                            <div class="resume-item">
                                <h4>{{ $experience->{'title_' . app()->getLocale()} }}</h4>
                                <h5>{{ $experience->datedebut }} - {{ $experience->datefin ??  __('home.about.date')  }}</h5>
                                <p><em>{{ $experience->lieu }}</em></p>
                                {{-- <ul> --}}
                                    {!! $experience->{'description_' . app()->getLocale()} !!}
                                {{-- </ul> --}}
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">{!! __('home.resume.education') !!}</h3>
                        @foreach ($educations as $education)
                            <div class="resume-item">
                                <h4>{{ $education->{'title_' . app()->getLocale()} }}</h4>
                                <h5>{{ $education->datedebut }} - {{ $education->datefin }}</h5>
                                <p><em>{{ $education->lieu }}</em></p>
                            </div>
                        @endforeach
                        {{-- <h3 class="resume-title">{!! __('home.resume.attestation') !!}</h3>
                        <div class="resume-item">
                            <h4><a href=""
                                    target="_blanck">freeCodeCamp |Java Script</a></h4>
                        </div> --}}
                        <h3 class="resume-title">{!! __('home.resume.resume') !!}</h3>
                        <div class="resume-item pb-0">
                            <h4>Saad El ghanemy</h4>
                            <p><em>{!! __('home.resume.description') !!}</em></p>
                            <ul>
                                <li>{!! __('home.about.address') !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{!! __('home.portfolio.title') !!}</h2>
                    <p>{!! __('home.portfolio.description') !!}</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap portfolio-img"
                                style="background-image: url('{{ 'storage/' . $project->image }}')">
                                <div class="portfolio-info">
                                    <p>{{ $project->{'title_' . app()->getLocale()} }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ 'storage/' . $project->image }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('single.project', $project->id) }}"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>{!! __('home.Contact.location') !!} :</h4>
                                <p>{!! __('home.about.address') !!}</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>{!! __('home.Contact.email') !!} :</h4>
                                <p>elghanemysaad@gmail.com</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>{!! __('home.Contact.phone') !!} :</h4>
                                <p>+212 60057-0107</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                                <textarea class="form-control" name="{!! __('home.Contact.msg') !!}" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Chargement</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message a été envoyé. Merci !</div>
                            </div>
                            <div class="text-center"><button type="submit">{!! __('home.Contact.btn') !!}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        .portfolio-img {
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            background-color: rgb(225 226 228);
            height: 285px;
        }
    </style>
@endsection
