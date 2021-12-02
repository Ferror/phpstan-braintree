<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use DateTime;
use Ferror\PHPStan\Braintree\AbstractReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\Type\ArrayType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\StringType;

class WebhookNotification extends AbstractReflection implements PropertiesClassReflectionExtension
{
	public function __construct()
	{
        $this->name = \Braintree\WebhookNotification::class;
        $this->properties = [
			'timestamp' => [new ObjectType(DateTime::class), false, false, true],
			'kind' => [new StringType(), false, false, true],
			'subject' => [new ArrayType(new StringType()), false, false, true],
			'subscription' => [new ObjectType(\Braintree\Subscription::class), false, false, true],
		];
	}
}
