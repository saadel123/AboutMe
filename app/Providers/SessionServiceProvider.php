<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SessionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    // In your SessionServiceProvider
    public function boot()
    {
        if (!session()->has('user_session_id')) {
            session()->put('user_session_id', Str::uuid());
            session()->put('user_session_expires', now()->addHours(48));
        }

        // Clear session if expired
        if (
            session()->has('user_session_expires') &&
            now()->gt(session()->get('user_session_expires'))
        ) {
            session()->forget('user_session_id');
            session()->forget('user_session_expires');
            // Clear all page view flags
            foreach (session()->all() as $key => $value) {
                if (str_starts_with($key, 'viewed_page_')) {
                    session()->forget($key);
                }
            }
        }
    }
}
