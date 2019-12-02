<?php

require_once("model.php");

function listUsers(){
	$req=getUsers();     
	require_once("viewUsers.php");	
}

function index(){
	require_once("viewAcceuil.php");
}