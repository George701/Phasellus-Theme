<?php

    get_header();

    if(have_posts()): ?>

        <h2>Search results for: <?php
            if (!$_GET['s'] == ""){
                the_search_query();
            }else{
                echo "All Categories";
            }; ?>
        </h2>

    <?php
        while (have_posts()): the_post();


            get_template_part('content', get_post_format());

        endwhile;

        else :
            echo '<p>No content found</p>';

        endif;

        get_footer();
    ?>