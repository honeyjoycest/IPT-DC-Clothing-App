<?php

namespace App\Http\Livewire\Cloth;

use Livewire\Component;
use App\Models\Clothing;

class Index extends Component
{
    public function loadClothing(){
        $clothing = Clothing::orderBy('name')->get();

        return compact('clothing');
    }
    public function render()
    {
        return view('livewire.cloths.index', $this->loadClothing());
    }
}
