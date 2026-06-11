<?php
get_header();
$t = esc_url( get_template_directory_uri() );
?>

<!-- ============================================================
     PAGE HERO
============================================================ -->
<section class="page-hero-solid" aria-label="Membership">
    <div class="page-hero-solid__inner">
        <span class="page-hero-label">The Jaiye Concierge</span>
        <h1 class="page-hero-heading">Membership</h1>
        <p class="page-hero-sub">Three ways to work together.</p>
        <p class="page-hero-body">TJC is a private retainer service. Membership is not a subscription. It's an ongoing working relationship. We keep the client list small so the service stays personal.</p>
    </div>
</section>

<!-- ============================================================
     TIER I — FOUNDATION
============================================================ -->
<section class="tier-block tier-block--foundation">
    <div class="tier-inner--left">

        <span class="tier-numeral">I.</span>
        <h2 class="tier-name">Foundation</h2>
        <span class="tier-price">£1,750 / month</span>
        <span class="tier-billing">Billed quarterly in advance.</span>
        <p class="tier-tagline">The entry tier, for occasional and seasonal use.</p>
        <span class="tier-divider"></span>

        <div class="tier-cols">
            <div>
                <span class="tier-block-label">Included</span>
                <ul class="tier-list">
                    <li>Travel design and management, with FORA supplier perks</li>
                    <li>Lifestyle access: private events, cultural occasions, sold-out tables</li>
                    <li>Light personal logistics (one or two requests per month)</li>
                    <li>Quarterly check-in call</li>
                    <li>Pass-through costs reimbursed within 7 days, no markup</li>
                </ul>
            </div>
            <div>
                <div class="tier-info-block">
                    <span class="tier-block-label">Response</span>
                    <p class="tier-info">WhatsApp and email Monday to Friday during working hours. Response within 4 working hours. Booked calls Tuesday to Thursday.</p>
                </div>
                <div class="tier-info-block">
                    <span class="tier-block-label">Who's covered</span>
                    <p class="tier-info">Principal client. Occasional partner request handled. Family covered separately on enquiry.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     TIER II — SIGNATURE
============================================================ -->
<section class="tier-block tier-block--signature">
    <div class="tier-inner--centre">

        <span class="tier-numeral">II.</span>
        <h2 class="tier-name">Signature</h2>
        <span class="tier-price">£2,750 / month</span>
        <span class="tier-billing">Billed quarterly in advance.</span>
        <p class="tier-tagline">The core tier, for regular use, where most clients sit.</p>
        <span class="tier-divider"></span>

        <div class="tier-cols" style="text-align:left;">
            <div>
                <span class="tier-block-label">Included</span>
                <ul class="tier-list">
                    <li>Everything in Foundation</li>
                    <li>Same-day response during working hours</li>
                    <li>Medical concierge support. One medical journey per year, with accompanying logistics</li>
                    <li>Full personal logistics: viewings, document runs, cross-border shipping</li>
                    <li>Direct WhatsApp access to Steph during working hours</li>
                    <li>High-touch travel detailing: flight tracking, wake-up calls, in-destination support</li>
                    <li>Annual planning session</li>
                </ul>
            </div>
            <div>
                <div class="tier-info-block">
                    <span class="tier-block-label">Response</span>
                    <p class="tier-info">Same-day during working hours. Active travel days covered in real time wherever the client is flying.</p>
                </div>
                <div class="tier-info-block">
                    <span class="tier-block-label">Who's covered</span>
                    <p class="tier-info">Principal plus partner (full coverage). Children under 18 included for occasional requests such as family travel and events.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     TIER III — BESPOKE
============================================================ -->
<section class="tier-block tier-block--bespoke">
    <div class="tier-inner--right">

        <span class="tier-numeral">III.</span>
        <h2 class="tier-name">Bespoke</h2>
        <span class="tier-price">£4,500 / month</span>
        <span class="tier-billing">Billed quarterly in advance.</span>
        <p class="tier-tagline">The full retainer, for clients who want to think about almost nothing.</p>
        <span class="tier-divider"></span>

        <div class="tier-cols" style="text-align:left;">
            <div>
                <span class="tier-block-label">Included</span>
                <ul class="tier-list">
                    <li>Everything in Signature</li>
                    <li>Priority response and limited out-of-hours access for genuine emergencies</li>
                    <li>Unlimited domestic travel design and bookings</li>
                    <li>Two medical concierge journeys per year</li>
                    <li>Bespoke high-touch: proactive trip prep, surprise occasion planning, the kind of access most people don't know to ask for</li>
                    <li>Annual in-person lifestyle audit</li>
                </ul>
            </div>
            <div>
                <div class="tier-info-block">
                    <span class="tier-block-label">Response</span>
                    <p class="tier-info">Within 30 minutes during working hours. Within 2 hours out of hours. Designated emergency line for travel disruption, medical, family.</p>
                </div>
                <div class="tier-info-block">
                    <span class="tier-block-label">Who's covered</span>
                    <p class="tier-info">Principal plus immediate family: partner, children under 18, parents if living with or regularly visiting. Household staff coordination included.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     WHAT WE TAKE CARE OF
============================================================ -->
<section class="membership-tiles-section">
    <div class="container">
        <span class="section-label">What we take care of</span>
        <h2 class="membership-tiles-heading">The full picture.</h2>
    </div>

    <div class="membership-tiles-grid">

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-transport.jpeg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Private Travel</h3>
                <p class="mem-tile__desc">FORA-certified luxury travel advisory, delivered through Jaiye Journeys. Multi-city itineraries, private aviation and last-minute reroutes. Every journey handled from departure to return.</p>
            </div>
        </div>

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-health.jpeg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Medical Concierge</h3>
                <p class="mem-tile__desc">Specialist consultations, clinic coordination and end-to-end logistics from your first appointment to full recovery.</p>
            </div>
        </div>

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-reservations.jpeg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Table &amp; Venue Bookings</h3>
                <p class="mem-tile__desc">The reservation you couldn't get. The table that wasn't available. Consider it handled.</p>
            </div>
        </div>

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-entertainment-experience-bookings.jpeg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Event &amp; Experience Bookings</h3>
                <p class="mem-tile__desc">Concerts, cultural moments, private viewings and experiences worth remembering. Sourced and secured.</p>
            </div>
        </div>

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-sporting-events.jpg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Sporting Event Bookings</h3>
                <p class="mem-tile__desc">Hospitality, tickets and access for the fixtures, races and tournaments that matter to you.</p>
            </div>
        </div>

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/memebership-special-event.jpeg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Special Occasions &amp; Celebrations</h3>
                <p class="mem-tile__desc">Milestone birthdays, anniversaries and private celebrations, designed around the people who matter most.</p>
            </div>
        </div>

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-personal-shopping.jpeg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Personal Shopping</h3>
                <p class="mem-tile__desc">Dedicated access to the collections, boutiques and pieces worth owning.</p>
            </div>
        </div>

        <div class="mem-tile" style="--tile-img: url('<?php echo $t; ?>/assets/membership-home-managment.jpeg');">
            <div class="mem-tile__inner">
                <h3 class="mem-tile__title">Household &amp; Estate Management</h3>
                <p class="mem-tile__desc">Comprehensive support to keep every part of your household in order. Property viewings, document handling, cross-border shipping and household coordination, all taken care of.</p>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     HOW IT WORKS
============================================================ -->
<section class="how-section">
    <div class="container--mid">
        <span class="section-label">How It Works</span>
        <h2 class="how-heading">The way we work.</h2>

        <div class="how-grid">

            <div>
                <span class="how-item__label">Billing</span>
                <p class="how-item__body">Quarterly in advance, with a six-month minimum commitment. Annual billing available at 10% discount after the first six months.</p>
            </div>

            <div>
                <span class="how-item__label">Communication</span>
                <p class="how-item__body">WhatsApp for live requests. Email for documents and records. Booked calls Tuesday to Thursday. A private workspace holds preferences, contacts, and key dates internally. Clients don't need to manage anything.</p>
            </div>

            <div>
                <span class="how-item__label">Onboarding</span>
                <p class="how-item__body">Welcome call within 7 days of signing. Detailed preferences captured in the first two weeks. First proactive output by day 30. A 30-day refinement call to fine-tune.</p>
            </div>

            <div>
                <span class="how-item__label">Cancellation</span>
                <p class="how-item__body">30 days written notice after the minimum commitment. Service runs to the end of the current paid quarter.</p>
            </div>

            <div>
                <span class="how-item__label">Geography</span>
                <p class="how-item__body">Travel design is global. Lifestyle access is strongest in London, with reach into New York, Paris, Lagos, and Dubai. On-the-ground personal logistics are UK-only. Remote support available anywhere.</p>
            </div>

            <div>
                <span class="how-item__label">When Steph travels</span>
                <p class="how-item__body">Service continuity is held by the UK-based team without downgrade. Steph remains the relationship lead and is reachable for strategic decisions and active client travel.</p>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     CTA
============================================================ -->
<section class="page-cta-section">
    <div class="container--sm center">
        <span class="section-label">Begin</span>
        <span class="brass-rule"></span>
        <h2 class="page-cta-heading">Ready to begin?</h2>
        <p class="page-cta-body">Membership starts with a private conversation. No pitch deck, no sales call. Just a chance for us to understand your life, and for you to decide whether we're the right people for it.</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-outline">
            Get in touch
        </a>
    </div>
</section>

<?php get_footer(); ?>
