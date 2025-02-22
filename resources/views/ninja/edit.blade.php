<x-layout>
    <div class="container mx-auto mt-12 max-w-lg">
        <h1 class="text-center mb-8 text-2xl font-bold">Edit Ninja User</h1>
        <form action="{{ route('ninja.update', $ninja->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-5">
                <label for="name" class="block mb-2">Name</label>
                <input type="text" name="name" class="form-control w-full p-2 border rounded" value="{{ $ninja->name }}" required>
            </div>

            <div class="form-group mb-5">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" name="email" class="form-control w-full p-2 border rounded" value="{{ $ninja->email }}" required>
            </div>

            <div class="form-group mb-5">
                <label for="phone" class="block mb-2">Phone</label>
                <input type="number" name="phone" class="form-control w-full p-2 border rounded" value="{{ $ninja->phone }}" required>
            </div>

            <div class="form-group mb-5">
                <label for="rank" class="block mb-2">Rank</label>
                <input type="text" name="rank" class="form-control w-full p-2 border rounded" value="{{ $ninja->rank }}" required>
            </div>

            <button type="submit" class="btn btn-primary w-full p-2 rounded bg-blue-500 text-white">Update</button>
        </form>
    </div>
        </form>
    </div>
</x-layout>