# Alt Three Twitter

A Twitter handle parser for Laravel 5.


## Installation

This version requires [PHP](https://php.net) 7.1 or 7.2, and supports Laravel 5.5 - 5.7 only.

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require alt-three/twitter
```

Once installed, if you are not using automatic package discovery, then you need to register the `AltThree\Twitter\TwitterServiceProvider` service provider in your `config/app.php`.

If you'd like to use with [Laravel Markdown](https://github.com/GrahamCampbell/Laravel-Markdown), you'll need to add the `AltThree\Twitter\TwitterExtension` class to the `'extensions'` array in your `config/markdown.php` file.


## Security

If you discover a security vulnerability within this package, please e-mail us at support@alt-three.com. All security vulnerabilities will be promptly addressed.


## License

Alt Three Twitter is licensed under [The MIT License (MIT)](LICENSE).
