<x-layout>
    <div class="container mx-auto mt-12 max-w-lg">
        <h1 class="text-center mb-8 text-2xl font-bold">Edit User</h1>
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-5">
                <label for="name" class="block mb-2">Name</label>
                <input type="text" name="name" class="form-control w-full p-2 border rounded" value="{{ $user->name }}" required>
            </div>

            <div class="form-group mb-5">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" name="email" class="form-control w-full p-2 border rounded" value="{{ $user->email }}" required>
            </div>

            <div class="form-group mb-5">
                <label for="phone" class="block mb-2">Phone</label>
                <input type="text" name="phone" class="form-control w-full p-2 border rounded" value="{{ $user->phone }}" required>
            </div>

            <div class="form-group mb-5">
                <label for="rank" class="block mb-2">Rank</label>
                <input type="text" name="rank" class="form-control w-full p-2 border rounded" value="{{ $user->rank }}" required>
            </div>

            <button type="submit" class="btn btn-primary w-full p-2 rounded bg-blue-500 text-white">Update</button>
        </form>
    </div>
        </form>
    </div>
</x-layout>