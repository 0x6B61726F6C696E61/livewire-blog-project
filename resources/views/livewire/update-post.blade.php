<div class='container-fluid'>
    <form wire:submit.prevent="update" class='form-group' id='update_post'>
        <input type="text" wire:model.lazy='new_title' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Nowy tytuł...'>
        @error('new_title') <span class="error">{{ $message }}</span> @enderror
        <br>
        <textarea rows="25" cols="50" placeholder="Nowa treść..." class='form-control shadow-lg' form='update_post' wire:model.lazy='new_body'></textarea>
        @error('new_body') <span class="error">{{ $message }}</span> @enderror
        <br>
        <br>

    </form>
    <button type="submit" class='btn btn-success' form='update_post'>Edytuj post</button>
    <button class='btn btn-secondary' wire:click='go_back'>Strona główna</button>

</div>
