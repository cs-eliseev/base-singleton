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

$label = 'Create new instance by name: ';
// Create new instance by name
$instance2 = ModelSingleton::getInstance('inst');
$instance2->setParam(20);
var_dump($label . $instance->getParam());

$label = 'Restore instance: ';
// Create new instance by name
$instance3 = ModelSingleton::getInstance();
$instance3->setParam(30);
var_dump($label . $instance->getParam());
var_dump($label . $instance2->getParam());

// Example: __clone exception
$label = 'Clone exception: ';
try {
    $instance4 = clone $instance3;
} catch (CSESingletonException $e) {
    var_dump($label . $e->getMessage());
}

// Example: __sleep exception
$label = 'Serialize instance exception: ';
try {
    $serialize = serialize($instance3);
} catch (CSESingletonException $e) {
    var_dump($label . $e->getMessage());
}
