<div class="container__100w recent">
    <div class="container text-center recent__header py-4">
        <h1 class="d-3 permanent-marker">My Recent Work!</h1>
        <p>Subline Goes Here... <a href="mailto:helvin@helvinrymer.com">Email Me</a></p>
    </div>
    <div class="container">
        <div class="row py-3 recent__flexContainer text-center">
            <?php 
            $showPost = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'prevwork',
                'paged' => false,
                'orderby' => 'meta_value',
                'order' => 'ASC'
            ));



                while($showPost->have_posts() !== false){ 
                $showPost->the_post();  ?>
                    <div class="row__col__4 recent__col__4 skills__thumbs">
                        <div class="container recent__col__container">
                            <img srcset="<?php echo get_field('small_image');?> 1x, <?php echo get_field('large_image');?> 2x" style="max-width: 34rem;" alt="">
                        </div>
                        <div class="container recent__col__container">
                            <h1 class="my-2"><?php the_title()?></h1>
                            <a href="<?php echo get_field('page_link');?>" target="_blank" class="btn">View</a>
                        </div>
                    </div>
                <? } wp_reset_postdata(); ?>
        </div>
        <div class="container text-center p-4">
            <a href="<?php echo esc_url(site_url('previous-work')); ?>" class="btn recent__button">See More</a>
        </div>
    </div>
</div>