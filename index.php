<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <title><?php bloginfo('name'); ?></title>
</head>
<body>

<div class="container">
<header>
<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>
</header>
<?php wp_nav_menu(); ?>


<div class="contenupremierarticle">

<?php query_posts('posts_per_page=1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- je commence ma boucle -->


    <div class="articlealaune">

        <div class="monimage">
         <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
         </div>
        <div class="contenutextes">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            catégories: <?php the_category();?>
            
        </div><!-- /contenutextes -->


    </div> <!-- /unarticle -->



<!-- je termine ma boucle -->
<?php endwhile; endif; ?>

</div> <!-- /contenupremierarticle -->


<div class="conteneurdemesarticles">
<?php query_posts('offset=1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- je commence ma boucle -->


    <div class="unarticle">

         <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>

        <div class="contenutextes">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            catégories: <?php the_category();?>
            année: <?php echo get_field('annee'); ?><br>
            collaborateur: <b><?php echo get_field('collaborateurs'); ?></b>
        </div><!-- /contenutextes -->
  

    </div> <!-- /unarticle -->



<!-- je termine ma boucle -->
<?php endwhile; endif; ?>
</div> <!-- /conteneurdemesarticles -->

</div> <!-- /container -->
















</body>
</html>