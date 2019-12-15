<?php ob_start(); ?>
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th scope="col">Nom</th>
			<th scope="col">Prénom</th>
		</tr>
	</thead>
<tbody>
		<?php
		//commentaire : boucle sur bdd
		/*
		commentaire
		*/
        foreach ($req as $donnees)
        {
        ?>
            <tr> <!--ligne d'un tableau-->
               <td><?= htmlspecialchars($donnees->Nom); ?></td><!--cellule d'un tableau-->
			   <td><?= $donnees->Prenom; ?></td>
            </tr>
        <?php
        } 
        ?>
</tbody>
</table>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once("layout.php"); ?>