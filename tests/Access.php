<?php

declare(strict_types=1);

use function Pest\Pickles\given;
use function Pest\Pickles\then;
use function Pest\Pickles\when;

test('given() can be accessed as function', function (): void {
    given('foo', function (): void {
        expect(true)->toBeTrue();
    });
});

test('when() can be accessed as function', function (): void {
    when('foo', function (): void {
        expect(true)->toBeTrue();
    });
});

test('then() can be accessed as function', function (): void {
    then('foo', function (): void {
        expect(true)->toBeTrue();
    });
});
