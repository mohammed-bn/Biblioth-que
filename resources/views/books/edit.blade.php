<x-app-layout>
    <x-slot name="header">
        <h2>Modifier le livre</h2>
    </x-slot>

    <form method="POST" action="{{ route('books.update', $book) }}" class="p-6">
        @csrf @method('PUT')

        <input name="title" value="{{ $book->title }}" class="block mb-2">
        <input name="author" value="{{ $book->author }}" class="block mb-2">
        <input name="category" value="{{ $book->category }}" class="block mb-2">

        <button class="bg-blue-500 text-white px-4 py-2">Mettre à jour</button>
    </form>
</x-app-layout>
