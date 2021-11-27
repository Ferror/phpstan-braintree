# Braintree PHP SDK extensions for PHPStan

[![Build Status](https://travis-ci.org/Ferror/phpstan-braintree.svg)](https://travis-ci.org/Ferror/phpstan-braintree)
[![Latest Stable Version](https://poser.pugx.org/Ferror/phpstan-braintree/v/stable)](https://packagist.org/packages/Ferror/phpstan-braintree)
[![License](https://poser.pugx.org/Ferror/phpstan-braintree/license)](https://packagist.org/packages/Ferror/phpstan-braintree)

* [PHPStan](https://github.com/phpstan/phpstan)
* [Braintree PHP SDK](https://github.com/braintree/braintree_php)

This extension provides following features:

* Provides definitions for magic `Braintree` classes properties

## Usage

To use this extension, require it in [Composer](https://getcomposer.org/):

```
composer require --dev Ferror/phpstan-braintree
```

And include extension.neon in your project's PHPStan config:

```
includes:
	- vendor/Ferror/phpstan-braintree/extension.neon
```
