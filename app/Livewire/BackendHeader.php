<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class BackendHeader extends Component
{

    public function render()
    {
        return view('livewire.backend-header');
    }
    public function logout()
    {
        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();

        // Redirect ke halaman login atau halaman lain yang diinginkan
        return redirect('/login');
    }
}
