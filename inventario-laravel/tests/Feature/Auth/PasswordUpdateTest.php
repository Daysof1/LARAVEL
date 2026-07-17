<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

test('password can be update', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->put('/password', [
            'current_password' => 'password',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect();
        
            $this->assertTrue(Hash::check('new-password', $user->fresh()->password));
});

test ('correct password must be provided to update password', function() {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->put('/password', [
            'current_password' => 'wrong-password',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

    $response
    ->assertSessionHasErrorsIn('updatePassword', 'current_password')
    ->assertRedirect('/profile');
});