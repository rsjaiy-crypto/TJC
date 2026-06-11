<?php
get_header();
$t = esc_url( get_template_directory_uri() );
?>

<!-- ============================================================
     HERO CAROUSEL
============================================================ -->
<section class="hero-carousel" aria-label="Introduction">

    <div class="hero-slides">
        <div class="hero-slide" style="--slide-img: url('<?php echo $t; ?>/assets/Hero-Yacht.jpg');"></div>
        <div class="hero-slide" style="--slide-img: url('<?php echo $t; ?>/assets/Hero-Thailand.jpg');"></div>
        <div class="hero-slide" style="--slide-img: url('<?php echo $t; ?>/assets/Hero-Private-Jet.jpg');"></div>
        <div class="hero-slide" style="--slide-img: url('<?php echo $t; ?>/assets/Hero-Yacht-and%20-Sea.jpg');"></div>
    </div>

    <div class="hero-content">
        <em class="hero-word">Enjoy.</em>
        <p class="hero-sub">A private concierge service for Nigerians and the wider African diaspora.</p>
        <a href="<?php echo esc_url( home_url( '/membership/' ) ); ?>" class="btn-outline">
            Explore Membership
        </a>
    </div>

    <div class="hero-dots" aria-hidden="true">
        <button class="hero-dot"></button>
        <button class="hero-dot"></button>
        <button class="hero-dot"></button>
        <button class="hero-dot"></button>
    </div>

</section>

<!-- ============================================================
     PARTNER LOGOS — CONTINUOUS MARQUEE
============================================================ -->
<?php
$partners = [
    'partner-Virtuoso.png'                          => 'Virtuoso',
    'partner-Four-Seasons.png'                      => 'Four Seasons',
    'partner-rosewood.png'                          => 'Rosewood',
    'partner-dorchester-collection.png'             => 'Dorchester Collection',
    'partner-Oetker-Collection.png'                 => 'Oetker Collection',
    'partner-jumeirah.png'                          => 'Jumeirah',
    'partner-one-only.png'                          => 'One&Only',
    'Partner-Bellini-Club.png'                      => 'Bellini Club',
    'partner-belmond-bellini-club.png'              => 'Belmond Bellini Club',
    'partner-Design-Hotels.png'                     => 'Design Hotels',
    'partner-The_Leading_Hotels-of-the-World.png'   => 'The Leading Hotels of the World',
    'partner-preferred-hotels-and-resorts.png'      => 'Preferred Hotels & Resorts',
    'partner-relais.png'                            => 'Relais & Châteaux',
    'partner-slh.png'                               => 'Small Luxury Hotels',
    'partner-Fontenille.png'                        => 'Fontenille',
    'partner-Hyatt-Prive.png'                       => 'Hyatt Privé',
    'partner-hilton-impresario.png'                 => 'Hilton Impresario',
    'partner-InterContinental-Hotels-Group-Logo.png'=> 'IHG',
    'partner-Omni.png'                              => 'Omni Hotels',
    'partner-Standard-Hotels.png'                   => 'The Standard',
    'partner-firmdale.png'                          => 'Firmdale Hotels',
    'partner-mercer.png'                            => 'Mercer',
    'partner-fan-club.png'                          => 'Fan Club',
    'partner-pennclub.png'                          => 'Penn Club',
    'partner-Club1897.png'                          => 'Club 1897',
    'partner-COOLROOMS.png'                         => 'Cool Rooms',
    'partner-Couture.png'                           => 'Couture',
    'partner-RF.Knights.Black.png'                  => 'RF Knights',
];
?>
<section class="marquee-section" aria-label="Trusted partners">
    <p class="marquee-intro">Through our travel arm, Jaiye Journeys, we are proud members of the following luxury preferred partner programmes.</p>
    <div class="marquee-track">

        <div class="marquee-inner" aria-hidden="false">
            <?php foreach ( $partners as $file => $alt ) : ?>
            <img src="<?php echo $t; ?>/assets/<?php echo esc_attr( $file ); ?>"
                 alt="<?php echo esc_attr( $alt ); ?>"
                 class="partner-logo"
                 loading="lazy">
            <?php endforeach; ?>
        </div>

        <div class="marquee-inner" aria-hidden="true">
            <?php foreach ( $partners as $file => $alt ) : ?>
            <img src="<?php echo $t; ?>/assets/<?php echo esc_attr( $file ); ?>"
                 alt=""
                 class="partner-logo"
                 loading="lazy">
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ============================================================
     OUR PROMISE
============================================================ -->
<section class="promise-section">
    <div class="container--sm center">
        <span class="section-label">Our Promise</span>
        <span class="brass-rule"></span>
        <p class="promise-quote" id="promise-quote"></p>
        <script>
        (function () {
          var quotes = [
            "You’ve built a life worth enjoying.",
            "Enjoy your life. We’ll handle the rest.",
            "The life you’ve built deserves to be lived.",
            "Your time is the one thing we can’t replace."
          ];
          var el = document.getElementById('promise-quote');
          if (el) el.textContent = quotes[Math.floor(Math.random() * quotes.length)];
        })();
        </script>
        <p class="promise-body">We exist for people who have built lives worth enjoying, and rarely have the time to enjoy them. Our work is quiet, precise and personal: removing friction so the moments that matter are the ones you remember.</p>
        <p class="promise-pillars">Travel. Health. Access. Enjoyment.</p>
    </div>
</section>

<!-- ============================================================
     WHO WE SERVE
============================================================ -->
<section class="who-section">
    <div class="container">
        <span class="section-label">Who We Serve</span>
        <div class="who-grid">
            <h2 class="who-heading">Designed for the way you actually live.</h2>
            <div class="who-body">
                <p>London is part of your life. Sometimes your main base, sometimes a regular stop between Lagos, Accra, New York, Dubai, or wherever else home is. You've succeeded across entrepreneurship, finance, tech, law, or the creative industries. Time, not money, is the scarce resource.</p>
                <p>You already work with private specialists: your banker, your lawyer, your accountant. You don't yet have one person who coordinates the moving parts of your life.</p>
                <p>You travel often. Sometimes for business, sometimes for the moments that matter to your community: a society wedding in Lagos, a milestone birthday somewhere private, a discreet medical consultation in London. Your family is part of the equation.</p>
                <p>That's what we're here for.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     FOUR AREAS OF CRAFT
============================================================ -->
<section class="craft-section">
    <div class="container">
        <span class="section-label">What We Do</span>
        <h2 class="craft-heading">Four areas of craft.</h2>
    </div>

    <div class="craft-grid">

        <div class="craft-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-transport.jpeg');">
            <span class="craft-tile__num">I.</span>
            <div class="craft-tile__inner">
                <h3 class="craft-tile__title">Private Travel</h3>
                <p class="craft-tile__body">FORA-certified luxury travel advisory, delivered through Jaiye Journeys. Multi-city itineraries, private aviation and last-minute reroutes. Every journey handled from departure to return.</p>
            </div>
        </div>

        <div class="craft-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-health.jpeg');">
            <span class="craft-tile__num">II.</span>
            <div class="craft-tile__inner">
                <h3 class="craft-tile__title">Medical Concierge</h3>
                <p class="craft-tile__body">Specialist consultations in London, with end-to-end logistics from arrival to recovery. We don't give medical advice. We coordinate the people who do.</p>
            </div>
        </div>

        <div class="craft-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-entertainment-experience-bookings.jpeg');">
            <span class="craft-tile__num">III.</span>
            <div class="craft-tile__inner">
                <h3 class="craft-tile__title">Lifestyle &amp; Access</h3>
                <p class="craft-tile__body">Sold-out tables, private events, sporting and cultural occasions, weddings and milestone moments.</p>
            </div>
        </div>

        <div class="craft-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-home-managment.jpeg');">
            <span class="craft-tile__num">IV.</span>
            <div class="craft-tile__inner">
                <h3 class="craft-tile__title">Household &amp; Personal Logistics</h3>
                <p class="craft-tile__body">Property viewings, document handling, cross-border shipping and household coordination. A UK-based team on the ground for the things that have to happen in person.</p>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     WHY US
============================================================ -->
<section class="why-section">
    <div class="container">
        <span class="section-label">Why Us</span>
        <h2 class="why-heading">Why us.</h2>

        <div class="why-list">

            <div class="why-item">
                <span class="why-numeral">I.</span>
                <div>
                    <h3 class="why-title">Cultural fluency, by design.</h3>
                    <p class="why-body">Built for the African diaspora, by someone in the community. We understand the protocols, the calendar, the names, the assumptions you don't have to explain.</p>
                </div>
            </div>

            <div class="why-item">
                <span class="why-numeral">II.</span>
                <div>
                    <h3 class="why-title">Founder-led. Deliberately finite.</h3>
                    <p class="why-body">A small number of clients, served personally. You're not handed off to a junior account manager. The relationship is with the person whose name is on the door.</p>
                </div>
            </div>

            <div class="why-item">
                <span class="why-numeral">III.</span>
                <div>
                    <h3 class="why-title">Travel and health as specialisms.</h3>
                    <p class="why-body">Most concierges treat travel as a booking task and health as a referral. We treat both as core craft: FORA-certified travel advisory, medical concierge coordination from consultation to recovery.</p>
                </div>
            </div>

            <div class="why-item">
                <span class="why-numeral">IV.</span>
                <div>
                    <h3 class="why-title">The Jaiye ethos.</h3>
                    <p class="why-body">Jaiye is Yoruba for enjoy life. That's the working principle. We take the friction out of your life so you can actually enjoy it.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     MEMBERSHIP CTA
============================================================ -->
<section class="home-cta-section">
    <div class="container--sm center">
        <span class="section-label">Membership</span>
        <span class="brass-rule"></span>
        <h2 class="home-cta-heading">Membership is how we work together.</h2>
        <p class="home-cta-body">TJC operates on a private retainer. No ad-hoc bookings, no open enquiries. A small number of clients, each known well, each served properly.</p>
        <a href="<?php echo esc_url( home_url( '/membership/' ) ); ?>" class="btn-outline">
            View Membership
        </a>
    </div>
</section>

<?php get_footer(); ?>
