# Pagseguro SDK Documentation

[Return documentation](https://github.com/life-code/pagseguro-sdk/blob/master/docs/README.md)

## Abandoned payment transaction documentation

```sh
<?php

require('./vendor/autoload.php');

use PagSeguro\PagSeguro;

// Create instance of PagSeguro\Transactions\Abandoned::class
$abandoned = PagSeguro::abandoned();

$interval = new \PagSeguro\Transactions\Interval();
$interval->setInitialDate(new DateTime('2017-11-01'));
$interval->setFinalDate(new DateTime('2017-11-30'));
$interval->setPage(1);
$interval->setMaxPageResults(1);

$response = $abandoned->search($interval);

if ($response->hasErrors()) {
    dd($response, $response->getErrors(), $response->getErrors()->values());
}

var_dump($response);
die();
```