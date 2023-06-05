<?php

use App\Models\Repartidor;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Inertia\Testing\AssertableInertia as Assert;

beforeEach(function () {
    $this->repartidores = Repartidor::factory()->count(5)->create();
    $this->user = User::factory()->create();
});


it('guest cant see /repartidores page', function () {
    $response = $this->get(route('repartidores.index'));

    $this->assertGuest();
    $response->assertRedirectToRoute('login');
});

it('user can see repartidores', function()
{
    $response = $this->actingAs($this->user)
        ->get(route('repartidores.index'))
        ->assertInertia(fn (Assert $page) => $page
            ->component('Repartidor/Index')
            ->has('repartidores.data', 5)
        );
});
