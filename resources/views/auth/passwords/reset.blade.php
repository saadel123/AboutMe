@push('styles')
    <link href="{{ asset('admin/css/auth.css') }}" rel="stylesheet">
@endpush

<x-admin.layout.app title="Auth">
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div
                        class="col-lg-6 col-md-8 col-sm-10 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3 auth-card">
                            {{-- <div class="auth-logo">
                                <a href="{{ url('/') }}" class="d-flex align-items-center justify-content-center w-auto">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                                    <span class="auth-access-text">Réinitialiser le mot de passe</span>
                                </a>
                            </div> --}}
                            <div class="card-body">

                                <div class="pt-4 pb-2 text-center">
                                    <h5 class="card-title">Réinitialisation du mot de passe</h5>
                                    <p class="card-subtitle">Veuillez saisir votre adresse e-mail et un nouveau mot de
                                        passe.</p>
                                </div>

                                <form method="POST" action="{{ route('password.update') }}"
                                    class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="col-12">
                                        <label for="email" class="form-label">Adresse e-mail</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $email ?? old('email') }}" required autocomplete="email"
                                                autofocus placeholder="votre@email.com">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Nouveau mot de passe</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"
                                                placeholder="Nouveau mot de passe">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password-confirm" class="form-label">Confirmer le mot de
                                            passe</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Confirmez le mot de passe">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Réinitialiser le mot de passe
                                        </button>
                                    </div>

                                    <div class="col-12 text-center mt-3">
                                        <p class="small mb-0">Vous vous souvenez de votre mot de passe ?
                                            <a href="{{ route('login') }}" class="auth-link">Connexion</a>
                                        </p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin.layout.app>
