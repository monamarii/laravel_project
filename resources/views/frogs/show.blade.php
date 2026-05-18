<x-layout title="Frogs">
    <div class="mt-8">
        @if ($frog)
            <img class="h-100 w-100 object-contain object-left" src="{{ $frog->url }}" alt="Random frog" referrerpolicy="no-referrer">
            <p class="mt-6 font-semibold"><a href="/frogs/random" class="font-semibold underline hover:text-pink-500">Summon a new frog.</a></p>
        @else
            <p class="text-xl font-semibold text-black">No frogs are available yet.</p>
            <p class="mt-2 text-base text-neutral-700">Add some frog records to the database, then try again.</p>
        @endif
    </div>
</x-layout>