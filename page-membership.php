<?php get_header(); ?>

<!-- ============================================================
     PAGE HERO
============================================================ -->
<section class="page-hero" aria-label="Membership overview">
    <div class="wrap--sm center">
        <p class="page-hero__sub">The Jaiye Concierge</p>
        <h1 class="page-hero__heading">Membership</h1>
        <p class="page-hero__sub" style="margin-bottom:2rem;">Three ways to work together.</p>
        <p class="page-hero__body">TJC is a private retainer service. Membership is not a subscription — it's an ongoing working relationship. We keep the client list small so the service stays personal.</p>
    </div>
</section>

<!-- ============================================================
     FOUNDING MEMBERS
============================================================ -->
<section class="section section--white">
    <div class="wrap--sm center">
        <span class="label">Founding Members</span>
        <span class="rule"></span>
        <h2 class="founding__heading">The first three.</h2>
        <p class="founding__body">We're opening Founding Membership to three clients per tier. The rate is locked for 24 months. Each Founding Member receives a tailored preferences workspace and the closeness that only comes from being there from the beginning.</p>
    </div>
</section>

<!-- ============================================================
     TIER OVERVIEW
============================================================ -->
<section class="section section--cream">
    <div class="wrap">
        <span class="label" style="text-align:center;display:block;margin-bottom:2.5rem;">Choose your tier</span>

        <div class="tiers-grid">

            <div class="tier-card">
                <span class="tier-card__name">Foundation</span>
                <p class="tier-card__desc">Entry tier — for occasional and seasonal use.</p>
                <span class="tier-card__price">£1,750 <span style="font-size:1rem;">/&nbsp;month</span></span>
                <span class="tier-card__price-note">Billed quarterly in advance. Founding Member rate locked for 24 months.</span>
            </div>

            <div class="tier-card tier-card--featured">
                <span class="label" style="color:rgba(181,151,90,0.75);margin-bottom:1rem;">Most popular</span>
                <span class="tier-card__name">Signature</span>
                <p class="tier-card__desc">The core tier — for regular use.</p>
                <span class="tier-card__price">£2,750 <span style="font-size:1rem;">/&nbsp;month</span></span>
                <span class="tier-card__price-note">Billed quarterly in advance. Founding Member rate locked for 24 months.</span>
            </div>

            <div class="tier-card">
                <span class="tier-card__name">Bespoke</span>
                <p class="tier-card__desc">Full retainer — think about almost nothing.</p>
                <span class="tier-card__price">£4,500 <span style="font-size:1rem;">/&nbsp;month</span></span>
                <span class="tier-card__price-note">Billed quarterly in advance. Founding Member rate locked for 24 months.</span>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     WHAT WE TAKE CARE OF
============================================================ -->
<section class="section section--white">
    <div class="wrap">
        <span class="label">What we take care of</span>
        <?php $tdir = esc_url( get_template_directory_uri() ); ?>
        <div class="membership-tiles-grid">

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/membership-transport.jpeg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Transport</h3>
                </div>
            </div>

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/membership-health.jpeg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Health Tourism</h3>
                </div>
            </div>

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/membership-entertainment-experience-bookings.jpeg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Entertainment &amp; Experiences</h3>
                </div>
            </div>

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/membership-personal-shopping.jpeg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Personal Shopping</h3>
                </div>
            </div>

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/membership-reservations.jpeg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Reservations</h3>
                </div>
            </div>

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/membership-sporting-events.jpg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Sporting Events</h3>
                </div>
            </div>

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/membership-home-managment.jpeg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Home Management</h3>
                </div>
            </div>

            <div class="service-tile service-tile--sm" style="--tile-img: url('<?php echo $tdir; ?>/assets/memebership-special-event.jpeg');">
                <div class="service-tile__inner">
                    <h3 class="service-tile__title">Special Events</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     FOUNDATION DETAIL
============================================================ -->
<section class="tier-detail section--white">
    <div class="wrap--mid">

        <span class="tier-detail__numeral">I.</span>
        <h2 class="tier-detail__name">Foundation</h2>
        <span class="tier-detail__price">£1,750 per month · billed quarterly</span>
        <p class="tier-detail__tagline">The entry tier — for occasional and seasonal use.</p>

        <div class="tier-detail__cols">
            <div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Included</span>
                    <ul class="tier-detail__list">
                        <li>Travel design and management, with FORA supplier perks</li>
                        <li>Lifestyle access — private events, cultural occasions, sold-out tables</li>
                        <li>Light personal logistics (one or two requests per month)</li>
                        <li>Quarterly check-in call</li>
                        <li>Pass-through costs reimbursed within 7 days, no markup</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Response</span>
                    <p class="tier-detail__info">WhatsApp and email Monday to Friday during working hours. Response within 4 working hours. Booked calls Tuesday to Thursday.</p>
                </div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Who's covered</span>
                    <p class="tier-detail__info">Principal client. Occasional partner request handled. Family covered separately on enquiry.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     SIGNATURE DETAIL
============================================================ -->
<section class="tier-detail section--cream">
    <div class="wrap--mid">

        <span class="tier-detail__numeral">II.</span>
        <h2 class="tier-detail__name">Signature</h2>
        <span class="tier-detail__price">£2,750 per month · billed quarterly</span>
        <p class="tier-detail__tagline">The core tier — for regular use, where most clients sit.</p>

        <div class="tier-detail__cols">
            <div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Included</span>
                    <ul class="tier-detail__list">
                        <li>Everything in Foundation</li>
                        <li>Same-day response during working hours</li>
                        <li>Health tourism coordination — one medical journey per year, accompanying logistics</li>
                        <li>Full personal logistics — school visits, viewings, document runs, cross-border shipping</li>
                        <li>Direct WhatsApp access to Steph during working hours</li>
                        <li>High-touch travel detailing — flight tracking, wake-up calls, in-destination support</li>
                        <li>Annual planning session</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Response</span>
                    <p class="tier-detail__info">Same-day during working hours. Active travel days covered in real time wherever the client is flying.</p>
                </div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Who's covered</span>
                    <p class="tier-detail__info">Principal plus partner (full coverage). Children under 18 included for occasional requests — school, family travel, events.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     BESPOKE DETAIL
============================================================ -->
<section class="tier-detail section--white">
    <div class="wrap--mid">

        <span class="tier-detail__numeral">III.</span>
        <h2 class="tier-detail__name">Bespoke</h2>
        <span class="tier-detail__price">£4,500 per month · billed quarterly</span>
        <p class="tier-detail__tagline">The full retainer — for clients who want to think about almost nothing.</p>

        <div class="tier-detail__cols">
            <div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Included</span>
                    <ul class="tier-detail__list">
                        <li>Everything in Signature</li>
                        <li>Priority response and limited out-of-hours access for genuine emergencies</li>
                        <li>Unlimited domestic travel design and bookings</li>
                        <li>Two health tourism journeys per year</li>
                        <li>Bespoke high-touch — proactive trip prep, surprise occasion planning, the kind of access most people don't know to ask for</li>
                        <li>Annual in-person lifestyle audit</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Response</span>
                    <p class="tier-detail__info">Within 30 minutes during working hours. Within 2 hours out of hours. Designated emergency line for travel disruption, medical, family.</p>
                </div>
                <div class="tier-detail__block">
                    <span class="tier-detail__block-label">Who's covered</span>
                    <p class="tier-detail__info">Principal plus immediate family — partner, children under 18, parents if living with or regularly visiting. Household staff coordination included.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     HOW IT WORKS
============================================================ -->
<section class="section section--cream">
    <div class="wrap--mid">
        <span class="label">How It Works</span>
        <h2 class="how__heading">The way we work.</h2>

        <div class="how-grid">

            <div>
                <span class="how-item__label">Billing</span>
                <p class="how-item__body">Quarterly in advance. Founding Members commit to a six-month minimum. Annual billing available at 10% discount after the first six months.</p>
            </div>

            <div>
                <span class="how-item__label">Communication</span>
                <p class="how-item__body">WhatsApp for live requests. Email for documents and records. Booked calls Tuesday to Thursday. A private workspace holds preferences, contacts, and key dates internally — clients don't need to manage anything.</p>
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
<section class="section section--white">
    <div class="wrap--sm center">
        <span class="label">Begin</span>
        <span class="rule"></span>
        <h2 class="cta-block__heading">Ready to begin?</h2>
        <p class="cta-block__body">Membership starts with a private conversation — no pitch deck, no sales call. Just a chance for us to understand your life, and for you to decide whether we're the right people for it.</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--dark">
            Get in touch
        </a>
    </div>
</section>

<?php get_footer(); ?>
