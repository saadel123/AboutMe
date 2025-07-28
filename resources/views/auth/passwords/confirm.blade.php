@push('styles')
    <link href="{{ asset('admin/css/auth.css') }}" rel="stylesheet">
@endpush

<x-admin.layout.app title="Auth">
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3 auth-card">
                            {{-- <div class="auth-logo">
                                <a href="{{ url('/') }}"
                                    class="d-flex align-items-center justify-content-center w-auto">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                                    <span class="auth-access-text">Confirmer le mot de passe</span>
                                </a>
                            </div> --}}
                            <div class="card-body">

                                <div class="pt-4 pb-2 text-center">
                                    <h5 class="card-title">Veuillez confirmer votre mot de passe</h5>
                                    <p class="card-subtitle">Avant de continuer, veuillez entrer votre mot de passe actuel.
                                    </p>
                                </div>

                                <form method="POST" action="{{ route('password.confirm') }}"
                                    class="row g-3 needs-validation" novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="********">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Confirmer le mot de passe
                                        </button>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <div class="col-12 text-center mt-3">
                                            <p class="small mb-0">
                                                <a href="{{ route('password.request') }}" class="auth-link">
                                                    Mot de passe oublié ?
                                                </a>
                                            </p>
                                        </div>
                                    @endif
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin.layout.app>
