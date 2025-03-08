<x-layout>
    <form method="POST" action="{{ route('user.add') }}" class="w-1/2 mx-auto mt-8">
        @csrf <!-- Add CSRF token -->

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-800 p-3 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-800 p-3 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-800 p-3 rounded-md">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-800 p-3 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <input type="checkbox" name="status" id="status" class="mt-1">
        </div>

        <div class="mb-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </form>

    <!-- Display success message -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display errors -->
    @if($errors->any())
        <div class="bg-red-500 text-white p-3 rounded mt-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>
