<x-layout>
    <div class="container mx-auto mt-12 max-w-lg">
        <h1 class="text-center mb-8 text-2xl font-bold">Dojos</h1>
        <div class="grid grid-cols-1 gap-4">
            @foreach($dojos as $dojo)
                <div class="bg-white p-5 rounded shadow">
                    <h2 class="text-xl font-bold">{{ $dojo->name }}</h2>
                    <p class="text-gray-600">{{ $dojo->location }}</p>
                    
                </div>
            @endforeach
        </div>
    </div>
</x-layout>