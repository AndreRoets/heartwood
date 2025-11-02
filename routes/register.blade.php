<form method="POST" action="{{ route('register.attempt') }}">
    @csrf
    <label>Choose a Username</label>
    <input type="text" name="username" value="{{ old('username') }}" required maxlength="50" pattern="[A-Za-z0-9._-]+">
    @error('username') <div class="error">{{ $message }}</div> @enderror

    <button type="submit">Create Account</button>
</form>