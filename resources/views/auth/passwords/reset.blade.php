@extends('layouts.app')

@section('content')
<div class="wrapper">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <h1>Reset Password</h1>

        <div class="input-field">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <label for="password">Password Baru</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <label for="password-confirm">Konfirmasi Password Baru</label>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit">Reset Password</button>
    </form>
</div>
@endsection
