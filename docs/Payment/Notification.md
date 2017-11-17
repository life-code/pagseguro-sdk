# Pagseguro SDK Documentation

## Notification Payment documentation

```sh
<?php

require('./vendor/autoload.php');

use PagSeguro\PagSeguro;

// Create instance of PagSeguro\Payment\Notification::class
$notification = PagSeguro::paymentNotification();

$response = $notification->forCode('674653134565163543784613526');

if ($response->hasErrors()) {
    var_dump($response->getErrors()->all());
    die();
}

var_dump($response);
die();
```