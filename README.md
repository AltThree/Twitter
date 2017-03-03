# Alt Three Twitter

A Twitter handle parser for Laravel 5.


## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of Alt Three Twitter, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require alt-three/twitter
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "alt-three/twitter": "^1.0"
    }
}
```

Once Alt Three Twitter is installed, you need to register the service provider. Open up `config/app.php` and add the `AltThree\Twitter\TwitterServiceProvider` class to the `providers`.

If you'd like to use with [Laravel Markdown](https://github.com/GrahamCampbell/Laravel-Markdown), you'll need to add the `AltThree\Twitter\TwitterExtension` class to the `'extensions'` array in the `markdown.php` config.


## Security

If you discover a security vulnerability within this package, please e-mail us at support@alt-three.com. All security vulnerabilities will be promptly addressed.


## License

Alt Three Twitter is licensed under [The MIT License (MIT)](LICENSE).
