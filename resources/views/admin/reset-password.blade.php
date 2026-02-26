<form method="POST" action="{{ route('admin.reset.password') }}">
    @csrf

    <h2>Reset Password</h2>

    <input type="hidden" name="email" value="{{ $email }}">

    <div class="input-group">
        <input type="password" name="password" required placeholder=" ">
        <label>New Password</label>
    </div>

    <div class="input-group">
        <input type="password" name="password_confirmation" required placeholder=" ">
        <label>Confirm Password</label>
    </div>

    <button type="submit">Update Password</button>
</form>
