<?php


include '../phps/settings.php';
include '../phps/db.php';
include '../phps/security.php';
include '../phps/functions.php';


session_start();
if( ! Authentication :: check() ) { 
    redirect('../Login/login_controller.php');
    exit;	
    }
	if(Authorization :: Rolls() == 'Nuser'){
		redirect('../templates/403.html');
		exit;
	}	

	
	include 'adminPanel_view.php';
	

		


?>