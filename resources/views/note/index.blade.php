<x-app-layout>
    <div class="note-container">
        <a href=" {{ route('note.create')}}" class="new-note-btn">
            New Note
        </a>
        <hr>
        <div class="notes">
            @foreach ($notes as $note)
            
            <div class="note body">
                {{$note->id}}
            <br>
                {{ Str::words($note->note,30) }}
            </div>
            
            <div class="note-buttons">
                <a href="{{ route('note.show', $note->id) }}" class="note-edit-button">View</a>
                <a href="{{ route('note.edit', $note->id) }}" class="note-edit-button">Edit</a>
            </div>
            <hr>
            @endforeach 
            <hr>
            {{ $notes-> links() }}
        </div>
    </div>
</x-app-layout>
