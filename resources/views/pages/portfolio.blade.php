@extends('app')

@section('title', 'My Portfolio – Andre Roets')

@push('page-styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
    <section class="portfolio-showcase" id="portfolio">
        <div class="portfolio-showcase-container">

            <header class="portfolio-showcase-header">
                <h2>My Work</h2>
                <p>
                    I build high-performing websites and create marketing-ready visual assets.
                    Here’s a selection of projects that showcase my focus on clean design, measurable results, and client success.
                </p>
                <div class="portfolio-showcase-tabs">
                    <button class="portfolio-showcase-tab active" data-filter="web">Web Development</button>
                    <button class="portfolio-showcase-tab" data-filter="design">Design & Branding</button>
                </div>
            </header>

            <div class="portfolio-showcase-groups">
                <!-- WEB DEVELOPMENT GRID -->
                <div class="portfolio-showcase-grid projects-grid active" data-group="web">
                    <!-- FEATURED PROJECT -->
                    <article class="project-card portfolio-card">
                        <div class="card-glow"></div>

                        <div class="project-media">
                            <img src="/Image/homefinders-preview.webp"
                                 alt="Home Finders Coastal Website Preview">
                        </div>

                        <div class="project-body">
                            <div class="project-topline">
                                <h3 class="project-name">Home Finders Coastal</h3>
                                <div class="tech-badges">
                                    <span class="badge-tech">Laravel</span>
                                    <span class="badge-role">Real Estate Platform</span>
                                </div>
                            </div>

                            <p class="project-desc">
                                Custom coastal property portal with automated listing import,
                                agent onboarding, and instant lead capture. Built for multi-branch usage.
                            </p>

                            <ul class="project-stats">
                                <li><strong>120+</strong> listings synced automatically</li>
                                <li><strong>Leads in 24h</strong> after launch</li>
                            </ul>

                            <div class="project-cta">
                                <a href="https://homefinderscoastal.co.za"
                                   class="btn-live"
                                   target="_blank" rel="noopener">View Live ↗</a>
                                <a href="/portfolio/home-finders-coastal"
                                   class="btn-case">Case Study</a>
                            </div>
                        </div>
                    </article>

                    <!-- NORMAL CARD -->
                    <article class="project-card portfolio-card">
                        <div class="card-glow"></div>

                        <div class="project-media">
                            <img src="/Image/Hbore.webp"
                                 alt="H Borehole Drilling Website">
                        </div>

                        <div class="project-body">
                            <div class="project-topline">
                                <h3 class="project-name">H Borehole Drilling</h3>
                                <div class="tech-badges">
                                    <span class="badge-tech">WordPress</span>
                                    <span class="badge-role">Lead Generation Site</span>
                                </div>
                            </div>

                            <p class="project-desc">
                                A professional website for a leading borehole drilling company, designed to generate leads and showcase their services across Gauteng.
                            </p>

                            <div class="project-cta">
                                <a href="https://www.hboreholedrilling.co.za/" class="btn-live" target="_blank" rel="noopener">View Live ↗</a>
                            </div>
                        </div>
                    </article>

                    <article class="project-card portfolio-card">
                        <div class="card-glow"></div>

                        <div class="project-media">
                            <img src="/Image/dbn.webp"
                                 alt="DBN">
                        </div>

                        <div class="project-body">
                            <div class="project-topline">
                                <h3 class="project-name">DBNmettlesa</h3>
                                <div class="tech-badges">
                                    <span class="badge-tech">WordPress</span>
            
                                </div>
                            </div>

                            <p class="project-desc">
                                Corporate website for a Durban-based steel supplier, crafted for credibility, trust, and seamless quote enquiries.
                            </p>

                            <div class="project-cta">
                                <a href="https://dbnmettlesa.co.za/" class="btn-live" target="_blank" rel="noopener">View Live ↗</a>
                            </div>
                        </div>
                    </article>

                    <article class="project-card portfolio-card">
                        <div class="card-glow"></div>

                        <div class="project-media">
                            <img src="/Image/boommarketing-preview.webp"
                                 alt="Boom Marketing Dashboard">
                        </div>

                        <div class="project-body">
                            <div class="project-topline">
                                <h3 class="project-name">Boom Marketing Dashboard</h3>
                                <div class="tech-badges">
                                    <span class="badge-tech">Laravel</span>
                                    <span class="badge-role">SME Marketing Suite</span>
                                </div>
                            </div>

                            <p class="project-desc">
                                Central dashboard where SMEs manage brand kits,
                                generate content, schedule posts, and track engagement.
                            </p>

                            <div class="project-cta">
                                <a href="#" class="btn-live" target="_blank" rel="noopener">View Live ↗</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- DESIGN & BRANDING GRID -->
                <div class="portfolio-showcase-grid" data-group="design">
                    <div class="portfolio-card">
                        <img src="/Image/flyer.webp" alt="Flyer">
                        <div class="card-content">
                            <div class="card-tags">
                                <span class="card-tag">Print Design</span>
                                <span class="card-tag">Event Marketing</span>
                            </div>
                            <h3 class="card-title">Event Poster & Flyer Design</h3>
                            <p class="card-desc">Bold, eye-catching promotional materials for a local arts festival, designed to create buzz and drive ticket sales across print and digital channels.</p>
                        </div>
                    </div>
                    <div class="portfolio-card span-col-2">
                        <img src="/Image/forsale.webp" alt="forsale">
                        <div class="card-content">
                            <div class="card-tags">
                                <span class="card-tag">Branding</span>
                                <span class="card-tag">Property Marketing</span>
                            </div>
                            <h3 class="card-title">"For Sale" Property Board</h3>
                            <p class="card-desc">A premium and highly visible signage system for a luxury real estate agency. The design ensures brand recognition and communicates quality from the kerb.</p>
                        </div>
                    </div>
                    <div class="portfolio-card">
                        <img src="/Image/bc.webp" alt="BC">
                        <div class="card-content">
                            <div class="card-tags">
                                <span class="card-tag">Branding</span>
                                <span class="card-tag">Identity</span>
                            </div>
                            <h3 class="card-title">Business Card Design</h3>
                            <p class="card-desc">A minimal, elegant contact card for a real estate agent, featuring clean typography and premium finishes to make a memorable first impression.</p>
                        </div>
                    </div>
                    <div class="portfolio-card">
                        <img src="/Image/ad.webp" alt="AD">
                        <div class="card-content">
                            <div class="card-tags">
                                <span class="card-tag">Social Campaign</span>
                            </div>
                            <h3 class="card-title">Social Media Ad Tile</h3>
                            <p class="card-desc">A scroll-stopping ad creative for a new property listing on Instagram and Facebook, optimized for mobile viewing and high engagement.</p>
                        </div>
                    </div>
                    <div class="portfolio-card">
                        <img src="/Image/car.webp" alt="car">
                        <div class="card-content">
                            <div class="card-tags">
                                <span class="card-tag">Vehicle Graphics</span>
                            </div>
                            <h3 class="card-title">Car Rear Window Branding</h3>
                            <p class="card-desc">Professional and legally compliant vehicle branding to turn a company car into a mobile marketing asset, increasing local brand visibility.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.portfolio-showcase-tab');
    const groups = document.querySelectorAll('.portfolio-showcase-grid');

    function filterGrid(filter) {
        // Update tab active states
        tabs.forEach(tab => {
            tab.classList.toggle('active', tab.dataset.filter === filter);
        });

        // Show/hide portfolio groups with a crossfade
        groups.forEach(group => {
            group.classList.toggle('active', group.dataset.group === filter);
        });
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
            const filter = e.target.dataset.filter;
            filterGrid(filter);

            // Optional: Update URL hash for shareability
            window.location.hash = filter;
        });
    });

    // Set initial state from URL hash or default to 'web'
    const initialFilter = window.location.hash.replace('#', '') || 'web';
    filterGrid(initialFilter);

    // Scroll animation with IntersectionObserver
    const cards = document.querySelectorAll('.portfolio-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1 // Trigger when 10% of the card is visible
    });

    cards.forEach(card => {
        observer.observe(card);
    });

});
</script>
@endpush
