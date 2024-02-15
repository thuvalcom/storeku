<?php

namespace App\Livewire;

use Auth;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderDetail;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\URL;

class OrderForm extends Component
{


    #[Layout('layouts.frontend')]
    public $order;
    public $productId;
    public $selectedProductId;
    public function render()
    {
        $products = Product::all();
        return view('livewire.order-form', compact('products'));
    }

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->selectedProductId = $productId;
    }

    public function getOrderProducts()
    {
        $selectedProduct = Product::find($this->selectedProductId);

        return $selectedProduct ? [$this->formatProduct($selectedProduct)] : [];
    }
    public function submitOrder()
    {
        if (auth()->check()) {
            $orderProducts = $this->getOrderProducts();
            $product = Product::find($this->productId);


            if (!$product) {
                return redirect()->back()->with('error', 'Selected product not found.');
            }

            $totalPrice = $this->calculateTotalPrice([$product]);


            $order = Order::create([
                'user_id' => auth()->user()->id,
                'total_price' => $totalPrice,
                'status' => 'pending',
            ]);


            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => 1, // Misalnya, setiap produk memiliki quantity 1
                'price' => $totalPrice,
            ]);
            return $this->redirect(route('order.details', $order->id));
        } else {
            session(['product_redirect' => URL::previous()]);
            return redirect()->route('login');
        }
    }



    protected function formatProduct($product)
    {
        return [
            'id' => $product->id,
            'price' => $product->price,
        ];
    }

    public function calculateTotalPrice($products)
    {
        return collect($products)->sum('price');
    }
}
