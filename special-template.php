<?php


/*
 Template Name: Special Layout
 */


get_header();

if(have_posts()):
    while (have_posts()): the_post();

        ?>

        <article class="post page">

            <?php if (has_children() OR $post->post_parent > 0) {?>

                <nav class="site-nav children-links clearfix">

                    <span class="parent-link">
                        <a href="<?php echo get_the_permalink(get_top_ancestor_id()) ;?>">
                            <?php echo get_the_title(get_top_ancestor_id()) ;?>
                        </a>
                    </span>

                    <ul>

                        <?php
                        $args = array(
                            'child_of' => get_top_ancestor_id(),
                            'title_li' => ''
                        );
                        ?>

                        <?php wp_list_pages($args);?>

                    </ul>

                </nav>

            <?php }?>

            <h2><?php the_title(); ?></h2>

            <div class="info-box">
                <h4>
                    <?php if (is_page('about-us')) {?>
                        Quote from the movie
                    <?php }else{?>
                        Disclaimer Title
                    <?php }?>
                </h4>

                <p>
                    <?php if (is_page('about-us')) {?>
                        - Genius, billionaire, playboy, philanthropist.
                    <?php }else{?>
                        In lacus massa, congue in eros vel, tincidunt bibendum lectus. Phasellus venenatis arcu vel gravida tincidunt.
                    <?php }?>
                </p>

                <?php if (is_page('about-us')) {?>
                    <h6>Anthony Stark aka Iron Man</h6>
                <?php }?>

            </div><!--/info-box-->

            <?php the_content(); ?>
        </article>

    <?php
    endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();
?>