# A laravel package to use the newsletter product of infomaniak

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vincent-tarrit/infomaniak-newsletter-laravel.svg?style=flat-square)](https://packagist.org/packages/vincent-tarrit/infomaniak-newsletter-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/vincent-tarrit/infomaniak-newsletter-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/vincent-tarrit/infomaniak-newsletter-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/vincent-tarrit/infomaniak-newsletter-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/vincent-tarrit/infomaniak-newsletter-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/vincent-tarrit/infomaniak-newsletter-laravel.svg?style=flat-square)](https://packagist.org/packages/vincent-tarrit/infomaniak-newsletter-laravel)

This package is under development.

## Installation

You can install the package via composer:

```bash
composer require vincent-tarrit/infomaniak-newsletter-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="infomaniak-newsletter-laravel-config"
```

This is the contents of the published config file:

```php
return [
    'default_domain_id' => env('INFOMANIAK_NEWSLETTER_DEFAULT_DOMAIN_ID'),
    'client' => env('INFOMANIAK_NEWSLETTER_CLIENT'),
    'secret' => env('INFOMANIAK_NEWSLETTER_SECRET'),
    'test_email' => env('INFOMANIAK_NEWSLETTER_TEST_EMAIL'),
];
```

## Usage

```php
$campaign = Newsletter::campaigns()
  ->make()
  ->subject("test")
  ->content("test")
  ->emailFromName('NAME')
  ->emailFromAddr('username')
  ->lang('fr')
  ->groups([123456])
  ->send();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [vincent-tarrit](https://github.com/vincent-tarrit)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
