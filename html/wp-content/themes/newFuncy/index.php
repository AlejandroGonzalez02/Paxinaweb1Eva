<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Funcy</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
</head>
<body>

<?php get_header();?>

<div id="cuerpo">

    <?php
    echo get_stylesheet_uri();
    echo "<h1 class='morado'>HOLA FUNCY</h1>";

include("header.php");
?>
</div>

</body>
</html>

<?php get_footer();?>