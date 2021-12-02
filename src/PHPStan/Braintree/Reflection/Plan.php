<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use DateTime;
use Ferror\PHPStan\Braintree\AbstractReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\Type\ArrayType;
use PHPStan\Type\BooleanType;
use PHPStan\Type\IntegerType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\StringType;

class Plan extends AbstractReflection implements PropertiesClassReflectionExtension
{
	public function __construct()
	{
        $this->name = \Braintree\Plan::class;
		$this->properties = [
			'id' => [new StringType(), false, false, true],
			'description' => [new StringType(), false, false, true],
			'name' => [new StringType(), false, false, true],
			'billingDayOfMonth' => [new IntegerType(), false, false, true],
			'billingFrequency' => [new IntegerType(), false, false, true],
			'numberOfBillingCycles' => [new IntegerType(), false, false, true],
			'price' => [new StringType(), false, false, true],
			'currencyIsoCode' => [new StringType(), false, false, true],
			'trialDuration' => [new IntegerType(), false, false, true],
			'trialDurationUnit' => [new StringType(), false, false, true],
			'trialPeriod' => [new BooleanType(), false, false, true],
			'createdAt' => [new ObjectType(DateTime::class), false, false, true],
			'updatedAt' => [new ObjectType(DateTime::class), false, false, true],
			'addOns' => [new ArrayType(new IntegerType(), new ObjectType(\Braintree\AddOn::class)), false, false, true],
			'discounts' => [new ArrayType(new IntegerType(), new ObjectType(\Braintree\Discount::class)), false, false, true],
		];
	}
}
