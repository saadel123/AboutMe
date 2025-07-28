@push('styles')
    <link href="{{ asset('admin/css/auth.css') }}" rel="stylesheet">
@endpush

<x-admin.layout.app title="Auth">
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        {{-- <div class="d-flex justify-content-center py-3">
                            <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                                <span>Accès Admin</span>
                            </a>
                        </div> --}}

                        <div class="card login-card w-100">
                            <div class="card-body px-4 py-4">

                                <div class="text-center mb-3">
                                    <h5 class="card-title pb-0 fs-4">Bienvenue</h5>
                                    <p class="small">Veuillez vous connecter à votre compte</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                                    @csrf

                                    <div class="mb-3">
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

                                    <div class="mb-3">
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

                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                    </div>

                                    <div class="d-grid mb-3">
                                        <button class="btn btn-primary" type="submit">Se connecter</button>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <div class="text-center">
                                            <a class="small" href="{{ route('password.request') }}">Mot de passe oublié
                                                ?</a>
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
