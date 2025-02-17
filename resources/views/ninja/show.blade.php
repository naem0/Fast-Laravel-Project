<x-layout>
    <div class="border px-4 py-2 my-2">
        <h1 class="text-4xl font-bold text-purple-800">{{ $ninja->name }}</h1>
        <p class="text-lg">{{ $ninja->email ?? 'No email' }}</p>
        <p class="text-lg">{{ $ninja->status ? 'Active' : 'Inactive' }}</p>
        <p class="text-lg">{{ $ninja->weapon }}</p>
    </div>
    <a href="/ninja" class="text-blue-500">Go Back</a>
</x-layout>