<x-layout>
    <form method="POST" action="/register">
        @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
        <legend class="fieldset-legend">Register</legend>

        <label class="label" for="name">Name</label>
        <input id="name" type="text" name="name" class="input" placeholder="Your name" value="{{ old('name') }}" required />
        @error('name')
            <p class="text-sm text-error mt-1">{{ $message }}</p>
        @enderror

        <label class="label" for="email">Email</label>
        <input id="email" type="email" name="email" class="input" placeholder="Email" value="{{ old('email') }}" required />
        @error('email')
            <p class="text-sm text-error mt-1">{{ $message }}</p>
        @enderror

        <label class="label" for="password">Password</label>
        <input id="password" type="password" name="password" class="input" placeholder="Password" required />
        @error('password')
            <p class="text-sm text-error mt-1">{{ $message }}</p>
        @enderror

        <label class="label" for="password_confirmation">Password Confirmation</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="input" placeholder="Confirm Password" required />
        @error('password_confirmation')
            <p class="text-sm text-error mt-1">{{ $message }}</p>
        @enderror

        <button class="btn btn-primary mt-4" data-test="register-button">Register</button>
    </fieldset>
    </form>
</x-layout>
