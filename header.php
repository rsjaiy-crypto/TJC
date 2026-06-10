<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="nav-inner">

        <nav class="nav-left" aria-label="Primary navigation">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
               <?php echo ( is_front_page() || is_home() ) ? 'class="current" aria-current="page"' : ''; ?>>Home</a>
            <a href="<?php echo esc_url( home_url( '/membership/' ) ); ?>"
               <?php echo is_page( 'membership' ) ? 'class="current" aria-current="page"' : ''; ?>>Membership</a>
        </nav>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/TJC-Logo.png"
                 alt="The Jaiye Concierge"
                 class="site-logo__img"
                 height="68"
                 width="auto">
        </a>

        <nav class="nav-right" aria-label="Secondary navigation">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
               <?php echo is_page( 'contact' ) ? 'class="current" aria-current="page"' : ''; ?>>Contact</a>
        </nav>

        <button class="nav-toggle" id="nav-toggle"
                aria-controls="nav-overlay"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<!-- Full-screen mobile overlay -->
<div class="nav-overlay" id="nav-overlay" role="dialog" aria-modal="true" aria-label="Navigation">
    <nav class="nav-overlay__links">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/membership/' ) ); ?>">Membership</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
    </nav>
</div>
