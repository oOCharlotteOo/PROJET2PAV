<?php

require_once("controller.php");

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listAgents') {
        listAgents();
    }
	elseif ($_GET['action'] == 'createAgent') {
            createAgent($_POST['Nom'],$_POST['Prenom'],$_POST['login'],$_POST['password']);
    }
    elseif ($_GET['action'] == 'formAddAgent') {
        formAddAgent();
    }
	elseif ($_GET['action']=='formDeleteAgent'){
        formDeleteAgent();
    }
    elseif ($_GET['action']=='supprAgent'){
        supprAgent($_POST['Nom'],$_POST['Prenom']);
    }
	else 
	{
            echo 'Erreur';
	}
}
else {
    index();
}
