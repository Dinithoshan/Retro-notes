<x-app-layout>
    <h4>Edit Category Page</h4>
    {{-- <h1>category Created at: {{ $category->created_at }}</h1> --}}
    <form action="{{ route('category.update', $category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">  <div class="col-md-3 form-group">  <textarea name='category' rows="3" placeholder="Enter your text here" class="w-100">{{ $category->category}}</textarea>
        </div>
      </div>
      
        <div>
            <a href="{{ route('category.index')}}" class="btn btn-dark">Cancel</a>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-app-layout>