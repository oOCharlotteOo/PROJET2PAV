<?php


function getUsers() 
{
// Connexion à la base de données
        try
        {
        	$bdd = new PDO('mysql:host=localhost;dbname=pav;charset=utf8', 'root', ''); /*new PDO = lib importée - obligatoire */
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        // On récupère les 5 derniers billets
        $req = $bdd->query('SELECT name, first_name FROM user');
		return $req; 
}