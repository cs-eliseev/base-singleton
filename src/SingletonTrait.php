<?php

declare(strict_types=1);

namespace cse\based\traits;

/**
 * Class SingletonTrait
 *
 * @package cse\based
 */
trait SingletonTrait
{
    protected static $instance;

    /**
     * @param string $instanceKey
     *
     * @return SingletonTrait
     *
     * @throws \ReflectionException
     */
    public static function getInstance(string $instanceKey = ''): self
    {
        $instanceKey = empty($instanceKey) ? __CLASS__ : $instanceKey;

        // instance exist
        if (empty(self::$instance[$instanceKey])) {
            $reflection = new \ReflectionClass(__CLASS__);
            $arg = func_get_args();
            array_shift($arg);
            self::$instance[$instanceKey] = $reflection->newInstanceArgs($arg);
        }

        return self::$instance[$instanceKey];
    }
}