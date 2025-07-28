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
                                <a href="{{ url('/') }}"
                                    class="d-flex align-items-center justify-content-center w-auto">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                                    <span class="auth-access-text">Créer un compte</span>
                                </a>
                            </div> --}}

                            <div class="card-body">
                                <div class="pt-4 pb-2 text-center">
                                    <h5 class="card-title">Créer votre compte</h5>
                                    <p class="card-subtitle">Veuillez renseigner les champs pour démarrer.</p>
                                </div>

                                <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation"
                                    novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="name" class="form-label">Nom complet</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                                placeholder="Votre nom complet">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Adresse e-mail</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="votre@email.com">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password"
                                                placeholder="Entrez un mot de passe">
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
                                                placeholder="Confirmez votre mot de passe">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">
                                            S'inscrire
                                        </button>
                                    </div>

                                    <div class="col-12 text-center mt-3">
                                        <p class="small mb-0">Vous avez déjà un compte ?
                                            <a href="{{ route('login') }}" class="auth-link">Connectez-vous</a>
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
