<?php


include '../phps/functions.php';
include '../phps/security.php';

session_start();
if( ! Authentication :: check() ) { 
    redirect('../Login/login_controller.php');
    exit;	
    }
	if(Authorization :: Rolls() == 'Nuser'){
		redirect('../templates/403.html');
		exit;
	}	

	if( isset( $_POST['submit'] ) ){
//conect to db
		include '../phps/settings.php';
		include '../phps/db.php';
		$uid = $_GET['id'];


		$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);	
//insert query
		$sql = "UPDATE users
		SET name = ?,
		pass = ?,
		gender = ?,
		email = ?,
		Rolls = ?
		WHERE  id = {$uid} ";


//execute		
		$result = $dbc -> query($sql, $_POST['name'], $_POST['pass'], $_POST['gender'], $_POST['email'], $_POST['Rolls']);
//close it
		$dbc-> close();

		redirect('../UserListTable/UserListTable_controller.php');
	}
	else{
		include 'admin_editprofile_view.php';

	}
		



?>