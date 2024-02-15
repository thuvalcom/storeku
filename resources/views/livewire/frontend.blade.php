@section('title')
    <title>@setting('metaTitle')</title>
@endsection
@push('meta')
    <meta name="description" content="@setting('metaDescription')">
@endpush

<section class="py-12 text-gray-400" id="Product">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap justify-center">
            @foreach ($products as $product)
                <div class="w-full p-4 md:w-6/12 lg:w-4/12">
                    <div class="overflow-hidden rounded-md border bg-gray-50 p-4"> <a wire:navigate
                            href="{{ route('shop', $product->slug) }}" class="mb-4 block hover:opacity-75"><img
                                src="{{ asset('storage/' . $product->image) }}" class="w-full"
                                alt="{{ $product->name }}" /></a>
                        <div>
                            <div class="-mx-2 flex items-center justify-between py-1">
                                <div class="px-2 py-1">
                                    <a wire:navigate href="{{ route('shop', $product->slug) }}"
                                        class="mb-1 block text-gray-700 hover:text-red-600">
                                        <h3 class="text-xl font-medium">{{ $product->name }}</h3>
                                    </a>

                                </div>
                                <div class="px-2 py-1">
                                    <p class="text-2xl font-light text-red-600">{{ $product->price }}</p>
                                </div>
                            </div>
                            <div class="py-2">
                                @livewire('order-form', ['productId' => $product->id])
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container mx-auto px-4">
            <div class="-mx-4 flex flex-wrap justify-center">
                @foreach ($products as $product)
                    <div class="w-full p-4 md:w-6/12 lg:w-4/12">
                        <div class="relative overflow-hidden rounded-md border bg-gray-50">
                            <div
                                class="pointer-events-none absolute left-0 top-0 z-10 flex w-full flex-row-reverse justify-between p-4">
                                <span class="rounded-full bg-red-500 px-2 py-1 text-xs text-white">New</span>
                            </div><a href="{{ route('shop', $product->slug) }}"
                                class="block border-b hover:opacity-75"><img
                                    src="{{ asset('storage/' . $product->image) }}"
                                    class="w-full group-hover:opacity-50" alt="{{ $product->name }}" width="300"
                                    height="240" /></a>
                            <div class="px-6 py-4">
                                <div class="-mx-2 flex items-center justify-between py-1">
                                    <div class="px-2 py-1"><a href="#"
                                            class="mb-1 block text-gray-700 hover:text-blue-500">
                                            <h3 class="text-xl font-medium">{{ $product->name }}</h3>
                                        </a>
                                        <p class="text-sm">{{ str($product->description)->words(4) }}</p>
                                    </div>
                                    <div class="px-2 py-1">
                                        <p class="text-2xl font-light text-gray-400">{{ $product->price }}</p>
                                    </div>
                                </div>
                                <div class="py-2">@livewire('order-form', ['productId' => $product->id])
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex items-center justify-center">
            {{ $products->links() }}
        </div>
    </div>

</section>
