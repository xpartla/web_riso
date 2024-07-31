<div class="container">
    <h2>Articles List</h2>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary mb-3">Create New Article</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Categories</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->name }}</td>
                <td>
                    <ul>
                        @foreach($article->categories as $category)
                            <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('admin.articles.rename', $article->id) }}" class="btn btn-secondary btn-sm">Rename</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
