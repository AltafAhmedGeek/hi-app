<?php

it('test the coded number is same', function () {
    expect(1)->toBe(1);
});

it('test the given number is same', function ($a) {
    expect($a)->toBe(21);
})->with([21]);

it('test the given numbers sum is same', function ($a, $b) {
    expect($a + $b)->toBe($a + $b);
})->with(
    [
        [1, 2],
        [5, 2],
    ]
);
