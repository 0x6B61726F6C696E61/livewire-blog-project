<div>
    <form wire:submit.prevent="update" class='form-group' id='update_post'>
        <input type="text" wire:model.lazy='new_title' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Nowy tytuł...'>
        <br>
        <textarea rows="25" cols="50" placeholder="Nowa treść..." class='form-control shadow-lg' form='update_post' wire:model.lazy='new_body'></textarea>
        <br>
        <br>
        <button type="submit" class='btn btn-success'>Edytuj post</button>
    </form>
</div>
