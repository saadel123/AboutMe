@push('styles')
    <link href="{{ asset('admin/css/auth.css') }}" rel="stylesheet">
@endpush

<x-admin.layout.app title="Auth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Vérifiez votre adresse e-mail') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                            </div>
                        @endif

                        {{ __('Avant de continuer, veuillez vérifier votre boîte mail pour y trouver le lien de vérification.') }}<br>
                        {{ __('Si vous n\'avez pas reçu l\'e-mail') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                {{ __('cliquez ici pour en recevoir un nouveau') }}
                            </button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout.app>
