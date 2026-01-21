# Описание
Dogs PHP - тестовое задание на PHP. CLI-приложение для демонстрации поведения собак/игрушек (звук и охота) с использованием Docopt.

ТЗ: https://github.com/devjsru/php_test

## Минимальные требования
- PHP 8.1+
- Composer

## Установка
```bash
composer install
```

## Запуск
```bash
./bin/dogs <breed> <action>

Пример запуска
```bash
./bin/dogs shiba-inu sound
./bin/dogs mops hunt
./bin/dogs plush-labrador sound
./bin/dogs rubber-dachshund hunt
```

## Тесты
```bash
vendor/bin/phpunit -c phpunit.xml
```
