<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f7f4ed">
    <meta name="description" content="Enjoy a relaxing home or hotel massage with JS Royal Massage. Professional male and female therapists available 24/7 across selected areas of Metro Manila.">
    <title>JS Royal Massage — Relaxation, Delivered</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>{!! preg_replace(['/^@import[^;]+;\s*/m', '/^@source[^;]+;\s*/m', '/@theme\s*\{[^}]*\}/s'], '', file_get_contents(resource_path('css/app.css'))) !!}</style>
    @endif
</head>
<body>
    <div class="announcement"><span class="announcement__dot"></span> A little calm, whenever you need it <span class="announcement__separator">·</span> Available 24/7</div>
    <header class="site-header" id="top">
        <div class="header-inner">
            <a class="brand" href="#top" aria-label="JS Royal Massage home">
                <img class="brand-logo" src="{{ asset('images/js-royal-massage.png') }}" alt="">
            </a>
            <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-nav"><span></span><span></span></button>
            <nav class="primary-nav" id="primary-nav" aria-label="Main navigation">
                <a href="#services">Our services</a>
                <a href="#how-it-works">How it works</a>
                <a href="#service-areas">Service areas</a>
                <a href="#about">About</a>
                <a href="#faq">FAQs</a>
                <a class="nav-cta" href="#contact">Contact us <span aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero hero--video">
            <div class="hero-copy">
                <p class="eyebrow"><span class="eyebrow-line"></span> HOME & HOTEL MASSAGE · 24/7</p>
                <h1>Make room<br>for <em>rest.</em></h1>
                <p class="hero-description">A moment to slow down, brought right to your door. Enjoy a relaxing massage in the comfort of your home or hotel, anywhere we serve in Metro Manila.</p>
                <div class="hero-actions">
                    <a class="button button--dark" href="tel:+639159184887" aria-label="Call JS Royal Massage to inquire">Call to inquire <span aria-hidden="true">↗</span></a>
                    <a class="text-link" href="#how-it-works">Discover how it works <span aria-hidden="true">↓</span></a>
                </div>
                <div class="hero-note"><span class="availability-icon" aria-hidden="true"><svg viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="7.5" stroke="currentColor"/><path d="M10 5.5V10l3 1.8" stroke="currentColor" stroke-linecap="round"/></svg></span><span><strong>Here when you need us</strong><small>Fully vaccinated therapists · male and female · 24/7</small></span></div>
            </div>
            <div class="hero-visual">
                <img class="hero-image" src="{{ asset('images/hero-massage-video.jpg') }}" alt="" fetchpriority="high">
                <video class="hero-video" muted loop playsinline preload="none" poster="{{ asset('images/hero-massage-video.jpg') }}" aria-hidden="true"><source src="{{ asset('videos/hero-massage.mp4') }}" type="video/mp4"></video>
                <span class="hero-service-label">IN-HOME MASSAGE <i></i> AVAILABLE 24/7</span>
                <div class="image-caption"><span class="caption-kicker">YOUR SPACE. YOUR TIME.</span><span>Leave the day<br>behind.</span></div>
            </div>
        </section>

        <section class="promise-strip" aria-label="Service highlights">
            <div class="promise-inner">
                <div class="promise-item"><span class="promise-icon" aria-hidden="true">✳</span><span><strong>Available around the clock</strong><small>Therapists available, 24 hours a day</small></span></div>
                <span class="promise-divider" aria-hidden="true"></span>
                <div class="promise-item"><span class="promise-icon" aria-hidden="true">⌂</span><span><strong>At home or at your hotel</strong><small>Relax in a space that feels like yours</small></span></div>
                <span class="promise-divider" aria-hidden="true"></span>
                <div class="promise-item"><span class="promise-icon" aria-hidden="true">◌</span><span><strong>Fully vaccinated therapists</strong><small>Professional male and female therapists</small></span></div>
            </div>
        </section>

        <section class="services-section" id="services">
          <div class="services-inner section-shell">
            <div class="services-layout">
              <aside class="services-intro">
                <p class="eyebrow"><span class="eyebrow-line"></span> OUR SERVICES · THE SERVICE MENU</p>
                <h2>Choose your<br><em>kind of calm.</em></h2>
                <p class="services-intro-copy">From a restorative massage to a little extra self-care, find the experience that feels right for you.</p>
                <div class="services-count"><span>11</span><p>ways to make<br>room for rest</p></div>
                <a class="button button--light" href="tel:+639159184887">Call to inquire <span aria-hidden="true">↗</span></a>
                <div class="services-intro-note"><span class="service-sparkle" aria-hidden="true">✳</span><p>Ask us about availability, travel arrangements, and the best option for your location.</p></div>
              </aside>
              <div class="services-grid">
                <article class="service-card service-card--featured"><div class="service-image"><img src="{{ asset('images/service-royal.jpg') }}" alt="Two clients receive a synchronized Royal Signature massage" loading="lazy"><span class="service-index">06</span><span class="service-featured-label">THE SIGNATURE EXPERIENCE</span></div><div class="service-card-body"><span class="service-overline">JS ROYAL FAVORITE</span><h3>Royal Signature Massage</h3><p>A combination of Swedish massage, Shiatsu massage, and stretching.</p><div class="service-card-footer"><span class="service-price">₱699 <small>/ 90 mins</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Royal Signature Massage">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-swedish.jpg') }}" alt="A therapist performs a relaxing back massage using long strokes" loading="lazy"><span class="service-index">01</span></div><div class="service-card-body"><h3>Swedish Massage</h3><p>Long, flowing strokes with mineral-scented oils for a relaxing massage experience.</p><div class="service-card-footer"><span class="service-price">₱399 <small>/ 1 hour</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Swedish Massage">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-shiatsu.jpg') }}" alt="A therapist applies Shiatsu hand pressure across the upper back" loading="lazy"><span class="service-index">02</span></div><div class="service-card-body"><h3>Shiatsu Dry Massage</h3><p>Uses finger, thumb, and palm pressure across the body.</p><div class="service-card-footer"><span class="service-price">₱399 <small>/ 1 hour</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Shiatsu Dry Massage">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-reflexology.jpg') }}" alt="A reflexology treatment focuses on the feet and hands" loading="lazy"><span class="service-index">03</span></div><div class="service-card-body"><h3>Reflexology</h3><p>A focused treatment applying varying pressure to the feet and hands.</p><div class="service-card-footer"><span class="service-price">₱399 <small>/ 1 hour</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Reflexology">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-prenatal.jpg') }}" alt="A prenatal massage is performed for an expectant mother" loading="lazy"><span class="service-index">04</span></div><div class="service-card-body"><h3>Pre-Natal Massage</h3><p>A massage experience focused on comfort during pregnancy.</p><div class="service-card-footer"><span class="service-price">₱399 <small>/ 1 hour</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Pre-Natal Massage">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-twin.jpg') }}" alt="Two therapists perform a synchronized massage on one client" loading="lazy"><span class="service-index">05</span></div><div class="service-card-body"><h3>Twin Massage</h3><p>A synchronized massage experience with two professional therapists.</p><div class="service-card-footer"><span class="service-price">₱1,200 <small>/ 90 mins</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Twin Massage">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-ventosa.jpg') }}" alt="A therapist applies cupping during a Ventosa massage" loading="lazy"><span class="service-index">07</span></div><div class="service-card-body"><h3>Ventosa with Massage</h3><p>Cupping with heated glass may leave round marks on the skin for a few days.</p><div class="service-card-footer"><span class="service-price">₱899 <small>/ 2 hours</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Ventosa with Massage">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-bodyscrub.jpg') }}" alt="An exfoliating body scrub is applied during a massage" loading="lazy"><span class="service-index">08</span></div><div class="service-card-body"><h3>Body Scrub with Massage</h3><p>A body scrub paired with a relaxing massage.</p><div class="service-card-footer"><span class="service-price">₱899 <small>/ 2 hours</small></span><a href="tel:+639159184887" aria-label="Call to inquire about Body Scrub with Massage">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-footspa.jpg') }}" alt="A soothing foot spa treatment with flowers" loading="lazy"><span class="service-index">09</span></div><div class="service-card-body"><h3>Royal Foot Spa</h3><p>Take a little time to give your feet a relaxing reset.</p><div class="service-card-footer"><span class="service-price">₱299</span><a href="tel:+639159184887" aria-label="Call to inquire about Royal Foot Spa">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-manipedi.jpg') }}" alt="A manicure and pedicure treatment with a flower detail" loading="lazy"><span class="service-index">10</span></div><div class="service-card-body"><h3>Mani-Pedi</h3><p>A simple self-care moment for hands and feet.</p><div class="service-card-footer"><span class="service-price">₱299</span><a href="tel:+639159184887" aria-label="Call to inquire about Mani-Pedi">↗</a></div></div></article>
                <article class="service-card"><div class="service-image"><img src="{{ asset('images/service-earcandling.jpg') }}" alt="An ear candling treatment is performed in a calm room" loading="lazy"><span class="service-index">11</span></div><div class="service-card-body"><h3>Ear Candling</h3><p>Contact our team for details about this service.</p><div class="service-card-footer"><span class="service-price">₱250</span><a href="tel:+639159184887" aria-label="Call to inquire about Ear Candling">↗</a></div></div></article>
              </div>
            </div>
            <div class="services-note"><span>PLEASE NOTE</span><p>Minimum 2-hour booking may apply depending on location, time, and traffic. Additional transportation fees may apply in some areas. Please call to confirm availability and current details.</p></div>
          </div>
        </section>

        <section class="experience-section section-shell" id="experience">
            <div class="section-heading section-heading--split">
                <div><p class="eyebrow"><span class="eyebrow-line"></span> A BETTER WAY TO UNWIND</p><h2>Your time,<br><em>your place.</em></h2></div>
                <p class="section-intro">No trip across town. No rush to get back. Just a relaxing massage, arranged around the place where you feel most at ease.</p>
            </div>
            <div class="experience-grid">
                <article class="experience-card experience-card--large">
                    <img src="{{ asset('images/massage-room.jpg') }}" alt="A softly lit room prepared for a relaxing massage" loading="lazy">
                    <div class="experience-overlay"><span class="card-number">01</span><div><h3>At home</h3><p>Settle into the comfort of your own space.</p></div><a href="#contact" aria-label="Call to inquire about a massage at home">↗</a></div>
                </article>
                <article class="experience-card">
                    <img src="{{ asset('images/hotel-spa.jpg') }}" alt="A peaceful massage room with warm, calming details" loading="lazy">
                    <div class="experience-overlay"><span class="card-number">02</span><div><h3>At your hotel</h3><p>Make your stay a little more restful.</p></div><a href="#contact" aria-label="Call to inquire about a massage at your hotel">↗</a></div>
                </article>
                <article class="experience-card experience-card--wide">
                    <img src="{{ asset('images/spa-hero.jpg') }}" alt="A bottle of massage oil, soft towels, and flowers prepared for a quiet moment" loading="lazy">
                    <div class="experience-overlay"><span class="card-number">03</span><div><h3>A moment to reset</h3><p>Take an hour or two to simply unwind.</p></div><a href="#contact" aria-label="Contact us to book a massage">↗</a></div>
                </article>
            </div>
            <p class="section-footnote">Ask our team about available massage options, session duration, and your preferred schedule.</p>
        </section>

        <section class="booking-section" id="how-it-works">
            <div class="booking-inner section-shell">
                <div class="booking-intro"><p class="eyebrow eyebrow--light"><span class="eyebrow-line"></span> EASY DOES IT</p><h2>Three little steps<br>to <em>feeling better.</em></h2><p>Our team is here to help make arranging your massage simple.</p><a class="button button--light" href="tel:+639159184887">Call to arrange <span aria-hidden="true">↗</span></a></div>
                <div class="steps-list">
                    <article class="step"><span class="step-number">01</span><div><h3>Tell us what you need</h3><p>Let us know your preferred service, schedule, and location.</p></div><span class="step-mark" aria-hidden="true">✳</span></article>
                    <article class="step"><span class="step-number">02</span><div><h3>Confirm the details</h3><p>Contact our team to discuss availability and arrangements for your area.</p></div><span class="step-mark" aria-hidden="true">✳</span></article>
                    <article class="step"><span class="step-number">03</span><div><h3>Enjoy your time to unwind</h3><p>Get comfortable at home or in your hotel and let yourself slow down.</p></div><span class="step-mark" aria-hidden="true">✳</span></article>
                </div>
            </div>
        </section>

        <section class="areas-section section-shell" id="service-areas">
            <div class="areas-visual" aria-hidden="true"><div class="areas-visual-orbit areas-visual-orbit--outer"></div><div class="areas-visual-orbit areas-visual-orbit--inner"></div><span class="areas-visual-badge"><i></i> METRO MANILA SERVICE</span><span class="areas-visual-marker areas-visual-marker--top"></span><span class="areas-visual-marker areas-visual-marker--right"></span><span class="areas-visual-marker areas-visual-marker--lower-right"></span><span class="areas-visual-marker areas-visual-marker--lower-left"></span><span class="areas-visual-marker areas-visual-marker--left"></span><div class="areas-visual-center"><svg viewBox="0 0 120 120" fill="none"><path d="M22 56.5 60 26l38 30.5v39a5.5 5.5 0 0 1-5.5 5.5h-65a5.5 5.5 0 0 1-5.5-5.5v-39Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M47 101V69h26v32M39 56h42" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M16 39c6-5 11-6 16-5m56-2c7 0 12 2 17 7M18 89c-3 5-4 10-3 15m91-13c2 5 3 10 2 15" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg></div><div class="areas-visual-copy"><span>HOME & HOTEL MASSAGE</span><strong>24<span>/7</span></strong><small>A little calm, brought to you.</small></div></div>
            <div class="areas-content"><p class="eyebrow"><span class="eyebrow-line"></span> CLOSE TO YOU</p><h2>Relaxation,<br><em>around the city.</em></h2><p class="section-intro">We bring home and hotel massage service to selected areas across Metro Manila. Contact us to confirm availability in your location.</p>
                <div class="area-tags"><span>Makati</span><span>Pasay</span><span>Parañaque</span><span>Taguig</span><span>Mandaluyong</span><span>San Juan</span><span>Ortigas</span><span>Pasig</span><span>Selected parts of Manila</span></div>
                <a class="text-link text-link--dark" href="#contact">Check your area with us <span aria-hidden="true">↗</span></a>
            </div>
        </section>

        <section class="about-section" id="about">
            <div class="about-image"><img src="{{ asset('images/wellness-room.jpg') }}" alt="A calm, warm-toned wellness space" loading="lazy"><span class="about-image-label">A LITTLE SPACE TO BREATHE</span></div>
            <div class="about-copy"><p class="eyebrow"><span class="eyebrow-line"></span> THE JS ROYAL WAY</p><h2>Good care,<br><em>where you are.</em></h2><p>Enjoy a quality, relaxing massage in the comfort of your home or hotel. JS Royal Massage has fully vaccinated, professional male and female therapists ready to accommodate you, 24/7.</p><p>We believe a little time to rest should fit into your day, wherever you happen to be.</p><div class="about-signoff"><span class="signoff-mark">JS</span><span><strong>JS Royal Massage</strong><small>YOUR COMFORT, YOUR WAY</small></span></div></div>
        </section>

        <section class="faq-section section-shell" id="faq">
            <div class="faq-heading"><p class="eyebrow"><span class="eyebrow-line"></span> GOOD TO KNOW</p><h2>A few things<br><em>you may wonder.</em></h2><p>Need a detail we haven’t covered? Our team is happy to help by phone.</p><a class="text-link text-link--dark" href="tel:+639159184887">Talk to our team <span aria-hidden="true">↗</span></a></div>
            <div class="faq-list">
                <details class="faq-item"><summary>Is the service available 24/7?<span class="faq-plus" aria-hidden="true"></span></summary><p>Yes. Our professional male and female therapists are available to accommodate you 24/7. Call to discuss your preferred schedule.</p></details>
                <details class="faq-item"><summary>Which areas do you serve?<span class="faq-plus" aria-hidden="true"></span></summary><p>We serve Makati, Pasay, Parañaque, Taguig, Mandaluyong, San Juan, Ortigas, Pasig, and selected parts of Manila. Please contact us to confirm availability in your area.</p></details>
                <details class="faq-item"><summary>How do I book an appointment?<span class="faq-plus" aria-hidden="true"></span></summary><p>Call us at 0915-918-4887 (Globe) or 0921-627-6549 (Smart) to discuss your preferred schedule and location.</p></details>
                <details class="faq-item"><summary>Can I request a male or female therapist?<span class="faq-plus" aria-hidden="true"></span></summary><p>We have fully vaccinated, professional male and female therapists. Contact our team to discuss your preference and availability.</p></details>
                <details class="faq-item"><summary>What massage options and session times are available?<span class="faq-plus" aria-hidden="true"></span></summary><p>Available options and session duration can vary. Please call our team for the latest details.</p></details>
                <details class="faq-item"><summary>Are there additional travel fees?<span class="faq-plus" aria-hidden="true"></span></summary><p>Travel arrangements may depend on your location. Contact us to confirm any applicable details before booking.</p></details>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <div class="contact-inner section-shell"><div><p class="eyebrow eyebrow--light"><span class="eyebrow-line"></span> TAKE A MOMENT FOR YOU</p><h2>Your rest is<br><em>just a call away.</em></h2><p>Book your home or hotel massage with JS Royal Massage.</p></div><div class="contact-actions"><a class="button button--gold" href="tel:+639159184887">Call to book <span aria-hidden="true">↗</span></a><a class="contact-number" href="tel:+639159184887"><span>GLOBE</span>0915-918-4887</a><a class="contact-number" href="tel:+639216276549"><span>SMART</span>0921-627-6549</a></div><span class="contact-flower" aria-hidden="true">✳</span></div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-main section-shell"><div class="footer-brand"><a class="brand brand--footer" href="#top" aria-label="JS Royal Massage home"><img class="brand-logo" src="{{ asset('images/js-royal-massage.png') }}" alt="JS Royal Massage"></a><p>Relaxing home and hotel massage service, available 24/7 across selected areas of Metro Manila.</p></div>
            <div class="footer-column"><span class="footer-label">EXPLORE</span><a href="#services">Our services</a><a href="#how-it-works">How it works</a><a href="#service-areas">Service areas</a><a href="#faq">FAQs</a></div>
            <div class="footer-column"><span class="footer-label">GET IN TOUCH</span><a href="tel:+639159184887">0915-918-4887 · Globe</a><a href="tel:+639216276549">0921-627-6549 · Smart</a><a class="footer-facebook" href="https://www.facebook.com/JSRoyalMassage" target="_blank" rel="noopener noreferrer"><span class="footer-facebook-mark" aria-hidden="true">f</span><span class="footer-facebook-copy"><strong>Follow our page</strong><small>JS Royal Massage</small></span><span class="footer-facebook-arrow" aria-hidden="true">&#8599;</span></a></div>
            <div class="footer-column footer-areas"><span class="footer-label">SELECTED AREAS</span><p>Makati · Pasay · Parañaque · Taguig · Mandaluyong · San Juan · Ortigas · Pasig · parts of Manila</p></div>
        </div>
        <div class="footer-bottom section-shell"><span>© {{ date('Y') }} JS Royal Massage</span><span>Made for a more restful day.</span><a href="#top">Back to top ↑</a></div>
    </footer>

    <div class="mobile-booking" aria-label="Quick contact options"><a href="tel:+639159184887"><span aria-hidden="true">☎</span> Call</a><a href="#contact">Contact us <span aria-hidden="true">↗</span></a></div>
    @if (! (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))))
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const primaryNav = document.querySelector('#primary-nav');
        if (menuToggle && primaryNav) {
            const closeMenu = () => {
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.setAttribute('aria-label', 'Open navigation');
                primaryNav.classList.remove('is-open');
            };
            menuToggle.addEventListener('click', () => {
                const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
                menuToggle.setAttribute('aria-expanded', String(!isOpen));
                menuToggle.setAttribute('aria-label', isOpen ? 'Open navigation' : 'Close navigation');
                primaryNav.classList.toggle('is-open', !isOpen);
            });
            primaryNav.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
            document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closeMenu(); });
        }
    </script>
    @endif
    <script>
        window.addEventListener('load', () => {
            const video = document.querySelector('.hero-video');
            const slowConnection = navigator.connection?.saveData || /(^|-)2g$/.test(navigator.connection?.effectiveType || '');
            if (!video || window.matchMedia('(prefers-reduced-motion: reduce)').matches || slowConnection) return;
            video.play().catch(() => {});
        }, { once: true });
    </script>
</body>
</html>
