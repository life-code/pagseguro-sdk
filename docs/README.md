# Pagseguro SDK Documentation


## Install:
> Note: We recommend installation via **Composer**. You can also download the repository as a [zip file](https://github.com/life-code/pagseguro-sdk/archive/master.zip) or make a clone via Git. 

 
## Install by Composer:
> To download and install Composer in your environment go to https://getcomposer.org/download/ and if you have questions about how to use it, consult the [official Composer documentation](https://getcomposer.org/doc).

Run the low command on the terminal:
```sh
$ composer require life-code/pagseguro-sdk
```

## Configuration: ##
Create a file named .env at the root of your project (at the same level as the vendor folder). The example below:

```sh
* project-name
    * vendor/
    * .env
```


Within file .env, declare the following variables:

```sh
PAGSEGURO_ENV=PRODUCTION
PAGSEGURO_EMAIL=your-pagseguro-email@example.com

PAGSEGURO_TOKEN_PRODUCTION=your-production-pagseguro-token
PAGSEGURO_TOKEN_SANDBOX=your-sandbox-pagseguro-token

PAGSEGURO_LOCATION=pt-br
```

Ready, your PagSeguro library is ready for use!



Links:
- [Create Session ID](https://github.com/life-code/pagseguro-sdk/blob/master/docs/Session.md)
- [Create Transparent Payment](https://github.com/life-code/pagseguro-sdk/blob/master/docs/Transactions/Transparent/Create.md)
- [Consult Transparent Payment](https://github.com/life-code/pagseguro-sdk/blob/master/docs/Transactions/Transparent/Notification.md)
- [Create Simple Payment](https://github.com/life-code/pagseguro-sdk/blob/master/docs/Transactions/Create.md)
- [Create Signature](https://github.com/life-code/pagseguro-sdk/blob/master/docs/PreApprovals/Create.md)
- [Consult Signature](https://github.com/life-code/pagseguro-sdk/blob/master/docs/PreApprovals/Notification.md)
- [Cancel Signature](https://github.com/life-code/pagseguro-sdk/blob/master/docs/PreApprovals/Cancelation.md)


## Contribution Guidelines
Contribute to the Pagseguro SDK and help bring this idea forward!
