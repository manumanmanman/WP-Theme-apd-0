<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <title><?php bloginfo('name'); ?> </title>
</head>
<body <?php body_class(); ?>>
    <div class="container">
<header>
<h1><?php bloginfo('name'); ?> </h1>
<h2><?php bloginfo('description'); ?></h2>
<nav>
<?php wp_nav_menu(); ?>

</nav>


</header>
<div class="left">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="article">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">  
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <!-- <p class="date"><?php the_date(); ?> </p> -->
  
    </div>

    <?php endwhile; endif; ?>





</div>


<div id="footer">

</div>
    </div>
    
</body>
</html>
