<?php ob_start();?>

<a href="index.php?action=listUsers"> <!-- c'est l'url qui déclenchera la vue de viewUsers-->
voir les users
</a>

<?php $content = ob_get_clean(); ?>
<?php require_once("layout.php"); ?>