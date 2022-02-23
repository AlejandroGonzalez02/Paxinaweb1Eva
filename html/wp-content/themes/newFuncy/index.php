<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>New Funcy</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">

    </head>
    <body>
        <?php
            define('WP_USE_THEMES', false);
            get_header();
        ?>

        <div id="div_principal"
            <p id="contenedor_imagen"><img src="<?php echo get_stylesheet_directory_uri();?>/Imagenes/Juan.jpeg" id="imagen"></p>
            <br>
            <h3 id="Subtitulos">Juan normal</h3>
            <p id="parrafos"> Non ten nada que ver aquí. Este é un cabalo nomal, con moito estilo, niguén pode negar o estilo deste cabalo.</p>
        </div>

        <div id="div_principal2">
            <p id="contenedor_imaxe"><img src="<?php echo get_stylesheet_directory_uri();?>:/Imagenes/JuanEstatua.jpg" id="imagen"></p>
            <br>
            <h3 id="Subtitulos">A estatua de Juan</h3>
            <p id="parrafos">Unha estatua do noso queridisimo juan, considerado un deus en moitos lugares do mundo.</p>
        </div>

        <?php get_footer();?>
    </body>
</html>

