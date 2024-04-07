<x-app-layout>
    <h1>Edit Notes Page</h1>
    <h1>Note Created at: {{ $note->created_at }}</h1>
    <form action="{{ route('note.update', $note->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">  <div class="col-md-8 form-group">  <textarea name='note' rows="20" placeholder="Enter your text here" class="w-100">{{ $note->note}}</textarea>
        </div>
      </div>
      
        <div>
            <a href="{{ route('note.index')}}" class="btn btn-dark">Cancel</a>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-app-layout>