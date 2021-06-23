<?php 
$showPost = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'page',
            'paged' => false,
        ));

        while($showPost->have_posts() !== false){ ?>
            <div>
                <h1>
                    <?php 
                        the_title(); 
                    ?>
                </h1>
            </div>
        <?php } ?>


        <?php wp_reset_postdata();?>