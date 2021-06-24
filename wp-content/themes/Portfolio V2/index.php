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
                    
                    <div class="row__col__4 skills__cols ">
                                           
                        <div class="container skills__cols__containers skills__cols__header">
                            <img srcset="<?php echo get_theme_file_uri('assets/devWork-small.png')?> 1x, <?php echo get_theme_file_uri('assets/devWork.png')?> 2x" alt="Dev Work" >   
                        </div>
                        <div class="container skills__cols__containers">
                            <h1>Front End Dev</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, fugiat consectetur voluptate expedita iusto!
                            </p>
                        </div>
                        <div class="container skills__cols__containers">
                            <h1>Languages I Speak:</h1>
                            <p>HTML, PHP, JS, CSS, SASS, BEM, SQL, Bootstrap</p>
                        </div>
                        <div class="container skills__cols__containers skills__cols__tools">
                            <h1>Dev Tools:</h1>

                            <ul>
                                <li>VS Code</li>
                                <li>Github</li>
                                <li>NodeJs</li>
                                <li>MAMP</li>
                                <li>Local</li>
                                <li>Terminal</li>
                                <li>Adobe Photoshop</li>
                                <li>Adobe Illustrator</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row__col__4 skills__cols">
                        <div class="container skills__cols__containers skills__cols__header">
                            <img srcset="<?php echo get_theme_file_uri('assets/consultation-small.png')?>  1x, <?php echo get_theme_file_uri('assets/consultation-large.png')?>  2x" alt="Consultation" >
                        </div>
                        <div class="container skills__cols__containers">
                            <h1>Consultation</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, fugiat consectetur voluptate expedita iusto!
                            </p>
                        </div>
                        <div class="container skills__cols__containers">
                            <h1>What are we looking to do?</h1>
                            <p>Discuss plans, directions designs and ideas!</p>
                        </div>
                        <div class="container skills__cols__containers skills__cols__tools">
                            <h1>Options to discuss:</h1>

                            <ul >
                                <li>Zoom: For meetings</li>
                                <li>Facetime: For meetings</li>
                                <li>Email: Communication</li>
                                <li>Phone: Communication</li>
                                <li>Portfolio Website</li>
                                <li>Wordpress</li>
                                <li>Wordpress + eCommerce</li>
                                <li>Non CMS Sites</li>
                                <li>Landing Pages</li>
                            </ul>
                    
                    </div>
                    </div>
                    <div class="row__col__4 skills__cols">
                        <div class="container skills__cols__containers skills__cols__header">
                            <img srcset="
                                <?php echo get_theme_file_uri('assets/wordpress-small.png')?>  1x, 
                                <?php echo get_theme_file_uri('assets/wordpress-small.png')?>  2x" 
                                alt="Wordpress" >
                        </div>
                        <div class="container skills__cols__containers">
                            <h1>Custom Wordpress</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, fugiat consectetur voluptate expedita iusto!
                            </p>
                        </div>
                        <div class="container skills__cols__containers">
                            <h1>What I Do:</h1>
                            <p>eCommerce, Custom Themes, Etc...</p>
                        </div>
                        <div class="container skills__cols__containers skills__cols__tools">
                            <h1>Type of work:</h1>

                            <ul >
                                <li>VS Code</li>
                                <li>eCommerce</li>
                                <li>Custom Theme</li>
                                <li>Custom Post Types</li>
                                <li>Minimal Plugins</li>
                                <li>Custom API's</li>
                                <li>Animations</li>
                                <li>SEO Optimization</li>
                                <li>Maintenance</li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

        <!-- <hr class="my-5 mx-5"> -->

        <div class="container__100w recent">
            <div class="container text-center recent__header py-4">
                <h1 class="d-3 permanent-marker">My Recent Work!</h1>
                <p>Subline Goes Here... <a href="mailto:helvin@helvinrymer.com">Email Me</a></p>
            </div>
            <div class="container">
                <div class="row py-3 recent__flexContainer text-center">
                    <div class="row__col__4 recent__col__4">
                        <div class="container recent__col__container">
                            <img srcset="
                                <?php echo get_theme_file_uri('assets/selffit-lowres.jpg')?>  1x, 
                                <?php echo get_theme_file_uri('assets/selffit-large.jpg')?>  2x" 
                                style="max-width: 34rem;" alt="">
                        </div>
                        <div class="container p-3 recent__col__container">
                            <a href="https://selffitdr.com/" target="_blank" class="btn">View</a>
                        </div>
                    </div>
                    <div class="row__col__4 recent__col__4">
                        <div class="container recent__col__container">
                            <img srcset="
                            <?php echo get_theme_file_uri('assets/danielle-lowres.jpg')?>  1x, 
                            <?php echo get_theme_file_uri('assets/danielle-large.jpg')?>  2x" style="max-width: 34rem;" alt="">
                        </div>
                        <div class="container p-3 recent__col__container">
                            <a href="https://mrrymer.com/pages/writer" target="_blank" class="btn">View</a>
                        </div>
                    </div>
                    <div class="row__col__4 recent__col__4">
                        <div class="container recent__col__container">
                            <img srcset="
                            <?php echo get_theme_file_uri('assets/portfliov1-lowres2.jpg')?>  1x, 
                            <?php echo get_theme_file_uri('assets/portfliov1-large.jpg')?>  2x"
                            style="max-width: 34rem;" alt="">
                        </div>
                        <div class="container p-3 recent__col__container">
                            <a href="https://helvinrymer.com" target="_blank" class="btn">View</a>
                        </div>
                    </div>
                    <div class="row__col__4 recent__col__4">
                        <div class="container recent__col__container">
                            <img srcset="
                            <?php echo get_theme_file_uri('assets/lashtech-lowres.jpg')?>  1x, 
                            <?php echo get_theme_file_uri('assets/lashtech-large.jpg')?>  2x"
                            style="max-width: 34rem;" alt="">
                        </div>
                        <div class="container p-3 recent__col__container">
                            <a href="https://mrrymer.com/pages/enya" target="_blank" class="btn">View</a>
                        </div>
                    </div>
                    <div class="row__col__4 recent__col__4">
                        <div class="container recent__col__container">
                            <img srcset="
                            <?php echo get_theme_file_uri('assets/maniacink-lowres.jpg')?>  1x, 
                            <?php echo get_theme_file_uri('assets/maniacink-large.jpg')?>  2x"
                            style="max-width: 34rem;" alt="">
                        </div>
                        <div class="container p-3 recent__col__container">
                            <a href="https://maniacink.com/" target="_blank" class="btn">View</a>
                        </div>
                    </div>
                    <div class="row__col__4 recent__col__4">
                        <div class="container recent__col__container">
                            <img srcset="
                            <?php echo get_theme_file_uri('assets/nblackburn-lowres.jpg')?>  1x, 
                            <?php echo get_theme_file_uri('assets/nblackburn-large.jpg')?>  2x"
                            style="max-width: 34rem;" alt="">
                        </div>
                        <div class="container p-3 recent__col__container">
                            <a href="https://mrrymer.com/pages/blackburn/" target="_blank" class="btn">View</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="container text-center p-4">
                    <a class="btn recent__button">See More</a>
                </div> -->
            </div>
        </div>

        <!-- <hr class="my-5 mx-5 "> -->

        <!-- <div class="container__100w ">
            <div class="container text-center">
                <h1 class="d-3 permanent-marker">Proud Partners and Previous Collaborations:</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                    <div class="row__col__3"><img src="assets/Octocat1.png" style="max-width:10.5rem" alt=""></div>
                </div>
            </div>
        </div> -->

        <!-- <div class="container__100w latest">
            <div class="container text-center p-5 font-light">
                <h1 class="d-3 permanent-marker">My Latest Projects</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, delectus consectetur. Laudantium itaque quaerat ut rem recusandae veritatis facere distinctio tempora delectus ducimus deserunt quasi, expedita a, dolorem quibusdam possimus?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic nesciunt nulla itaque, quia quisquam distinctio officia consequatur ab incidunt dignissimos culpa pariatur tempore veniam possimus totam cupiditate iusto et!</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="row__col latest__col">
                        <img src="assets/lashtech-large.jpg" style="max-width:25rem" alt="">
                    </div>            
                    <div class="row__col latest__col">
                        <img src="assets/danielle-large.jpg" style="max-width:25rem" alt="">
                    </div>            
                    <div class="row__col latest__col">
                        <img src="assets/maniacink-large.jpg" style="max-width:25rem" alt="">
                    </div>
                    <div class="row__col latest__col">
                        <img src="assets/portfliov1-large.jpg" style="max-width:25rem" alt="">
                    </div>            
                    <div class="row__col latest__col">
                        <img src="assets/selffit-large.jpg" style="max-width:25rem" alt="">
                    </div>            
                    <div class="row__col latest__col">
                        <img src="assets/nblackburn-large.jpg" style="max-width:25rem" alt="">
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <h1 class="my-1">Interested in working with me?</h1>
                <p class="my-2">I am always open to etc...</p>
                <button class="btn my-1">Start a conversation</button>
            </div>
        </div> -->

        <div class="container__100vw testimonials">
            <div class="container px-5 mt-5 text-center">
                <h1 class="d-3 permanent-marker">Testimonials</h1>
            </div>
            <div class="container testimonials__card px-5 text-center">
                <div class="container testimonials__card__img">
                    <img src="<?php echo get_theme_file_uri('assets/Octocat1.png') ?>"  alt="">
                </div>
                <div class="container py-4 testimonials__card__review" style="max-width: 80rem;">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas velit suscipit, voluptatem, dicta laboriosam ratione explicabo voluptatum nesciunt atque molestiae fuga at, repellat dolore excepturi praesentium consequatur modi maxime illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis enim recusandae illum qui amet blanditiis doloremque labore voluptas, praesentium numquam, sint perspiciatis nostrum delectus eligendi expedita? Quis, velit minima. Fuga?
                    </p>
                </div>
            </div>
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