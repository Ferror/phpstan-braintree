<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use PHPUnit\Framework\TestCase;

class DiscountTest extends TestCase
{
	use ReflectionMockingTrait;

	private Discount $extension;

	protected function setUp(): void
    {
		parent::setUp();

		$this->extension = new \Ferror\PHPStan\Braintree\Reflection\Discount();
	}

	public function dataHasProperty(): iterable
	{
		yield [\Braintree\Discount::class, 'foo', false];

		yield [\Braintree\Discount::class, 'id', true];
        yield [\Braintree\Discount::class, 'kind', true];
        yield [\Braintree\Discount::class, 'name', true];
        yield [\Braintree\Discount::class, 'amount', true];
        yield [\Braintree\Discount::class, 'quantity', true];
        yield [\Braintree\Discount::class, 'description', true];
        yield [\Braintree\Discount::class, 'neverExpires', true];
        yield [\Braintree\Discount::class, 'currentBillingCycle', true];
        yield [\Braintree\Discount::class, 'numberOfBillingCycles', true];
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
