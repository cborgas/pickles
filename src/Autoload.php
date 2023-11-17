<?php

declare(strict_types=1);

namespace Pest\Pickles;

use Closure;
use Pest\Plugin;

Plugin::uses(Pickles::class);

function given(string $step, Closure $given): void
{
    $test = test();
    $test->given($step, $given->bindTo($test)); // @phpstan-ignore-line
}

function when(string $step, Closure $when): void
{
    $test = test();
    $test->when($step, $when->bindTo($test)); // @phpstan-ignore-line
}

function then(string $step, Closure $then): void
{
    $test = test();
    $test->then($step, $then->bindTo($test)); // @phpstan-ignore-line
}
