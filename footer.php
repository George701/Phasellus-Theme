    <footer class="site-footer">

        <nav class="site-nav">

            <?php

            $args = array(
                'theme_location' => 'footer'
            );

            ?>

            <?php wp_nav_menu($args); ?>

        </nav>

        <p class="site-footer-subsc">Do not forget to subscribe to always get the latest version of Phasellus Theme for your website!</p>

        <div>
            <input type="email" placeholder="Email" class="site-footer-subsc"/>
        </div>

        <div>
            <input type="submit" id="subscribesubmit" value="Subscribe" class="site-footer-subsc sbsc-btn">
        </div>

        <p class="site-footer-subsc"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>


    </footer>

</div> <!-- container -->

<?php wp_footer(); ?>

</body>
</html>