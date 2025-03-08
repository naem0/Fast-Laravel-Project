<x-layout>
    <form method="POST" action="{{ route('ninja.add') }}" class="w-1/2 mx-auto mt-8">
        @csrf <!-- Add CSRF token -->

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input value="{{ old('name') }}" type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="rank" class="block text-gray-700 text-sm font-bold mb-2">Rank:</label>
            <input value="{{ old('rank') }}" type="text" name="rank" id="rank" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">Bio:</label>
            <textarea name="bio" id="bio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                {{ old('bio') }}
            </textarea>
        </div>

        <div class="mb-4">
            <label for="dojo" class="block text-gray-700 text-sm font-bold mb-2">Dojo:</label>
            <select name="dojo_id" id="dojo" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="" disabled selected>Select a dojo</option>
                @foreach($dojos as $dojo)
                <option 
                    value="{{ $dojo->id }}" 
                >{{ $dojo->name }}</option>
                @endforeach
            </select>
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