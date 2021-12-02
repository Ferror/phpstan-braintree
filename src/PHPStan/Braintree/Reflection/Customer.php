<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use Ferror\PHPStan\Braintree\AbstractReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\Type\StringType;

class Customer extends AbstractReflection implements PropertiesClassReflectionExtension
{
	public function __construct()
	{
        $this->name =  \Braintree\Customer::class;
		$this->properties = [
            'id' => [new StringType(), false, false, true],
            'company' => [new StringType(), false, false, true],
            'customFields' => [],
            'deviceData' => [new StringType(), false, false, true],
            'email' => [],
            'tax' => [],
            'firstName' => [],
            'lastName' => [],
            'paymentMethodNonce' => [],
            'phone' => [],
            'website' => [],
            'riskData' => [
                'customerBrowser' => [new StringType(), false, false, true],
                'customerIp' => [new StringType(), false, false, true],
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
}
