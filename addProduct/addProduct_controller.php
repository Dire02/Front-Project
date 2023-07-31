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

	if( isset( $_POST['submit'] ) ){

	
	

//conect to db
	$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);
//insert query
		$sql = "INSERT INTO product (title,duration,discription,price,imagesrc)
				VALUES(?,?,?,?,?)";
//execute		
		$result = $dbc -> query($sql,$_POST['title'],$_POST['duration'],$_POST['discription'],$_POST['price'], $_POST['imagesrc']);
//close it
			
		$dbc-> close();

		redirect('addProduct_view.php');
	}
		
	else{
		include 'addProduct_view.php';
	}

		


?>