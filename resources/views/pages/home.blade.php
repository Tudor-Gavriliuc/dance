@extends('layouts.app')

@section('title', 'ILyria Dance Studio - Dance for Everyone')

@section('content')

<!-- Hero Section -->
<section class="hero" id="home">
    <img src="{{ asset('images/header.jpg') }}" alt="ILyria Dance Studio" class="hero__image">
    <div class="hero__overlay"></div>
    
    <div class="hero__content">
        <h1 class="hero__title" data-i18n="hero">
            Locul unde începe<br>
            <em data-i18n="heroEmphasis">o altă lume.</em>
        </h1>
        <p class="hero__subtitle" data-i18n="heroSub">
            Dans pentru copii, adolescenți și adulți — de la primii pași până la performanță.
        </p>
        
        <div class="hero__actions">
            <a href="https://n1470867.alteg.io" target="_blank" class="btn btn--primary" data-i18n="bookClass">Rezervă o lecție</a>
            <a href="#classes" class="btn btn--ghost" data-i18n="discover">Descoperă clasele</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="about__container">
        <p class="section__kicker" data-i18n="brand">ILyria</p>
        <h2 class="section__title" data-i18n="more">Mai mult decât dans.</h2>
        
        <p class="about__text" data-i18n="about">
            Dansul este limbajul prin care devin vizibile disciplina, expresivitatea, eleganța și încrederea. 
            La ILyria creăm un spațiu în care fiecare poate evolua în propriul ritm.
        </p>
        
        <div class="about__stats">
            <div class="stat">
                <b class="stat__number">3</b>
                <span class="stat__label" data-i18n="coaches">antrenori</span>
            </div>
            <div class="stat">
                <b class="stat__number">PRO</b>
                <span class="stat__label" data-i18n="performance">performanță</span>
            </div>
            <div class="stat">
                <b class="stat__number">0→</b>
                <span class="stat__label" data-i18n="beginners">începători</span>
            </div>
        </div>
    </div>
</section>

<!-- Classes Section -->
<section class="classes" id="classes">
    <div class="classes__container">
        <p class="section__kicker" data-i18n="choose">Alege direcția</p>
        <h2 class="section__title" data-i18n="classesTitle">Clase pentru fiecare etapă.</h2>
        
        <div class="classes__grid">
            <article class="class-card">
                <span class="class-card__number">01</span>
                <h3 class="class-card__title" data-i18n="kids">Copii</h3>
                <p class="class-card__description" data-i18n="kidsText">
                    Dans sportiv, disciplină, postură și încredere. Grupe pentru începători și nivel avansat.
                </p>
                <a href="https://n1470867.alteg.io" target="_blank" class="class-card__link" data-i18n="reserve">Rezervă →</a>
            </article>
            
            <article class="class-card">
                <span class="class-card__number">02</span>
                <h3 class="class-card__title" data-i18n="teens">Adolescenți</h3>
                <p class="class-card__description" data-i18n="teensText">
                    Un spațiu pentru expresivitate, dezvoltare și descoperirea propriului stil prin mișcare.
                </p>
                <a href="https://n1470867.alteg.io" target="_blank" class="class-card__link" data-i18n="reserve">Rezervă →</a>
            </article>
            
            <article class="class-card">
                <span class="class-card__number">03</span>
                <h3 class="class-card__title" data-i18n="adults">Adulți · Hobby</h3>
                <p class="class-card__description" data-i18n="adultsText">
                    Pentru cei care vor să înceapă de la zero, să se miște cu încredere și să se bucure de dans.
                </p>
                <a href="https://n1470867.alteg.io" target="_blank" class="class-card__link" data-i18n="reserve">Rezervă →</a>
            </article>
            
            <article class="class-card">
                <span class="class-card__number">04</span>
                <h3 class="class-card__title" data-i18n="individual">Lecții individuale</h3>
                <p class="class-card__description" data-i18n="individualText">
                    Atenție 1-la-1, ritm personal și program adaptat obiectivului tău.
                </p>
                <a href="https://n1470867.alteg.io" target="_blank" class="class-card__link" data-i18n="reserve">Rezervă →</a>
            </article>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section class="quote">
    <img src="{{ asset('images/studio.jpg') }}" alt="ILyria Studio" class="quote__image">
    <blockquote class="quote__text" data-i18n="quote">
        „Nu învățăm doar pași. Cultivăm eleganță, caracter și libertatea de a te exprima."
    </blockquote>
</section>

<!-- Schedule Section -->
<section class="schedule" id="schedule">
    <div class="schedule__container">
        <p class="section__kicker" data-i18n="week">Săptămâna la ILyria</p>
        <h2 class="section__title" data-i18n="scheduleTitle">Orar</h2>
        
        <div class="schedule__categories">
            <button class="schedule__category-btn active" data-category="kids_teens">Kids & Teens</button>
            <button class="schedule__category-btn" data-category="latino_dance">Latino Dance</button>
            <button class="schedule__category-btn" data-category="pilates_stretching">Pilates / Stretching</button>
        </div>
        
        <div class="schedule__slots">
            <!-- Schedule loaded from JSON -->
        </div>
    </div>
</section>

<!-- Trainers Section -->
<section class="trainers" id="trainers">
    <div class="trainers__container">
        <p class="section__kicker" data-i18n="team">Echipa</p>
        <h2 class="section__title" data-i18n="meet">Antrenorii ILyria</h2>
        
        <div class="trainers__grid">
            <article class="trainer-card">
                <div class="trainer-card__photo trainer-card__photo--1"></div>
                <h3 class="trainer-card__name">Elena Nora</h3>
                <p class="trainer-card__specialty">Dans sportiv · PRO & Beginners</p>
            </article>
            
            <article class="trainer-card">
                <div class="trainer-card__photo trainer-card__photo--2"></div>
                <h3 class="trainer-card__name">Sophia Mayas</h3>
                <p class="trainer-card__specialty">Copii · Adolescenți</p>
            </article>
            
            <article class="trainer-card">
                <div class="trainer-card__photo trainer-card__photo--3"></div>
                <h3 class="trainer-card__name">Viviana Sorin</h3>
                <p class="trainer-card__specialty">Adulți · Lecții individuale</p>
            </article>
        </div>
    </div>
</section>

<!-- Studio Section with Google Maps -->
<section class="studio" id="location">
    <div class="studio__info">
        <h2 class="section__title" data-i18n="enter">Locatie</h2>
        
        <div class="studio__maps-wrapper">
            <div class="studio__map-container">
                <h3 class="studio__map-title">Google Maps</h3>
                <iframe src="https://maps.google.com/maps?q=Str.+Nicolae+Dimo+86,+Durlești,+Moldova&hl=en&z=16&output=embed" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <div class="studio__map-container">
                <h3 class="studio__map-title">Waze Navigation</h3>
                <a href="https://waze.com/go?q=Nicolae%20Dimo%2086%2C%20Durlesti%2C%20Moldova" target="_blank" rel="noopener noreferrer" class="studio__waze-link">
                    <img src="{{ asset('images/waze-map.jpeg') }}" alt="Waze Navigation" class="studio__waze-image">
                    <div class="studio__waze-overlay"></div>
                </a>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
