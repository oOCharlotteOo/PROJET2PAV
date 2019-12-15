<?php ob_start();?>
    <h1><strong>Bienvenue sur votre application de gestion des PAV Girondins</strong></h1>
        <h2>Les plus utilisés :</h2>
<a href="index.php?action=listAgents"> <!-- c'est l'url qui déclenchera la vue de viewUsers-->
Voir les agents
</a>
<p></p>
    <a href="index.php?action=formAddAgent"> <!-- c'est l'url qui déclenchera la vue de formulaireAgent-->
Créer un agent
</a>
    <p></p>
    <a href="index.php?action=formDeleteAgent"> <!-- c'est l'url qui déclenchera la vue de supprAgent-->
        Supprimer un agent
    </a>

<?php $content = ob_get_clean(); ?>
<?php require_once("layout.php"); ?>