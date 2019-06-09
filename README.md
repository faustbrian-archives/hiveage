# Hiveage Client

[![Build Status](https://img.shields.io/travis/plients/Hiveage-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Hiveage-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/hiveage.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Hiveage-PHP-Client.svg?style=flat-square)](https://github.com/plients/Hiveage-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Hiveage-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Hiveage-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require plients/hiveage
```

## Usage

```php
<?php

use Plients\Config;

$client = new Plients\Hiveage\Client();

$client->setConfig(new Config([
    'username' => 'YOUR_USERNAME',
    'apiKey' => 'YOUR_APIKEY',
]));

$response = $client->api('Network')->all();
$response = $client->api('Network')->retrieve('hash_key');
$response = $client->api('Network')->destroy('hash_key');
$response = $client->api('Network')->invoiceActivities('hash_key');
$response = $client->api('Network')->estimateActivities('hash_key');
$response = $client->api('Network')->recurringInvoicesActivities('hash_key');

$response = $client->api('Network')->create([
    "first_name" => "John",
    "last_name" => "Doe",
    "business_email" => "email@example.com",
    "currency" => "USD",
    "address" => "941 Example Ave. #5 ",
    "city" => "Long Beach",
    "state_name" => "CA",
    "zip_code" => "90813",
    "country" => "United States",
    "phone" => "562-556-5555",
    "fax" =>"562-381-5555",
    "website_url" => "http://example.hiveage.com",
    "category" => "individual",
    "language" => "en-us"
]);

$response = $client->api('Network')->update('hash_key', [
    "first_name" => "John",
    "last_name" => "Doe",
    "business_email" => "email@example.com",
    "currency" => "USD",
    "address" => "941 Example Ave. #5 ",
    "city" => "Long Beach",
    "state_name" => "CA",
    "zip_code" => "90813",
    "country" => "United States",
    "phone" => "562-556-5555",
    "fax" =>"562-381-5555",
    "website_url" => "http://example.hiveage.com",
    "category" => "individual",
    "language" => "en-us"
]);
```

## Testing

```bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

-   [Brian Faust](https://github.com/faustbrian)
-   [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
