<?php

namespace App\Http\Livewire\cloth;

use Livewire\Component;
use App\Models\Clothing;

class Delete extends Component
{
    public $clothId;

    public function getClothingProperty(){
        return Clothing::select('id','name', 'color', 'description')
        ->find($this->clothId);

    }
    public function deleteClothing(){
        $this->clothing->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function render()
    {
        return view('livewire.cloths.delete');
    }
    public function back(){
        return redirect('/index');
    }
}

