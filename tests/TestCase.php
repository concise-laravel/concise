<?php
declare(strict_types=1);

namespace Concise\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected $enablesPackageDiscoveries = true;
}
