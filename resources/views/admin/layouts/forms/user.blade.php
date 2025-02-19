<div class="col-4">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="name" required
        value="{{ old('name', $user->name ?? '') }}">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" required
        value="{{ old('email', $user->email ?? '') }}">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="col-4">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
</div>
