<?php ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?> - <?php bloginfo('description') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>
<body>
    <h1><?php the_title(); ?></h1>

    <?php while(have_posts()) : the_post(); ?>
    <?php the_post_thumbnail('medium'); ?>
    <?php the_content(); ?>
    <?php the_excerpt(); ?>
    <?php endwhile; ?>
</body>
</html>