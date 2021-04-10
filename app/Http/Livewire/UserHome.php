<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserHome extends Component
{
    public $count = 1;

    public function carregar()
    {
        $this->count += 2;

    }

    public function render()
    {
        $ola = User::take($this->count)->get();
        return view('livewire.user-home',[
            'ola' => $ola,
        ]);
    }
}
