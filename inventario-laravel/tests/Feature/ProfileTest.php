<?php

use App\Models\User;

test('profile page is displayed', function(){
    $user = User::factory()->create();

    $response = $this
    ->actingAs($user)
    ->get('/profile');

    $response->assertOk();
});

test('profile information can be update', function() {
    $user = User::factory()->create();

    $response = $this
    ->actingAs($user)
    ->patch('/profile', [
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    $response
    ->assertSessionHasNoErrors()
    ->assertRedirect('/profile');

    $user->refresh();

    $this->assertSame('Test User', $user->name);
    $this->assertSame('test@example.com', $user->email);
    $this->assertNull($user->email_verified_at);
});

test('email verification status is unchanged when the email adress is unchanged', function() {
    $user = User::factory()->create();

    $response = $this
    ->actingAs($user)
    ->patch('/profile', [
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    $response
    ->assertSessionHasNoErrors()
    ->assertRedirect('/profile');

    $user->refresh();

    $this->assertNotNull($user->refresh()->email_verified_at);
});

test('user can delete their account', function() {
    $user = User::factory()->create();

    $response = $this
    ->actingAs($user)
    ->patch('/profile', [
        'password' => 'password',
    ]);

    $response
    ->assertSessionHasNoErrors()
    ->assertRedirect('/');


    $this->assertGuest();
    $this->assertNull($user->refresh());
});

test('correct password must be provided to delete account', function() {
    $user = User::factory()->create();

    $response = $this
    ->actingAs($user)
    ->from('/profile')
    ->delete('/profile', [
        'password' => 'wrong-password',
    ]);

    $response
    ->assertSessionHasErrorsIn('userDeletion', 'password')
    ->assertRedirect('/profile');

    $this->assertNotNull($user->fresh());
});