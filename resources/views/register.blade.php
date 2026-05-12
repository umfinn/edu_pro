<x-layout>
    <x-slot:title>
        ReUse Register!
    </x-slot>

    <div class="max-w-2xl mx-auto">
        
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        
                        @foreach ($data as $info)
                            <p class="text-gray-700 mb-4">{{ $info['title'] }} and {{ $info['content'] }}</p> 
                        @endforeach
                        
                    </div>
                </div>
            </div>
          
        </div>
</x-layout>