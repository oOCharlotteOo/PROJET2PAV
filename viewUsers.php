<?php ob_start();?>

<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th scope="col">First</th>
			<th scope="col">Last</th>	
		</tr>
	</thead>
<tbody>
		<?php
		//commentaire : boucle sur bdd
		/*
		commentaire
		*/
        while ($donnees = $req->fetch())
        {
        ?>
            <tr> <!--ligne d'un tableau-->
               <td><?= htmlspecialchars($donnees['name']); ?></td><!--cellule d'un tableau--> 
               <td><?= $donnees['first_name']; ?></td> 
			   <?php 
			   /*
			   <?= équivalent à <?php echo
			   */
			   ?>
            </tr>
        <?php
        } 
        $req->closeCursor();
        ?>
</tbody>
</table>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once("layout.php"); ?>