<?php

require_once("model.php");

function listAgents(){
	$req=getAgents();
	require_once("viewAgents.php");
}

function index(){
	require_once("viewAcceuil.php");
}

function formAddAgent(){
	require_once("formulaireAgent.php");
}
function createAgent($nom,$prenom,$login,$mdp){
	insertAgent($nom,$prenom,$login,$mdp);
	$req=getAgents();
	require_once("viewAgents.php");
}

function formDeleteAgent()
{
    require_once("supprAgent.php");
}
function supprAgent($nom,$prenom){
    delAgent($nom,$prenom);
    $req=getUsers();
    require_once("viewAgents.php");
}