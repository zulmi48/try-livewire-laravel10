<div class="d-flex justify-content-center">
    <div class="card col-md-6">
        <div class="card-body">
            <div class="card-title fw-bold text-center">Login Form</div>
            <form wire:submit="login">
                <div class="mb-4">
                    <label for="" class="form-label">Email</label>
                    <input type="text" wire:model="email" class="form-control" id="">
                    @error('email')
                        <small class="d-block text-danger mt-1">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Password</label>
                    <input type="password" wire:model="password" class="form-control" id="">
                    @error('password')
                        <small class="d-block text-danger mt-1">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
