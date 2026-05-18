<x-layout title="About Us">
    
    <h1>About Us</h1>

    
    <div>
        <p>
            doing stuff uknow.
        </p>
    </div>
    
    <p>I have {{ count($tasks) }} tasks:</p>

    @forelse($tasks as $task)
        {{ $task }}</br>
    @empty
        <p>There are currently no tasks.</p>
    @endforelse

</x-layout>