<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Powergrid Demo - @yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    @powerGridStyles
</head>
<body class="antialiased h-screen">
<div class="h-full flex" x-data="{ sideBarOpen: false }" >
    <x-layout.menu />
    <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
        <div class="lg:hidden">
            <div class="flex items-center justify-between bg-slate-50 border-b border-slate-200 px-4 py-1.5">
                <div>
                    <img class="h-8 w-auto" src="https://raw.githubusercontent.com/Power-Components/livewire-powergrid/main/art/logo.svg" alt="Workflow">
                </div>
                <div>
                    <button x-on:click="sideBarOpen = true" type="button" class="-mr-3 h-12 w-12 inline-flex items-center justify-center rounded-md text-slate-500 hover:text-slate-900">
                        <span class="sr-only">Open sidebar</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex-1 relative z-0 flex overflow-hidden">
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last">
                <!-- Start main area-->
                <div class="py-6 px-4 sm:px-6 lg:px-8">
                    <div class="h-full border-2 border-slate-200 border-dashed rounded-lg p-6">
                        <div class="font-bold text-lg text-slate-700">@yield('title')</div>
                        @yield('main')
                    </div>
                </div>
                <!-- End main area -->
            </main>
        </div>
    </div>
</div>
@livewireScripts
@powerGridScripts
@livewire('livewire-ui-modal')
</body>
</html>
