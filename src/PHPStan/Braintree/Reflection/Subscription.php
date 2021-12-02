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

class Subscription extends AbstractReflection implements PropertiesClassReflectionExtension
{
	public function __construct()
	{
        $this->name = \Braintree\Subscription::class;
		$this->properties = [
            'id' => [new StringType(), false, false, true],
            'timestamp' => [new ObjectType(DateTime::class), false, false, true],
            'kind' => [new StringType(), false, false, true],
            'subject' => [new ArrayType(new StringType()), false, false, true],
            'subscription' => [new ObjectType(\Braintree\Subscription::class), false, false, true],
            'balance' => [new StringType(), false, false, true],
            'billingDayOfMonth' => [new IntegerType(), false, false, true],
            'billingPeriodEndDate' => [new StringType(), false, false, true],
            'billingPeriodStartDate' => [new StringType(), false, false, true],
            'createdAt' => [new ObjectType(DateTime::class), false, false, true],
            'currentBillingCycle' => [new IntegerType(), false, false, true],
            'daysPastDue' => [new IntegerType(), false, false, true],
            'description' => [new StringType(), false, false, true],
            'descriptor' => [new StringType(), false, false, true],
            'name' => [new StringType(), false, false, true],
            'phone' => [new StringType(), false, false, true],
            'url' => [new StringType(), false, false, true],
            'addOns' => [new ArrayType(new IntegerType(), new ObjectType(\Braintree\AddOn::class)), false, false, true],
            'discounts' => [new ArrayType(new IntegerType(), new ObjectType(\Braintree\Discount::class)), false, false, true],
            'failureCount' => [new IntegerType(), false, false, true],
            'firstBillingDate' => [new StringType(), false, false, true],
			'merchantAccountId' => [new StringType(), false, false, true],
			'neverExpires' => [new BooleanType(), false, false, true],
			'nextBillAmount' => [new StringType(), false, false, true],
			'nextBillingDate' => [new StringType(), false, false, true],
			'nextBillingPeriodAmount' => [new StringType(), false, false, true],
			'numberOfBillingCycles' => [new IntegerType(), false, false, true],
			'paidThroughDate' => [new StringType(), false, false, true],
			'paymentMethodToken' => [new StringType(), false, false, true],
			'planId' => [new StringType(), false, false, true],
			'price' => [new StringType(), false, false, true],
			'status' => [new StringType(), false, false, true],
			'statusHistory' => [new ArrayType(new StringType()), false, false, true],
			'transactions' => [new ArrayType(new ObjectType(\Braintree\Transaction::class)), false, false, true],
			'trialDuration' => [new IntegerType(), false, false, true],
			'trialDurationUnit' => [new StringType(), false, false, true],
			'trialPeriod' => [new BooleanType(), false, false, true],
			'updatedAt' => [new ObjectType(DateTime::class), false, false, true],
		];
	}
}
