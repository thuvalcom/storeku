<div>
    <main class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-3xl font-semibold text-gray-700">Add Product</h3>
            <div class="mt-8">
                <h4 class="text-gray-600">Form Add Product</h4>
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

                </div>

                <div class="mt-4">
                    <div class="rounded-md bg-white p-6 shadow-md">
                        <h2 class="text-lg font-semibold capitalize text-gray-700">Add Product</h2>

                        <form wire:submit="save">
                            <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2">
                                <div>
                                    <label class="text-gray-700" for="name">Name</label>
                                    <input class="form-input mt-2 w-full rounded-md focus:border-indigo-600"
                                        type="text" id="name" wire:model="name">
                                </div>
                                @error('name')
                                    <em>{{ $message }}</em>
                                @enderror
                                <div>
                                    <label class="text-gray-700" for="name">Slug</label>
                                    <input class="form-input mt-2 w-full rounded-md focus:border-indigo-600"
                                        type="text" id="name" wire:model="slug">
                                </div>
                                @error('slug')
                                    <em>{{ $message }}</em>
                                @enderror

                                <div>
                                    <label class="text-gray-700" for="description">Description</label>
                                    <textarea class="form-input mt-2 w-full rounded-md focus:border-indigo-600" id="description" wire:model="description"></textarea>
                                </div>
                                @error('description')
                                    <em>{{ $message }}</em>
                                @enderror

                                <div>
                                    <label class="text-gray-700" for="category_id">Category</label>
                                    <select class="form-input mt-2 w-full rounded-md focus:border-indigo-600"
                                        id="category_id" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                    <em>{{ $message }}</em>
                                @enderror

                                <div>
                                    <label class="text-gray-700" for="price">Price</label>
                                    <input class="form-input mt-2 w-full rounded-md focus:border-indigo-600"
                                        type="text" id="price" wire:model="price">
                                </div>
                                @error('price')
                                    <em>{{ $message }}</em>
                                @enderror

                                <div>
                                    <label class="text-gray-700" for="image">Image</label>
                                    <input class="form-input mt-2 w-full rounded-md focus:border-indigo-600"
                                        type="file" id="image" wire:model="image">
                                </div>
                                @error('image')
                                    <em>{{ $message }}</em>
                                @enderror

                                <div>
                                    <label class="text-gray-700" for="user_id">User</label>
                                    <select class="form-input mt-2 w-full rounded-md focus:border-indigo-600"
                                        id="user_id" wire:model="user_id">
                                        <option value="">Select a User</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('user_id')
                                <em>{{ $message }}</em>
                            @enderror

                            <div class="mt-4 flex justify-end">
                                <button
                                    class="rounded-md bg-gray-800 px-4 py-2 text-gray-200 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
