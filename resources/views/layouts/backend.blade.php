<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="/">

        <meta name="description" content="Dashboard template built with tailwindcss 🛩">

        <title> @setting('metaTitle')</title>

        <link rel="stylesheet" href="{{ asset('assets/build/css/main.css?id=0bdfed9d223a54f69d02') }}">

        {{--    <script src="{{asset('assets/build/js/main.js?id=113d9ec8ef64cc3174bf')}}"></script> --}}

        @livewireStyles
    </head>

    <body>
        <div x-data="{ sidebarOpen: false }" class="font-roboto flex h-screen bg-gray-200">
            <div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                class="fixed inset-0 z-20 bg-black opacity-50 transition-opacity lg:hidden"></div>

            <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                class="fixed inset-y-0 left-0 z-30 w-64 transform overflow-y-auto bg-gray-900 transition duration-300 lg:static lg:inset-0 lg:translate-x-0">
                <div class="mt-8 flex items-center justify-center">
                    <div class="flex items-center">
                        <a wire:navigate href="/dashboard">
                            @setting('logo')</a>

                    </div>
                </div>

                <nav class="mt-10">
                    <a class="mt-4 flex items-center bg-gray-700 bg-opacity-25 px-6 py-2 text-gray-100" wire:navigate
                        href="/dashboard">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>

                        <span class="mx-3">Dashboard</span>
                    </a>
                    @can('Access All')
                        <a class="mt-4 flex items-center px-6 py-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            wire:navigate href="{{ route('products') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h18a1 1 0 011 1v16a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1zm3 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V7a1 1 0 00-1-1H6zm10 0a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V7a1 1 0 00-1-1h-3z" />
                            </svg>

                            <span class="mx-3">Products</span>
                        </a>
                    @endcan
                    @can('Access All')
                        <a class="mt-4 flex items-center px-6 py-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            wire:navigate href="{{ route('categories') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>

                            <span class="mx-3">Categories</span>
                        </a>
                    @endcan
                    @can('Access All')
                        <a class="mt-4 flex items-center px-6 py-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            wire:navigate href="{{ route('settings') }}">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>

                            <span class="mx-3">Settings</span>
                        </a>
                    @endcan
                </nav>
            </div>
            <div class="flex flex-1 flex-col overflow-hidden">
                @livewire('backend-header')
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
    </body>

</html>
