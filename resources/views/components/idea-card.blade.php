<a {{ $attributes->merge(['class' => 'card bg-neutral-600 text-neutral-content w-full']) }}>
    <div class="card-body">
        <h2 class="card-title">{{ $slot }}</h2>
    </div>
</a>