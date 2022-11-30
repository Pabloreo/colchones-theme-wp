<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b812c8ce06.js" crossorigin="anonymous"></script>
    <title>Colchones.mx</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="contenedor">
            <div class="barra-navegacion">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/colchonpedia.png" alt="Colchonpedia">
                    </a>
                </div>
                <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );
                    wp_nav_menu($args); 
                    ?>
            </div>
        </div>
    </header>

