<div class="container">
    <h2>{{__("Articles List")}}</h2>
    <div class="row" id="articlesList">
        @foreach($articles as $article)
            <div class="col-md-6 mb-4">
                <div class="card hover-card" data-date="{{ $article->created_at }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <div class="tags">
                            @foreach($article->categories as $category)
                                <span class="badge {{ $category->getClassAttribute()}}">{{ $category->name }}</span>
                            @endforeach
                        </div>
                        <p class="card-text">
                            @if($article->sections->isNotEmpty())
                                {{ Str::limit($article->sections->first()->content, 100) }}
                            @else
                            {{__("No content available.")}}
                            @endif
                        </p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">{{__("Read More")}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
