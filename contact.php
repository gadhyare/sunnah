<?php 

$r = array('pagename' => 'Contact');

$get_contact = new WP_Query( $r );


if($get_contact->have_posts()): 

    while($get_contact->have_posts()) : $get_contact->the_post();
    ?>
    <div class="card-hader text-center py-1 mb-1  h2">  <?php echo get_the_title(  );?> </div> 
    <?php  the_content( );?>
    <?php 

endwhile;
endif;