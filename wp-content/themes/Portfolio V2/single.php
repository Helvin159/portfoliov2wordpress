<?php 
get_header();
require_once('includes/nav.php');

?>
<h1 style="margin:30rem"><?php the_title()?></h1>
<div class="container">
    <?php the_content()?>
</div>

<?php get_footer(); 


?>

