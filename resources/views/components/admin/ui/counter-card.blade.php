<div class="col-md-4">
    <a href="{{ $route }}" class="card-link">
        <div class="card info-card">
            <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi {{ $icon }}"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ $count }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
