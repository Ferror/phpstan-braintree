<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use Ferror\PHPStan\PropertyImplementationMakerTrait;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\Reflection\PropertyReflection;

final class Discount implements PropertiesClassReflectionExtension
{
    use PropertyImplementationMakerTrait;

    private array $properties;

    public function __construct()
    {
        $this->properties = [
            'id' => [],
            'amount' => [],
            'currentBillingCycle' => [],
            'description' => [],
            'kind' => [],
            'name' => [],
            'neverExpires' => [],
            'numberOfBillingCycles' => [],
            'quantity' => [],
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
