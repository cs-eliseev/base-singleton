<?php

require_once __DIR__ . '/../autoload.php';

use cse\base\SingletonTrait;

/**
 * Class ModelSingleton
 */
class ModelSingleton
{
    use SingletonTrait;

    protected $param = 0;

    /**
     * @param int $param
     */
    public function setParam(int $param): void
    {
        $this->param = $param;
    }

    /**
     * @return int
     */
    public function getParam(): int
    {
        return $this->param;
    }
}
