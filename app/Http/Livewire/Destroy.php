<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Destroy extends Component
{
    public $post;

    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.destroy');
    }

    public function no(){
        return redirect('/');
    }

    public function yes(){
        $isDeleted = $this->post->delete();

        if ($isDeleted) {
            return redirect('/');
        } else {
            throw new Exception('Ups. Coś poszło nie tak...');
        }
    }
}
