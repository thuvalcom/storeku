<div class="z-10 p-6 text-end sm:fixed sm:right-0 sm:top-0">
    @auth
        <a href="{{ url('/account') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
            wire:navigate>Account</a>
    @else
        <a href="{{ route('login') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
            wire:navigate>Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ms-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
                wire:navigate>Register</a>
        @endif
    @endauth
</div>
