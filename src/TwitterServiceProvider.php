<?php

declare(strict_types=1);

/*
 * This file is part of Alt Three Twitter.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Twitter;

use Illuminate\Support\ServiceProvider;

/**
 * This is the twitter service provider class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TwitterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerParser();
    }

    /**
     * Register the parser class.
     *
     * @return void
     */
    protected function registerParser()
    {
        $this->app->singleton(TwitterParser::class, function () {
            return new TwitterParser();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            //
        ];
    }
}
