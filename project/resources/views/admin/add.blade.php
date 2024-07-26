<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" onsubmit="this.querySelector('button[type=submit]').disabled = true;">
    @csrf
    <label for="name">nazov clanku</label>
    <input type="text" name="name" id="name" required>
    <label for="category">Kategória</label>
    <select class="form-control" id="category" name="category_id[]" multiple>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Pridať</button>
</form>
