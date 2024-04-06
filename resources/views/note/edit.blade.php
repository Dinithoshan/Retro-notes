<x-app-layout>
    <h1>Edit Notes Page</h1>
    <h1>Note Created at: {{ $note->created_at }}</h1>
    <form action="{{ route('note.update', $note->id)}}" method="POST">
        @csrf
        @method('PUT')
        <textarea name='note' placeholder="Enter your text here">{{ $note->note}}</textarea>
        <a href="{{ route('note.index')}}">Cancel</a>
        <button>Submit</button>
    </form>
</x-app-layout>