<?php get_header(); ?>

<main id="main" class="section section--white">
    <div class="wrap--mid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 style="font-family:var(--font-h);font-size:clamp(2rem,5vw,3.5rem);font-weight:300;color:var(--green);margin-bottom:2rem;">
                    <?php the_title(); ?>
                </h1>
                <div style="font-size:1rem;line-height:1.85;color:var(--text-mid);">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
