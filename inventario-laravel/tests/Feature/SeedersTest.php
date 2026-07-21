<?php

use Database\Seeders\DatabaseSeeder;

uses (test\TestCase::class, Illuminate\Foundation\Testion\RefreshDatabase::class);

it('creates the default asdmin and user accounts', function() {
    $this->artisan('db:seed', ['--class' => DatabaseSeeder::class]);

    $this->assertDatabaseHas('users', [
        'email' =>'admin@example.com',
        'role' => 'admin',
    ]);

    $this->assertDatabaseHas('users', [
        'email' =>'coordinador@example.com',
        'role' => 'coordinador',
    ]);
});