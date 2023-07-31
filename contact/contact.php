<?php
include '../phps/settings.php';
include '../phps/db.php';
include '../phps/security.php';
include '../phps/functions.php';

if( isset( $_POST['submit'] ) ){
//conect to db
	$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);
//insert query
		$sql = "INSERT INTO messages (name,email,title,text)
				VALUES(?,?,?,?)";
//execute		
		$result = $dbc -> query($sql,$_POST['name'],$_POST['email'],$_POST['title'],$_POST['text']);
//close it
		$dbc-> close();
//just in case 	
		redirect('../home/home_controller.php');
		}
			
		else{
			include 'contact_view.php';
		}

?>