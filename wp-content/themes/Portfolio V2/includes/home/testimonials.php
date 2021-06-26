<div class="container__100vw testimonials">
    <div class="container px-5 mt-5 text-center">
        <h1 class="d-3 permanent-marker">Testimonials</h1>
    </div>
    <?php 
        $showPost = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'testimonial',
            'paged' => false,
        ));

        if($showPost->have_posts() !== false){ 
            $showPost->the_post(); ?>
            <div class="container testimonials__card px-5 text-center">
                <div class="container testimonials__card__img">
                    <!-- <img src="<?php // echo get_the_post_thumbnail_url();?>"  alt=""> -->
                </div>
                <div class="container py-4 testimonials__card__review" style="max-width: 80rem;">
                    <h1><?php the_title(); ?></h1>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
        <?php } wp_reset_postdata(); ?>
    
</div>