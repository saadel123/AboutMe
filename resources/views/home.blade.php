@extends('admin.layouts.master')
@section('stylesheet')
    <style>
        .dashboard .card-icon {
            background: #f6f6fe;
        }



        .card-link:hover .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Home</h1>
        <nav style="display: flex; justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <!-- About Card -->
                    <div class="col-md-4">
                        <a href="{{ route('abouts.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">About</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-info-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $aboutCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Education Card -->
                    <div class="col-md-4">
                        <a href="{{ route('educations.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Educations</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-mortarboard"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $educationCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Experience Card -->
                    <div class="col-md-4">
                        <a href="{{ route('experiences.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Experiences</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-briefcase"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $experienceCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Skills Card -->
                    <div class="col-md-4">
                        <a href="{{ route('skills.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Skills</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-lightbulb"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $skillCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Services Card -->
                    <div class="col-md-4">
                        <a href="{{ route('services.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Services</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-gear"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $serviceCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Projects Card -->
                    <div class="col-md-4">
                        <a href="{{ route('projects.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Projects</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-kanban"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $projectCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Certificates Card -->
                    <div class="col-md-4">
                        <a href="{{ route('certificates.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Certificates</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $certificateCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Categories Card -->
                    <div class="col-md-4">
                        <a href="{{ route('categories.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Categories</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-tags"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $categoryCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-4">
                        <a href="{{ route('contacts.index') }}" class="card-link">
                            <div class="card info-card">
                                <div class="card-body">
                                    <h5 class="card-title">Messages</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-phone"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $contactCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
