# Pagseguro SDK Documentation

[Return documentation](https://github.com/life-code/pagseguro-sdk/blob/master/docs/README.md)

## Notification Signature documentation

```sh
<?php

require('./vendor/autoload.php');

use PagSeguro\PagSeguro;

// Create instance of PagSeguro\PreApprovals\Notification::class
$notification = \PagSeguro\PagSeguro::notification();

$response = $notification->forCode('674653134565163543784613526');

if ($response->hasErrors()) {
    var_dump($response->getErrors()->all());
    die();
}

var_dump($response);
die();
```