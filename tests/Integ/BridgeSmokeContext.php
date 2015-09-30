<?php
namespace Aws\Integ;

use Aws\ImportExport\ImportExportClient;
use Aws\SimpleDb\SimpleDbClient;
use Aws\Test\Integ\SmokeContext;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;

class BridgeSmokeContext extends SmokeContext
{
    private static $defaultOptions = [
        'region' => 'us-east-1',
        'version' => 'latest',
        'ua_append' => 'PHPUnit/Integration',
        'validate' => false,
    ];

    /**
     * @BeforeScenario
     *
     * @param BeforeScenarioScope $scope
     */
    public function setUp(BeforeScenarioScope $scope)
    {
        // no-op
    }

    /**
     * @BeforeScenario @sdb
     */
    public function setUpSdb()
    {
        $this->client = new SimpleDbClient(self::$defaultOptions);
    }

    /**
     * @BeforeScenario @importexport
     */
    public function setUpImportExport()
    {
        $this->client = new ImportExportClient(self::$defaultOptions);
    }
}
