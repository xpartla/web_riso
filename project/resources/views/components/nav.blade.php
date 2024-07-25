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
                <a class="nav-link" href="{{route('quiz.index')}}">Quiz</a>
                <a class="nav-link" href="{{route('services.index')}}">Služby</a>
                <a class="nav-link" href="{{route('about.index')}}">O mne</a>
                <a class="nav-link" href="{{route('articles.index')}}">Články</a>
                <a class="nav-link" href="{{route('contact.index')}}">Kontakt</a>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown me-3">
                    <a class="nav-link dt" href="#" id="languageDropdown" role="button" aria-expanded="false">
                        ENG <span class="arrow">▼</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#">SVK</a></li>
                    </ul>
                </div>
                <div class="w-100 d-block d-lg-none"></div>
                <div class="toggle-switch mt-2 mt-lg-0">
                    <input type="checkbox" id="nightModeToggle" class="night-mode-toggle">
                    <label for="nightModeToggle" class="night-mode-label"></label>
                </div>
            </div>
        </div>
    </div>
</nav>
