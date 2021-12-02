<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree;

use Ferror\PHPStan\PropertyImplementationMakerTrait;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\PropertyReflection;

abstract class AbstractReflection
{
    protected string $name = '';
    protected array $properties = [];

    use PropertyImplementationMakerTrait;

    public function getProperty(ClassReflection $classReflection, string $propertyName): PropertyReflection
    {
        $key = $this->properties[$propertyName];

        return $this->returnPropertyImplementation($key[0], $classReflection, $key[1], $key[2], $key[3]);
    }

    public function hasProperty(ClassReflection $classReflection, string $propertyName): bool
    {
        return $classReflection->getName() === $this->name
            && \array_key_exists($propertyName, $this->properties);
    }
}
