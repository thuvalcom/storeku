<header class="text-gray-500">
    <nav class="container mx-auto flex flex-wrap items-center px-4 py-3"><a href="/"
            class="mr-3 text-xl font-bold text-gray-800 hover:text-gray-300">
            Company </a>
        <div class="ml-auto px-2 lg:order-2">
            <div class="ml-auto flex flex-row"><a href="#" class="px-2 py-4 hover:text-gray-300" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em"
                        height="1.25em" class="inline-block">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z">
                            </path>
                        </g>
                    </svg>
                </a> <a href="#" class="px-2 py-4 hover:text-gray-300" aria-label="View cart">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em"
                        height="1.25em" class="inline-block">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M7 8V6a5 5 0 1 1 10 0v2h3a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3zm0 2H5v10h14V10h-2v2h-2v-2H9v2H7v-2zm2-2h6V6a3 3 0 0 0-6 0v2z">
                            </path>
                        </g>
                    </svg>
                    <span>(0)</span></a>
                @if (Route::has('login'))
                    <a href="/dashboard" class="px-2 py-4 hover:text-gray-300" aria-label="Account">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em"
                            height="1.25em" class="inline-block">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z">
                                </path>
                            </g>
                        </svg>
                    </a>
                @endif
            </div>
        </div>
        <button class="rounded px-3 py-2 text-gray-800 hover:bg-gray-800 hover:text-white lg:hidden"
            data-name="nav-toggler"
            data-pg-ia='{"l":[{"name":"NabMenuToggler","trg":"click","a":{"l":[{"t":"^nav|[data-name=nav-menu]","l":[{"t":"set","p":0,"d":0,"l":{"class.remove":"hidden"}}]},{"t":"#gt# span:nth-of-type(1)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":45,"yPercent":300}}]},{"t":"#gt# span:nth-of-type(2)","l":[{"t":"tween","p":0,"d":0.2,"l":{"autoAlpha":0}}]},{"t":"#gt# span:nth-of-type(3)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":-45,"yPercent":-300}}]}]},"pdef":"true","trev":"true"}]}'>
            <span class="my-1 block w-6 border-b-2 border-current"></span> <span
                class="my-1 block w-6 border-b-2 border-current"></span> <span
                class="my-1 block w-6 border-b-2 border-current"></span>
        </button>
        <div data-name="nav-menu"
            class="hidden w-full flex-grow space-y-2 lg:flex lg:w-auto lg:items-center lg:space-x-4 lg:space-y-0">
            <div class="ml-auto flex flex-col lg:flex-row"><a href="/"
                    class="px-0 py-2 hover:text-gray-300 lg:px-4">Home</a> <a href="#"
                    class="px-0 py-2 hover:text-gray-300 lg:px-4">About</a> <a href="#"
                    class="px-0 py-2 hover:text-gray-300 lg:px-4">Collection</a>
                <a href="#" class="px-0 py-2 hover:text-gray-300 lg:px-4">Shop</a><a href="#"
                    class="px-0 py-2 hover:text-gray-300 lg:px-4">Blog</a>
            </div>
        </div>
    </nav>
</header>
