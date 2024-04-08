<x-app-layout>
    <div class="note-container">
        <a href=" {{ route('note.create')}}" class="new-note-btn">
            New Note
        </a>
        <hr>
        <div class="notes">
            @foreach ($notes as $note)
            
            <div class="note body">
                <h5>{{$note->heading}}</h5>
                {{ Str::words($note->note,45) }}
            </div>
            
            <div>
                <a href="{{ route('note.show', $note->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('note.edit', $note->id) }}" class="btn btn-primary">Edit</a>
            </div>
            <hr>
            @endforeach 
            <hr>
            {{ $notes-> links() }}
        </div>
    </div>
</x-app-layout>
