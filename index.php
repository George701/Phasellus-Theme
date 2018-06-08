<?php
//$updatePosts =  new WP_Query('cat=4&posts_per_page=3');
//
//if ($updatePosts->have_posts()):
//    while ($updatePosts->have_posts()) : $updatePosts->the_post(); ?>
<!--        <h2><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h2>-->
<!--        --><?php //the_excerpt(); ?>
<!--    --><?php //endwhile;
//
//else :
//    // fallback no content message here
//
//endif;
//
//wp_reset_postdata();
//?>

<?php

    get_header();?>

    <div class="site-content clearfix">

        <div class="main-column">
            <?php

            $args = array(
                    'posts_per_page' => -1
            );

            $the_query = new WP_Query($args);

            if($the_query->have_posts()):
                while ($the_query->have_posts()): $the_query->the_post();

                    // get_post_format() is for asides, links, and galleries post formats
                    get_template_part('content', get_post_format());

                endwhile;

            else :
                echo '<p>No content found</p>';

            endif; ?>
        </div><!-- /main-column -->

        <?php if(is_active_sidebar('sidebar1')) : get_sidebar(); endif; ?>

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

    </div><!-- /footer-widgets -->

    <?php get_footer();
?>