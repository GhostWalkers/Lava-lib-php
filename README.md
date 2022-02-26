
# Lava-libs php

Удобная библиотека для рабоыт с сервисом lava.ru без зависимостей 


## Установка

Два варианта git и composer(скоро)

```bash
  gh repo clone GhostWalkers/Lava-lib-php
```
    
## Использование/Примеры
Для начала вам нужно импортировать библиотеку (для примера файл находится в папке libs/client.php), где при создании класса вам будет нужно указать свой jwt токен (lava.ru/settings/api)
```php
<?php
require_once 'libs/client.php';
$payment = new ClientLibs('jwt token');
```
После чего вы сможете использовать все функции с dev.lava.ru, пример 
```php
<?php
$payment->ping();
```
Для некоторых методов вам нужно будет указать аргумент (массив) например для создание инвойса (платежа)
```php
<?php
$payment->invoiceCreate([
    'wallet_to' => 'R40510054',
    'sum'      => 10.00,
    'order_id' => 'order_221',
    'hook_url' => 'https://lava.ru/hook',
    'success_url' => 'https://lava.ru/success',
    'fail_url' => 'https://lava.ru/fail',
    'expire' => 300,
    'subtract' => '0',
    'merchant_id' => '123',
    'merchant_name' => 'LAVA.RU'
]);
```
## Лицензия

Данный код полностью откртый и вы можете его модифицировать, он был упрощен в силу отсутсвие зависимостей !

