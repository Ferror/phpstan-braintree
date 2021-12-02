# PHPStan for Braintree SDK

## Story
The first author of phpstan-braintree extension is Matěj [Finwe](https://github.com/finwe) Humpál who started creating this extension,
but the last commit is from 2017. Now it's been a couple of years and my company [Landingi](https://github.com/Landingi) is using
the Braintree PHP SDK, that's why I decided to fork the solution and improve it by creating more classes reflection.

## Requirements
* PHP 8.0 and above
* braintree/braintree_php 6.5 and above
* PHPStan 1.2 and above

## Installation
```bash
composer require --dev ferror/phpstan-braintree
```

```neon
extensions:
    - vendor/ferror/phpstan-braintree/extension.neon
```
