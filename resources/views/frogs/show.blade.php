<x-layout title="Frogs">
    <div class="mt-8">
        @if ($frog)
            <p class="mb-6 font-semibold"><a href="/frogs/random" class="font-semibold underline hover:text-pink-500"> > Click to summon a new frog < </a></p>
            <img
                class="h-120 w-120 object-contain object-left"
                src="{{ $frog->url }}"
                alt="Random frog"
                @if($frog->needs_no_referrer) referrerpolicy="no-referrer" @endif
            >
        @else
            <p class="text-xl font-semibold text-black">No frogs are available yet.</p>
            <p class="mt-2 text-neutral-700">Add some frog records to the database, then refresh this page.</p>
        @endif
    </div>
</x-layout>