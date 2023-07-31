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


// A. validation

// B. Insert in DB

// 1. connect to DB - mysql - mysqli - PDO
$dbc = new db( $dbhost, $dbuser, $dbpass, $dbname ); // mysqli_connect

// 2. create query
$sql =	"SELECT * FROM users order by id asc LIMIT 10";
// 3. execute query
$result = $dbc -> query( $sql ); // mysqli_query
$productList = $result -> fetchAll();


// show form view
include 'UserListTable_view.php';




// 4. close connection
$dbc -> close(); //mysqli_close

?>