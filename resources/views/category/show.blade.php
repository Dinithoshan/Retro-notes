<x-app-layout>
    
    <h5> {{$category->category}}</h5>
    <p>Category Created on: {{ $category->created_at}} </p>
    <div>
        <a href="{{ route('category.edit', $category->id ) }}" class="btn btn-primary">Edit Category</a>
        <form action ="{{ route('category.destroy', $category->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <br>
            <button type="submit" class="btn btn-danger">Delete Category</button>
        </form>
    </div>
</x-app-layout>