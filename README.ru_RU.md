[English](https://github.com/cs-eliseev/base-singleton/blob/master/README.md) | Русский

SINGLETON CSE BASE
=======

[![Travis (.org)](https://img.shields.io/travis/cs-eliseev/base-singleton.svg?style=flat-square)](https://travis-ci.org/cs-eliseev/base-singleton)
[![Codecov](https://img.shields.io/codecov/c/github/cs-eliseev/base-singleton.svg?style=flat-square)](https://codecov.io/gh/cs-eliseev/base-singleton)
[![Scrutinizer code quality](https://img.shields.io/scrutinizer/g/cs-eliseev/base-singleton.svg?style=flat-square)](https://scrutinizer-ci.com/g/cs-eliseev/base-singleton/?branch=master)

[![Packagist](https://img.shields.io/packagist/v/cse/base-singleton.svg?style=flat-square)](https://packagist.org/packages/cse/base-singleton)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://packagist.org/packages/cse/base-singleton)
[![Packagist](https://img.shields.io/packagist/l/cse/base-singleton.svg?style=flat-square)](https://github.com/cs-eliseev/base-singleton/blob/master/LICENSE.md)
[![GitHub repo size](https://img.shields.io/github/repo-size/cs-eliseev/base-singleton.svg?style=flat-square)](https://github.com/cs-eliseev/base-singleton/archive/master.zip)

Шаблон проектирования Singleton, который позволяет легко использовать singleton класс.

Репозиторий проекта: https://github.com/cs-eliseev/base-singleton

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


## Описание проекта

CSE BASE - это набор библиотек написанных на PHP специально для расширения ваших классов.

Набор базовых методов для строительства ваших классов, это то что вам необходимо для быстрого создание Web приложений. 
SINGLETON CSE BASE, позволяет вам расширять классы с исклчениями.

CSE BASE создан для быстрой разработки веб-приложений.

**Список библиотек CSE Base:**
* [Exceptions CSE base](https://github.com/cs-eliseev/base-exceptions)
* [Singleton CSE base](https://github.com/cs-eliseev/base-singleton)

Ниже представлена информация об установке и перечне команд с примерами их использования.


## Установка

Самая последняя версия проекта доступна [здесь](https://github.com/cs-eliseev/base-singleton).

### Composer

Чтобы установить последнюю версию проекта, выполните следующую команду в терминале:
```shell
composer require cse/base-singleton
```

Или добавьте следующее содержимое в файл composer.json:
```json
{
    "require": {
        "cse/base-singleton": "*"
    }
}
```

### Git

Добавить этот репозиторий локально можно следующим образом:
```shell
git clone https://github.com/cs-eliseev/base-singleton.git
```

### Скачать

[Скачать последнюю версию проекта можно здесь](https://github.com/cs-eliseev/base-singleton/archive/master.zip).


## Использование


Посмотреть тестовую модель: [ModelSingleton.php](https://github.com/cs-eliseev/base-singleton/blob/master/tests-data/ModelSingleton.php)

Посмотреть примеры: [examples-singleton.php](https://github.com/cs-eliseev/base-singleton/blob/master/examples/examples-singleton.php)

**Создание модели singleton**

Пример:
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

**Создание экземпляра объекта singleton**

Пример:
```php
$instance = ModelSingleton::getInstance();
$instance->setParam(10);
$instance->getParam();
// 10
```

Создать экземпляр объекта singleton по имени:
```php
$instance2 = ModelSingleton::getInstance('new');
$instance2->setParam(20);
$instance->getParam();
// 10
$instance2->getParam();
// 20
```

Востановить экземпляр объекта singleton:
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

**Исключения singleton**

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


## Тестирование и покрытие кода

PHPUnit используется для модульного тестирования. Данные тесты гарантируют, что методы класса выполняют свою задачу.

Подробную документацию по PHPUnit можно найти по адресу: https://phpunit.de/documentation.html.

Чтобы запустить тесты выполните:
```bash
phpunit PATH/TO/PROJECT/tests/
```

Чтобы сформировать отчет о покрытии тестами кода, необходимо выполнить следующую команду:
```bash
phpunit --coverage-html ./report PATH/TO/PROJECT/tests/
```

Чтобы использовать настройки по умолчанию, достаточно выполнить:
```bash
phpunit --configuration PATH/TO/PROJECT/phpunit.xml
```


## Вклад в общее дело

Вы можите поддержать данный проект [здесь](https://www.paypal.me/cseliseev/10usd). 
Вы также можете помочь, внеся свой вклад в проект или сообщив об ошибках.
Даже высказывать свои предложения по функциям - это здорово. Все, что поможет, высоко ценится.


## Лицензия

SINGLETON CSE BASE это PHP-библиотека с открытым исходным кодом распространяемая по лицензии MIT. Для получения более подробной информации, пожалуйста, ознакомьтесь с [лицензионным файлом](https://github.com/cs-eliseev/base-singleton/blob/master/LICENSE.md).

***

> GitHub [@cs-eliseev](https://github.com/cs-eliseev)