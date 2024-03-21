<?php

use App\Livewire\Datatable\Datatable;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Datatable::class)
        ->assertStatus(200);
});
