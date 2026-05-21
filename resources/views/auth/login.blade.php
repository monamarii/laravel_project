<x-layout>
    <form method="POST" action="/login">
        @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
        <legend class="fieldset-legend">Log In</legend>

        @if ($errors->any())
            <div class="alert alert-error mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label class="label" for="email">Email</label>
        <input type="email" name="email" class="input" placeholder="Email" value="{{ old('email') }}" required />
        <x-forms.error name="email" />

        <label class="label" for="password">Password</label>
        <input type="password" name="password" class="input" placeholder="Password" required />
        <x-forms.error name="password" />

        <button class="btn btn-primary mt-4">Log In</button>
    </fieldset>
    </form>
</x-layout>
