# Pagseguro SDK Documentation

## Payment documentation
> Whenever you use PagSeguro checkout, you must create a session. [Click here to learn more](https://github.com/life-code/pagseguro-sdk/blob/master/docs/Session.md).

```sh
<?php

require('./vendor/autoload.php');

use PagSeguro\PagSeguro;

// Create instance of PagSeguro\Payment\Payment::class
$payment = PagSeguro::payment();


```