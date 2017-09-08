<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); // Loads scripts, styles, etc.?>

</head>
<body>
<!--    Image link to home-->
     <h1>
         <a href="<?php echo home_url(); ?>">
             <img src="<?php echo get_stylesheet_directory_uri();?>/images/placeholder.gif" alt="<?php bloginfo('name'); ?>">
        </a>
     </h1>
     
<!--     Text link to home-->
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    
<!--    Tag line in Settings > General-->
    <h2><?php bloginfo('description'); ?></h2>
    
<!--    Main navigation (you need a menu in Apperance>Menu set to Primary Menu location). The class "main-navigation" is already defined in style.css -->
    <nav class="main-navigation"> <?php wp_nav_menu(); ?></nav>