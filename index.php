<?php 

wp_head();
?>    


<main>
    <?php 
    get_header();
    ?>
<div class="main">


    <?php
    echo get_the_content();

    ?>

</div>

</main>


<?php

get_footer();

?>
