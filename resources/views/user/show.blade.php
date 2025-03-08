<x-layout>
    <div class="border px-4 py-2 my-2">
        <h1 class="text-4xl font-bold text-purple-800">{{ $user->name }}</h1>
        <p class="text-lg">{{ $user->email ?? 'No email' }}</p>
        <p class="text-lg">{{ $user->status ? 'Active' : 'Inactive' }}</p>
        <p class="text-lg">{{ $user->phone }}</p>
    </div>
    <a href="/user" class="text-blue-500">Go Back</a>
</x-layout>