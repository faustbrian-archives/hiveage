# Hiveage Client

[![Build Status](https://img.shields.io/travis/faustbrian/Hiveage-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Hiveage-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/hiveage-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Hiveage-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Hiveage-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Hiveage-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Hiveage-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/hiveage-php-client
```

## Usage

``` php
<?php

use BrianFaust\Config;

$client = new BrianFaust\Hiveage\Client();

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

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
