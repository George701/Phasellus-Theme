<article class="post <?php if (has_post_thumbnail()){ ?>has-thumbnail<?php }?>">

    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail');?></a>
    </div><!-- /post-thumbnail -->

    <h2>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h2>
    <!-- PHP date format -->
    <p class="post-info">

        <span>
            <?php the_time('F jS, Y g:i a'); ?> | by
        </span>

        <span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                <?php the_author();?>
            </a>| Posted in
        </span>

        <span>
            <?php

            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if ($categories){
                foreach ($categories as $category){

                    $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                }

                echo trim($output, $separator);
            }

            ?>
        </span>
    </p>

    <p id="post-content">
        <!--
           1) Ether create single.php file. copy index.php. In the single.php "... the_content()".
           In index.php "... the_excerpt()".
           2) Or use the condition statement below.
        -->
        <!--    --><?php
        //        if(is_singular()){
        //            the_content();
        //        }else {
        //            the_excerpt();}?>

        <?php the_excerpt(); ?>

        <span>
            <a href="<?php the_permalink(); ?>">Read more&raquo;</a>
        </span>
    </p>
</article>