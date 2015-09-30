<?php
namespace Aws;

use Aws\Signature\AnonymousSignature;
use Aws\Signature\S3SignatureV4;
use Aws\Signature\SignatureV2;
use Aws\Signature\SignatureV4;

class AwsCompatibilityClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider signatureVersionProvider
     *
     * @param string $classSought
     * @param array $providerArgs
     */
    public function testCanCreateV2Signer($classSought, array $providerArgs)
    {
        $args = AwsCompatibilityClient::getArguments();
        /** @var callable $provider */
        $provider = call_user_func($args['signature_provider']['default']);

        $this->assertInstanceOf($classSought, call_user_func_array($provider, $providerArgs));
    }

    public function signatureVersionProvider()
    {
        return [
            [SignatureV2::class, ['v2', 'sdb', 'us-east-1']],
            [SignatureV4::class, ['v4', 'iam', 'us-east-1']],
            [S3SignatureV4::class, ['v4', 's3', 'us-east-1']],
            [AnonymousSignature::class, ['anonymous', 'service', 'us-east-1']],
        ];
    }
}
