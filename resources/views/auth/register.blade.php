<x-layout>
    <form method="POST" action="/register">
        @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
        <legend class="fieldset-legend">Register</legend>

        <label class="label" for="name">Name</label>
        <input type="text" name="name" class="input" placeholder="Your name" value="{{ old('name') }}" required />
        @error('name')
            <p class="text-sm text-error mt-1">{{ $message }}</p>
        @enderror

        <label class="label" for="email">Email</label>
        <input type="email" name="email" class="input" placeholder="Email" value="{{ old('email') }}" required />
        @error('email')
            <p class="text-sm text-error mt-1">{{ $message }}</p>
        @enderror

        <label class="label" for="password">Password</label>
        <input type="password" name="password" class="input" placeholder="Password" required />
        @error('password')
            <p class="text-sm text-error mt-1">{{ $message }}</p>
        @enderror

        <button class="btn btn-primary mt-4">Register</button>
    </fieldset>
    </form>
</x-layout>
