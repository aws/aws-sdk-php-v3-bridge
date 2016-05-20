# AWS SDK for PHP - Version 3 Upgrade Bridge

[![@awsforphp on Twitter](http://img.shields.io/badge/twitter-%40awsforphp-blue.svg?style=flat)](https://twitter.com/awsforphp)
[![Build Status](https://travis-ci.org/aws/aws-sdk-php-v3-bridge.svg)](https://travis-ci.org/aws/aws-sdk-php-v3-bridge)
[![Apache 2 License](https://img.shields.io/packagist/l/aws/aws-sdk-php-v3-bridge.svg?style=flat)](http://aws.amazon.com/apache-2-0/)
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/aws/aws-sdk-php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

This package provides support for using Amazon SimpleDB with version 3 of the
AWS SDK for PHP. It depends on the AWS SDK for PHP v3 and allows users to
construct SimpleDb clients as they would any other v3 service:
```php
<?php

$sdb = new \Aws\SimpleDb\SimpleDbClient([
    'region' => 'us-east-1',
    'version' => 'latest',
]);

$domains = $sdb->listDomains();
```

Please note that you cannot use the `Aws\Sdk` service locator with SimpleDb.
You must create clients using the `new` keyword.

## Installation

This package can be installed via [Composer](http://getcomposer.org) by requiring the
`aws/aws-sdk-php-v3-bridge` package in your project's `composer.json`.

```json
{
    "require": {
        "aws/aws-sdk-php-v3-bridge": "^0.2.0"
    }
}
```

Then run a composer update
```sh
php composer.phar update
```

## Links

* [AWS SDK for PHP on Github](http://github.com/aws/aws-sdk-php/)
* [AWS SDK for PHP website](http://aws.amazon.com/sdkforphp/)
* [AWS on Packagist](https://packagist.org/packages/aws/)
* [License](http://aws.amazon.com/apache2.0/)
