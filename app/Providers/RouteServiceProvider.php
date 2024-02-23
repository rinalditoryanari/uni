<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "dashboard" route, based on the user's role.
     * @var strings
     */
    public const HOME  = '';
    public static function home(): string
    {
        if (auth()->user()) {
            switch (auth()->user()->role) {
                case 0:
                    return route('staf.dashboard');
                    break;
                case 1:
                    return route('mhsw.dashboard');
                    break;
                case 2:
                    return route('dosen.dashboard');
                    break;
                case 3:
                    return route('asdos.dashboard');
                    break;
            }
        }
        return self::HOME; // Default redirect for non-authenticated user
    }

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
