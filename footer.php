<footer class="site-footer" role="contentinfo">
    <div class="footer-inner">

        <div class="footer-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/TJC-Logo.png"
                     alt="The Jaiye Concierge"
                     height="32"
                     width="auto">
            </a>
        </div>

        <nav class="footer-links" aria-label="Footer navigation">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <a href="<?php echo esc_url( home_url( '/membership/' ) ); ?>">Membership</a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
            <a href="mailto:enjoy@thejaiyeconcierge.com">Email</a>
            <a href="https://www.instagram.com/thejaiyeconcierge" target="_blank" rel="noopener noreferrer">Instagram</a>
        </nav>

        <div class="footer-right">
            <p class="footer-tagline">London based. Globally connected.<br>Deliberately few.</p>
            <p class="footer-legal">&copy; 2026 Jaiye International Ltd. All rights reserved.</p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
