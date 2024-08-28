@include('components.header')
<meta name="robots" content="noindex, nofollow">
@include('components.header-2')
@include('components.nav')
<div class="container articles-section" id="article-view">
    <h1>{{ $article->name }}</h1>
    <div class="tags mb-3">
        @foreach($article->categories as $category)
            <span class="badge {{ $category->getClassAttribute() }}">{{ $category->name }}</span>
        @endforeach
    </div>
    @foreach($article->sections as $section)
        <div class="row justify-content-center">
            <div class="section mb-4 section-background col-lg-8 col-md-10">
                <div class="row">
                    <div class="col-12">
                        <h3 class="section-title">{{ $section->title }}</h3>
                    </div>
                    <div class="{{ $section->image ? 'col-lg-8' : 'col-lg-12' }}">
                        <p>{{ $section->content }}</p>
                    </div>
                    @if($section->image)
                        <div class="col-lg-4">
                            <img src="{{ asset($section->image) }}" alt="{{ $section->title }}" class="img-fluid">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
@include('components.footer')
