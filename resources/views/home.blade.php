@extends('main')

@section('title', 'Heartwood Valley Realm Nominations')

@section('content')
    <section class="hero" id="hero">
        <!-- Stars -->
        <div class="hero__stars" aria-hidden="true"></div>

        <!-- Sweeping light rays -->
        <div class="hero__rays" aria-hidden="true"></div>

        <!-- Crystal orbit -->
        <div class="hero__crystals" aria-hidden="true">
            <div class="crystal-orbit">
                <div class="crystal pos1"><div class="crystal__body"></div></div>
                <div class="crystal pos2"><div class="crystal__body"></div></div>
                <div class="crystal pos3"><div class="crystal__body"></div></div>
                <div class="crystal pos4"><div class="crystal__body"></div></div>
                <div class="crystal pos5"><div class="crystal__body"></div></div>
                <div class="crystal pos6"><div class="crystal__body"></div></div>
                <div class="crystal pos7"><div class="crystal__body"></div></div>
                <div class="crystal pos8"><div class="crystal__body"></div></div>
            </div>
        </div>

        <!-- Sparkles near CTAs -->
        <div class="sparkle-field" aria-hidden="true">
            <div class="sparkle s1"></div>
            <div class="sparkle s2"></div>
            <div class="sparkle s3"></div>
        </div>

        <!-- Content -->
        <div class="hero__content container">
            <h1 class="hero__title">Heartwood Valley <span class="text-gold"><br>Realm<br/></span></h1>
            <p class="hero__subtitle">Build. Explore. Belong.</p>
            <div class="hero__actions">
                
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title">How It Works</h2>
            <div class="how-it-works__grid">
                <div class="card-glass">
                    <div class="card-glass__icon">
                        <!-- Placeholder SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                    </div>
                    <h3 class="card-glass__title">Nominate</h3>
                    <p class="card-glass__body">Submit your chosen champion with a tale of their deeds.</p>
                    <a href="{{ route('nominations.create') }}" class="button button--small">Start Nominating</a>
                </div>
                <div class="card-glass">
                    <div class="card-glass__icon">
                        <!-- Placeholder SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 9V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v4"/><path d="M12 15v5"/><path d="M12 3v10"/><path d="M18 9l-6 6-6-6"/></svg>
                    </div>
                    <h3 class="card-glass__title">Vote</h3>
                    <p class="card-glass__body">Cast your vote for the nominee you believe in most.</p>
                    <a href="{{ route('nominations.index') }}" class="button button--small">See Nominees</a>
                </div>
                <div class="card-glass">
                    <div class="card-glass__icon">
                        <!-- Placeholder SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21V5l7 7-7 7"/><path d="M15 21V5l7 7-7 7"/></svg>
                    </div>
                    <h3 class="card-glass__title">Realm Adventures</h3>
                    <p class="card-glass__body">Our Realm Adventures</p>
                    <a href="#" class="button button--small">Coming Soon!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="nominees">
        <div class="container">
            <h2 class="section-title">Our Winners</h2>
            @php
              $nominees = [
                ['name' => 'This Could be You',   'blurb' => '???', 'avatar' => '/Image/avatar1.png'],
                ['name' => 'This Could be You',   'blurb' => '???',     'avatar' => '/Image/avatar2.png'],
                ['name' => 'This Could be You','blurb' => '???',         'avatar' => '/Image/avatar3.png'],
              ];
            @endphp
            <div class="nominees__grid">
                @foreach ($nominees as $nominee)
                <div class="nominee-card">
                    <div class="nominee-card__avatar">
                        <img src="{{ asset($nominee['avatar']) }}" alt="{{ $nominee['name'] }}'s avatar">
                    </div>
                    <h3 class="nominee-card__name">{{ $nominee['name'] }}</h3>
                    <p class="nominee-card__blurb">"{{ $nominee['blurb'] }}"</p>
                    <a href="#" class="button button--primary button--small">Vote for {{ $nominee['name'] }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    
@endsection
