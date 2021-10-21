<?php get_header(); ?>

<div class="container">
    <div class="card">
        <div class="card-header pb-0 px-0">
            <h4 class="px-2"><?php echo get_the_title(); ?></h4>0 
        </div>
        <div class="card-body">
            <img class="d-block w-100" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="First slide">
            <div class="container py-2">
                <?php echo get_the_content(); ?>
            </div> 
        </div>
    </div>
</div>
<?php get_footer(); ?>