@section('title')
    <title>{{ $product->name }}</title>
@endsection

<main class="flex w-full flex-col gap-4 bg-gray-100 p-4 lg:flex-row lg:p-8">

    <!-- Kolom untuk menampilkan single product -->
    <div class="mx-auto mb-4 h-full w-full rounded-md bg-white p-4 shadow-sm lg:mx-auto lg:w-8/12 lg:p-4">
        <div class="mb-4 p-2">
            <img src="{{ url('storage/' . $product->image) }}" alt="" class="h-auto max-w-lg rounded-lg">
        </div>
        <div class="p-4">
            <h1 class="mb-2 text-3xl font-bold tracking-tighter">{{ $product->name }}</h1>
            <p class="text-gray-700">{!! nl2br(e($product->description)) !!}</p>
        </div>
        <div class="mt-2 items-center p-4">

            @livewire('order-form', ['productId' => $product->id])

        </div>

    </div>

    <!-- Kolom untuk area sidebar -->
    <div class="ml-8 h-full w-full rounded-md bg-white p-4 shadow-sm md:ml-4 lg:ml-4 lg:w-4/12 lg:p-8">
        <div class="bg-white p-4">
            <h2 class="mb-2 text-3xl font-bold">Product</h2>
        </div>
        <ul class="list-none">
            @foreach ($products as $product)
                <li class="flex space-x-2 py-1">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="h-16 w-16 rounded object-cover">
                    <div class="flex flex-col justify-center p-4">
                        <a wire:navigate href="{{ route('shop', $product->slug) }}"
                            class="font-semibold text-gray-700 hover:text-blue-500">{{ $product->name }}</a> <span
                            class="text-sm text-gray-500">{{ $product->created_at }}</span>
                    </div>
                </li>
            @endforeach

        </ul>
        {{ $products->links() }}
    </div>

</main>
@push('script')
@endpush
