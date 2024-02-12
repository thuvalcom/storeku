<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="/">

    <meta name="description" content="Dashboard template built with tailwindcss 🛩">

    <title>Dashboard</title>

    <link rel="stylesheet" href="{{asset('assets/build/css/main.css?id=0bdfed9d223a54f69d02')}}">

    {{--    <script src="{{asset('assets/build/js/main.js?id=113d9ec8ef64cc3174bf')}}"></script>--}}
</head>

<body>
<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
    <div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
         class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

    <div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
         class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex items-center justify-center mt-8">
            <div class="flex items-center">
                <svg class="w-12 h-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                        fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                        fill="white"/>
                </svg>

                <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span>
            </div>
        </div>

        <nav class="mt-10">
            <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" wire:navigate
               href="/dashboard">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                </svg>

                <span class="mx-3">Dashboard</span>
            </a>

            <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               wire:navigate href="{{ route('products') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 3h18a1 1 0 011 1v16a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1zm3 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V7a1 1 0 00-1-1H6zm10 0a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V7a1 1 0 00-1-1h-3z"/>
                </svg>


                <span class="mx-3">Products</span>
            </a>

            <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               wire:navigate href="{{ route('categories') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>


                <span class="mx-3">Categories</span>
            </a>

            <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
               href="/forms">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>

                <span class="mx-3">Forms</span>
            </a>
        </nav>
    </div>
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
            <div class="flex items-center">
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>


            </div>

            <div class="flex items-center">
                <div x-data="{ notificationOpen: false }" class="relative">
                    <button @click="notificationOpen = ! notificationOpen"
                            class="flex mx-4 text-gray-600 focus:outline-none">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <div x-cloak x-show="notificationOpen" @click="notificationOpen = false"
                         class="fixed inset-0 z-10 w-full h-full"></div>

                    <div x-cloak x-show="notificationOpen"
                         class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80"
                         style="width:20rem;">
                        <a href="#"
                           class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                 alt="avatar">
                            <p class="mx-2 text-sm">
                                <span class="font-bold" href="#">Sara Salah</span> replied on the <span
                                    class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                            </p>
                        </a>
                        <a href="#"
                           class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                 src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                                 alt="avatar">
                            <p class="mx-2 text-sm">
                                <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                            </p>
                        </a>
                        <a href="#"
                           class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                 src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                 alt="avatar">
                            <p class="mx-2 text-sm">
                                <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span
                                    class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                            </p>
                        </a>
                        <a href="#"
                           class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                            <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                 src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80"
                                 alt="avatar">
                            <p class="mx-2 text-sm">
                                <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                            </p>
                        </a>
                    </div>
                </div>

                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @click="dropdownOpen = ! dropdownOpen"
                            class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                        <img class="object-cover w-full h-full"
                             src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80"
                             alt="Your avatar">
                    </button>

                    <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false"
                         class="fixed inset-0 z-10 w-full h-full"></div>

                    <div x-cloak x-show="dropdownOpen"
                         class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                        <a href="/login"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                    </div>
                </div>
            </div>
        </header>
        {{$slot}}
    </div>
</div>
</body>

</html>
