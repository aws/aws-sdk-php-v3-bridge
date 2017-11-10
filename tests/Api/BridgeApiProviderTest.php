<?php
namespace Aws\Api;

use PHPUnit\Framework\TestCase;

class BridgeApiProviderTest extends TestCase
{
    public function testCanGetDefaultProvider()
    {
        $p = BridgeApiProvider::defaultProvider();
        $this->assertArrayHasKey('sdb', $this->readAttribute($p, 'manifest'));
    }
}
