<?php

namespace cse\helpers\Exceptions;

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

    /**
     * @var array
     */
    private static $errorsMsg = [
        self::ERROR_SINGLETON_CLONE => 'Singleton can not using clone',
        self::ERROR_SINGLETON_SLEEP => 'Singleton can not serialize',
    ];
}