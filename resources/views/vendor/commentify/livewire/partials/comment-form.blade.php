<form class="mb-6" wire:submit="{{ $method }}">
    @if (session()->has('message'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <div class="mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <span class="font-medium">Success!</span> {{ session('message') }}
            </div>
        </div>
    @endif
    @csrf
    <div class="mb-4 rounded-lg rounded-t-lg border border-gray-200 bg-gray-200 px-4 py-2">
        <label for="{{ $inputId }}" class="sr-only">{{ $inputLabel }}</label>
        <textarea id="{{ $inputId }}" rows="6"
            class="@error($state . '.body')
                              border-red-500 @enderror form-input mt-2 w-full rounded-md focus:border-indigo-600"
            placeholder="Write a comment..." wire:model.live="{{ $state }}.body" oninput="detectAtSymbol()"></textarea>
        @if (!empty($users) && $users->count() > 0)
            @include('commentify::livewire.partials.dropdowns.users')
        @endif
        @error($state . '.body')
            <p class="mt-2 text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror
    </div>

    <button wire:loading.attr="disabled" type="submit"
        class="inline-block cursor-pointer rounded-full bg-red-600 px-4 py-1 text-center text-white hover:bg-red-700">
        <div wire:loading wire:target="{{ $method }}">
            @include('commentify::livewire.partials.loader')
        </div>
        {{ $button }}
    </button>

</form>
