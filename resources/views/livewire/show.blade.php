<div>

    <div class='rounded rounded-3 container-fluid shadow shadow-lg w-75 mx-auto mt-5 p-3'>
    <h3>{{ $post->title }}</h3>
    
        <br>
    
        {{ $post->body }}
    <div>

        <br>




    <button class='btn btn-success' wire:click="update({{$post['id']}})">Edytuj post</button>
    <button class='btn btn-danger ms-1' wire:click="delete({{$post['id']}})">Usuń post</button>
    <button class='btn btn-secondary ms-1' wire:click="go_back">Strona główna</button>
</div>
