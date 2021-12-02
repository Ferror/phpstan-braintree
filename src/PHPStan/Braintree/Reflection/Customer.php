<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use Ferror\PHPStan\PropertyImplementationMakerTrait;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\Reflection\PropertyReflection;
use PHPStan\Type\StringType;

class Customer implements PropertiesClassReflectionExtension
{
	use PropertyImplementationMakerTrait;

	private array $properties;

	public function __construct()
	{
		$this->properties = [
			'id' => [new StringType(), false, false, true],
            'company' => [],
            'customFields' => [],
            'deviceData' => [],
            'email' => [],
            'tax' => [],
            'firstName' => [],
            'lastName' => [],
            'paymentMethodNonce' => [],
            'phone' => [],
            'website' => [],
            'riskData' => [
                'customerBrowser' => [],
                'customerIp' => [],
            ],
            'taxIdentifiers' => [
                [
                    'countryCode' => [],
                    'identifier' => [],
                ],
            ],
            'creditCard' => [
                'billingAddress' => [
                    'company' => [],
                    'countryCodeAlpha2' => [],
                    'countryCodeAlpha3' => [],
                    'countryCodeNumeric' => [],
                    'countryName' => [],
                    'extendedAddress' => [],
                    'firstName' => [],
                    'lastName' => [],
                    'locality' => [],
                    'options' => [],
                    'postalCode' => [],
                    'region' => [],
                    'streetAddress' => [],
                ],
                'cardholderName' => [],
                'cvv' => [],
                'expirationDate' => [],
                'expirationMonth' => [],
                'expirationYear' => [],
                'number' => [],
                'options' => [
                    'failOnDuplicatePaymentMethod' => [],
                    'makeDefault' => [],
                    'skipAdvancedFraudChecking' => [],
                    'verificationAmount' => [],
                    'verificationMerchantAccountId' => [],
                    'verifyCard' => [],
                ],
                'threeDSecurePassThru' => [
                    'cavv' => [],
                    'dsTransactionId' => [],
                    'eciFlag' => [],
                    'threeDSecureVersion' => [],
                    'xid' => [],

                ],
                'token' => [],
            ]
		];
	}

	public function hasProperty(ClassReflection $classReflection, string $propertyName): bool
	{
		return $classReflection->getName() === \Braintree\Customer::class
			&& \array_key_exists($propertyName, $this->properties);
	}

	public function getProperty(ClassReflection $classReflection, string $propertyName): PropertyReflection
	{
		$key = $this->properties[$propertyName];
		return $this->returnPropertyImplementation($key[0], $classReflection, $key[1], $key[2], $key[3]);
	}
}
