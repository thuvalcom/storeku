<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Notifications\Notifiable;

class Dashboard extends Component
{
    use Notifiable;
    #[Layout('layouts.backend')]
    public function render()
    {
        $users = User::all();
        $usercount = User::count();
        $orders = Order::count();
        $products = Product::count();
        return view('livewire.dashboard', compact('users', 'orders', 'products', 'usercount'));
    }
}
