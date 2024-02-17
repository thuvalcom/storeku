<div class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-200">
    <main class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-200">
        <div class="container mx-auto px-6 py-8">

            <h3 class="text-3xl font-semibold text-gray-700">Update Category</h3>

            <div class="mt-4">
                <h4 class="text-gray-600">Update Category</h4>
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
                    <div class="w-full max-w-sm overflow-hidden rounded-md border bg-white shadow-md">

                        <form wire:submit.prevent="update">

                            <div class="border-b bg-gray-200 px-5 py-6 text-gray-700">
                                <label class="text-xs">Name</label>

                                <div class="relative mt-2 rounded-md shadow-sm">

                                    <input type="text"
                                        class="form-input w-full appearance-none rounded-md px-12 py-2 focus:border-indigo-600"
                                        wire:model="name">
                                </div>
                                @error('name')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="border-b bg-gray-200 px-5 py-6 text-gray-700">
                                <label class="text-xs">slug</label>

                                <div class="relative mt-2 rounded-md shadow-sm">

                                    <input type="text"
                                        class="form-input w-full appearance-none rounded-md px-12 py-2 focus:border-indigo-600"
                                        wire:model="slug">
                                </div>
                                @error('slug')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="border-b bg-gray-200 px-5 py-6 text-gray-700">
                                <label class="text-xs">Status</label>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <select
                                        class="form-select w-full appearance-none rounded-md px-4 py-2 focus:border-indigo-600"
                                        wire:model="status">
                                        <option value=""></option>
                                        <option value="published">Published</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                                @error('status')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="border-b bg-gray-200 px-5 py-6 text-gray-700">
                                <label class="text-xs">Upload Image</label>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <input type="file" name="image" id="image"
                                        class="form-input w-full appearance-none rounded-md px-12 py-2 focus:border-indigo-600"
                                        wire:model="image">
                                </div>
                                @error('image')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between px-5 py-3">
                                <a wire:navigate href="{{ route('dashboard') }}" type="button"
                                    class="rounded-md bg-gray-200 px-3 py-1 text-sm text-gray-700 hover:bg-gray-300 focus:outline-none">
                                    Cancel
                                </a>
                                <button type="submit"
                                    class="rounded-md bg-indigo-600 px-3 py-1 text-sm text-white hover:bg-indigo-500 focus:outline-none">
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
