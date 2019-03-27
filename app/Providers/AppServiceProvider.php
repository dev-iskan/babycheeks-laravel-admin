<?php

namespace App\Providers;

use App\Search\Engines\ElasticSearchEngine;
use Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;
use Laravel\Scout\EngineManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('elasticsearch', function () {
            //register as singleton our elasticsearch-php package
            return ClientBuilder::create()
                ->setHosts([
                    'localhost:9200'
                ])
                ->build();
        });

        resolve(EngineManager::class)->extend('elasticsearch', function () {
            // pass added package as param
            return new ElasticSearchEngine(
                app('elasticsearch')
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
