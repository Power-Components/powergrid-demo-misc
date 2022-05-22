<?php

namespace App\Http\Livewire;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button,
    Column,
    Detail,
    Footer,
    Header,
    PowerGrid,
    PowerGridComponent,
    PowerGridEloquent,
    Rules\Rule};

class DishesDetailRowTable extends PowerGridComponent
{
    use ActionButton;

    public bool $join = false;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Header::make()
                ->showSearchInput(),

            Footer::make()
                ->showPerPage(5)
                ->showRecordCount(),

            Detail::make()
                ->view('components.detail')
                ->options(['name' => 'Luan'])
                ->showCollapseIcon(),
        ];
    }

    public function datasource(): Builder
    {
        if ($this->join) {
            return $this->join();
        }

        return $this->query();
    }

    public function query(): Builder
    {
        return Dish::with('category');
    }

    public function join(): Builder
    {
        return Dish::query()
            ->join('categories', function ($categories) {
                $categories->on('dishes.category_id', '=', 'categories.id');
            })
            ->select('dishes.*', 'categories.name as category_name');
    }

    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),
        ];
    }

    public function actions(): array
    {
        return [
            Button::make('toggleDetail', 'Toggle Detail')
                ->class('text-center')
                ->toggleDetail(),
        ];
    }

    public function actionRules(): array
    {
        return [
            Rule::rows()
                ->when(fn (Dish $dish) => $dish->id == 2)
                ->detailView('components.detail-rules', ['fromActionRule' => true]),
        ];
    }

    public function bootstrap()
    {
        config(['livewire-powergrid.theme' => 'bootstrap']);
    }

    public function tailwind()
    {
        config(['livewire-powergrid.theme' => 'tailwind']);
    }
}
