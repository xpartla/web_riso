@foreach($articles as $article)
    <p>{{ $article->id }}</p>
    <p>{{ $article->name }}</p>
    <p>Categories:</p>
    <ul>
        @foreach($article->categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
@endforeach
