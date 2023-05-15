<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Str;

class MainPage extends Component
{
    use WithPagination;

    public $input_value;
    protected $paginationTheme = 'bootstrap';
    public $all_posts_body;

    public function search(){
        $this->resetPage();
    }

    public function add_post(){
        return redirect('/dodaj-post');
    }

    public function render()
    {
        return view('livewire.main-page', ['post_list' => Post::where('title','like', '%'.$this->input_value.'%')->latest()->paginate(10)]);
    }


}
