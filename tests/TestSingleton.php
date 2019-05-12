<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'tests-data' . DIRECTORY_SEPARATOR . 'ModelSingleton.php';

use cse\base\CseExceptions;
use cse\base\Exceptions\CSESingletonException;
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

    /**
     * @param $class
     *
     * @throws CSESingletonException
     *
     * @dataProvider providerClone
     *
     * @runInSeparateProcess
     */
    public function testClone($class): void
    {
        $this->expectException($class);

        $clone = clone ModelSingleton::getInstance();
    }

    /**
     * @return array
     */
    public function providerClone(): array
    {
        return [
            [CSESingletonException::class],
            [CseExceptions::class],
            [Exception::class],
            [Throwable::class],
        ];
    }

    /**
     * @param $class
     *
     * @throws CSESingletonException
     *
     * @dataProvider providerSleep
     *
     * @runInSeparateProcess
     */
    public function testSleep($class): void
    {
        $this->expectException($class);

        $serialize = serialize(ModelSingleton::getInstance());
    }

    /**
     * @return array
     */
    public function providerSleep(): array
    {
        return [
            [CSESingletonException::class],
            [CseExceptions::class],
            [Exception::class],
            [Throwable::class],
        ];
    }
}