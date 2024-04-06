<x-app-layout>
   <h1>Create Note</h1>
   <div class='create-form'>
      <form method="POST" action="{{ route('note.store')}}">
         @csrf
         <textarea name='note' placeholder="Enter your note here"></textarea>
         <a href="{{route('note.index')}}">Cancel</a>
         <button>Submit</button>
      </form>
   </div> 
</x-app-layout>
