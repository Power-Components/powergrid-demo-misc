<?php

namespace App\Http\Livewire;

use Illuminate\Support\{Carbon, Collection};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class PowerGridTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Collection
    {
        return collect([
            ['id' => 1, 'name' => 'Name 1', 'price' => 1.58, 'created_at' => now(), ],
            ['id' => 2, 'name' => 'Name 2', 'price' => 1.68, 'created_at' => now(), ],
            ['id' => 3, 'name' => 'Name 3', 'price' => 1.78, 'created_at' => now(), ],
            ['id' => 4, 'name' => 'Name 4', 'price' => 1.88, 'created_at' => now(), ],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(), ],
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('price')
            ->addColumn('created_at_formatted', function ($entry) {
                return Carbon::parse($entry->created_at)->format('d/m/Y');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |

    */
    /**
    * PowerGrid Columns.
    *
    * @return array<int, Column>
    */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Name', 'name')
                ->searchable()
                ->makeInputText('name')
                ->sortable(),

            Column::make('Price', 'price')
                ->sortable()
                ->makeInputRange('price', '.', ''),

            Column::make('Created', 'created_at_formatted')
                ->makeInputDatePicker('created_at'),
        ];
    }
}
