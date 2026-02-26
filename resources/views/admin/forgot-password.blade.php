<form method="POST" action="{{ route('admin.check.email') }}">
    @csrf

    <h2>Forgot Password</h2>

    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror

    <div class="input-group">
        <input type="email" name="email" required placeholder=" ">
        <label>Email Address</label>
    </div>

    <button type="submit">Verify Email</button>
</form>
