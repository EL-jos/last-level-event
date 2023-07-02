<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*$theatreEtComedi = Category::whereIn('id', [20, 21])->get();
        $concertEtFestival = Category::whereIn('id', [13, 36])->get();
        $familleEtLoisir = Category::whereIn('id', [27, 37])->get();
        $sport = Category::whereIn('id', [38])->get();*/

        $categories = collect([
            'theatreEtComedi' => [20, 21],
            'concertEtFestival' => [13, 36],
            'familleEtLoisir' => [27, 37],
            'sport' => 38,
        ]);

        // Partagez la variable $categories avec toutes les vues
        View::share('navbar', $categories);
    }
}
