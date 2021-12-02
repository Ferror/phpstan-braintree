<?php
declare(strict_types=1);

namespace Ferror\PHPStan;

use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\PropertyReflection;
use PHPStan\Type\Type;

trait PropertyImplementationMakerTrait
{
	private function returnPropertyImplementation(Type $type, ClassReflection $declaringClass, bool $static, bool $private, bool $public): PropertyReflection
	{
		return new class($type, $declaringClass, $static, $private, $public) implements PropertyReflection
		{
			public function __construct(
                private Type $type,
                private ClassReflection $declaringClass,
                private bool $static,
                private bool $private,
                private bool $public,
            ) {
			}

			public function getDeclaringClass(): ClassReflection
			{
				return $this->declaringClass;
			}

			public function isStatic(): bool
			{
				return $this->static;
			}

			public function isPrivate(): bool
			{
				return $this->private;
			}

			public function isPublic(): bool
			{
				return $this->public;
			}

			public function getType(): Type
			{
				return $this->type;
			}

			public function isReadable(): bool
			{
				return true;
			}

			public function isWritable(): bool
			{
				return true;
			}
        };
	}
}
