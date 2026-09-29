<header class="header">
    <div class="header__container">
        <a class="header__brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="ILYRIA Dance Studio" class="header__logo">
        </a>

        <div class="header__nav-wrapper">
            <button class="header__nav-toggle" aria-label="Toggle navigation menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="header__nav">
                <a href="#about" class="header__link" data-i18n="navAbout">Despre</a>
                <a href="#classes" class="header__link" data-i18n="navClasses">Clase</a>
                <a href="#schedule" class="header__link" data-i18n="navSchedule">Orar</a>
                <a href="#trainers" class="header__link" data-i18n="navTrainers">Antrenori</a>
                <a href="#contact" class="header__link" data-i18n="navContact">Contact</a>
            </nav>
        </div>

        <div class="header__actions">
            <div class="header__langs">
                <button class="header__lang-btn" data-lang="ro">RO</button>
                <button class="header__lang-btn" data-lang="ru">RU</button>
                <button class="header__lang-btn" data-lang="en">EN</button>
            </div>
            <a href="https://n1470867.alteg.io" target="_blank" class="btn btn--primary btn--book" data-i18n="book">Rezervă</a>
        </div>
    </div>
</header>
