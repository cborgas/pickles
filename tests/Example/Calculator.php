<?php

declare(strict_types=1);

namespace Pest\Pickles\Tests\Example;

use InvalidArgumentException;

final class Calculator
{
    public function add(float $num1, float $num2): float
    {
        return $num1 + $num2;
    }

    public function subtract(float $num1, float $num2): float
    {
        return $num1 - $num2;
    }

    public function multiply(float $num1, float $num2): float
    {
        return $num1 * $num2;
    }

    public function divide(float $num1, float $num2): float
    {
        if ($num2 != 0) {
            return $num1 / $num2;
        }

        throw new InvalidArgumentException('Cannot divide by zero!');
    }
}
