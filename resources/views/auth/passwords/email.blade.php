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
                                    <span class="auth-access-text">Mot de passe oublié</span>
                                </a>
                            </div> --}}
                            <div class="card-body">

                                <div class="pt-4 pb-2 text-center">
                                    <h5 class="card-title">Mot de passe oublié ?</h5>
                                    <p class="card-subtitle">Entrez votre adresse e-mail pour recevoir un lien de
                                        réinitialisation.</p>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}" class="row g-3 needs-validation"
                                    novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="email" class="form-label">Adresse e-mail</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="votre@email.com">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Envoyer le lien de réinitialisation
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