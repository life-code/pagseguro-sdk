# Pagseguro SDK Documentation

[Return documentation](https://github.com/life-code/pagseguro-sdk/edit/master/docs/Readme.md)

## Session documentation
> Whenever you use PagSeguro checkout, you must create a session.

```sh
<?php

require('./vendor/autoload.php');

use PagSeguro\PagSeguro;

// Create instance of PagSeguro\Session\Session::class
$session = PagSeguro::session();

$session_id = $session->create()->id;

var_dump($session_id);
die();
```
