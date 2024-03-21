<?php

namespace App\Livewire\Datatable;

use JetBrains\PhpStorm\ArrayShape;
use Livewire\Component;

class Datatable extends Component
{
    public array $columns = [];

    public array $data = [];

    public array $actions = [];
    public array $massActions = [];

    public bool $showRowNumber = true;
    public function render()
    {
        return view('livewire.datatable.datatable');
    }

    public function getRowNumber($row) {
        return $row + 1;
    }
}
