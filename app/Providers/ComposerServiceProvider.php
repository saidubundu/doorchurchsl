<?php

namespace App\Providers;

use App\Bible;
use App\Event;
use App\Post;
use App\Sermon;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
    public function boot()
    {
        //
        view()->composer('frontend.includes.popularPost', function ($view){
            $popularPosts = Post::published()->popular()->take(4)->get();
            return $view->with('popularPosts', $popularPosts);
        });

        view()->composer('frontend.includes.popularEvent', function($view){
            $popularEvent = Event::popular()->take(4)->get();
            return $view->with('popularEvent', $popularEvent);
        });

        view()->composer('frontend.includes.popularSermons', function ($view){
            $popularSermons = Sermon::published()->popular()->take(4)->get();
            return $view->with('popularSermons', $popularSermons);
        });

        view()->composer('frontend.includes.footerSermon', function ($view){
            $latestSermon = Sermon::published()->popular()->take(3)->get();
            return $view->with('latestSermon', $latestSermon);
        });

        view()->composer('frontend.includes.bible_verse', function ($view){
            $bibleVerse = Bible::latest()->take(1)->get();
            return $view->with('bibleVerse', $bibleVerse);
        });
    }
}
