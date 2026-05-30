<?php

test('registers a new user', function () {
    // Visit the registration page, fill out the form, and submit it
    visit('/register')
        ->fill('Name', 'John Doe')
        ->fill('Email', 'john@example.com')
        ->fill('Password', 'password')
        ->fill('Password Confirmation', 'password')
        ->press('@register-button')
        ->assertPathIs('/ideas');

    expect(auth()->user()->email)->toBe('john@example.com');
    $this->assertAuthenticated();
});
