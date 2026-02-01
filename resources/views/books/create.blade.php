<x-app-layout>
    <x-slot name="header">
        <h2>Ajouter un livre</h2>
    </x-slot>

    <form method="POST" action="{{ route('books.store') }}" class="p-6">
        @csrf

        <input name="title" placeholder="Titre" class="block mb-2">
        <input name="author" placeholder="Auteur" class="block mb-2">
        <input name="category" placeholder="Catégorie" class="block mb-2">

        <button class="bg-green-500 text-white px-4 py-2">Enregistrer</button>
    </form>
</x-app-layout>
