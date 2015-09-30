<?php
namespace Aws;

use Aws\Api\BridgeApiProvider;
use Aws\Signature\SignatureProvider;
use Aws\Signature\SignatureV2;

class AwsCompatibilityClient extends AwsClient
{
    private static $compatibilityServices = [
        'simpledb' => 'sdb',
        'importexport' => 'importexport'
    ];

    public static function getArguments()
    {
        $args = parent::getArguments();
        $args['api_provider']['default']
            = [BridgeApiProvider::class, 'defaultProvider'];
        $args['signature_provider']['default']
            = [__CLASS__, '_default_signature_provider'];

        return $args;
    }

    public function __construct(array $args)
    {
        parent::__construct($args + [
            'service' => $this->getService()
        ]);
    }

    private function getService()
    {
        $klass = get_class($this);
        $service = strtolower(substr($klass, strrpos($klass, '\\') + 1, -6));

        if (isset(self::$compatibilityServices[$service])) {
            return self::$compatibilityServices[$service];
        }

        return $service;
    }

    public static function _default_signature_provider()
    {
        return SignatureProvider::memoize(function ($version, $service, $region) {
            if ('v2' === $version) {
                return new SignatureV2();
            }

            static $fallback;
            if (empty($fallback)) {
                $fallback = SignatureProvider::version();
            }

            return $fallback($version, $service, $region);
        });
    }
}
