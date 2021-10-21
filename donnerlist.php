<?php 

$r = array('pagename' => 'Donners list');

$get_donate_list = new WP_Query( $r );


if($get_donate_list->have_posts()): 

    while($get_donate_list->have_posts()) : $get_donate_list->the_post();
    ?>
<?php  the_content( );?>
<?php 

endwhile;


endif; 