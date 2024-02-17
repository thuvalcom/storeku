@section('title')
    <title>{{ $category->name }}</title>
@endsection
@push('meta')
@endpush

<section class="py-12 text-gray-400" id="Product">
    <div class="flex items-center justify-center">
        <h1>Products in {{ $category->name }}</h1>
    </div>
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
                                    <p class="text-2xl font-light text-red-600">Rp
                                        {{ number_format($product->price, 0, ',', '.') }}</p>
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

    </div>

</section>
