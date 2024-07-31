@foreach($articles as $article)
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $article->name }}</h5>
                <div class="tags">
                    @foreach($article->categories as $category)
                        <span class="badge {{ $category->getClassAttribute()}}">{{ $category->name }}</span>
                    @endforeach
                </div>
                <p class="card-text">{{ Str::limit($article->sections->first()->content ?? '', 100) }}</p>
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
@endforeach
