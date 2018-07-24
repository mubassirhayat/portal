<?php

namespace App\Providers;

use Horizon;
use App\Models\Thread;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bootEloquentMorphs();
        $this->bootMacros();
        $this->bootHorizon();
    }

    private function bootEloquentMorphs()
    {
        Relation::morphMap([
            Thread::TABLE => Thread::class,
        ]);
    }

    public function bootMacros()
    {
        require base_path('resources/macros/blade.php');
    }

    public function bootHorizon()
    {
        if ($horizonEmail = config('lio.horizon_email')) {
            Horizon::routeMailNotificationsTo($horizonEmail);
        }

        Horizon::auth(function ($request) use ($horizonEmail) {
            return auth()->check() && auth()->user()->emailAddress() === $horizonEmail;
        });
    }
}
