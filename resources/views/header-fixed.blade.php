@extends('layouts.base')

@section('title')
    Header Fixed
@endsection

@section('main')
    <div class="space-y-4">
        <livewire:header-fixed-table />

        <div class="font-bold text-lg text-slate-700">Header and Filters Fixed</div>

        <livewire:header-filters-fixed-table />
    </div>
@endsection
