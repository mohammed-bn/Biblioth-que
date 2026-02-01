<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Liste des livres</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('books.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
            Ajouter un livre
        </a>

        <table class="mt-4 w-full border">
            <tr class="bg-gray-200">
                <th>Titre</th>
                <th>Auteur</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>

            @foreach($books as $book)
            <tr class="border">
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->category }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}">Modifier</a>
                    <form method="POST" action="{{ route('books.destroy', $book) }}" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-500">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
