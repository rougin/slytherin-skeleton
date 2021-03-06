# Basilisk

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Basilisk is a skeleton application exclusively for the [Slytherin](https://roug.in/slytherin/) framework. It enables developers to create new PHP projects with easy to understand code structure and tries to follow [SOLID](https://en.wikipedia.org/wiki/SOLID) principles.

## Installation

Install `Basilisk` via [Composer](https://getcomposer.org/):

``` bash
$ composer create-project rougin/basilisk:dev-master "acme"
```

## Getting Started

### Running migrations and seeds 

Before running the migrations/seeds, kindly update the database credentials first in `.env`.

``` bash
$ vendor/bin/phinx migrate -c app/config/phinx.php
$ vendor/bin/phinx seed:run -c app/config/phinx.php
```

**NOTE**: Running `seed:run` will load the seeders in **alphabetical** order.

### Running the application using PHP's built-in web server

``` bash
$ php -S localhost:8000 -t app/public
```

Now open your web browser and go to [http://localhost:8000](http://localhost:8000).

## What's inside?

| Package | Description |
| ------- | ----------- |
| [Authsum](https://roug.in/authsum/) | yet another PHP authentication library |
| [Blade](https://laravel.com/docs/5.5/blade) | a templating engine provided by [Laravel](https://laravel.com/) |
| [Dotenv](https://github.com/vlucas/phpdotenv) | loads environment variables from `.env` to `getenv()` |
| [Phinx](https://phinx.org/) | a PHP database migrations for everyone |
| [Slytherin](https://roug.in/slytherin/) | an extensible and SOLID-based micro-framework |
| [Valitron](https://github.com/vlucas/valitron) | a simple, elegant, stand-alone validation library |
| [Weasley](https://roug.in/weasley/) | generators and helpers for the Slytherin framework |

## Changelog

Please see [CHANGELOG][link-changelog] for more information what has changed recently.

## Testing

``` bash
$ vendor/bin/phpunit
```

## License

The MIT License (MIT). Please see [LICENSE][link-license] for more information.

[ico-code-quality]: https://img.shields.io/scrutinizer/g/rougin/basilisk.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/rougin/basilisk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/rougin/basilisk.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/rougin/basilisk/master.svg?style=flat-square
[ico-version]: https://img.shields.io/packagist/v/rougin/basilisk.svg?style=flat-square

[link-changelog]: https://github.com/rougin/basilisk/blob/master/CHANGELOG.md
[link-code-quality]: https://scrutinizer-ci.com/g/rougin/basilisk
[link-contributors]: https://github.com/rougin/basilisk/contributors
[link-downloads]: https://packagist.org/packages/rougin/basilisk
[link-license]: https://github.com/rougin/basilisk/blob/master/LICENSE.md
[link-packagist]: https://packagist.org/packages/rougin/basilisk
[link-scrutinizer]: https://scrutinizer-ci.com/g/rougin/basilisk/code-structure
[link-travis]: https://travis-ci.org/rougin/basilisk