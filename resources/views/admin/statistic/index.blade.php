@extends('admin.layouts.master')

@section('stylesheet')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .journey-path {
            max-height: 200px;
            overflow-y: auto;
            padding-right: 10px;
        }
        .journey-step {
            margin-bottom: 8px;
            padding-bottom: 8px;
            border-bottom: 1px dashed #e9ecef;
            display: flex;
            align-items: center;
        }
        .journey-step:last-child {
            border-bottom: none;
        }
        .journey-step a {
            color: #4154f1;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }
        .journey-step a:hover {
            color: #2c3eaa;
            text-decoration: underline;
        }
        .journey-step i {
            font-size: 0.9rem;
        }
        .badge-language {
            font-size: 0.75rem;
            margin-left: 5px;
        }
        .resume-click {
            background-color: #fff3cd;
        }
    </style>
@endsection

@section('content')
    <div class="pagetitle">
        <h1>User Statistics</h1>
        <nav style="display: flex; justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">User Statistics</li>
            </ol>
            <div>
                <a href="{{ route('statistic') }}?filter=resume" class="btn btn-sm btn-warning me-2">
                    <i class="bi bi-file-earmark-person"></i> Resume Clicks
                </a>
                <button class="btn btn-sm btn-outline-primary" id="refresh-btn">
                    <i class="bi bi-arrow-clockwise"></i> Refresh
                </button>
            </div>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Navigation Paths</h5>
                        <!-- Filters -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <input type="date" class="form-control" id="filter-date" value="{{ request('date') }}">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary" id="apply-filter">
                                    <i class="bi bi-funnel"></i> Filter
                                </button>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" id="language-filter">
                                    <option value="">All Languages</option>
                                    <option value="en" {{ request('language') == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="de" {{ request('language') == 'de' ? 'selected' : '' }}>German</option>
                                    <option value="fr" {{ request('language') == 'fr' ? 'selected' : '' }}>French</option>
                                </select>
                            </div>
                            <div class="col-md-2 ms-auto">
                                <select class="form-select" id="items-per-page">
                                    <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10 per page</option>
                                    <option value="25" {{ request('per_page', 10) == 25 ? 'selected' : '' }}>25 per page</option>
                                    <option value="50" {{ request('per_page', 10) == 50 ? 'selected' : '' }}>50 per page</option>
                                    <option value="100" {{ request('per_page', 10) == 100 ? 'selected' : '' }}>100 per page</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Session</th>
                                        <th scope="col">Journey</th>
                                        <th scope="col">Started</th>
                                        <th scope="col">Last Activity</th>
                                        <th scope="col">Pages</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($journeys as $sessionId => $views)
                                        @php
                                            $firstView = $views->last();
                                            $lastView = $views->first();
                                            $duration = $firstView->clicked_at->diffForHumans($lastView->clicked_at, true);
                                            $isResumeClick = $views->contains('is_resume_click', true);
                                        @endphp
                                        <tr class="{{ $isResumeClick ? 'resume-click' : '' }}">
                                            <td>
                                                <span class="badge bg-primary" title="{{ $sessionId }}">
                                                    {{ Str::limit($sessionId, 8) }}
                                                    @if($isResumeClick)
                                                        <span class="badge bg-warning badge-language" title="Resume Click">CV</span>
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                <div class="journey-path">
                                                    @foreach ($views->sortBy('clicked_at') as $view)
                                                        <div class="journey-step">
                                                            <small class="text-muted me-2">{{ $view->clicked_at->format('H:i') }}</small>
                                                            @if ($view->is_resume_click)
                                                                <span class="d-inline-flex align-items-center text-warning">
                                                                    <i class="bi bi-file-earmark-person me-1"></i>
                                                                    <span>Resume Link ({{ strtoupper($view->language) }})</span>
                                                                </span>
                                                            @elseif ($view->project_id)
                                                                <a href="{{ $view->page_url }}" class="d-inline-flex align-items-center">
                                                                    <i class="bi bi-box-seam me-1"></i>
                                                                    <span>{{ $view->page_title ?: 'Project #'.$view->project_id }}</span>
                                                                    <span class="badge bg-secondary badge-language">{{ strtoupper($view->language) }}</span>
                                                                </a>
                                                            @else
                                                                <a href="{{ $view->page_url }}" class="d-inline-flex align-items-center">
                                                                    <i class="bi bi-house me-1"></i>
                                                                    <span>Homepage</span>
                                                                    <span class="badge bg-secondary badge-language">{{ strtoupper($view->language) }}</span>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td>
                                                <span class="d-block">{{ $firstView->clicked_at->format('M j') }}</span>
                                                <small class="text-muted">{{ $firstView->clicked_at->format('H:i') }}</small>
                                            </td>
                                            <td>
                                                <span class="d-block">{{ $lastView->clicked_at->format('M j') }}</span>
                                                <small class="text-muted">{{ $lastView->clicked_at->format('H:i') }}</small>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge rounded-pill bg-info">
                                                    {{ $views->count() }}
                                                </span>
                                            </td>
                                            <td>{{ $duration }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-danger delete-session"
                                                    data-session-id="{{ $sessionId }}"
                                                    title="Delete this session's statistics">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete all statistics for this session?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date filter
            document.getElementById('apply-filter').addEventListener('click', function() {
                applyFilters();
            });

            // Language filter
            document.getElementById('language-filter').addEventListener('change', function() {
                applyFilters();
            });

            // Items per page
            document.getElementById('items-per-page').addEventListener('change', function() {
                applyFilters();
            });

            // Refresh button
            document.getElementById('refresh-btn').addEventListener('click', function() {
                window.location.reload();
            });

            function applyFilters() {
                const date = document.getElementById('filter-date').value;
                const language = document.getElementById('language-filter').value;
                const perPage = document.getElementById('items-per-page').value;

                let url = "{{ route('statistic') }}?";
                if (date) url += `date=${date}&`;
                if (language) url += `language=${language}&`;
                url += `per_page=${perPage}`;

                window.location.href = url;
            }

            // Delete functionality
            document.querySelectorAll('.delete-session').forEach(button => {
                button.addEventListener('click', function() {
                    const sessionId = this.getAttribute('data-session-id');
                    const form = document.getElementById('deleteForm');
                    form.action = "{{ route('statistic.destroy', '') }}/" + sessionId;
                    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
                    modal.show();
                });
            });

            // Initialize DataTable
            $('.datatable').DataTable({
                order: [[2, 'desc']],
                dom: '<"top"<"d-flex justify-content-between align-items-center"fl>>rt<"bottom"ip><"clear">',
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search sessions...",
                    lengthMenu: "_MENU_"
                },
                pageLength: {{ request('per_page', 10) }},
                initComplete: function() {
                    $('.dataTables_filter input').addClass('form-control');
                    $('.dataTables_length select').addClass('form-select');
                }
            });

            // Success message handling
            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif
        });
    </script>
@endsection