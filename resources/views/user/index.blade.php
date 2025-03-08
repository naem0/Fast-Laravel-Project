<x-layout>
    <div class="">
        <h1 class="text-4xl font-bold text-purple-800">User</h1>
        @foreach ($users as $user)
            <div class="border px-4 py-2 my-2 flex justify-between {{ $user->status ? 'bg-green-200' : 'bg-red-200' }}">
                <h2 class="font-semibol ">{{ $user->name ? $user->name : $user->username }}</h2>
                <a href="user/{{ $user->id }}"> View More </a>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500">Delete</button>
                </form>
                <a href="user/{{ $user->id }}/edit">Edit</a>
            </div>
        @endforeach
    </div> 
</x-layout>