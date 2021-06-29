<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Page;
use Illuminate\Support\ServiceProvider;

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
        $contact = Contact::first();
        $about = Page::where('slug', 'who-we-are')->first();
        view()->share(['contact' => $contact, 'about' => $about]);
    }
}
