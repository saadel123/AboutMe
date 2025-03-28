@extends('admin.layouts.master')

@section('stylesheet')
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
    </style>
@endsection

@section('content')
    <div class="pagetitle">
        <h1>User Statistics</h1>
        <nav style="display: flex; justify-content: space-between;">
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li> --}}
                <li class="breadcrumb-item active">User Statistics</li>
            </ol>
            <button class="btn btn-sm btn-outline-primary" id="refresh-btn">
                <i class="bi bi-arrow-clockwise"></i> Refresh
            </button>
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
                            <div class="col-md-2 ms-auto">
                                <select class="form-select" id="items-per-page">
                                    <option value="10">10 per page</option>
                                    <option value="25">25 per page</option>
                                    <option value="50">50 per page</option>
                                    <option value="100">100 per page</option>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($journeys as $sessionId => $views)
                                        @php
                                            $firstView = $views->last();
                                            $lastView = $views->first();
                                            $duration = $firstView->clicked_at->diffForHumans(
                                                $lastView->clicked_at,
                                                true,
                                            );
                                        @endphp
                                        <tr>
                                            <td>
                                                <span class="badge bg-primary" title="{{ $sessionId }}">
                                                    {{ Str::limit($sessionId, 8) }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="journey-path">
                                                    @foreach ($views->sortBy('clicked_at') as $view)
                                                        <div class="journey-step">
                                                            <small
                                                                class="text-muted me-2">{{ $view->clicked_at->format('H:i') }}</small>
                                                            @if ($view->project_id)
                                                                <a href="{{ $view->page_url }}"
                                                                    class="d-inline-flex align-items-center">
                                                                    <i class="bi bi-box-seam me-1"></i>
                                                                    <span>
                                                                        {{ $view->page_title ?: 'Project #' . $view->project_id }}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="{{ $view->page_url }}"
                                                                    class="d-inline-flex align-items-center">
                                                                    <i class="bi bi-house me-1"></i>
                                                                    <span>Homepage</span>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td>
                                                <span class="d-block">{{ $firstView->clicked_at->format('M j') }}</span>
                                                <small
                                                    class="text-muted">{{ $firstView->clicked_at->format('H:i') }}</small>
                                            </td>
                                            <td>
                                                <span class="d-block">{{ $lastView->clicked_at->format('M j') }}</span>
                                                <small
                                                    class="text-muted">{{ $lastView->clicked_at->format('H:i') }}</small>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge rounded-pill bg-info">
                                                    {{ $views->count() }}
                                                </span>
                                            </td>
                                            <td>{{ $duration }}</td>
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
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date filter
            document.getElementById('apply-filter').addEventListener('click', function() {
                const date = document.getElementById('filter-date').value;
                window.location.href = "{{ route('statistic') }}" + (date ? `?date=${date}` : '');
            });

            // Refresh button
            document.getElementById('refresh-btn').addEventListener('click', function() {
                window.location.reload();
            });

            // Items per page
            document.getElementById('items-per-page').addEventListener('change', function() {
                const url = new URL(window.location.href);
                url.searchParams.set('per_page', this.value);
                window.location.href = url.toString();
            });

            // Initialize DataTable
            $('.datatable').DataTable({
                order: [
                    [2, 'desc']
                ],
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
        });
    </script>
@endsection
