<?php

namespace cse\base\Exceptions;

use cse\base\CseExceptions;

/**
 * Class CSESingletonException
 *
 * @package cse\helpers\Exceptions
 */
class CSESingletonException extends CseExceptions
{
    const ERROR_SINGLETON_CLONE = 1;
    const ERROR_SINGLETON_SLEEP = 2;
    const ERROR_SINGLETON_WAKEUP = 3;

    /**
     * @var array
     */
    protected static $errorsMsg = [
        self::ERROR_SINGLETON_CLONE => 'Singleton can not using clone',
        self::ERROR_SINGLETON_SLEEP => 'Singleton can not serialize',
        self::ERROR_SINGLETON_WAKEUP => 'Singleton can not deserialize ',
    ];
}