<?php
namespace EvaEngineTest;

use Eva\EvaEngine\Engine;

class EngineTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testApplication()
    {
        $engine = new Engine();
        $this->assertTrue($engine->getApplication() instanceof \Phalcon\Mvc\Application);
    }

    public function testPath()
    {
        $engine = new Engine('foo');
        $this->assertEquals('foo', $engine->getAppRoot());
        $this->assertEquals('foo/config', $engine->getConfigPath());
        $this->assertEquals('foo/modules', $engine->getModulesPath());

        $engine->setConfigPath('bar');
        $engine->setModulesPath('bar');
        $this->assertEquals('bar', $engine->getConfigPath());
        $this->assertEquals('bar', $engine->getModulesPath());

    }
}
