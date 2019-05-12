English | [Русский](https://github.com/cs-eliseev/base-singleton/blob/master/README.ru_RU.md)

SINGLETON CSE BASE
=======

[![Travis (.org)](https://img.shields.io/travis/cs-eliseev/base-singleton.svg?style=flat-square)](https://travis-ci.org/cs-eliseev/base-singleton)
[![Codecov](https://img.shields.io/codecov/c/github/cs-eliseev/base-singleton.svg?style=flat-square)](https://codecov.io/gh/cs-eliseev/base-singleton)
[![Scrutinizer code quality](https://img.shields.io/scrutinizer/g/cs-eliseev/base-singleton.svg?style=flat-square)](https://scrutinizer-ci.com/g/cs-eliseev/base-singleton/?branch=master)

[![Packagist](https://img.shields.io/packagist/v/cse/base-singleton.svg?style=flat-square)](https://packagist.org/packages/cse/base-singleton)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://packagist.org/packages/cse/base-singleton)
[![Packagist](https://img.shields.io/packagist/l/cse/base-singleton.svg?style=popout-square)](https://github.com/cs-eliseev/base-singleton/blob/master/LICENSE.md)
[![GitHub repo size](https://img.shields.io/github/repo-size/cs-eliseev/base-singleton.svg?style=flat-square)](https://github.com/cs-eliseev/base-singleton/archive/master.zip)

A Singleton Design Pattern which allow easy used class.

Project repository: https://github.com/cs-eliseev/base-singleton

**DEMO**
```php
class ExampleSingleton
{
    use SingletonTrait;
    ...
}
$instance = ExampleSingleton::getInstance();
$instanceName = ExampleSingleton::getInstance('instance_name');
```

***


## Introduction

CSE BASE is a set of libraries written in PHP specifically to extend your classes.

A set of basic methods for creating your classes is what you need to quickly create web applications. 
SINGLETON CSE BASE, allow easy create singleton class.

CSE BASE was created for the rapid development of web applications.

**CSE Base project:**
* [Exceptions CSE base](https://github.com/cs-eliseev/base-exceptions)
* [Singleton CSE base](https://github.com/cs-eliseev/base-singleton)

Below you will find some information on how to init library and perform common commands.


## Install

You can find the most recent version of this project [here](https://github.com/cs-eliseev/base-singleton).

### Composer

Execute the following command to get the latest version of the package:
```bash
composer require cse/base-singleton
```

Or file composer.json should include the following contents:
```json
{
    "require": {
        "cse/base-singleton": "*"
    }
}
```

### Git

Clone this repository locally:
```bash
git clone https://github.com/cs-eliseev/base-singleton.git
```

### Download

[Download the latest release here](https://github.com/cs-eliseev/base-singleton/archive/master.zip).


## Usage

View test model: [ModelSingleton.php](https://github.com/cs-eliseev/base-singleton/blob/master/tests-data/ModelSingleton.php)

See examples: [examples-singleton.php](https://github.com/cs-eliseev/base-singleton/blob/master/examples/examples-singleton.php)

**Create Model Singleton**

Examples:
```php
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
```

**Create instance**

Examples:
```php
$instance = ModelSingleton::getInstance();
$instance->setParam(10);
$instance->getParam();
// 10
```

Create instance by name:
```php
$instance2 = ModelSingleton::getInstance('new');
$instance2->setParam(20);
$instance->getParam();
// 10
$instance2->getParam();
// 20
```

Restore instance:
```php
$instance3 = ModelSingleton::getInstance();
$instance3->setParam(30);
$instance->getParam();
// 30
$instance2->getParam();
// 20
$instance3->getParam();
// 30
```

**EXCEPTIONS**

__CLONE:
```php
try {
    $clone = clone ModelSingleton::getInstance();
} catch (CSESingletonException $e) {
    // Singleton can not using clone
}
```

__SLEEP:
```php
try {
    $serialize = serialize(ModelSingleton::getInstance());
} catch (CSESingletonException $e) {
    // Singleton can not serialize
}
```

__WAKEUP:
```php
try {
    ...
} catch (CSESingletonException $e) {
    // Singleton can not deserialize
}
```

## Testing & Code Coverage

PHPUnit is used for unit testing. Unit tests ensure that class and methods does exactly what it is meant to do.

General PHPUnit documentation can be found at https://phpunit.de/documentation.html.

To run the PHPUnit unit tests, execute:
```bash
phpunit PATH/TO/PROJECT/tests/
```

If you want code coverage reports, use the following:
```bash
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Used PHPUnit default config:
```bash
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## Donating

You can support this project [here](https://www.paypal.me/cseliseev/10usd). 
You can also help out by contributing to the project, or reporting bugs. 
Even voicing your suggestions for features is great. Anything to help is much appreciated.


## License

The SINGLETON CSE BASE is open-source PHP library licensed under the MIT license. Please see [License File](https://github.com/cs-eliseev/base-singleton/blob/master/LICENSE.md) for more information.

***

> GitHub [@cs-eliseev](https://github.com/cs-eliseev)