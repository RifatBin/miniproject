<x-master>
    <form action="{{ route('update', $categories->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CategoryName</label>
            <input type="text" name="categoryName" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $categories->categoryName }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Products</label>
            <input type="text" name="products" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $categories->categoryName }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $categories->categoryName }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-master>
