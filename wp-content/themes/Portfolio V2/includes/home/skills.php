<div class="container__large skills">
    <div class="container skills__container">
        <div class="row skills__flexContainer text-center">
            <?php 
            $showPost = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'services',
                'paged' => false,
            ));

                while($showPost->have_posts() !== false){ 
                $showPost->the_post();  ?>
                <div class="row__col__4 skills__cols ">
                    <div class="container skills__cols__containers skills__cols__header">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Dev Work" >   
                    </div>
                    
                    <div class="container skills__cols__containers">
                        <h1><?php the_title()?></h1>
                        <p>
                            <?php the_content();?>
                        </p>
                    </div>
                    <div class="container skills__cols__containers">
                        <h1><?php echo get_field('home_page_cards_subtitle');?></h1>
                        <p><?php echo get_field('home_page_cards_subcontent');?></p>
                    </div>
                    <div class="container skills__cols__containers skills__cols__tools">
                        <h1><?php echo get_field('home_page_cards_tertiarytitle');?></h1>

                        <ul>
                            <li><?php echo get_field('list_item_one');?></li>
                            <li><?php echo get_field('list_item_two');?></li>
                            <li><?php echo get_field('list_item_three');?></li>
                            <li><?php echo get_field('list_item_four');?></li>
                            <li><?php echo get_field('list_item_five');?></li>
                            <li><?php echo get_field('list_item_six');?></li>
                            <li><?php echo get_field('list_item_seven');?></li>
                            <li><?php echo get_field('list_item_8');?></li>
                        </ul>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</div>