<?php

$lock = json_decode(file_get_contents(__DIR__ . '/../composer.lock'), true);
$sdkVersion = null;

foreach ($lock['packages'] as $installedPackage) {
    if ('aws/aws-sdk-php' === $installedPackage['name']) {
        $sdkVersion = $installedPackage['version'];
        break;
    }
}

if (isset($sdkVersion)) {
    exec("git clone --branch=$sdkVersion --depth=1 git@github.com:aws/aws-sdk-php.git");
} else {
    exit(255);
}
