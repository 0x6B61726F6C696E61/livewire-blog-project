<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class UpdatePost extends Component
{
    public $new_title;
    public $new_body;
    public $post;

    protected $rules = [
        'new_title' => 'required',
        'new_body' => 'required'
    ];

    public function mount($id)
    {
        $this->post = Post::find($id);
        $this->new_title = $this->post->title;
        $this->new_body = $this->post->body;
    }


    public function update(){
        $this->validate();
        $this->post->title=$this->new_title;
        $this->post->body=$this->new_body;
        $this->post->save();
        session()->flash('message', 'Edytowano post!');
        return redirect('/');
    }


    public function render()
    {
        return view('livewire.update-post');
    }

    public function go_back(){
        return redirect('/');
    }
}
