<div>
    <x-flash-message/>
    <form wire:submit="save" action="">
        <div class="mb-2">
            <textarea wire:model="body" class="form-control" id="body" placeholder="What are you thinking about right now?" rows="3"></textarea>
            @error('body')
                <small class="text-danger d-block mt-1">{{ $message }}</small>
            @enderror
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
    {{-- <div class="card">
        <div class="card-body">
            <div class="card-title fw-bold">New Post</div>

        </div>
    </div> --}}
</div>
