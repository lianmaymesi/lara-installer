# Lara Installer

## A simple UI installation setup for your Laravel Application - Heavily inspired from [LinkAce](https://github.com/Kovah/LinkAce)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lianmaymesi/lara-installer.svg?style=flat-square)](https://packagist.org/packages/lianmaymesi/lara-installer)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lianmaymesi/lara-installer/run-tests?label=tests)](https://github.com/lianmaymesi/lara-installer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lianmaymesi/lara-installer/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lianmaymesi/lara-installer/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lianmaymesi/lara-installer.svg?style=flat-square)](https://packagist.org/packages/lianmaymesi/lara-installer)

I haven't done alone this packagae on my own. I have just separated the installation setup from [LinkAce](https://github.com/Kovah/LinkAce) package for my personal projects. The full credibility goes to [LinkAce](https://github.com/Kovah/LinkAce) alone.

If you like this package give stars to [LinkAce](https://github.com/Kovah/LinkAce).

## Installation

You can install the package via composer:

```bash
composer require lianmaymesi/lara-installer
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lara-installer-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lara-installer-views"
```

## Usage

You have to add the middleware into your routes to redirect all routes to installations. If you have installed & created user, the middleware allows to enter your application route.

```php
Route::middleware(['web', 'check-install'])->group(function () {
    // Your routes
});
```

# Config

## PHP Version

You have to enter the PHP Version ID that your application requies in the following format `8.0.12 => 8 * 10000 + 0 * 100 + 12`

```json
return [
    'php_version_id' => env('LI_PHP_VERSION_ID', 80012)
]
```

## Application Version

Enter your application version for showing in the installation page

```json
return [
    'app_version' => env('LI_APP_VERSION', '1.0.0'),
]
```

## Redirection after Installation

Once your application installed successfully, where the user heading to

```json
return [
    'redirect_to' => env('LI_REDIRECT_TO', 'home')
]
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [LiAn DhAs](https://github.com/lianmaymesi)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
