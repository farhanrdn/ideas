<?php

use App\Models\Idea;
use App\Models\Step;
use App\Models\User;

test('idea', function () {
    expect(true)->toBeTrue();
});

test('It belong to user', function () {
    $idea = Idea::factory()->create();
    expect($idea->user)->toBeInstanceOf(User::class);
});

test('It has many steps', function () {
    $idea = Idea::factory()->create();
});
