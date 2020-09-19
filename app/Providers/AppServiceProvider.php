<?php

namespace App\Providers;

use App\Article;
use App\Category;
use App\Discussion;
use App\Tag;
use App\Tools\FileManager\BaseManager;
use App\Tools\FileManager\UpyunManager;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lang = config('app.locale') != 'zh_cn' ? config('app.locale') : 'zh';
        \Carbon\Carbon::setLocale($lang);

        Relation::morphMap([
            'discussions' => Discussion::class,
            'articles'    => Article::class,
        ]);

        Schema::defaultStringLength(191);

        view()->composer('widgets.rightMenu', function ($view) {
            $hotArticles = Article::checkAuth()
                ->orderBy('view_count', 'desc')->limit(8)->get();
            $view->with('hotArticles', $hotArticles);

            $lastArticles = Article::checkAuth()
                ->orderBy('published_at', 'desc')->limit(5)->get();
            $view->with('lastArticles', $lastArticles);

            $categories = Category::all();
            $view->with('categories', $categories);

            $tags = Tag::all();
            $view->with('tags', $tags);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uploader', function ($app) {
            $config = config('filesystems.default', 'public');

            if ($config == 'upyun') {
                return new UpyunManager();
            }

            return new BaseManager();
        });
    }
}
