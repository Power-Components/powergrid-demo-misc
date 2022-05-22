<?php

namespace App\View\Components\Layout;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Menu extends Component
{
    public Collection $menu;

    public function __construct()
    {
        $this->menu = collect([
            [
                'label' => 'Simple',
                'route' => route('simple'),
                'name'  => 'simple',
            ],
            [
                'label' => 'Striped',
                'route' => route('striped'),
                'name'  => 'striped',
            ],
            [
                'label' => 'Header Fixed',
                'route' => route('header-fixed'),
                'name'  => 'header-fixed',
            ],
            [
                'label' => 'Filters',
                'route' => route('filters'),
                'name'  => 'filters',
            ],
            [
                'label' => 'Validation',
                'route' => route('validation'),
                'name'  => 'validation',
            ],
            [
                'label' => 'Collection',
                'route' => route('collection'),
                'name'  => 'collection',
            ],
            [
                'label' => 'Join',
                'route' => route('join'),
                'name'  => 'join',
            ],
            [
                'label' => 'Multiple',
                'route' => route('multiple'),
                'name'  => 'multiple',
            ],
            [
                'label' => 'Dishes',
                'route' => route('dish'),
                'name'  => 'dish',
            ],
            [
                'label' => 'Persist',
                'route' => route('persist'),
                'name'  => 'persist',
            ],
            [
                'label' => 'Detail',
                'route' => route('detail'),
                'name'  => 'detail',
            ],
            [
                'label' => 'Export',
                'route' => route('export'),
                'name'  => 'export',
            ],
            [
                'label' => 'Batch Export',
                'route' => route('batch'),
                'name'  => 'batch',
            ],
            [
                'label' => 'Custom Layout',
                'route' => route('custom-layout'),
                'name'  => 'custom-layout',
            ],
            [
                'label' => 'Bulk Actions',
                'route' => route('bulk-actions'),
                'name'  => 'bulk-actions',
            ],
        ]);
    }

    public function render()
    {
        return view('components.layout.menu');
    }
}
