@include('components.header')
@include('components.nav')

<div class="container">
    <h2>Create New Article</h2>
    <a href="{{ route('admin.index') }}" class="btn btn-secondary mb-3">Return to Admin</a>
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Article Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label>Categories</label>
            @foreach($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="category_id[]" value="{{ $category->id }}">
                    <label class="form-check-label">{{ $category->name }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Create Article</button>
    </form>
</div>
@include('components.footer')
