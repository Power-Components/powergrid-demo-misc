<?php

namespace App\Http\Livewire\PowerGridThemes;

use PowerComponents\LivewirePowerGrid\Themes\Components\Table;
use PowerComponents\LivewirePowerGrid\Themes\Theme;

class TailwindHeaderFixed extends \PowerComponents\LivewirePowerGrid\Themes\Tailwind
{
    public function table(): Table
    {
        return Theme::table('rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 border-slate-100')
            ->div('my-3 overflow-x-auto bg-white shadow-lg rounded-lg overflow-y-auto relative transition-height ease-out duration-300 max-h-[29rem]')
            ->thead('sticky shadow-sm -top-[1px] bg-slate-50 dark:bg-slate-700')
            ->tr('')
            ->trFilters('bg-white sticky shadow-sm top-[39px]')
            ->th('font-semibold px-2 pr-4 py-3 text-left text-xs font-medium text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300')
            ->tbody('text-slate-800')
            ->trBody('odd:bg-slate-100 hover:odd:bg-slate-200 border border-slate-200 dark:border-slate-400 hover:bg-slate-50 dark:hover:bg-slate-700')
            ->tdBody('px-3 py-2 whitespace-nowrap dark:text-slate-200')
            ->tdBodyTotalColumns('px-3 py-2 whitespace-nowrap dark:text-slate-200 text-sm text-slate-600 text-right space-y-2');
    }
}
