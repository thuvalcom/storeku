<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New page</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css">
    <script src="{{asset('front/lib/script.js')}}"></script>
    <meta name="description" content="Pinegrow Web Editor - Professional Services TailwindCSS Template">

</head>

<body>
<header class="text-gray-500">
    <nav class="container flex flex-wrap items-center mx-auto px-4 py-3"><a href="#"
                                                                            class="font-bold hover:text-gray-300 mr-3 text-gray-800 text-xl">
            Company </a>
        <div class="ml-auto px-2 lg:order-2">
            <div class="flex flex-row ml-auto"><a href="#" class="hover:text-gray-300 px-2 py-4"
                                                  aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         fill="currentColor" width="1.25em" height="1.25em" class="inline-block">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z">
                            </path>
                        </g>
                    </svg>
                </a> <a href="#" class="hover:text-gray-300 px-2 py-4" aria-label="View cart">
                    <svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em"
                        height="1.25em" class="inline-block">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M7 8V6a5 5 0 1 1 10 0v2h3a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3zm0 2H5v10h14V10h-2v2h-2v-2H9v2H7v-2zm2-2h6V6a3 3 0 0 0-6 0v2z">
                            </path>
                        </g>
                    </svg>
                    <span>(0)</span></a> <a href="#" class="hover:text-gray-300 px-2 py-4"
                                            aria-label="Account">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         fill="currentColor" width="1.25em" height="1.25em" class="inline-block">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z">
                            </path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <button class="hover:bg-gray-800 hover:text-white px-3 py-2 rounded text-gray-800 lg:hidden"
                data-name="nav-toggler"
                data-pg-ia='{"l":[{"name":"NabMenuToggler","trg":"click","a":{"l":[{"t":"^nav|[data-name=nav-menu]","l":[{"t":"set","p":0,"d":0,"l":{"class.remove":"hidden"}}]},{"t":"#gt# span:nth-of-type(1)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":45,"yPercent":300}}]},{"t":"#gt# span:nth-of-type(2)","l":[{"t":"tween","p":0,"d":0.2,"l":{"autoAlpha":0}}]},{"t":"#gt# span:nth-of-type(3)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":-45,"yPercent":-300}}]}]},"pdef":"true","trev":"true"}]}'>
            <span class="block border-b-2 border-current my-1 w-6"></span> <span
                class="block border-b-2 border-current my-1 w-6"></span> <span
                class="block border-b-2 border-current my-1 w-6"></span>
        </button>
        <div data-name="nav-menu"
             class="lg:flex lg:space-x-4 lg:space-y-0 lg:w-auto space-y-2 w-full hidden lg:items-center flex-grow">
            <div class="flex flex-col ml-auto lg:flex-row"><a href="#"
                                                              class="hover:text-gray-300 px-0 py-2 lg:px-4">Home</a> <a
                    href="#"
                    class="hover:text-gray-300 px-0 py-2 lg:px-4">About</a> <a href="#"
                                                                               class="hover:text-gray-300 px-0 py-2 lg:px-4">Collection</a>
                <a href="#"
                   class="hover:text-gray-300 px-0 py-2 lg:px-4">Shop</a><a href="#"
                                                                            class="hover:text-gray-300 px-0 py-2 lg:px-4">Blog</a>
            </div>
        </div>
    </nav>
</header>
<section class="relative text-gray-500">
    <div class="container mx-auto px-4 py-48">
        <div class="flex flex-wrap -mx-4">
            <div class="mx-auto px-4 text-center w-full lg:w-8/12">
                <p class="font-medium mb-2 text-blue-600 uppercase">The Latest</p>
                <h1 class="font-extrabold mb-4 text-6xl text-gray-800">The Natural Experience</h1>
                <p class="font-light mb-6 text-xl">Our ability to feel, act and communicate is indistinguishable
                    from magic.</p> <a href="#"
                                       class="bg-blue-600 font-light hover:bg-blue-700 inline-block px-5 py-2 rounded-sm text-white uppercase">Get
                    It Now</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray-50 py-20 text-gray-500">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap justify-center">
            <div class="p-4 w-full md:w-6/12 lg:w-4/12"><a href="#" class="block group pb-12 pt-36 px-6 relative">
                    <img
                        src="https://images.unsplash.com/photo-1467043237213-65f2da53396f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDMwNnx8d29tZW4lMjBjbG90aGVzfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080"
                        class="absolute h-full group-hover:opacity-75 left-0 object-left object-none top-0 w-full"
                        alt="..." width="1080" height="720"/>
                    <div class="relative">
                        <h2 class="font-semibold mb-4 text-gray-800 text-xl">Mens Summer Collection</h2>
                        <p class="group-hover:underline text-sm">View Collection</p>
                    </div>
                </a>
            </div>
            <div class="p-4 w-full md:w-6/12 lg:w-4/12"><a href="#" class="block group pb-12 pt-36 px-6 relative">
                    <img
                        src="https://images.unsplash.com/photo-1516762689617-e1cffcef479d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDI1M3x8d29tZW4lMjBjbG90aGVzfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080"
                        class="absolute h-full group-hover:opacity-75 left-0 object-left object-none top-0 w-full"
                        alt="..." width="1080" height="720"/>
                    <div class="relative">
                        <h2 class="font-semibold mb-4 text-gray-800 text-xl">Womens New Arrival</h2>
                        <p class="group-hover:underline text-sm">View Collection</p>
                    </div>
                </a>
            </div>
            <div class="p-4 w-full md:w-6/12 lg:w-4/12"><a href="#" class="block group pb-12 pt-36 px-6 relative">
                    <img
                        src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDEwMjR8fHdvbWVuJTIwY2xvdGhlc3xlbnwwfHx8&ixlib=rb-1.2.1&q=80&w=1080"
                        class="absolute h-full group-hover:opacity-75 left-0 object-left object-none top-0 w-full"
                        alt="..." width="1080" height="720"/>
                    <div class="relative">
                        <h2 class="font-semibold mb-4 text-gray-800 text-xl">Accessories Collection</h2>
                        <p class="group-hover:underline text-sm">View Collection</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="py-12 text-gray-400">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4  justify-center">
            <div class="p-4 w-full md:w-6/12 lg:w-4/12">
                <div class="bg-gray-50 border overflow-hidden p-4 rounded-md"><a href="#"
                                                                                 class="block hover:opacity-75 mb-4"><img
                            src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDUwNnx8Z3JheSUyMHByb2R1Y3R8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=300&h=240&fit=crop"
                            class="w-full" alt="..." width="300" height="240"/></a>
                    <div>
                        <div class="-mx-2 flex items-center justify-between py-1">
                            <div class="px-2 py-1">
                                <a href="#" class="block hover:text-red-600 mb-1 text-gray-700">
                                    <h3 class="font-medium text-xl">Product Name</h3>
                                </a>
                                <p class="text-sm">Short description</p>
                            </div>
                            <div class="px-2 py-1">
                                <p class="font-light text-2xl text-red-600">$129</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <a href="#"
                               class="bg-red-600 hover:bg-red-700 inline-block px-4 py-1 rounded-full text-center text-white">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 w-full md:w-6/12 lg:w-4/12">
                <div class="bg-gray-50 border overflow-hidden p-4 rounded-md"><a href="#"
                                                                                 class="block hover:opacity-75 mb-4"><img
                            src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE0fHxwcm9kdWN0fGVufDB8fHw&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=300&h=240&fit=crop"
                            class="w-full" alt="..." width="300" height="240"/></a>
                    <div>
                        <div class="-mx-2 flex items-center justify-between py-1">
                            <div class="px-2 py-1">
                                <a href="#" class="block hover:text-red-600 mb-1 text-gray-700">
                                    <h3 class="font-medium text-xl">Product Name</h3>
                                </a>
                                <p class="text-sm">Short description</p>
                            </div>
                            <div class="px-2 py-1">
                                <p class="font-light text-2xl text-red-600">$129</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <a href="#"
                               class="bg-red-600 hover:bg-red-700 inline-block px-4 py-1 rounded-full text-center text-white">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 w-full md:w-6/12 lg:w-4/12">
                <div class="bg-gray-50 border overflow-hidden p-4 rounded-md"><a href="#"
                                                                                 class="block hover:opacity-75 mb-4"><img
                            src="https://images.unsplash.com/photo-1461419912973-9964f1f54b24?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDQzfHxncmF5JTIwcHJvZHVjdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=300&h=240&fit=crop"
                            class="w-full" alt="..." width="300" height="240"/></a>
                    <div>
                        <div class="-mx-2 flex items-center justify-between py-1">
                            <div class="px-2 py-1">
                                <a href="#" class="block hover:text-red-600 mb-1 text-gray-700">
                                    <h3 class="font-medium text-xl">Product Name</h3>
                                </a>
                                <p class="text-sm">Short description</p>
                            </div>
                            <div class="px-2 py-1">
                                <p class="font-light text-2xl text-red-600">$129</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <a href="#"
                               class="bg-red-600 hover:bg-red-700 inline-block px-4 py-1 rounded-full text-center text-white">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray-50 py-12 text-center text-gray-500">
    <div class="container mx-auto px-4 relative">
        <div class="flex flex-wrap -mx-4 md:divide-x leading-relaxed md:divide-gray-300">
            <div class="p-4 w-full md:w-4/12">
                <div class="lg:px-8"> <span class="bg-gray-100 inline-block mb-6 p-8 rounded-full text-blue-600">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12">
                                <path
                                    d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"/>
                            </svg></span>
                    <h2 class="font-bold mb-2 text-gray-800 text-lg uppercase">Phone</h2>
                    <ul>
                        <li><a href="tel:+0 123-456-789" class="hover:text-blue-600">+0 123-456-789</a>
                        </li>
                        <li><a href="tel:+0 123-456-789" class="hover:text-blue-600">+0 123-456-789</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-4 w-full md:w-4/12">
                <div class="lg:px-8"> <span class="bg-gray-100 inline-block mb-6 p-8 rounded-full text-blue-600">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12">
                                <path
                                    d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z">
                                </path>
                            </svg></span>
                    <h2 class="font-bold mb-2 text-gray-800 text-lg uppercase">Address</h2>
                    <div>9056 Fairground Ave. <br> Dearborn, MI 48124 <br> United States of America
                    </div>
                </div>
            </div>
            <div class="p-4 w-full md:w-4/12">
                <div class="lg:px-8"> <span class="bg-gray-100 inline-block mb-6 p-8 rounded-full text-blue-600">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12">
                                <path
                                    d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z">
                                </path>
                            </svg></span>
                    <h2 class="font-bold mb-2 text-gray-800 text-lg uppercase">Email</h2>
                    <div class="mb-2">
                        <a href="mailto:info@company.com" class="hover:text-blue-600">info@company.com</a>
                    </div>
                    <div class="flex-wrap inline-flex py-1 space-x-1"><a href="#"
                                                                         class="hover:text-white p-2 text-white hover:bg-blue-600 bg-gray-700 rounded-full"
                                                                         aria-label="facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/>
                            </svg>
                        </a> <a href="#"
                                class="hover:text-white p-2 text-white hover:bg-blue-600 bg-gray-700 rounded-full"
                                aria-label="twitter">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/>
                            </svg>
                        </a> <a href="#"
                                class="hover:text-white p-2 text-white hover:bg-blue-600 bg-gray-700 rounded-full"
                                aria-label="instagram">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                <path
                                    d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mx-auto px-4 relative text-gray-700">
    <div class="py-4 text-sm">
        <div class="flex flex-wrap -mx-4 items-center">
            <div class="px-4 py-2 w-full md:flex-1">
                <p>&copy; 2002 - 2020. All Rights Reserved - Company Name</p>
            </div>
            <div class="px-4 py-2 w-full sm:w-auto"><a href="#" class="hover:text-blue-600">Privacy Policy</a> | <a
                    href="#" class="hover:text-blue-600">Terms of Use</a>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('front/lib/front.js')}}"></script>
</body>

</html>
