<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Order;
use App\Models\Payment;
use Midtrans\Notification;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payNow($orderId)
    {
        // Ambil informasi pesanan berdasarkan ID atau cara lainnya
        $order = Order::find($orderId);

        // Konfigurasi Midtrans dengan menggunakan kunci dari .env
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = !config('services.midtrans.isSandbox');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $productDetails = [];
        foreach ($order->orderDetails as $orderDetail) {
            $productDetails[] = [
                'id' => $orderDetail->product->id,
                'price' => $orderDetail->price,
                'quantity' => $orderDetail->quantity,
                'name' => $orderDetail->product->name,
            ];
        }

        $transactionData = [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
                'address' => auth()->user()->address,
            ],
            'item_details' => $productDetails, // Tambahkan informasi produk
        ];


        // Membuat Snap URL untuk pembayaran
        // $snapUrl = Snap::createTransaction($transactionData)->redirect_url;

        $snapToken = Snap::getSnapToken($transactionData);
        $payment = new \App\Models\Payment();
        $payment->order_id = $order->id;
        $payment->amount = $order->total_price;
        $payment->status = $order->status;
        $payment->save();
        return response()->json(['snap_token' => $snapToken]);
        // return redirect($snapUrl);
    }
    public function handleNotification(Request $request)
    {
        // Mengatur konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = !config('services.midtrans.isSandbox');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Menerima pemberitahuan dari Midtrans
        $notification = new Notification();

        // Verifikasi signature secara manual
        $signatureKey = $request->input('signature_key');
        $orderId = $request->input('order_id');
        $statusCode = $request->input('status_code');
        $grossAmount = $request->input('gross_amount');

        $mySignatureKey = hash('sha512', $orderId . $statusCode . $grossAmount . Config::$serverKey);

        if ($signatureKey === $mySignatureKey) {
            // Proses notifikasi sesuai kebutuhan Anda
            $status = $request->input('transaction_status');

            // Misalnya, update status pembayaran pada order
            $order = Order::findOrFail($orderId);
            $order->status = $status;
            $order->save();

            $payment = Payment::where('order_id', $orderId)->first();

            if ($payment) {
                // Misalnya, mengatur status pembayaran pada tabel payments
                $payment->status = $status;
                $payment->save();
            }

            // Catatan: Anda mungkin perlu menangani lebih banyak informasi notifikasi sesuai kebutuhan proyek Anda

            return response('OK', 200);
        } else {
            // Jika verifikasi gagal, tanggapi dengan kode status yang sesuai
            return response('Signature verification failed', 403);
        }
    }


    public function handleFinish(Request $request)
    {
        return view('payment.finish');
    }
    public function handlePending(Request $request)
    {
        return view('payment.pending');
    }
    public function handleError(Request $request)
    {
        return view('payment.error');
    }
    public function handleExpire(Request $request)
    {
        return view('payment.expire');
    }
}
