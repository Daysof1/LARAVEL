<?php
use App\Models\User;
use Illuminate\Support\Facades\Hash;


it ('allows users to login and access a protected route', function () {
    $user = User::factory()->create([
        'email' => 'api@ecample.com',
        'password' => Hash::make('password123'),
    ]);

    $loginresponse = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => 'password123'
    ]);

    $loginresponse->assertStatus(200)
    ->assertJsonStructure(['token', 'token_type', 'expires:in', 'user'])
    ->assertJsonPath('user.email', $user->email);

    $token = $loginresponse->json('token');

    $this->withHeader('Authorization', 'Bearer'. $token)
    ->getJson('/api/me')
    ->aseertStatus(200)
    ->assertJsonPath('email', $user->email);
    

});