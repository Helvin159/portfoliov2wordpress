<div class="hero__container">
    <div class="container text-center py-5 mt-5">
        <h1 class="d-4 mt-5 permanent-marker">Front-End &amp; Wordpress Developer</h1>
        <p class="mb-0">War is not the answer, for only love can conquer hate!</p>
        <?php  // print_r($_SERVER['DOCUMENT_ROOT']);?>
    </div>
    <div class="container py-3 text-center">
        <img src="<?php echo get_theme_file_uri('assets/Octocat1.png')?>" style="max-width: 30rem;border-radius: 50%;" alt="">
    </div>
    <div class="container mb-0 text-center">
        <div >
            <?php  
                 require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/Portfolio V2/includes/svg/city.php');
            ?>
            
        </div>
    </div>
</div>