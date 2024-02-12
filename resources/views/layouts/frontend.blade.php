<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>New page</title>
        {{--    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css"> --}}
        <script src="{{ asset('front/lib/script.js') }}"></script>
        <meta name="description" content="Pinegrow Web Editor - Professional Services TailwindCSS Template">
        <link rel="stylesheet" href="{{ asset('front/lib/app.css') }}">
        <script src="{{ asset('front/lib/app.js') }}"></script>
        {{--    @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>

    <body>
        @include('layouts.inc.header')
        @include('layouts.inc.hero')
        <section class="bg-gray-50 py-20 text-gray-500">
            <div class="container mx-auto px-4">
                <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full p-4 md:w-6/12 lg:w-4/12"><a href="#"
                            class="group relative block px-6 pb-12 pt-36">
                            <img src="https://images.unsplash.com/photo-1467043237213-65f2da53396f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDMwNnx8d29tZW4lMjBjbG90aGVzfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080"
                                class="absolute left-0 top-0 h-full w-full object-none object-left group-hover:opacity-75"
                                alt="..." width="1080" height="720" />
                            <div class="relative">
                                <h2 class="mb-4 text-xl font-semibold text-gray-800">Mens Summer Collection</h2>
                                <p class="text-sm group-hover:underline">View Collection</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-full p-4 md:w-6/12 lg:w-4/12"><a href="#"
                            class="group relative block px-6 pb-12 pt-36">
                            <img src="https://images.unsplash.com/photo-1516762689617-e1cffcef479d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDI1M3x8d29tZW4lMjBjbG90aGVzfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080"
                                class="absolute left-0 top-0 h-full w-full object-none object-left group-hover:opacity-75"
                                alt="..." width="1080" height="720" />
                            <div class="relative">
                                <h2 class="mb-4 text-xl font-semibold text-gray-800">Womens New Arrival</h2>
                                <p class="text-sm group-hover:underline">View Collection</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-full p-4 md:w-6/12 lg:w-4/12"><a href="#"
                            class="group relative block px-6 pb-12 pt-36">
                            <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDEwMjR8fHdvbWVuJTIwY2xvdGhlc3xlbnwwfHx8&ixlib=rb-1.2.1&q=80&w=1080"
                                class="absolute left-0 top-0 h-full w-full object-none object-left group-hover:opacity-75"
                                alt="..." width="1080" height="720" />
                            <div class="relative">
                                <h2 class="mb-4 text-xl font-semibold text-gray-800">Accessories Collection</h2>
                                <p class="text-sm group-hover:underline">View Collection</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{ $slot }}

        <section class="bg-gray-50 py-12 text-center text-gray-500">
            <div class="container relative mx-auto px-4">
                <div class="-mx-4 flex flex-wrap leading-relaxed md:divide-x md:divide-gray-300">
                    <div class="w-full p-4 md:w-4/12">
                        <div class="lg:px-8"> <span
                                class="mb-6 inline-block rounded-full bg-gray-100 p-8 text-blue-600">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12">
                                    <path
                                        d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z" />
                                </svg></span>
                            <h2 class="mb-2 text-lg font-bold uppercase text-gray-800">Phone</h2>
                            <ul>
                                <li><a href="tel:+0 123-456-789" class="hover:text-blue-600">+0 123-456-789</a>
                                </li>
                                <li><a href="tel:+0 123-456-789" class="hover:text-blue-600">+0 123-456-789</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full p-4 md:w-4/12">
                        <div class="lg:px-8"> <span
                                class="mb-6 inline-block rounded-full bg-gray-100 p-8 text-blue-600">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12">
                                    <path
                                        d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z">
                                    </path>
                                </svg></span>
                            <h2 class="mb-2 text-lg font-bold uppercase text-gray-800">Address</h2>
                            <div>9056 Fairground Ave. <br> Dearborn, MI 48124 <br> United States of America
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4 md:w-4/12">
                        <div class="lg:px-8"> <span
                                class="mb-6 inline-block rounded-full bg-gray-100 p-8 text-blue-600">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12">
                                    <path
                                        d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z">
                                    </path>
                                </svg></span>
                            <h2 class="mb-2 text-lg font-bold uppercase text-gray-800">Email</h2>
                            <div class="mb-2">
                                <a href="mailto:info@company.com" class="hover:text-blue-600">info@company.com</a>
                            </div>
                            <div class="inline-flex flex-wrap space-x-1 py-1"><a href="#"
                                    class="rounded-full bg-gray-700 p-2 text-white hover:bg-blue-600 hover:text-white"
                                    aria-label="facebook">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                        <path
                                            d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z" />
                                    </svg>
                                </a> <a href="#"
                                    class="rounded-full bg-gray-700 p-2 text-white hover:bg-blue-600 hover:text-white"
                                    aria-label="twitter">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                        <path
                                            d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z" />
                                    </svg>
                                </a> <a href="#"
                                    class="rounded-full bg-gray-700 p-2 text-white hover:bg-blue-600 hover:text-white"
                                    aria-label="instagram">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                        <path
                                            d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container relative mx-auto px-4 text-gray-700">
            <div class="py-4 text-sm">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 py-2 md:flex-1">
                        <p>&copy; 2002 - 2020. All Rights Reserved - Company Name</p>
                    </div>
                    <div class="w-full px-4 py-2 sm:w-auto"><a href="#" class="hover:text-blue-600">Privacy
                            Policy</a> | <a href="#" class="hover:text-blue-600">Terms of Use</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('front/lib/front.js') }}"></script>
    </body>

</html>
