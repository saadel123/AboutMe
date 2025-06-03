@extends('layouts.master')

@section('title', '404 Not Found')

@section('stylesheet')
    <style>
        .error-container {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
        }

        .error-code {
            font-size: 10rem;
            font-weight: 900;
            color: #0563bb;
            line-height: 1;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.05);
        }

        .error-msg {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--heading-color);
            font-weight: 600;
        }

        .error-description {
            font-size: 1.1rem;
            color: #6c757d;
            max-width: 600px;
            margin-bottom: 2rem;
        }

        .error-btn {
            color: #fff;
            background: #0563bb;
            border: 0;
            padding: 10px 30px;
            transition: 0.4s;
            border-radius: 50px;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.2);
        }

        .error-btn:hover {
            background: #0678e3;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(13, 110, 253, 0.3);
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }

            .error-msg {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container error-container">
        <div class="error-code">{{ __('errors.code') }}</div>
        <div class="error-msg">{{ __('errors.title') }}</div>
        <p class="error-description">
            {{ __('errors.description') }}
        </p>
        <a href="{{ url('/') }}" class="error-btn mt-3">{{ __('errors.button') }}</a>
    </div>
@endsection