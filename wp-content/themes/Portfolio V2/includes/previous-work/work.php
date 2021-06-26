<div class="container mt-5">
    <div class="row prevWork">
        <?php 
            $showPost = new WP_Query(array(
                    'posts_per_page' => 6,
                    'post_type' => 'prevwork',
                    'paged' => false,
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                ));

                    while($showPost->have_posts() !== false){ 
                    $showPost->the_post();  ?>
                        <div class="row__col__4 text-center prevWork__thumbs">
                            <div class="container ">
                                <img srcset="<?php echo get_field('small_image')?> 1x, <?php echo get_field('large_image')?> 2x" style="max-width: 34rem;" alt="">
                            </div>
                            <div class="container ">
                                <h1 class="my-2"><?php the_title()?></h1>
                                
                                <a href="<?php the_permalink();?>" class="btn mx-1">About</a>
                                <a href="<?php echo get_field('page_link');?>" target="_blank" class="btn mx-1">View</a>
                            </div>
                        </div>
                    <? } ?>

                    
    </div>
    <div class="container p-3 text-center">
        <?php 
            // $showCustomPostType->have_posts();
            $base = 99999;
            echo paginate_links(array(
            'base' => str_replace($base, '%#%', get_pagenum_link($base)),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $showPost->max_num_pages
            ));
        
            wp_reset_postdata();
        ?>
    </div>
</div>