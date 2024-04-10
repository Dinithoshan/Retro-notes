<x-app-layout>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <td>{{ $category->id}}</td>
            <td>{{ $category->category}}</td>
          </tr>
          @endforeach
          {{ $categories-> links() }}
        </tbody>
</table>
<a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
</x-app-layout>