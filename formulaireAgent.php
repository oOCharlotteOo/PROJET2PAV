<?php ob_start();?>
    <h1>Formulaire de création d'un nouvel agent</h1>
    <form action="index.php?action=createAgent" method="post">
	<p>
        <label>
            Date de création:
            <input type="date" name="date"/>  <!-- code pour champ date -->
        </label>
    </p>
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
    <p>
        <label>
            Login:
            <input placeholder="login" type="text" name="login"/>
            <!-- placeholder = met en transparence le nom du champ -->
        </label>
    </p>
    <p>
        <label>
            Mot de passe:
            <input type="text" name="password"/>
        </label>
    </p>
		<input type="submit" value="créer" />    <!-- pour créer un premier champ + bouton enreg -->
		</form>

<a href="index.php">Retour à l'accueil</a>
<?php $content = ob_get_clean(); ?>
<?php require_once("layout.php"); ?>