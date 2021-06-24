<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="UTF-8">
        <meta name="Keywords" content="helvin, rymer, helvin rymer, developer, web developer, full stack, developer, html, css, javascript, php, mysql, angular, bootstrap, NYC developer, wordpress, dev">
        <meta name="Description" content="Full Stack Web Developer">
        <meta name="Author" content="Helvin Rymer">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/3f2d85e662.js" crossorigin="anonymous"></script>

        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <meta charset="<?php bloginfo('charset');?>">
        <?php wp_head(); ?>
        <title>Helvin Rymer</title>
        <link rel="icon" href="<?php echo get_theme_file_uri('assets/favicon1.png'); ?>" type="image/x-icon" />
    </head>
    <body>
        <nav class="navigation">
            <div class="container navigation__container ml-0">
               <a href="index.html"><img src="<?php echo get_theme_file_uri('assets/logo2.png'); ?>" alt="Header Logo" class="headerLogo"></a>
            </div>
            
            <div class="container p-3 navigation__container sayHiBtn mr-0" >
                <a class="btn font-light">Say Hello</a>
            </div>
            
        </nav>

        <div class="hero__container">
            
            <div class="container text-center py-5 mt-5">
                <h1 class="d-4 mt-5 permanent-marker">Front-End &amp; Wordpress Developer</h1>
                <p class="mb-0">War is not the answer, for only love can conquer hate!</p>
                
            </div>
            <div class="container py-3 text-center">
                <img src="<?php echo get_theme_file_uri('assets/Octocat1.png')?>" style="max-width: 30rem;border-radius: 50%;" alt="">
            </div>
            <div class="container mb-0 text-center">
                <h1>hello... SVG Goes Here</h1>
            </div>
        </div>

        <div class="container__100w about">
            <div class="container text-center about__container p-5 font-light">
                <h1 class="d-3 permanent-marker">
                    Hi, I'm Helvin. Nice to meet you.
                </h1>
                <p style="font-size: 1.6rem;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia doloremque maiores dolores. Fugiat veritatis minima soluta. Incidunt, aperiam vitae illum modi odit debitis obcaecati laborum, accusamus nemo eligendi eos perferendis? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, totam! Ad, odit. Odit deleniti pariatur blanditiis eum quibusdam, placeat repellat obcaecati ullam qui sit tempora quidem nihil!
                </p>
            </div>
        </div>

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
                    ));



                     while($showPost->have_posts() !== false){ 
                        $showPost->the_post();  ?>
                            <div class="row__col__4 recent__col__4">
                                <div class="container recent__col__container">
                                    <img srcset="<?php echo get_field('small_image')?> 1x, <?php echo get_field('large_image')?> 2x" style="max-width: 34rem;" alt="">
                                </div>
                                <div class="container p-3 recent__col__container">
                                    <a href="<?php echo get_field('page_link');?>" target="_blank" class="btn">View</a>
                                </div>
                            </div>
                        <? } wp_reset_postdata(); ?>
                </div>
                <!-- <div class="container text-center p-4">
                    <a class="btn recent__button">See More</a>
                </div> -->
            </div>
        </div>

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
                            <img src="<?php echo get_the_post_thumbnail_url();?>"  alt="">
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

        <div class="container__100vw contact">
            <div class="container contact__container">
                <div class="row p-2 text-center contact__flexContainer font-light">
                    <div class="row__col__4">
                        <h1>Start a project</h1>
                    </div>
                    <div class="row__col__4 contact__flexContainer__middleCol">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. 
                        </p>
                    </div>
                    <div class="row__col__4">
                        <a class="btn font-light">
                            Let's do this
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container text-center footer__content p-3">
                <img src="<?php echo get_theme_file_uri('assets/Octocat1.png'); ?>" alt="">
                <p class="p-3 font-light">
                    Making all the mistakes I can and learning as I go...
                </p>
                <div class="container footer__content__icons">
                    <ul>
                        <li>
                            <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="" target="_blank"><i class="far fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="container footer__content__message text-center font-light">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores fugit accusantium nobis possimus sequi. Eos odio eligendi id quaerat laborum sapiente eum placeat. Illum distinctio, ex fugit consequuntur laudantium ducimus.
                    </p>
                </div>
            </div>
        </div>
        

        <script type="module" src="<?php echo get_theme_file_uri('js/script.js')?>"></script>
    </body>
</html>