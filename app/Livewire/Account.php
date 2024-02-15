<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Account extends Component
{

    public $user;
    public function render()
    {
        return view('livewire.account', [
            'user' => $this->user,
        ]);
    }

    public function mount()
    {
        // Mengambil data pengguna beserta pesanannya
        $this->user = User::with('orders')->find(auth()->user()->id);
    }
}
