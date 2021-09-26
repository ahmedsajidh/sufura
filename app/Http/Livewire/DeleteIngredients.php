<?php

namespace App\Http\Livewire;

use App\Category;
use App\Ingredient;
use App\Post;
use App\Tag;
use Livewire\Component;

class DeleteIngredients extends Component
{
    public $post;
    public $categories;
    public $tags;



    public function render()
    {

        return view('livewire.delete-ingredients');
    }
}
