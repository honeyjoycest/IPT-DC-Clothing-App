<?php

namespace App\Http\Livewire\Cloth;

use Livewire\Component;
use App\Models\Clothing;


class Create extends Component
{
    public $name, $color, $description;

    public function addClothing(){
        $this->validate([
            'name'              =>            ['required' ,'string', 'max:255'],
            'color'           =>            ['required' ,'string', 'max:255'],
            'description'           =>            ['required' ,'string', 'max:255'],
        ]);

        Clothing::create([
            'name'                =>        $this->name,
            'color'             =>        $this->color,
            'description'             =>        $this->description,
        ]);

        return redirect('/index')->with('message', 'Added Successfully!!');
    }

    public function render()
    {
        return view('livewire.cloths.create');
    }

}
