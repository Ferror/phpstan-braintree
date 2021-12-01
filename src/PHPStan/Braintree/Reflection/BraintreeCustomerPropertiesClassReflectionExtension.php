<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use Braintree\Plan;
use Ferror\PHPStan\PropertyImplementationMakerTrait;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\Reflection\PropertyReflection;
use PHPStan\Type\StringType;

class BraintreeCustomerPropertiesClassReflectionExtension implements PropertiesClassReflectionExtension
{
	use PropertyImplementationMakerTrait;

	private array $properties;

	public function __construct()
	{
		$this->properties = [
			'id' => [new StringType(), false, false, true],
		];
	}

	public function hasProperty(ClassReflection $classReflection, string $propertyName): bool
	{
		return $classReflection->getName() === Plan::class
			&& \array_key_exists($propertyName, $this->properties);
	}

	public function getProperty(ClassReflection $classReflection, string $propertyName): PropertyReflection
	{
		$key = $this->properties[$propertyName];
		return $this->returnPropertyImplementation($key[0], $classReflection, $key[1], $key[2], $key[3]);
	}
}
