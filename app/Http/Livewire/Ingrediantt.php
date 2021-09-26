<?php

namespace App\Http\Livewire;

use App\Ingredient;
use Livewire\Component;

class Ingrediantt extends Component
{
    public $ingrediants;

    public function mount($post)
    {
        $this->ingrediants = $post->ingredients;

    }
    public function destroy($id)
    {
        dd($id);
        if ($id){

            Ingredient::where('id',$id)->delete();
        }
    }
    public function render()
    {
        return view('livewire.ingrediantt');
    }
}
