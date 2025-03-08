<x-layout>
    <div class="border px-4 py-2 my-2">
        <h1 class="text-4xl font-bold text-purple-800">{{ $ninja->name }}</h1>
        <p class="text-lg">{{ $ninja->bio }}</p>
        <p class="text-lg">{{ $ninja->rank }}</p>
        <p class="text-lg">{{ $ninja->dojo->name }}</p>
        <p class="text-lg">{{ $ninja->dojo->location }}</p>
        <p class="text-lg">{{ $ninja->dojo->description }}</p>
    </div>
    <a href="/ninja" class="text-blue-500">Go Back</a>
</x-layout>