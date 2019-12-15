<?php

include "PDO.php";

function getAgents()
{
// Connexion à la base de données
		$BD = new BDD();

        // On récupère les users
        $req = $BD->Read_Query('SELECT Nom, Prenom FROM agent');
		return $req; 
}

//Ajout de la fonction insertAgent
function insertAgent($nom,$prenom,$login,$mdp)
{	
// Connexion à la base de données
        try
        {
			$BD = new BDD();
			$tablog[0]= ['Nom',$nom];
			$tablog[1]= ['Prenom',$prenom];
			$tablog[2]= ['login',$login];
			$tablog[3]= ['password',$mdp];
			
			//on insère en bdd les données du formulaire :
			$BD->Exec_Query( "INSERT INTO agent(Nom, Prenom, login, password) VALUES(:Nom, :Prenom,:login, :password)",$tablog);
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage()); 
        }
		

}

//Ajout de la fonction supprAgent
function delAgent($nom,$prenom)
{	
// Connexion à la base de données
        try
        {
			$BD = new BDD();
			$tablog[0]= ['Nom',$nom];
			$tablog[1]= ['Prenom',$prenom];

			//on supprime en bdd les données du formulaire :
			$BD->Exec_Query( "DELETE FROM agent WHERE Nom = (:Nom) and  Prenom = (:Prenom)",$tablog);
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage()); 
        }
		

}