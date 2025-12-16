
<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; <?php echo date('Y'); ?> GadgetPLUS - All rights reserved.</p>
        <nav class="footer-nav">
            <a href="<?php echo home_url(); ?>">Home</a> |
            <a href="<?php echo home_url('/about'); ?>">About</a> |
            <a href="<?php echo home_url('/contact'); ?>">Contact</a>
        </nav>
    </div>
    <?php wp_footer(); ?>
</footer>
