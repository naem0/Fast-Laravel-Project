<x-layout>
    <div class="">
        <h1 class="text-4xl font-bold text-purple-800">Ninja</h1>
        @foreach ($ninjas as $ninja)
            <div class="border px-4 py-2 my-2 flex justify-between {{ $ninja->status ? 'bg-green-200' : 'bg-red-200' }}">
                <h2 class="font-semibol ">{{ $ninja->name }}</h2>
                <a href="ninja/{{ $ninja->id }}"> View More </a>
            </div>
        @endforeach
    </div>
</x-layout>