<?php 

$r = array('pagename' => 'Donate to sunnah Mosque');

$get_donate = new WP_Query( $r );


if($get_donate->have_posts()): 

    while($get_donate->have_posts()) : $get_donate->the_post();
    ?>   
    <?php  the_content( );?>
    <?php 

endwhile;
endif;