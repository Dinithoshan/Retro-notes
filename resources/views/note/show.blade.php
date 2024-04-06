<x-app-layout>
    <h1>Note Created Edit: {{ $note->created_at}} </h1>
    <p> {{$note->note}}</p>
    <a href="{{ route('note.edit', $note->id ) }}">Edit Note</a>
    <form action ="{{ route('note.destroy', $note->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Note</button>
    </form>
</x-app-layout>
