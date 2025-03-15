<x-layout>
    <div class="container mx-auto mt-12 max-w-lg">
        <h1 class="text-center mb-8 text-2xl font-bold">{{ $dojo->name }}</h1>
        <div class="bg-white p-5 rounded shadow">
            <h2 class="text-xl font-bold">{{ $dojo->name }}</h2>
            <p class="text-gray-600">{{ $dojo->location }}</p>
            <div class="flex justify-end mt-4">
                <a href="{{ route('dojo.edit', $dojo->id) }}" class="btn btn-primary p-2 rounded bg-blue-500 text-white">Edit</a>
                <form action="{{ route('dojo.destroy', $dojo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger p-2 rounded bg-red-500 text-white ml-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>