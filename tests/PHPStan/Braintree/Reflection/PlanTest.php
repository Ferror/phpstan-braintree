<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use PHPUnit\Framework\TestCase;

class PlanTest extends TestCase
{
	use ReflectionMockingTrait;

    /**
     * @var \Ferror\PHPStan\Braintree\Reflection\Plan
     */
	private Plan $extension;

	protected function setUp(): void
    {
		parent::setUp();

		$this->extension = new \Ferror\PHPStan\Braintree\Reflection\Plan();
	}

	public function dataHasProperty(): iterable
	{
		yield [
            \Braintree\Plan::class,
			'foo',
			false,
		];
		yield [
            \Braintree\Plan::class,
			'billingDayOfMonth',
			true,
		];
	}

	/**
	 * @dataProvider dataHasProperty
	 */
	public function testHasProperty(string $className, string $property, bool $result): void
    {
		$classReflection = $this->mockClassReflection(new \ReflectionClass($className));
		$this->assertSame($result, $this->extension->hasProperty($classReflection, $property));
	}
}
