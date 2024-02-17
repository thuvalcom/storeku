<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderDetail;
use Livewire\Attributes\Layout;

class OrderDetails extends Component
{
    #[Layout('layouts.order')]

    public $order; // camelCase version of the route parameter
    public $orderDetails;

    public function render()
    {
        $products = Product::orderBy('id', 'Desc')->paginate(3);
        return view('livewire.order-details', [
            'orderDetails' => $this->getOrderDetails(),
        ], compact('products'));
    }
    public function getOrderDetails()
    {
        if ($this->order instanceof Order) {
            return OrderDetail::where('order_id', $this->order->id)->get();
        }

        return collect();
    }

    public function mount($order)
    {
        // Mendapatkan data order berdasarkan ID atau cara lain sesuai logika Anda
        $this->order = Order::find($order);

        // Mendapatkan data order details berdasarkan order yang dipilih
        $this->orderDetails = $this->order->orderDetails;
    }
}
