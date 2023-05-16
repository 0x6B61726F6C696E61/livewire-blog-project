<div>
    <div class='mt-3'>
        @if (session()->has('message'))
            <div class="alert alert-warning">
                <button wire:click="test" class='btn btn-sm'>X</button>
                {{ session('message') }}
            </div>
        @endif
    </div>


    <div class='row mt-3'>
        <form wire:submit.prevent='search'>
        <div class="col">
            <input class="rounded form-control w-50 float-start" type='text' wire:model.lazy='input_value' placeholder="Szukaj postu..." >
        </div>
        <div class="col">
            <button type='submit' class='btn btn-success float-start w-auto ms-1'>Szukaj</button>
        </div>
        </form>
    </div>
        
        <br>
        <br>
    
        <div>
    
        <table class="table table-striped table-bordered table-hover">
    
        @foreach ($post_list as $post)
        <tr>
        <td>
        <a href="/{{$post['id']}}">{{$post->title}}</a>
        </td>

        <td>
            {{Str::limit($post->body, 100)}}
        </td>

        <td>
            {{$post->created_at}}
        </td>

        </tr>
        @endforeach
    
        </table>
        </div>
    
    
        <br>
    
        <div class='row'>
            <div class='col'>
        {{ $post_list->links() }}
            </div>
            <div class='col'>
        <button class='btn float-end btn-success' wire:click='add_post'>Dodaj post</button>
            </div>    
    </div>

</div>
