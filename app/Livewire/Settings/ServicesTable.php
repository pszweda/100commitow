<?php

namespace App\Livewire\Settings;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class ServicesTable extends PowerGridComponent
{
    public function datasource(): ?Collection
    {
        return collect([
            ['id' => 1, 'name' => 'Service 1', 'price' => 150, 'created_at' => now(),],
            ['id' => 1, 'name' => 'Service 2', 'price' => 150, 'created_at' => now(),],
            ['id' => 1, 'name' => 'Service 3', 'price' => 150, 'created_at' => now(),],
            ['id' => 1, 'name' => 'Service 4', 'price' => 150, 'created_at' => now(),],
            ['id' => 1, 'name' => 'Service 5', 'price' => 150, 'created_at' => now(),],
        ]);
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [

            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('created_at_formatted', function ($entry) {
                return Carbon::parse($entry->created_at)->format('d/m/Y');
            });
    }

    public function columns(): array
    {
        return [

            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),

            Column::make('Price', 'price')
                ->sortable(),

            Column::make('Created', 'created_at_formatted'),

            Column::action('Action')
        ];
    }
}
