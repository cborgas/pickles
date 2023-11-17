<?php

declare(strict_types=1);

namespace Pest\Pickles\Tests\Example;

use function Pest\Pickles\given;
use function Pest\Pickles\then;
use function Pest\Pickles\when;

given('Given a calculator is turned on', function (): void {
    $this->calculator = new Calculator();
});

when('When I enter the numbers 10 and 5 and press the + button', function (int $num1, int $num2): void {
    $this->output = $this->calculator->add($num1, $num2);
});

then('Then the result displayed should be 15', function (int $expectedOutput): void {
    expect($this->output)->toBe($expectedOutput);
});
