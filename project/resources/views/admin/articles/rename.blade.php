@include('components.header')
@include('components.header-2')
@include('components.nav')
<div class="container">
    <h2>Rename Article</h2>
    <form action="{{ route('admin.articles.updateRename', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">New Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Rename</button>
    </form>
</div>
@include('components.footer')
