<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name');?> </title> 
    <?php wp_head();?>
</head>
<body class="bg-opacity-75 p-1">
    <div class="container text-center mb-0">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="" class="img-fluid ">
    </div>
        <div class="container pb-0 pt-1  px-0 mb-0 ">
      <?php if(is_active_sidebar( 'sidebar-1' )): dynamic_sidebar( 'sidebar-1'   ); endif; ?>
    </div>