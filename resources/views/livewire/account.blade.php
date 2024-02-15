<x-slot name="header">

</x-slot>

<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <div class="mx-auto mt-8 max-w-2xl rounded bg-white p-4 shadow-md">
                    <h2 class="mb-4 text-2xl font-bold">User Information</h2>
                    <p class="mb-2"><span class="font-semibold">Name:</span> {{ $user->name }}</p>
                    <p class="mb-4"><span class="font-semibold">Email:</span> {{ $user->email }}</p>

                    <h2 class="mb-4 text-2xl font-bold">Orders</h2>
                    @foreach ($user->orders as $order)
                        <div class="mb-4 rounded border border-gray-300 p-4">
                            <p class="font-semibold">Order ID: {{ $order->id }}</p>
                            <p class="mb-2"><span class="font-semibold">Status:</span>
                                @if ($order->status == 'settlement')
                                    <span class="text-green-600">{{ $order->status }}</span>
                                @elseif ($order->status == 'pending')
                                    <span class="text-red-600">{{ $order->status }}</span>
                                @else
                                    {{ $order->status }}
                                @endif
                            </p>
                            {{-- Tambahkan informasi pesanan lainnya sesuai kebutuhan --}}

                            <h3 class="mb-2 mt-2 text-xl font-bold">Ordered Products</h3>
                            @foreach ($order->orderDetails as $orderDetail)
                                <div class="mb-2 flex items-center">
                                    @if ($orderDetail->product->image)
                                        <img src="{{ asset('storage/' . $orderDetail->product->image) }}"
                                            alt="{{ $orderDetail->product->name }}"
                                            class="mr-2 h-12 w-12 rounded object-cover">
                                    @else
                                        <span class="mr-2 h-12 w-12 rounded bg-gray-300"></span>
                                    @endif
                                    <div class="p-8">
                                        <p>{{ $orderDetail->product->name }} (Quantity: {{ $orderDetail->quantity }})
                                        </p>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
