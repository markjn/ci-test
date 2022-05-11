<div>
    <input type="hidden" wire:model="selected_id">
    <div class="form-group">
        <label>Name</label>
        <input type="text" wire:model="name" class=""  placeholder="Name">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="" placeholder="description" wire:model="description"></textarea>
    </div>
    <button  class="border-blue-900 border-4" wire:click="update()" class="btn btn-primary">Update</button>
</div> 
