<?php

declare(strict_types=1);

namespace Pest\Pickles;

// use Pest\Contracts\Plugins\AddsOutput;
// use Pest\Contracts\Plugins\HandlesArguments;

/**
 * @internal
 */
trait Pickles
{
    public function given(string $step, callable $given): void
    {
        $given();
    }

    public function when(string $step, callable $when): void
    {
        $when();
    }

    public function then(string $stem, callable $then): void
    {
        $then();
    }
}
