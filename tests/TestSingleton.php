<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'tests-data' . DIRECTORY_SEPARATOR . 'ModelSingleton.php';

use PHPUnit\Framework\TestCase;

class TestSingleton extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testGetInstance(): void
    {
        $test1 = 10;
        $instance = ModelSingleton::getInstance();
        $instance->setParam($test1);
        $this->assertEquals($test1, $instance->getParam());

        $test2 = 20;
        $instance2 = ModelSingleton::getInstance('new');
        $instance2->setParam($test2);
        $this->assertEquals($test1, $instance->getParam());
        $this->assertEquals($test2, $instance2->getParam());

        $test3 = 30;
        $instance3 = ModelSingleton::getInstance();
        $instance3->setParam($test3);
        $this->assertEquals($test3, $instance->getParam());
        $this->assertEquals($test2, $instance2->getParam());
        $this->assertEquals($test3, $instance3->getParam());
    }
}