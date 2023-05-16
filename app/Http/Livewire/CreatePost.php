<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class CreatePost extends Component
{
    public $post_title;
    public $post_body;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function submit(){
        $new_category = Post::create([
            'title' => $this->post_title,
            'body' => $this->post_body]);

    session()->flash('message', 'Dodano post!');
    return redirect()->to('/');
}
}
