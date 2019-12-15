<?php ob_start();?>
    <h1>Formulaire de suppression d'un agent</h1>
    <form action="index.php?action=supprAgent" method="post">
	
    <p>
        <label>     <!-- label + nom : va permettre le positionnement de la souris direct sur le champ -->
            Nom:
            <input type="text" name="Nom"/>
        </label>
    </p>
    <p>
        <label>
            Prénom:
            <input type="text" name="Prenom"/>
        </label>
    </p>

		<input type="submit" value="Enregistrer" />    <!-- pour créer un premier champ + bouton enreg -->
		<input type="button" value="annuler" action="index.php"/>
		</form>

<?php $content = ob_get_clean(); ?>
<?php require_once("layout.php"); ?>