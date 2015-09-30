<?php
namespace Aws\Api;

class BridgeApiProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testCanGetDefaultProvider()
    {
        $p = BridgeApiProvider::defaultProvider();
        $this->assertArrayHasKey('sdb', $this->readAttribute($p, 'manifest'));
        $this->assertArrayHasKey('importexport', $this->readAttribute($p, 'manifest'));
    }
}
