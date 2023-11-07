<div>
    <x-flash-message/>
    <div class="card">
        <div class="card-body">
            <div class="card-title fw-bold">New Post</div>
            <form wire:submit="save" action="">
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" wire:model="title" id="title" class="form-control">
                    @error('title')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-label">Body</label>
                    <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
                    @error('body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
