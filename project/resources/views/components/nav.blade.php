<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index.index')}}">
            <img src="{{ asset('img/logo/logo-dark.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="{{route('quiz.index')}}">{{ __('Quiz') }}</a>
                <a class="nav-link" href="{{route('services.index')}}">{{ __('Services') }}</a>
                <a class="nav-link" href="{{route('about.index')}}">{{__('About me')}}</a>
                <a class="nav-link" href="{{route('articles.index')}}">{{ __('Articles') }}</a>
                <a class="nav-link" href="{{route('contact.index')}}">{{ __('Contact') }}</a>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown me-3">
                    <a class="nav-link dt" href="#" id="languageDropdown" role="button" aria-expanded="false">
                        {{ __('Language') }} <span class="arrow">▼</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        @foreach (config('locales.available_locales') as $locale => $language)
                        <li><a class="dropdown-item" href="{{ route('lang.change', $locale) }}">{{ $language }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
