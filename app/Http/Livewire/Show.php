<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Show extends Component
{
    public $post;

    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.show');
    }

    public function delete($id){
        return redirect("/$id/usun");
    }

    public function update($id){
        return redirect("/$id/edytuj");
    }
}
