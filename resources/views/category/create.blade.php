<x-app-layout>
    <h1>Form to create Categories (Admin only)</h1>
    <form action="{{route("category.store")}}" class="btn btn-primary" method="POST">
        @csrf
        <div>
            <label>Category: </label>
            <textarea name="category" placeholder="Enter your category here"></textarea>
        </div>
        <a href="{{route('category.index')}}">Cancel</a>
        <button class="btn btn-primary">Submit</button>
    </form>
</x-app-layout>