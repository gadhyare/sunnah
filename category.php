<?php get_header(); ?>

<div class="container py-3">
    <div class="top-menu">
        <h2 class="p-4 text-light"> <?php echo get_the_archive_title(); ?> </h2>
    </div>
    <div class="container   px-0">
        <?php if (have_posts()) : ?>
            <ul class="cat-post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="p-0" style="border-bottom: 1px solid #eee;">
                        <div class="row " style="padding-top:10px" id="cat_post-<?php echo get_the_ID(); ?>">
                            <div class="col-md-2 p-0" title="<?php echo get_the_title(); ?>">
                                <?php post_image(); ?>
                            </div>
                            <div class="col-md-10" style="font-size:14px">
                                <h6 style="padding-bottom:6px"><a href="<?php echo get_the_permalink(); ?>" class="mt-0 text-muted  px-1 "><?php echo get_the_title(); ?></a></h6>
                                <p class="News_Date"><?php echo get_the_date(); ?></p>
                                <p class="News_Description" style="padding-bottom:20px;padding-top:6px"><?php echo get_the_excerpt(); ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="mt-0 text-danger  px-1 "><?php _e('read more', 'gushari'); ?></a>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <?php get_template_part('inc/error_msg'); ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>