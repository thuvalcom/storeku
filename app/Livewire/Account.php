<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Account extends Component
{
    use WithPagination;
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
