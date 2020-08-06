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

Jump To:
* [Getting Started](_#Getting-Started_)
* [Getting Help](_#Getting-Help_)
* [Contributing](_#Contributing_)
* [More Resources](_#Resources_)

## Getting Started

Please note that you cannot use the `Aws\Sdk` service locator with SimpleDb.
You must create clients using the `new` keyword.

### Installation

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

## Getting Help

Please use these community resources for getting help. We use the GitHub issues for tracking bugs and feature requests and have limited bandwidth to address them.

* Ask a question on [StackOverflow](https://stackoverflow.com/) and tag it with [`aws-php-sdk`](http://stackoverflow.com/questions/tagged/aws-php-sdk)
* Come join the AWS SDK for PHP [gitter](https://gitter.im/aws/aws-sdk-php)
* Open a support ticket with [AWS Support](https://console.aws.amazon.com/support/home/)
* If it turns out that you may have found a bug, please [open an issue](https://github.com/aws/aws-sdk-php-v3-bridge/issues/new/choose)

This SDK implements AWS service APIs. For general issues regarding the AWS services and their limitations, you may also take a look at the [Amazon Web Services Discussion Forums](https://forums.aws.amazon.com/).

### Opening Issues

If you encounter a bug with `aws-sdk-php-v3-bridge` we would like to hear about it. Search the existing issues and try to make sure your problem doesn’t already exist before opening a new issue. It’s helpful if you include the version of `aws-sdk-php-v3-bridge`, PHP version and OS you’re using. Please include a stack trace and reduced repro case when appropriate, too.

The GitHub issues are intended for bug reports and feature requests. For help and questions with using `aws-sdk-php` please make use of the resources listed in the Getting Help section. There are limited resources available for handling issues and by keeping the list of open issues lean we can respond in a timely manner.

## Contributing

We work hard to provide a high-quality and useful SDK for our AWS services, and we greatly value feedback and contributions from our community. Please review our [contributing guidelines](./CONTRIBUTING.md) before submitting any issues or pull requests to ensure we have all the necessary information to effectively respond to your bug report or contribution.

## Resources

* [AWS SDK for PHP on Github](http://github.com/aws/aws-sdk-php/)
* [AWS SDK for PHP website](http://aws.amazon.com/sdkforphp/)
* [AWS on Packagist](https://packagist.org/packages/aws/)
* [License](http://aws.amazon.com/apache2.0/)
