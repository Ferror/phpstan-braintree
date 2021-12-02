<?php
declare(strict_types=1);

namespace Ferror\PHPStan\Braintree\Reflection;

use Ferror\PHPStan\Braintree\AbstractReflection;
use PHPStan\Reflection\PropertiesClassReflectionExtension;

class Discount extends AbstractReflection implements PropertiesClassReflectionExtension
{
    public function __construct()
    {
        $this->name = \Braintree\Discount::class;
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
}
