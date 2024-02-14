<div class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-200">
    @if ($updateMode)
        @include('livewire.product-update')
    @else
        <main class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <a wire:navigate href="{{ route('products.create') }}"
                    class="ml-3 rounded-md bg-teal-600 px-6 py-3 font-medium tracking-wide text-white hover:bg-teal-500">Add
                    new Product</a>
                <div class="mt-4">
                    @if (session('success'))
                        <div class="ml-3 inline-flex w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md">

                            <div class="flex w-12 items-center justify-center bg-green-500">
                                <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                                </svg>
                            </div>

                            <div class="-mx-3 px-4 py-2">
                                <div class="mx-3">
                                    <span class="font-semibold text-green-500">Success</span>
                                    <p class="text-sm text-gray-600">{{ session('success') }}</p>
                                </div>
                            </div>

                        </div>
                    @endif
                    @if (session('error'))
                        <div class="ml-3 inline-flex w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md">
                            <div class="flex w-12 items-center justify-center bg-red-500">
                                <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                                </svg>
                            </div>

                            <div class="-mx-3 px-4 py-2">
                                <div class="mx-3">
                                    <span class="font-semibold text-red-500">Error</span>
                                    <p class="text-sm text-gray-600">{{ session('error') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- table --}}
                    <div class="mt-8">

                        <h4 class="text-gray-600">All Products</h4>
                        {{-- form search --}}
                        <div class="relative mx-4 lg:mx-0">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>

                            <input class="form-input w-32 rounded-md pl-10 pr-4 focus:border-indigo-600 sm:w-64"
                                type="text" placeholder="Search" wire:model.live="keyword">
                        </div>
                        {{-- form search --}}

                        <div class="mt-6">
                            <div class="mt-4 inline-block min-w-full overflow-hidden rounded-lg shadow">

                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Id
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Name
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Category
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Price
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr wire:key="{{ $product->id }}">
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <div class="flex items-center">
                                                        <div class="ml-3">
                                                            <p class="whitespace-no-wrap text-gray-900">
                                                                {{ $product->id }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <p class="whitespace-no-wrap text-gray-900">{{ $product->name }}</p>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <p class="whitespace-no-wrap text-gray-900">
                                                        {{ $product->category->name }}
                                                    </p>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <p class="whitespace-no-wrap text-gray-900">{{ $product->price }}
                                                    </p>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <button wire:click="edit({{ $product->id }})"
                                                        class="ml-3 rounded-md bg-blue-600 px-6 py-3 font-normal tracking-wide text-white hover:bg-blue-500">
                                                        Edit
                                                    </button>
                                                    <button wire:click="confirmDelete({{ $product->id }})"
                                                        class="ml-3 rounded-md bg-red-600 px-6 py-3 font-normal tracking-wide text-white hover:bg-red-500">
                                                        Delete
                                                    </button>

                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div
                                    class="xs:flex-row xs:justify-between flex flex-col items-center border-t bg-white px-5 py-5">

                                    <div class="xs:mt-0 mt-2 inline-flex">
                                        {{ $products->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- table --}}
                </div>
            </div>
        </main>
    @endif
    <!-- Modal -->
    @if ($confirmingDelete)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-30">
            <div class="rounded bg-indigo-800 p-6 text-white shadow-md">
                <p class="text-lg">Are you sure, you want to delete {{ $productToDelete->name }}?</p>
                <div class="mt-4 flex justify-end space-x-4">
                    <button wire:click="destroy({{ $productToDelete->id }})"
                        class="rounded bg-red-500 px-4 py-2 font-bold text-white hover:bg-red-700">
                        Yes
                    </button>
                    <button wire:click="$set('confirmingDelete', false)"
                        class="rounded bg-gray-400 px-4 py-2 font-bold text-white hover:bg-gray-600">
                        No
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
