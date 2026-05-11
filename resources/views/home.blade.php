<x-layout>
    <x-slot:title>
        Hi there!
    </x-slot>
    <div class="max-w-2xl mx-auto">
       @foreach ($blogs as $blog)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <h2 class="card-title">{{ $blog['title'] }}</h2>
                        <p>{{ $blog['content'] }}</p>
                        <p class="text-sm text-base-content/40">{{ $blog['time'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach    
        </div>
</x-layout>