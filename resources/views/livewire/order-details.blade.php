<div class="container mx-4 p-10">
    <div class="flex w-full flex-col gap-4 bg-gray-100 p-4 lg:flex-row lg:p-8">
        <div class="mx-auto mb-4 h-full w-full rounded-md bg-white p-4 lg:mx-auto lg:w-8/12 lg:p-4">
            <h4 class="text-2xl text-gray-600">Order Details for Order #{{ $order->id }}</h4>
            <div class="my-6 overflow-hidden rounded-md bg-white shadow">
                <table class="w-full border-collapse text-left">
                    <thead class="border-b">

                        <tr>
                            <th class="bg-indigo-800 px-5 py-3 text-sm font-medium uppercase text-gray-100">
                                Product
                                name
                            </th>
                            <th class="bg-indigo-800 px-5 py-3 text-sm font-medium uppercase text-gray-100">Order
                                id
                            </th>
                            <th class="bg-indigo-800 px-5 py-3 text-sm font-medium uppercase text-gray-100">
                                Quantity
                            </th>
                            <th class="bg-indigo-800 px-5 py-3 text-sm font-medium uppercase text-gray-100">
                                Price
                            </th>
                            <th class="bg-indigo-800 px-5 py-3 text-sm font-medium uppercase text-gray-100">
                                Action
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($orderDetails as $detail)
                            <tr class="hover:bg-gray-200">
                                <td class="border-b px-6 py-4 text-lg text-gray-700">{{ $detail->product->name }}
                                </td>
                                <td class="border-b px-6 py-4 text-gray-500">{{ $detail->order->id }}</td>
                                <td class="border-b px-6 py-4 text-lg text-gray-700">{{ $detail->quantity }}</td>
                                <td class="border-b px-6 py-4 text-lg text-gray-700">Rp.
                                    {{ number_format($detail->price, 0, ',', '.') }}</td>
                                <td class="border-b px-6 py-4 text-lg text-gray-700">

                                    {{-- <a href="{{ route('payment.payNow', ['order' => $order->id]) }}"
                                            class="rounded-md bg-indigo-600 px-3 py-1 text-sm text-white hover:bg-indigo-500 focus:outline-none">
                                            Pay now
                                        </a> --}}

                                    <button onclick="showMidtransPopup()"
                                        class="rounded-md bg-indigo-600 px-3 py-1 text-sm text-white hover:bg-indigo-500 focus:outline-none">
                                        Pay now
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="ml-8 h-full w-full rounded-md bg-white p-4 shadow-sm md:ml-4 lg:ml-4 lg:w-4/12 lg:p-8">
            Sidebar
        </div>
    </div>
</div>

@push('js')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    <script>
        function showMidtransPopup() {
            var orderId = "{{ $order->id }}";
            var orderDetailsUrl = "{{ route('payment.payNow', ['order' => $order->id]) }}";

            fetch(orderDetailsUrl)
                .then(response => response.json())
                .then(data => {
                    var snapToken = data.snap_token;

                    var snapConfig = {};

                    snap.pay(snapToken, snapConfig, {
                        onSuccess: function(result) {
                            window.location.href = "{{ route('payment.finish') }}";
                        },
                        onPending: function(result) {
                            window.location.href = "{{ route('payment.pending') }}";
                        },
                        onError: function(result) {
                            window.location.href = "{{ route('payment.error') }}";
                        }
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Tindakan setelah kesalahan
                });
        }
    </script>
@endpush
