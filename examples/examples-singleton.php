<?php

require_once __DIR__ . '/../autoload.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'tests-data' . DIRECTORY_SEPARATOR . 'ModelSingleton.php';

use cse\base\Exceptions\CSESingletonException;

// Example: get instance
$label = 'Create default instance: ';
// Create default instance
$instance = ModelSingleton::getInstance();
$instance->setParam(10);
var_dump($label . $instance->getParam());
