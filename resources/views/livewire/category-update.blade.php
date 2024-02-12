<div>
    <main class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-200">
        <div class="mt-4">
            <div class="ml-3 inline-flex w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md">
                <form wire:submit.prevent="update">
                    <div class="flex items-center justify-between border-b px-5 py-3 text-gray-700">
                        <h3 class="text-sm">Add Category</h3>
                        <button type="button">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="border-b bg-gray-200 px-5 py-6 text-gray-700">
                        <label class="text-xs">Name</label>

                        <div class="relative mt-2 rounded-md shadow-sm">

                            <input type="text"
                                class="form-input w-full appearance-none rounded-md px-12 py-2 focus:border-indigo-600"
                                wire:model="name">
                        </div>
                    </div>
                    <div class="border-b bg-gray-200 px-5 py-6 text-gray-700">
                        <label class="text-xs">Description</label>

                        <div class="relative mt-2 rounded-md shadow-sm">

                            <input type="text"
                                class="form-input w-full appearance-none rounded-md px-12 py-2 focus:border-indigo-600"
                                wire:model="description">
                        </div>
                    </div>
                    <div class="border-b bg-gray-200 px-5 py-6 text-gray-700">
                        <label class="text-xs">Upload Image</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="file" name="image" id="image"
                                class="form-input w-full appearance-none rounded-md px-12 py-2 focus:border-indigo-600"
                                wire:model="image">
                        </div>
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
    </main>
</div>
