<x-layout>
    <div class="">
        <h1 class="text-4xl font-bold text-purple-800">User</h1>
        @foreach ($ninjas as $ninja)
            <div class="border px-4 py-2 my-2 flex justify-between {{ $ninja->status ? 'bg-green-200' : 'bg-red-200' }}">
                <h2 class="font-semibol ">{{ $ninja->name }}</h2>
                <a href="ninja/{{ $ninja->id }}"> View More </a>
                <form action="{{ route('ninja.destroy', $ninja->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">Delete</button>
                </form>
                <a href="ninja/{{ $ninja->id }}/edit">Edit</a>
            </div>
        @endforeach
    </div> 
</x-layout>