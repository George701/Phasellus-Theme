<?php

get_header();?>

    <div class="site-content clearfix">

        <h3>Hello world!</h3>
        <h4>I am Phasellus Theme</h4>

            <?php if(have_posts()):
                while (have_posts()): the_post();

                    the_content();

                endwhile;

            else :
                echo '<p>No content found</p>';

            endif; ?>

            <div class="home-columns clearfix">

                <div class="one-half">
                    <?php
                    // opinion posts loop begins here
                    // category id : 4 & number of posts : 3 & order : title & order : alphabetic
                    // $updatePosts =  new WP_Query('cat=4&posts_per_page=4&orderby=title&order=ASC');
                    $updatePosts =  new WP_Query('cat=4&posts_per_page=3');

                    if ($updatePosts->have_posts()):
                        while ($updatePosts->have_posts()) : $updatePosts->the_post(); ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        <?php endwhile;

                    else :
                        // fallback no content message here

                    endif;

                    wp_reset_postdata();
                    ?>
                </div><!-- /one-half -->

                <div class="one-half last">

                    <?php
                    // news posts loop begins here
                    $newsPosts =  new WP_Query('cat=5&posts_per_page=3&orderby=title&order=ASC');

                    if ($newsPosts->have_posts()):
                        while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        <?php endwhile;

                    else :
                        // fallback no content message here

                    endif;

                    wp_reset_postdata();

                    ?>

                </div><!-- /one-half last -->

            </div>

    </div><!-- /site-content -->

    <div class="footer-widgets clearfix">

        <?php if(is_active_sidebar('footer1')) : ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer1'); ?>
            </div>
        <?php endif; ?>

        <?php if(is_active_sidebar('footer2')) : ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer2'); ?>
            </div>
        <?php endif; ?>

        <?php if(is_active_sidebar('footer3')) : ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer3'); ?>
            </div>
        <?php endif; ?>

        <?php if(is_active_sidebar('footer4')) : ?>
            <div class="footer-widget-area">
                <?php dynamic_sidebar('footer4'); ?>
            </div>
        <?php endif; ?>

    </div>

<?php get_footer();
?>