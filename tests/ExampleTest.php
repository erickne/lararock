<?php

namespace Erickne\Lararock\Tests;

use Orchestra\Testbench\TestCase;
use Erickne\Lararock\LararockServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LararockServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
