<?php
namespace Aws\Api;

class BridgeApiProvider
{
    public static function defaultProvider()
    {
        $dir = __DIR__ . '/../data';

        return ApiProvider::manifest(
            $dir,
            \Aws\load_compiled_json("$dir/manifest.json")
        );
    }
}
