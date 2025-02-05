@if (session('success') || session('danger'))
    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center position-relative" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="progress-bar-container">
                    <div class="progress-bar success"></div>
                </div>
            </div>
        @endif

        @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center position-relative" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                {{ session('danger') }}
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="progress-bar-container">
                    <div class="progress-bar danger"></div>
                </div>
            </div>
        @endif
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(() => {
                let alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    alert.classList.remove('show');
                    setTimeout(() => alert.remove(), 800);
                });
            }, 5000);
        });
    </script>

    <style>
        .progress-bar-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .progress-bar {
            height: 100%;
            width: 100%;
            transform: scaleX(1);
            transform-origin: left;
            animation: progressAnimation 5s linear forwards;
        }
        .progress-bar.success {
            background: #198754;
        }
        .progress-bar.danger {
            background: #dc3545;
        }
        @keyframes progressAnimation {
            0% { transform: scaleX(1); }
            100% { transform: scaleX(0); }
        }
    </style>
@endif
