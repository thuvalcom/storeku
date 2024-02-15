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
        <!-- Isi sidebar di sini -->
        Sidebar
    </div>

</main>
@push('script')
@endpush
