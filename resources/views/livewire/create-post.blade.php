<div>
    <form wire:submit.prevent="submit" class='form-group' id='add_post'>
        <input type="text" wire:model.lazy='post_title' class='form-control shadow rounded w-50 mt-3 input-lg' placeholder='Tytuł posta...'>
        @error('post_title') <span class="error">{{ $message }}</span> @enderror
        <br>
        <textarea rows="25" cols="50" name="comment" placeholder="Treść posta..." class='form-control shadow-lg' form='add_post' wire:model.lazy='post_body'></textarea>
        @error('post_body') <span class="error">{{ $message }}</span> @enderror
        <br>
        <br>
        <button type="submit" class='btn btn-success'>Dodaj post</button>
    </form>
</div>
