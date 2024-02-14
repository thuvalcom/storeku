<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;


class BackendHeader extends Component
{

    public function render()
    {
        return view('livewire.backend-header');
    }

    // public function sendNotification()
    // {
    //     $users = User::all();
    //     Notification::send($users, new DashboardNotification());
    // }
}
