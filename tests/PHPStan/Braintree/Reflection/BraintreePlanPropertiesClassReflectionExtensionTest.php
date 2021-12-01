<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use Braintree\Plan;

class BraintreePlanPropertiesClassReflectionExtensionTest extends \PHPUnit\Framework\TestCase
{
	use ReflectionMockingTrait;

	/** @var \Ferror\PHPStan\Braintree\Reflection\BraintreePlanPropertiesClassReflectionExtension */
	private BraintreePlanPropertiesClassReflectionExtension $extension;

	protected function setUp(): void
    {
		parent::setUp();

		$this->extension = new BraintreePlanPropertiesClassReflectionExtension();
	}

	/**
	 * @return mixed[]
	 */
	public function dataHasProperty(): array
	{
		$data = [];
		$data[] = [
			Plan::class,
			'foo',
			false,
		];
		$data[] = [
			Plan::class,
			'billingDayOfMonth',
			true,
		];

		return $data;
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
