<?php

namespace App\Http\Livewire\Cloth;

use Livewire\Component;
use App\Models\Clothing;
class Edit extends Component
{
    public $clothId;
    public $name, $color, $description;

    public function mount(){
        $this->name = $this->clothing->name;
        $this->color = $this->clothing->color;
        $this->description = $this->clothing->description;

    }

    public function editClothing(){
        $this->validate([
            'name'              =>            ['required' ,'string', 'max:255'],
            'color'           =>            ['required' ,'string', 'max:255'],
            'description'           =>            ['required' ,'string', 'max:255'],
        ]);
        $this->clothing->update([
            'name'        =>        $this->name,
            'color'        =>        $this->color,
            'description'        =>        $this->description,
        ]);
        return redirect('/index')->with('message' , 'Updated SucessFully');
    }


    public function getClothingProperty(){
        return Clothing::find($this->clothId);
    }


    public function render()
    {
        return view('livewire.cloths.edit');
    }
    public function back(){
        return redirect('/index');
    }
}
