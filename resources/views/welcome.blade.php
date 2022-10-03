<x-master>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">products</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td scope="row">{{ $item->categoryName }}</td>
                    <td scope="row">{{ $item->products }}</td>
                    <td scope="row">{{ $item->image }}</td>
                    <td scope="row">
                        <a href="{{ route('viewSingle', $item->id) }}" class="link-success">views</a>
                        <a href="{{ route('edit', $item->id) }}">edit</a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-master>
